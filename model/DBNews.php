<?php

class DBNews extends DB {
	
	public $id;
	public $title;
	public $image;
	public $text;
	public $author;

	public static function singleNews($id) {
		$sql = 'SELECT * FROM news where id="'.$id.'"';
		$req = DB::executeSQL($sql);
		$news = $req->fetch_all(MYSQLI_ASSOC);
		return $news[0];
	}

	public static function topSix($pg=0) {
		$sql = 'SELECT * FROM news ORDER BY id DESC LIMIT '.$pg.',6';
		$req = DB::executeSQL($sql);
		$top_six = $req->fetch_all(MYSQLI_ASSOC);
		return $top_six;
	}

	public static function totalNewsNumber() {
		$sql = "SELECT count(*) FROM news";
		$req = DB::executeSQL($sql);
		$total_news_num = $req->fetch_row();
		return $total_news_num[0];
	}

	// public static function getLatestNewsId () {
	// 	$sql = "SELECT MAX(id) FROM news";
	// 	$req = DB::executeSQL($sql);
	// 	$max_id = $req->fetch_row();
	// 	return $max_id[0];
	// }
	public static function getAuthorsId($author) {
		$sql ="SELECT id FROM users WHERE user = '$author'";
		$req = DB::executeSQL($sql);
		$author = $req->fetch_assoc();
		return $author['id'];
	}

	public static function insertNewsIntoDB($title,$image_name,$news_text,$id_author) {
		// var_dump($id_author);die;
		$sql = "INSERT INTO news (title,image,news_text,id_user) VALUES ('$title','$image_name','$news_text','$id_author')";
		$req = DB::executeSQL($sql);
		if ($req) {
			return true;
		} else {
			return false;
		}
	}
}