<?php
include("check-login-status.php");
include("../../../functions/dbqueries.php");
$pageTitle = "Dashboard";
include("partials/header.php");

$arrAdmin = selectSQL(
	"SELECT * FROM admin 
	WHERE id='".$_SESSION["adminID"]."'")[0];

echo "<div class=welcome>
		Welcome Back, ".$arrAdmin['strName']."</div>";
?>
<div id="manageContent">
	<h1>Manage content</h1>
	<a href="pages-view.php">
		<div class="content">
		<img src="imgs/iconPages.png" alt="iconPages">
		<p>Page Manager</p>
		</div><!--content-->
	</a>

	<a href="http://tecdesign.net/maple-acres">	
		<div class="content">
			<img src="imgs/iconWebsite.png" alt="iconSite">
		<p>Visit Website</p>
		</div><!--content-->
	</a>
</div><!--manageContent-->
<?php include("partials/footer.php"); ?>