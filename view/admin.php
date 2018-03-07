			<main class="clearfix">
				<section>
					<?php if(!isset($this->data['session'])) { ?>
					<form action="" method="post">
						<fieldset>
							<legend>Login</legend>
							<div>
								<label for="username">Username:</label>
								<input type="text" name="username" id="username">
							</div>
							<div>
								<label for="password">Password:</label>
								<input type="password" name="password" id="password">
							</div>
							<div>
								<input type="submit" name="login" value="Login">
							</div>
							<?php
							if (isset($this->data['message'])) {
								echo $this->data['message'];
							}
							?>
						</fieldset>
					</form>
					<?php } else { ?>
					<form action="" method="post" enctype="multipart/form-data">
						<fieldset>
							<legend>Upload news</legend>
							<div>
								<label for="title">Title:</label>
								<input type="text" name="title" id="title">
							</div>
							<div>
								<label for="author">Author:</label>
								<input type="text" name="author" id="author">
							</div>
							<div>
								<label for="news_text">Text:</label>
							</div>
							<div>
								<textarea name="news_text" style="height: 100px; width: 100%;" cols="50" id="area5"></textarea>
							</div>
							<div>
								<input type="file" name="image">
							</div>
							<div>
								<input type="submit" name="upload" value="Upload">
								<input type="reset" value="Reset">
							</div>
							<?php
							if (isset($this->data['message'])) {
								echo $this->data['message'];
							}
							?>
						</fieldset>
					</form>
					<?php } ?>
				</section>
			</main>