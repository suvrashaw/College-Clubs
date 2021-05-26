<?php $active="index"; ?>
<!DOCTYPE html><html lang="en">
	<head>
		<title>College Clubs</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" >
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
		<link rel="stylesheet" type="text/css" href="styles/responsive.css">
		<style>
			.flag img {
				width: 50px !important;
				height: 50px !important;
				border-radius: 100%;
				object-fit: cover;
				background: transparent;
			}
			.flag {
				border-radius: 100% !important;
			}
			.lang_name {
				text-transform: capitalize;
			}
		</style>
	</head>
	<body>
		<div class="super_container">
			<?php require "layout/header.php"; ?>
			<?php require "layout/mobile.php"; ?>
			<div class="home" style="height: 100px !important;"></div>
			<div class="language">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="language_slider_container">
								<div class="owl-carousel owl-theme language_slider">
									<div class="owl-item language_item">
										<a href="club.php">
											<div class="flag"><img src="https://t3.ftcdn.net/jpg/01/27/17/14/240_F_127171450_YJD5Dk1n5vXMz3h4Wd2LapugTyrhD5xb.jpg" alt=""></div>
											<div class="lang_name">music club</div>
										</a>
									</div>
									<div class="owl-item language_item">
										<a href="#">
											<div class="flag"><img src="https://image.freepik.com/free-vector/abstract-badminton-logo_17005-995.jpg" alt=""></div>
											<div class="lang_name">sports club</div>
										</a>
									</div>
									<div class="owl-item language_item">
										<a href="#">
											<div class="flag"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY3YGNipHzj9BvmEhUmRtImLMtWdey8-L5eQ&usqp=CAU" alt=""></div>
											<div class="lang_name">rotaract club</div>
										</a>
									</div>
									<div class="owl-item language_item">
										<a href="#">
											<div class="flag"><img src="https://t4.ftcdn.net/jpg/02/61/92/85/240_F_261928575_NEbQHo1p1LOiUTA7dzt8if8DwWDQESPS.jpg" alt=""></div>
											<div class="lang_name">dance club</div>
										</a>
									</div>
									<div class="owl-item language_item">
										<a href="#">
											<div class="flag"><img src="https://t4.ftcdn.net/jpg/03/57/54/83/240_F_357548317_0Z816iHyzVSmYLfUOVxcy8aEwNfnClx3.jpg" alt=""></div>
											<div class="lang_name">quiz club</div>
										</a>
									</div>
									<div class="owl-item language_item">
										<a href="#">
											<div class="flag"><img src="https://t4.ftcdn.net/jpg/02/60/98/75/240_F_260987558_uWpWu8Ey5pYPIPmmQZCorffgevgk6a3r.jpg" alt=""></div>
											<div class="lang_name">gaming club</div>
										</a>
									</div>
									<div class="owl-item language_item">
										<a href="#">
											<div class="flag"><img src="https://t3.ftcdn.net/jpg/02/75/70/28/240_F_275702882_b45WfKV29y31UgeSpYVdCsaljtB6l7oC.jpg" alt=""></div>
											<div class="lang_name">writer's club</div>
										</a>
									</div>
									<div class="owl-item language_item">
										<a href="#">
											<div class="flag"><img src="https://t4.ftcdn.net/jpg/01/11/86/95/240_F_111869553_04OBDskYYU5r0b9PW3cfKfD3fkxlfAzW.jpg" alt=""></div>
											<div class="lang_name">art club</div>
										</a>
									</div>
									<div class="owl-item language_item">
										<a href="#">
											<div class="flag"><img src="https://t3.ftcdn.net/jpg/02/72/69/08/240_F_272690896_LNsSvoOZHALZbEWzFy7o3cj2JeOX6ioI.jpg" alt=""></div>
											<div class="lang_name">drama club</div>
										</a>
									</div>
								</div>
								<div class="lang_nav lang_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
								<div class="lang_nav lang_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="events">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="section_title text-center">Upcoming Events</h2>
						</div>
					</div>
					<div class="row events_row">
						<div class="col-lg-4 event_col">
							<div class="event">
								<div class="event_image"><img src="images/intro - Copy.jpg" alt=""></div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">27</div>
									<div class="event_month">May</div>
								</div>
								<div class="event_body d-flex flex-row align-items-center justify-content-start">
									<div class="event_title"><a href="event.php">Project II</a></div>
									<div class="event_tag ml-auto">PROJCS481</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 event_col">
							<div class="event">
								<div class="event_image"><img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=640&q=80&h=347" alt=""></div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">04</div>
									<div class="event_month">Jun</div>
								</div>
								<div class="event_body d-flex flex-row align-items-center justify-content-start">
									<div class="event_title"><a href="#">Basketball Cup</a></div>
									<div class="event_tag ml-auto">Sports Club</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 event_col">
							<div class="event">
								<div class="event_image"><img src="https://images.unsplash.com/photo-1535525153412-5a42439a210d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=640&q=80&h=347" alt=""></div>
								<div class="event_date d-flex flex-column align-items-center justify-content-center">
									<div class="event_day">15</div>
									<div class="event_month">Jun</div>
								</div>
								<div class="event_body d-flex flex-row align-items-center justify-content-start">
									<div class="event_title"><a href="#">Jazz up</a></div>
									<div class="event_tag ml-auto">Dance Club</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="register">
				<div class="container">
					<div class="row" style="align-items: center;justify-content: center;">
						<div class="col-lg-8">
							<div class="register_form_container">
								<div class="register_form_title" style="font-size: xx-large;">Stay Notified <br> <small style="font-size: x-large;">about Upcoming Events</small> </div>
								<form action="#" id="register_form" class="register_form">
									<div class="row register_row">
										<div class="col-lg-6 register_col">
											<input type="text" class="form_input" placeholder="Name" required="required">
										</div>
										<div class="col-lg-6 register_col">
											<input type="email" class="form_input" placeholder="Email" required="required">
										</div>
										<div class="col">
											<button type="submit" class="form_button trans_200">Notify Me</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php require "layout/footer.php"; ?>
		</div>
		<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/custom.js"></script>
	</body>
</html>