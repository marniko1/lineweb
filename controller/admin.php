<?php

class admin extends Controller{
	
	public function index(){
		$this->data['title'] = 'Admin Panel';
		$this->show_view('admin');
		if (isset($_POST['submit'])) {
			$this->login();
			var_dump($this->login_data);
			if ($this->login_data = false) {
				var_dump('ovde sam');
				$this->data['message'] = 'Neuspesno logovanje';
			}
		}
	}

	public function login() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$login_data = DBLogin::loginData($username,$password);
		return $login_data;
	}
}