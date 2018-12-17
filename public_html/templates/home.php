<?php
$pageTitle = "Maple Acres Golf Course";
$homeActive = "active";
include("partials/header.php");
$sqlHome = "SELECT * FROM pages";
$arrHome = selectSql($sqlHome);
?>
<section id="homeBanner">
<div class="headerText">
	<h1>Host the perfect event.</h1>
	<a href="index.php?pagesID=2" class="btn btn-primary events">Plan events</a>
	<a href="index.php?pagesID=2" class="btn btn-secondary">Celebrate love</a>
</div><!--headerText-->
</section><!--homeBanner-->

<section id="homeIntro">
<img src="images/lake.png" alt="lake" class="lake">
<div class="homeIntroContent">
	<img src="images/iconGolf.png" alt="iconGolf">
	<p><?=$arrHome[0]["strContent"]?></p>
</div><!--homeIntroContent-->
</section><!--homeIntro-->

<div id="services">
	<div class="service">
	<a href="index.php?pagesID=3">
	<div class="banquetsFrame"></div>
		<div class="serviceName">
			<p>Banquets</p>
			<div class="underline"></div>
		</div><!--serviceName-->
	</a>
	</div><!--service-->

	<div class="service">
	<a href="index.php?pagesID=2">
	<div class="weddingsFrame"></div>
		<div class="serviceName">
			<p>Weddings</p>
			<div class="underline"></div>
		</div><!--serviceName-->
	</a>
	</div><!--service-->
</div><!--services-->

<div id="accolades">
	<img src="images/accolade_golf-digest.png" alt="accolade_golf-digest">
	<img src="images/accolade_traveler.png" alt="accolade_traveler">
	<img src="images/accolade_west-coast.png" alt="accolade_west-coast">
</div><!--accolades-->
<?php
include("partials/footer.php");
?>