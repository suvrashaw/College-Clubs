<?php $active="admin"; ?>
<!DOCTYPE html><html lang="en">
	<head>
		<title>Admin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" >
		<link rel="stylesheet" type="text/css" href="styles/admin.css">
		<link rel="stylesheet" type="text/css" href="styles/admin_responsive.css">
		<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	</head>
	<body>
		<div class="super_container">
			<?php require "layout/header.php"; ?>
			<?php require "layout/mobile.php"; ?>
			<div class="container">
				<section class="login-box">
					<form class="lform" action=login.php method="post">
						<h1 class="headlogin">Admin Login</h1><br><br><br>
						<section class="inputlogin">
						<input class="userproj" type="text" placeholder="Username" id="username"><br><br>
						<input class="userproj" type="password" placeholder="Password" id="password"><br><br></section>
						<section class="inputbutton">
						<button class="fbutton" type="submit" form="nameform" value="Submit">Login</button>
						<button class="fbutton1" type="submit" form="nameform"value="Sign Up">Sign Up</button></section>
						</form><br><br>
				</section>
			</div>
			<?php require "layout/footer.php"; ?>
		<div>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="styles/bootstrap4/popper.js"></script>
		<script src="styles/bootstrap4/bootstrap.min.js"></script>
		<script src="plugins/easing/easing.js"></script>
		<script src="plugins/parallax-js-master/parallax.min.js"></script>
		<script src="js/contact.js"></script>
	</body>
</html>
