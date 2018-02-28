<?php

class DBLogin extends DB {
	private $username;
	private $password;
	private static $priviledge;

	public static function loginData($username,$password) {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$login_data = DB::executeSQL($sql);
		if ($login_data) {
			return $login_data;
		} else {
			return false;
		}
	}
}