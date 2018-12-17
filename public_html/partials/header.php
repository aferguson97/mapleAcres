<?php
$arrNav = array("Home" => "homeActive", "Weddings" => "weddingsActive", "Banquets" => "banquetsActive","Media" => "mediaActive", "Contact" => "contactActive");
foreach($arrNav as $nav)
{
	${$nav} = (!isset(${$nav}))?"":${$nav};
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?=$pageTitle?></title>
	<link rel="shortcut icon" href="favicon.ico">
	<meta charset="UTF-8">
	<meta name="description" content="Golf course that host weddings and banquets.">
	<meta name="keywords" content="golf, golf course, weddings, banquets">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300i|Roboto:300" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<header>
<div id="iconNav">
	<img src="images/iconNav.png" alt="iconNav">
</div><!--iconNav-->

<nav id="mobileNav">
	<div id="closeMenu">
		<img src="images/iconClose.png" alt="iconClose" class="iconClose">
		<p>Close Menu</p>
	</div><!--closeMenu-->

	<ul>
		<li><a href="index.php?pagesID=1" class="<?=$homeActive?>">Home</a></li>
		<li><a href="index.php?pagesID=2" class="<?=$weddingsActive?>">Weddings</a></li>
		<li><a href="index.php?pagesID=3" class="<?=$banquetsActive?>">Banquets</a></li>
		<li><a href="index.php?pagesID=4" class="<?=$mediaActive?>">Media</a></li>
		<li><a href="index.php?pagesID=6" class="<?=$contactActive?>">Contact</a></li>
		<a href="index.php?pagesID=5" class=" btn btn-primary reserve">Reserve</a>
		<?php 
		$arrPages = selectSQL("SELECT * FROM pages");
		foreach($arrPages as $page) {
		if($page['id'] > 6) { ?>
		<li><a href="index.php?pagesID=<?=$page['id']?>"><?=$page["strName"]?></a></li>
		<?php } }?>
	</ul>

	<div class="call">
		<img src="images/iconPhone.png" alt="iconPhone" class="iconPhone">
		<p>(604) 682 2787</p>
	</div><!--call-->
</nav><!--mobileNav-->

<div id="logoHolder">
	<a href="index.php">
		<img src="images/logo.png" class="logo" alt="logo">
	</a>
</div><!--logoHolder-->
	
<div id="social-links">
	<a href="#">
		<img src="images/social-fb.png" alt="social-fb" class="social-fb">
	</a>

	<a href="#">
		<img src="images/social-ig.png" alt="social-ig" class="social-ig">
	</a>

	<a href="#">
		<img src="images/social-yt.png" alt="social-yt" class="social-yt">
	</a>
</div><!--social-links-->
</header>