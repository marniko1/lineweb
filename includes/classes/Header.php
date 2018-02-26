<?php

class HTMLHeader{
	public $pages = array();

	public static function getPages(){
		$dir = new DirectoryIterator('./controller/');
		$pages = array();
		foreach ($dir as $dir_name) {
			$filename = $dir_name->getFilename();
			if (strpos($filename, '.php')) {
				$slug = explode('.', $filename);
				array_push($pages, $slug[0]);
			}
		}
		return $pages;
	}
	public static function displayNav(){
		$strane = self::getPages();
		$output_html = '<nav><ul class="clearfix">';
		ob_start();
		foreach ($strane as $strana) {
			echo '<li><a href="'.substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/')+1).$strana.'/">'.$strana.'</a></li>';
		}
		$output_html .= ob_get_clean();
		$output_html .= '</ul></nav>';
		return $output_html;
	}
}