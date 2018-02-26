<?php

class news extends Controller{
	public function index(){
		$this->data['title'] = 'News';
		$top_six = DBNews::topSix();
		$this->data['content_left'] = $this->prepareTopSixLeft($top_six);
		$this->data['content_right'] = $this->prepareTopSixRight($top_six);
		$total_news_num = DBNews::totalNewsNumber();
		$this->data['pagination'] = $this->preparePagination($total_news_num);
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
				<p class="clearfix"><?php echo substr($value['text'], 0, 200).'... '; ?><a href="#">Read more...</a></p>
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
				<p class="clearfix"><?php echo substr($value['text'], 0, 200).'... '; ?><a href="#">Read more...</a></p>
			</div>
			<?php
		}
		$ts_right_output = ob_get_clean();
		return $ts_right_output;
	}

	public function preparePagination($total_news_num) {
		$pg_num = ceil($total_news_num/6);
		ob_start();
		for ($i=1; $i <= $pg_num; $i++) { 
			echo '<a href="#">'.$i.'</a>';
		}
		$pg_output = ob_get_clean();
		return $pg_output;
	}
}