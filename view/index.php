
			<div class="slide_show clearfix">
				<div class="img_holder clearfix"></div>
				<div class="front_over"></div>
			</div>
			<main class="clearfix">
				<div class="left">
					<div class="prvi clearfix">
						<h2>WE ARE LINEWEB</h2>
						<div>
							<div>
								<img src="assets/images/computer.png">
							</div>
							<p>Vivamus in velit iaculis, dictum quam in, elementum leo. Nullam hendrerit leo eu est mattis dignissim. Ut id dapibus arcu, at efficitur ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse bibendum odio a nulla luctus, vitae tempor ante auctor. Proin condimentum risus vitae scelerisque lobortis. Suspendisse accumsan quam elit, nec consequat enim molestie ut. In dignissim, risus eu fringilla fermentum, magna urna hendrerit enim, eget euismod justo orci nec dolor. Vivamus efficitur est ut... <a href="#">Read more...</a></p>
						</div>
					</div>
					<div>
						<h2>CONTACT US</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris. Proin condimentum risus vitae scelerisque lobortis. <a href="#">Read more...</a></p>
					</div>
					<div class="treci clearfix">
						<h2>LATEST NEWS</h2>
						<div class="news_left">
							<div class="news_slider">
								<?php 
								foreach ($this->data['content_left'] as $value) {
									?>
									<div clas="single_news_holder">
										<h3><?php echo $value['title']; ?></h3>
										<img src="/lineweb/assets/uploads/images/<?php echo $value['image']; ?>">
										<p class="clearfix"><?php echo substr($value['text'], 0, 200).'... '; ?><a href="news/<?php echo $value['id']; ?>">Read more...</a></p>
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
										<p class="clearfix"><?php echo substr($value['text'], 0, 200).'... '; ?><a href="news/<?php echo $value['id']; ?>">Read more...</a></p>
									</div>
									<?php
								}
								?>
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
						<img src="assets/images/reklama.gif">
					</div>
				</div>
			</main>