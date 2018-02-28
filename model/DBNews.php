<?php

class DBNews extends DB {
	
	public $id;
	public $title;
	public $image;
	public $text;
	public $author;

	public static function singleNews($id) {
		$sql = 'SELECT * FROM news where id="'.$id.'"';
		$news = DB::executeSQL($sql);
		return $news[0];
	}

	public static function topSix($pg=0) {
		$sql = 'SELECT * FROM news ORDER BY id DESC LIMIT '.$pg.',6';
		$top_six = DB::executeSQL($sql);
		return $top_six;
	}

	public static function totalNewsNumber() {
		$db = DB::getInstance();
		$res = $db->query("SELECT count(*) FROM news");
		$total_news_num = $res->fetch_row();
		return $total_news_num[0];
	}
}