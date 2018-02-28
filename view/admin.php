			<main class="clearfix">
				<section>
					<?php if(!isset($_SESSION['user'])) { ?>
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
								<input type="submit" name="submit" value="Submit">
							</div>
							<?php
							// if (isset($this->data['message'])) {
								echo $this->data['message'];
							// }
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
								<label for="text">Text:</label>
							</div>
							<div>
								<textarea name="text" id="text"></textarea>
							</div>
							<div>
								<input type="file" name="">
							</div>
							<div>
								<input type="submit" name="submit" value="Submit">
								<input type="reset" value="Reset">
							</div>
						</fieldset>
					</form>
					<?php } ?>
				</section>
			</main>