<?php

class news extends Controller{
	public function index($pg){
		$this->data['title'] = 'News';
		$top_six = DBNews::topSix($pg);
		$this->data['content_left'] = $this->prepareTopSixLeft($top_six);
		$this->data['content_right'] = $this->prepareTopSixRight($top_six);
		$total_news_num = DBNews::totalNewsNumber();
		$this->data['pagination'] = $this->preparePagination($total_news_num,$pg);
		$this->show_view('news');
	}

	public function prepareTopSixLeft($top_six) {
		$top_six_left = array_slice($top_six, 0, 3);
		ob_start();
		foreach ($top_six_left as $value) {
			?>
			<div clas="single_news_holder">
				<h3><?php echo $value['title']; ?></h3>
				<img src="/lineweb/assets/uploads/images/<?php echo $value['image']; ?>">
				<p class="clearfix"><?php echo substr($value['text'], 0, 200).'... '; ?><a href="<?php echo $value['id']; ?>">Read more...</a></p>
			</div>
			<?php
		}
		$ts_left_output = ob_get_clean();
		return $ts_left_output;
	}

	public function prepareTopSixRight($top_six) {
		$top_six_right = array_slice($top_six, 3, 3);
		ob_start();
		foreach ($top_six_right as $value) {
			?>
			<div clas="single_news_holder">
				<h3><?php echo $value['title']; ?></h3>
				<img src="/lineweb/assets/uploads/images/<?php echo $value['image']; ?>">
				<p class="clearfix"><?php echo substr($value['text'], 0, 200).'... '; ?><a href="<?php echo $value['id']; ?>">Read more...</a></p>
			</div>
			<?php
		}
		$ts_right_output = ob_get_clean();
		return $ts_right_output;
	}

	public function preparePagination($total_news_num,$pg) {
		$pg_num = ceil($total_news_num/6);
		ob_start();
		if ($pg > 1) {
		?>
			<a href="<?php echo 'p'.(substr($_GET['m'], 1)-1); ?>">&laquo;</a>
		<?php
		} else {
		?>
			<a href="#" style="pointer-events: none;">&laquo;</a>
		<?php
		}
		for ($i=1; $i <= $pg_num; $i++) { 
			echo '<a href="p'.$i.'">'.$i.'</a>';
		}
		if ($pg < $pg_num) {
		?>
			<a href="<?php echo 'p'.(substr($_GET['m'], 1)+1); ?>">&raquo;</a>
		<?php
		} else {
		?>
			<a href="#" style="pointer-events: none;">&raquo;</a>
		<?php
		}
		$pg_output = ob_get_clean();
		return $pg_output;
	}

	public function prepareSingle($single) {
		ob_start();
		?>
		<h1><?php echo $single['title']; ?></h1>
		<img src="/lineweb/assets/uploads/images/<?php echo $single['image']; ?>">
		<p class="clearfix"><?php echo $single['text']; ?></p>
		<?php 
		$single_output = ob_get_clean();
		return $single_output;
	}

	public function getSingle($id) {
		$single = DBNews::singleNews($id);
		$this->data['title'] = 'News/'.$single['title'];
		$this->data['content'] = $this->prepareSingle($single);
		$this->show_view('news-single');
	}
}