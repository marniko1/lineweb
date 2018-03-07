<?php
require $_SERVER['DOCUMENT_ROOT'].'/lineweb/config/database_conn.php';

class DB {

	private $conn;
	private $instance;

	public function getInstance(){
		if(!isset($this->conn)){
			$this->instance = new DB();
		}
		return $this->conn;
	}

	private function __construct(){
		$this->conn = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBNAME);
	}

	public function executeSQL($sql) {
		$db = $this->getInstance();
		$req = $db->query($sql);
		return $req;
	}
}