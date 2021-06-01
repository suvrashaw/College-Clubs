<?php $active="events"; ?>
<!DOCTYPE html><html lang="en">
	<head>
		<title>Our Events</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styles/blog.css">
		<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
	<body>
		<div class="super_container">
			<?php require "layout/header.php"; ?>
			<?php require "layout/mobile.php"; ?>
			<div class="home"></div>
			<div class="blog">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="welcome_title">Our Events</div>
						</div>
					</div>
					<div class="row blog_row">
						<?php for ($x=1; $x<=4; $x++) {
							if ($x == 1) {
								echo '<div class="col-lg-6">
									<div class="blog_post">
										<div class="blog_image" style="background-image:url(images/intro.jpg)"></div>
										<div class="blog_title_container">
											<div class="blog_post_category"><a href="#">Department of CSE</a></div>
											<div class="blog_post_title"><a href=event.php>Project II</a></div>
											<div class="blog_post_text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											</div>
											<div class="read_more"><a href="event.php">Read More<img src="images/right.png" alt=""></a></div>
										</div>
									</div>
								</div>';
							} else {
								echo '<div class="col-lg-6">
									<div class="blog_post">
										<div class="blog_image" style="background-image:url(images/blog_'.($x+5).'.jpg)"></div>
										<div class="blog_title_container">
											<div class="blog_post_category"><a href="#">Club '.($x-1).'</a></div>
											<div class="blog_post_title"><a href=>Event '.($x-1).'</a></div>
											<div class="blog_post_text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											</div>
											<div class="read_more"><a href=>Read More<img src="images/right.png"></a></div>
										</div>
									</div>
								</div>';
							}
						} ?>
					</div>
					<div class="row">
						<div class="col">
							<div class="load_more_button"><a href="#">Past Events</a></div>
						</div>
					</div>
				</div>
			</div>
			<?php require "layout/footer.php"; ?>
		</div>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="styles/bootstrap4/popper.js"></script>
		<script src="styles/bootstrap4/bootstrap.min.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="plugins/parallax-js-master/parallax.min.js"></script>
		<script src="js/blog.js"></script>
	</body>
</html>