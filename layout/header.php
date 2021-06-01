<header class="header">
	<div class="top_bar">
		<div class="top_bar_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
							<div class="top_bar_right ml-auto">					
								<div class="top_bar_social">
									<span class="top_bar_title social_title">A shared forum for all extracurricular clubs of any college.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>				
	</div>
	<div class="header_container">
		<div class="container">
				<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container mr-auto">
							<a href="index.php">
								<div class="logo_text">College Clubs</div>
								<p>One Destination to all clubs</p>
							</a>
						</div>
						<nav class="main_nav_contaner">
							<ul class="main_nav">
								<li <?php echo $active=="index"?' class="active" ':""; ?>><a href="index.php">Home</a></li>
								<li <?php echo $active=="events"?' class="active" ':""; ?>><a href="events_only.php">Events</a></li>
								<li <?php echo $active=="ecert"?' class="active" ':""; ?>><a href="ecert.php">E-Certificates</a></li>
								<li <?php echo $active=="contact"?' class="active" ':""; ?>><a href="contact.php">Contact Us</a></li>
							</ul>
						</nav>
						<div class="header_content_right ml-auto text-right">
							<div class="header_search">
								<div class="search_form_container">
										<form action="#" id="search_form" class="search_form trans_400">
										<input type="search" class="header_search_input trans_400" placeholder="Type for Search" required="required">
											<div class="search_button">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
									</form>
									</div>
							</div>
							<div class="user"><a href=admin.php><i class="fa fa-user" aria-hidden="true"></i></a></div>
								<div class="hamburger menu_mm">
								<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>