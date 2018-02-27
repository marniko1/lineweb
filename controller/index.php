<?php

class index extends Controller{
	public function index(){
		$this->data['title'] = 'Home';
		$top_six = DBNews::topSix();
		$this->data['content_left'] = $this->prepareTopSixLeft($top_six);
		$this->data['content_right'] = $this->prepareTopSixRight($top_six);
		$this->show_view('index');
	}

	public function prepareTopSixLeft($top_six) {
		$top_six_left = array_slice($top_six, 0, 3);
		ob_start();
		foreach ($top_six_left as $value) {
			?>
			<div clas="single_news_holder">
				<h3><?php echo $value['title']; ?></h3>
				<img src="/lineweb/assets/uploads/images/<?php echo $value['image']; ?>">
				<p class="clearfix"><?php echo substr($value['text'], 0, 200).'... '; ?><a href="news/<?php echo $value['id']; ?>">Read more...</a></p>
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
				<p class="clearfix"><?php echo substr($value['text'], 0, 200).'... '; ?><a href="news/<?php echo $value['id']; ?>">Read more...</a></p>
			</div>
			<?php
		}
		$ts_right_output = ob_get_clean();
		return $ts_right_output;
	}
}