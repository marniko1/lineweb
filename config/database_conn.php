<?php

class DBconnect {
	private static $DBSERVER = 'localhost';
	private static $DBUSER = 'marniko1';
	private static $DBPASS = 'bubica';
	private static $DBNAME = 'lineweb';
	private static $conn = null;

	public static function db_connection() {
		
		self::$conn = mysqli_connect(self::$DBSERVER,self::$DBUSER,self::$DBPASS,self::$DBNAME);

		return self::$conn;
	}
}