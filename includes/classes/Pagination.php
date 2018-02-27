<?php

class Pagination {
	public static function callPagination() {
		$total_news_num = DBNews::totalNewsNumber();
		$data['pagination'] = self::preparePagination($total_news_num);
		return $data;
	}
	public static function preparePagination($total_news_num) {
		$pg_num = ceil($total_news_num/6);
		ob_start();
		for ($i=1; $i <= $pg_num; $i++) { 
			echo '<a href="p'.$i.'">'.$i.'</a>';
		}
		$pg_output = ob_get_clean();
		return $pg_output;
	}
}