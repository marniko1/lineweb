<?php
require $_SERVER['DOCUMENT_ROOT'].'/lineweb/config/database_conn.php';

class DB {

	public static $conn;
	public static $instance;

	public static function getInstance(){
		if(!isset(self::$conn)){
			self::$instance = new DB();
		}
		return self::$conn;
	}

	private function __construct(){
		self::$conn = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBNAME);
	}

	public static function executeSQL($sql) {

		$db = DB::getInstance();
		$req = $db->query($sql);
		$result = $req->fetch_all(MYSQLI_ASSOC);
		return $result;
	}
}