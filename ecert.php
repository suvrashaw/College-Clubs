<?php $active="ecert"; ?>
<!DOCTYPE html><html lang="en">
	<head>
		<title>E-Certificate</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styles/contact.css">
		<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	</head>
	<body>
		<div class="super_container">
			<?php require "layout/header.php"; ?>
			<?php require "layout/mobile.php"; ?>
			<div class="contact_map">
				<div class="map">
					<div id="google_map" class="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="contact">
				<div class="container">
					<div class="row row-lg-eq-height">
						<div class="col-lg-6">
							<div class="contact_form_container">
								<div class="form_title">Collect your certificate for CulFest 2021</div>
								<form action="" method="POST" id="contact_form" class="contact_form">
									<div class="row contact_row">
										<div class="col-lg-6 contact_col">
											<input type="text" class="form_input" placeholder="CulFest ID" name="Name" required="required">
										</div>
										<div class="col-lg-6 contact_col">
											<input type="date" class="form_input" placeholder="Date" name="Date" required="required">
										</div>
										<div class="col-lg-12 contact_col">
											<input type="email" class="form_input" placeholder="Email" name="Email" required="required">
										</div>
										<div class="col">
											<button type="submit" class="form_button trans_200" name="Submit" value="Submit">Get your certificate!</button>
										</div>'
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
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
		<script src="js/contact.js"></script>
	</body>
</html>