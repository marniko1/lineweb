<?php

class news extends Controller{
	public function index($pg){
		$this->data['title'] = 'News';
		$top_six = DBNews::topSix($pg);
		$this->data['content_left'] = $this->prepareTopSixLeft($top_six);
		$this->data['content_right'] = $this->prepareTopSixRight($top_six);
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

	public function prepareSingle($single) {
		ob_start();
		?>
		<h1><?php echo $single['title']; ?></h1>
		<img src="/lineweb/assets/uploads/images/<?php echo $single['image']; ?>">
		<p class="clearfix"><?php echo $single['text']; ?></p>
		<?php 
		$single_output = ob_get_clean();
		return $single_output;
	}

	public function getSingle($id) {
		$single = DBNews::singleNews($id);
		$this->data['title'] = 'News/'.$single['title'];
		$this->data['content'] = $this->prepareSingle($single);
		$this->show_view('news-single');
	}
}