<?php

class admin extends Controller{
	public function index(){
		$this->data['title'] = 'Admin Panel';
		$this->show_view('admin');
	}
}