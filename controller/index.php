<?php

class index extends Controller{
	public function index(){
		$this->data['title'] = 'Home';
		$top_six = DBNews::topSix();
		$this->data['content_left'] = $this->prepareTopSixLeft($top_six);
		$this->data['content_right'] = $this->prepareTopSixRight($top_six);
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
}