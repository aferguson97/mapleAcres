<?php
$pageTitle = "Contact | Maple Acres Golf Course";
$contactActive = "active";
include("partials/header.php");
?>
<section id="weddingsBanner">
	<div class="contactHero"></div>
	<div class="contactForm">
		<h1>Contact</h1>
		<form method="post">
		<label>Name</label>
		<input type="text" placeholder="James Adams">

		<label>Email address</label>
		<input type="text" placeholder="jamesadam@gmail.com">

		<label>Enquiry</label>
		<textarea>How can we help?</textarea>

		<input type="submit" placeholder="Send" class="btn btn-secondary submit">
		</form>
	</div><!--contactForm-->
</section><!--weddingsBanner-->
<?php
include("partials/footer.php");
?>