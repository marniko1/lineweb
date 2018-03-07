
			<main class="clearfix">
				<div class="left">
					<h1>NEWS</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse	cillum dolore eu fugiat nulla pariatur. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur.</p>
					<div class="treci clearfix" id="content">
						<h2>LATEST NEWS</h2>
						<div class="news_left">
							<div class="news_slider">
								<?php 
								foreach ($this->data['content_left'] as $value) {
									?>
										<div clas="single_news_holder">
											<h3><?php echo $value['title']; ?></h3>
											<img src="/lineweb/assets/uploads/images/<?php echo $value['image']; ?>">
											<p class="clearfix"><?php echo substr(strip_tags($value['news_text']), 0, 200).'... '; ?><a href="<?php echo $value['id']; ?>">Read more...</a></p>
										</div>
									<?php
								}
								?>
							</div>
						</div>
						<div class="news_right">
							<div class="news_slider">
								<?php 
								foreach ($this->data['content_right'] as $value) {
									?>
										<div clas="single_news_holder">
											<h3><?php echo $value['title']; ?></h3>
											<img src="/lineweb/assets/uploads/images/<?php echo $value['image']; ?>">
											<p class="clearfix"><?php echo substr($value['news_text'], 0, 200).'... '; ?><a href="<?php echo $value['id']; ?>">Read more...</a></p>
										</div>
									<?php
								}
								?>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="center">
							<div class="pagination">
							    <?php
							    foreach ($this->data['pagination_links'] as $link) {
							    	echo  '<a href="'.$link[0].'">'.$link[1].'</a>';
							    }
							    ?>
							    <div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="right">
					<div>
						<h2>INFO</h2>
						<p>Aliquam fermentum, metus vitae pulvinar dapibus, lacus enim elementum magna, vel eleifend lectus massa sit amet ante. Orci varius natoque penatibus et magnis dis parturient montes,... <a href="#">Read more...</a></p>
					</div>
					<div class="clearfix">
						<h2>POPULAR TAGS</h2>
						<ul>
							<li><a href="#">Prvi link</a></li>
							<li><a href="#">Drugi link</a></li>
							<li><a href="#">Treci neki link</a></li>
							<li><a href="#">Cetvrti</a></li>
							<li><a href="#">Nesto novo</a></li>
							<li><a href="#">Prvi link</a></li>
							<li><a href="#">Drugi link</a></li>
							<li><a href="#">Treci neki link</a></li>
							<li><a href="#">Cetvrti</a></li>
							<li><a href="#">Nesto novo</a></li>
							<li><a href="#">Prvi link</a></li>
							<li><a href="#">Drugi link</a></li>
							<li><a href="#">Treci neki link</a></li>
							<li><a href="#">Cetvrti</a></li>
							<li><a href="#">Nesto novo</a></li>
						</ul>
					</div>
					<div>
						<img src="../assets/images/reklama.gif">
					</div>
				</div>
			</main>
			<!-- INSERT INTO `news`(`title`, `image`, `text`, `author`) VALUES ('proba', 'uploads/imige1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Marko Nikolic') -->