<?php

class DBLogin extends DB {
	private $username;
	private $password;
	private static $priviledge;

	public static function loginData($username,$password) {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$db = DB::getInstance();
		$res = $db->query($sql);
		$login_data = $res->fetch_assoc();
		if ($login_data) {
			return $login_data;
		} else {
			return false;
		}
	}
}