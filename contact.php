<?php $active="contact"; ?>
<!DOCTYPE html><html lang="en">
	<head>
		<title>eCertificate</title>
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
							<div class="contact_details">
								<div class="contact_details_title">Contact Details</div>
								<ul>
									<li>
										<svg fill="rgba(0,0,0,0.4)" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
											<path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
											<path d="M0 0h24v24H0z" fill="none" />
										</svg>
										<span>info@culfest.com</span>
									</li>
									<li>
										<svg fill="rgba(0,0,0,0.4)" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
											<path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
											<path d="M0 0h24v24H0z" fill="none" />
										</svg>
										<span>Kolkata, West Bengal, India</span>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="contact_form_container">
								<div class="form_title">Certificate for CulFest Workshop</div>
								<form action="" method="POST" id="contact_form" class="contact_form">
									<div class="row contact_row">
										<div class="col-lg-6 contact_col">
											<input type="text" class="form_input" placeholder="Name" name="Name" required="required">
										</div>
										<div class="col-lg-6 contact_col">
											<input type="date" class="form_input" placeholder="Date" name="Date" required="required">
										</div>
										<div class="col-lg-12 contact_col">
											<input type="email" class="form_input" placeholder="E-mail" name="Email" required="required">
										</div>
										<div class="col">
											<button type="submit" class="form_button trans_200" name="Submit" value="Submit">Get Certificate</button>
										</div>'
									</div>
								</form>
							</div>
						</div>
						<?php if (isset($_POST['Submit'])) {
							$font1=realpath("BRUSHSCI.TTF");
							$font2=realpath("AGENCYR.TTF");
							$image=imagecreatefrompng("certificate.png");
							$output="cert.png";
							$color=imagecolorallocate($image,19,21,22);
							$name=strtoupper($_POST['Name']);
							$date=strtoupper($_POST['Date']);
							imagettftext($image,50,0,365,420,$color,$font1,$name);
							imagettftext($image,20,0,450,595,$color,$font2,$date);
							imagepng($image,$output,3);
							echo $output;
						} ?>
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
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
		<script src="js/contact.js"></script>
	</body>
</html>