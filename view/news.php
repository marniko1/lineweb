
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
					<div class="treci clearfix">
						<h2>LATEST NEWS</h2>
						<div class="news_left">
							<div class="news_slider">
								<?php echo $this->data['content_left']; ?>
							</div>
						</div>
						<div class="news_right">
							<div class="news_slider">
								<?php echo $this->data['content_right']; ?>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="center">
							<div class="pagination">
								<a href="#">&laquo;</a>
							    <?php echo $this->data['pagination']; ?>
							    <a href="#">&raquo;</a>
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
			INSERT INTO `news`(`title`, `image`, `text`, `author`) VALUES ('proba', 'uploads/imige1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Marko Nikolic')