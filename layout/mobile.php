<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
	<div class="menu_close_container">
		<div class="menu_close">
			<div></div>
			<div></div>
		</div>
	</div>
	<div class="search">
		<form action="#" class="header_search_form menu_mm">
			<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
			<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
				<i class="fa fa-search menu_mm" aria-hidden="true"></i>
			</button>
		</form>
	</div>
	<nav class="menu_nav">
		<ul class="menu_mm">
            <li <?php echo $active=="index"?' class="active" ':""; ?>><a href="index.php">Home</a></li>
			<li <?php echo $active=="events_only"?' class="active" ':""; ?>><a href="events_only.php">Events</a></li>
			<li <?php echo $active=="contact"?' class="active" ':""; ?>><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
</div>