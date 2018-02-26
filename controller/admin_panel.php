<?php

class adminPanel extends Controller{
	public function index(){
		$this->data['title'] = 'Admin';
		$this->show_view('admin');
	}
}