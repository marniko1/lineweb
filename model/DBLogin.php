<?php

class DBLogin extends DB {

	public static function loginData($username,$password) {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$res = DB::executeSQL($sql);
		$login_data = $res->fetch_assoc();
		if ($login_data) {
			return $login_data;
		} else {
			return false;
		}
	}
}