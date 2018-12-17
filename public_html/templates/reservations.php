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

		<label>Number of Guests</label>
		<input type="text" placeholder="100 people">

		<label>Date</label>
		<input type="text" placeholder="January 1, 2019">
		
		<label>Details</label>
		<textarea>Explain the details of your expecting event.</textarea>

		<input type="submit" placeholder="Send" class="btn btn-secondary submit">
		</form>
	</div><!--contactForm-->
</section><!--weddingsBanner-->
<?php
include("partials/footer.php");
?>