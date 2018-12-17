<?php
$pageTitle = "Reservations | Maple Acres Golf Course";
include("partials/header.php");
?>
<section id="weddingsBanner">
	<div class="reserveHero"></div>
	<div class="contactForm">
		<h1>Reserve</h1>
		<form method="post">
		<label>Name</label>
		<input type="text" placeholder="James Adams">

		<label>Email address</label>
		<input type="text" placeholder="jamesadam@gmail.com">

		<label>Event</label>
		<input type="text" placeholder="Business meeting">

		<label>Guest</label>
		<input type="text" placeholder="100 people">

		<input type="submit" placeholder="Send" class="btn btn-secondary submit">
		</form>
	</div><!--contactForm-->
</section><!--weddingsBanner-->
<?php
include("partials/footer.php");
?>