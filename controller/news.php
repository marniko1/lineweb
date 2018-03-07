<?php

class news extends Controller{
	public function index($pg){
		$this->data['title'] = 'News';
		$top_six = DBNews::topSix($pg);
		$data = $this->prepareFilteredText($top_six);
		$this->data['content_left'] = $this->prepareTopSixLeft($data);
		$this->data['content_right'] = $this->prepareTopSixRight($data);
		$total_news_num = DBNews::totalNewsNumber();
		$this->data['pagination_links'] = $this->preparePaginationLinks($total_news_num,$pg);
		$this->show_view('news');
	}

	public function prepareTopSixLeft($top_six) {
		$top_six_left = array_slice($top_six, 0, 3);
		return $top_six_left;
	}

	public function prepareTopSixRight($top_six) {
		$top_six_right = array_slice($top_six, 3, 3);
		return $top_six_right;
	}

	public function prepareFilteredText($data_array) {
		foreach ($data_array as $key => $value) {
			$text = substr(strip_tags($value['news_text']), 0, 200).'... ';
			$data_array[$key]['filtered_text'] = $text;
		}
		return $data_array;
	}

	public function preparePaginationLinks($total_news_num,$pg) {
		$pg_num = ceil($total_news_num/6);
		$links = array();
		if (substr($_GET['m'], 1) > 1) {
			array_push($links, ['p'.(substr($_GET['m'], 1)-1), '&laquo;']);
		} else {
			array_push($links, ['p1', '&laquo;']);
		}
		for ($i=1; $i <= $pg_num; $i++) { 
			array_push($links, ['p'.$i, $i]);
		}
		if (substr($_GET['m'], 1) < $pg_num) {
			if($_GET['m'] == 'index') {
				array_push($links, ['p'.(substr($_GET['m'], 1)+2), '&raquo;']);
			} else {
				array_push($links, ['p'.(substr($_GET['m'], 1)+1), '&raquo;']);
			}
		} else {
			array_push($links, ['$_GET[\'m\']', '&raquo;']);
		}
		return $links;
	}

	public function getSingle($id) {
		$this->data['content'] = DBNews::singleNews($id);
		$this->data['title'] = 'News/'.$this->data['content']['title'];
		$this->show_view('news-single');
	}
}