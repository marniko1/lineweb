<?php

class admin extends Controller{

	public function index(){
		$this->data['title'] = 'Admin Panel';
		if (isset($_POST['submit'])) {
			$user_data = $this->login();
			if ($user_data == false) {
				$this->data['message'] = 'Wrong username or password.';
			} else {
				$_SESSION['user'] = $user_data['user'];
			}
		}
		$this->show_view('admin');
	}

	public function login() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$login_data = DBLogin::loginData($username,$password);
		return $login_data;
	}
}