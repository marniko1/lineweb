<?php

class work extends Controller{
	public function index(){
		$this->data['title'] = 'Work';
		$this->show_view('work');
	}
}