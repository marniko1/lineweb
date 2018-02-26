<?php

class DBLogin {
	private $username;
	private $password;
	private static $priviledge;

	public static function loginData($username,$password) {
		$db = DBconnect::db_connection();
		$req = $db->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");
		$row = $req->fetch_all(MYSQLI_ASSOC);

		return $row;
	}
}