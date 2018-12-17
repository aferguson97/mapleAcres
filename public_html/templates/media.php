<?php
$pageTitle = "Media | Maple Acres Golf Course";
$mediaActive = "active";
include("partials/header.php");
$sqlMedia = "SELECT * FROM nMedia";
$arrMedia = selectSql($sqlMedia);
?>
<div class="mediaVideo">
	<iframe src="https://www.youtube.com/embed/nJBud1rwB6I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen preload="auto" autoplay muted class="mediaVideo"></iframe>
</div><!--mediaVideo-->

<section id="gallery">
<h1>Media</h1>
<div class="underline"></div>
<p>Find out what's happening at Maple Acres.</p>
<?php
foreach($arrMedia as $media) {?>
	<div class="mediaPhoto">
	<img src="assets/<?=$media["strPhoto"]?>" alt="media">
	</div><!--mediaPhoto-->
	<?php } ?>
</section><!--gallery-->
<?php
include("partials/footer.php");
?>