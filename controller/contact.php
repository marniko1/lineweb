<?php

class contact extends Controller{
	public function index(){
		$this->data['title'] = 'Contact';
		$this->show_view('contact');
	}
}