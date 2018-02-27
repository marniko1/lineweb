<?php

class DBNews {
	public $id;
	public $title;
	public $image;
	public $text;
	public $author;

	// public function __construct($id,$title,$image,$text,$author) {
	// 	$this->id      = $id;
 //      	$this->title   = $title;
 //      	$this->image   = $image;
 //      	$this->text    = $text;
 //      	$this->author  = $author;
	// }

	public static function allNews() {
		$db = DBconnect::db_connection();
		
		$req = $db->query('SELECT * FROM news');
		$news = $req->fetch_all(MYSQLI_ASSOC);

      	return $news;
	}

	public static function singleNews($id) {
		$news = self::allNews();
		foreach ($news as $single_news) {
			if($single_news['id'] == $id) {
				return $single_news;
			}
		}
	}

	public static function topSix($pg=0) {
		$db = DBconnect::db_connection();
		$req = $db->query('SELECT * FROM news ORDER BY id DESC LIMIT '.$pg.',6');
		$top_six = $req->fetch_all(MYSQLI_ASSOC);
		
		return $top_six;
	}

	public static function totalNewsNumber() {
		$total_news_num = count(self::allNews());
		return $total_news_num;
	}
}