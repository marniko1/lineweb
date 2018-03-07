<?php

class index extends Controller{
	public function index(){
		$this->data['title'] = 'Home';
		$top_six = DBNews::topSix();
		$data = $this->prepareFilteredText($top_six);
		$this->data['content_left'] = $this->prepareTopSixLeft($data);
		$this->data['content_right'] = $this->prepareTopSixRight($data);
		$this->show_view('index');
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
}