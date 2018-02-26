<?php
require 'config/database_conn.php';
function my_autoloader($classname) {
    include 'model/' . $classname . '.php';
}

spl_autoload_register('my_autoloader');

// $proba = new DBNews;
// var_dump($proba->totalNewsNumber());die;

class Controller{
	public $data = array();

	public function show_view($view) {
		require 'view/header.php';
		require 'view/'.$view.'.php';
		require 'view/footer.php';
	}
}

if (isset($_GET['m']) && !empty($_GET['m'])) {
	$controller = $_GET['c'];
	include 'controller/'.$controller.'.php';
	$c = new $controller;
	
	$method = $_GET['m'];
	$c->$method();
	
} else {
	include 'controller/index.php';
	$c = new index;
}