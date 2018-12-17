<?php
$pageTitle = "Banquets | Maple Acres Golf Course";
$banquetsActive = "active";
include("partials/header.php");
$sqlBanquets = "SELECT * FROM pages WHERE id=3";
$arrBanquets = selectSql($sqlBanquets);
?>
<section id="weddingsBanner">
	<div class="banquetsHero"></div>
	<div class="weddingsIntroText">
		<h1>Banquets</h1>
		<p><?=$arrBanquets[0]["strContent"]?></p>
	</div><!--weddingsIntroText-->
</section><!--weddingsBanner-->

<div id="weddingsService">
	<div class="weddingsServiceText">
		<h1>The Grand Hall</h1>
		<p><?=$arrBanquets[0]["strBodyText1"]?></p>
	</div><!--weddingsServiceText-->

	<img src="assets/banquetsHall.png" alt="banquets" class="weddingsImg">
</div><!--weddingsService-->

<div id="weddingsService">
	<div class="weddingsServiceText">
		<h1>West Coast Lounge</h1>
		<p><?=$arrBanquets[0]["strBodyText2"]?></p>
	</div><!--weddingsServiceText-->

	<img src="assets/banquetsLounge.jpg" alt="banquets" class="weddingsImg">
</div><!--weddingsService-->

<div id="weddingsService">
	<div class="weddingsServiceText menu">
		<h1>Menu</h1>
		<p><?=nl2br($arrBanquets[0]["strBodyText3"])?></p>
	</div><!--weddingsServiceText-->

	<img src="assets/banquetsMenu.jpg" alt="banquets" class="weddingsImg">
</div><!--weddingsService-->

<div class="bookBtn">
	<a href="index.php?pagesID=5" class="btn btn-primary">Ready to book?</a>
</div><!--bookBtn-->
<?php
include("partials/footer.php");
?>