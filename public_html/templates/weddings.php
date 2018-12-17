<?php
$pageTitle = "Weddings | Maple Acres Golf Course";
$weddingsActive = "active";
include("partials/header.php");
$sqlWeddings = "SELECT * FROM pages WHERE id=2";
$arrWeddings = selectSql($sqlWeddings);
?>
<section id="weddingsBanner">
	<div class="weddingsHero"></div>
	<div class="weddingsIntroText">
		<h1>Weddings</h1>
		<p><?=$arrWeddings[0]["strContent"]?></p>
	</div><!--weddingsIntroText-->
</section><!--weddingsBanner-->

<div id="weddingsService">
	<div class="weddingsServiceText">
		<h1>Planning</h1>
		<p><?=$arrWeddings[0]["strBodyText1"]?></p>
	</div><!--weddingsServiceText-->

	<img src="assets/weddingsPlanning.jpg" alt="weddings" class="weddingsImg">
</div><!--weddingsService-->

<div id="weddingsService">
	<div class="weddingsServiceText">
		<h1>Catering + Menu</h1>
		<p><?=$arrWeddings[0]["strBodyText2"]?></p>
	</div><!--weddingsServiceText-->

	<img src="assets/weddingsCatering.PNG" alt="weddings" class="weddingsImg">
</div><!--weddingsService-->

<div id="weddingsService">
	<div class="weddingsServiceText">
		<h1>Photography</h1>
		<p><?=$arrWeddings[0]["strBodyText3"]?></p>
	</div><!--weddingsServiceText-->

	<img src="assets/weddingsPhotography.jpg" alt="weddings" class="weddingsImg">
</div><!--weddingsService-->

<div class="bookBtn weddingsBookBtn">
	<a href="index.php?pagesID=5" class="btn btn-primary">Ready to book?</a>
</div><!--bookBtn-->
<?php
include("partials/footer.php");
?>