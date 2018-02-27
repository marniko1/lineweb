<?php
require 'config/database_conn.php';
function my_autoloader($classname) {
    include 'model/' . $classname . '.php';
}

spl_autoload_register('my_autoloader');

// $proba = new DBLogin;
// var_dump($proba->loginData('marniko','bubica'));die;

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
	if($controller != 'news') {
		$method = $_GET['m'];
		$c->$method();
	} else {
		if($_GET['c'] == 'news' && $_GET['m'] == 'index' || $_GET['c'] == 'news' && $_GET['m'] == 'p1') {
			$method = 'index';
			$c->$method(0);
		} else if(strpos($_GET['m'], 'p') === false) {
			$id = $_GET['m'];
			$c->getSingle($id);
		} else {
			$pg = substr($_GET['m'], 1)*6-6;
			$method = 'index';
			$c->$method($pg);
		}
	}
	
} else {
	include 'controller/index.php';
	$c = new index;
}