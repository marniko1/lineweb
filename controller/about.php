<?php

class about extends Controller{
	public function index(){
		$this->data['title'] = 'About';
		$this->show_view('about');
	}
}