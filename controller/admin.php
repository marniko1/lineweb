<?php

class admin extends Controller{

	public function index(){
		$this->data['title'] = 'Admin Panel';
		if (isset($_POST['login'])) {
			$user_data = $this->login();
			if ($user_data == false) {
				$this->data['message'] = 'Wrong username or password.';
			} else {
				$_SESSION['user'] = $user_data['user'];
			}
		}
		if (isset($_POST['upload'])) {
			$upload = $this->uploadNews();
			if ($upload == true) {
				$this->data['message'] = 'Successfuly uploaded news.';
			} else {
				$this->data['message'] = 'News are not uploaded.';
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

	public function uploadNews() {
		$title = $_POST['title'];
		$image = $_FILES['image'];
		$news_text = $_POST['news_text'];
		$authors_name = $_POST['author'];

		$image_name = $_FILES['image']['name'];

		$id_author = DBNews::getAuthorsId($authors_name);

		$upload = DBNews::insertNewsIntoDB($title,$image_name,$news_text,$id_author);
		move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/lineweb/assets/uploads/images/'.$image_name);

		if ($upload == true) {
			return true;
		} else {
			return false;
		}
	}
}