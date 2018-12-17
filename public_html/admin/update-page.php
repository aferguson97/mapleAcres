<?php
include("../../../functions/dbqueries.php");
$updatePhoto = uploadFile("strPhoto");

// if(!$_FILES["strPhoto"]["name"] && $_POST["old-image"]) {
// 	$updatePhoto = $_POST["old-image"];

// } else if (!$_FILES["strPhoto"]["name"] && !$_POST["old-image"]) { 
// 	$updatePhoto = "";
// } else { 
// 	$updatePhoto = uploadFile("strPhoto");
// }


if($_GET["page"] == "home") {
$sql = "UPDATE
			pages
		SET
			strContent = '".$_POST['strContent']."'
			WHERE id='".$_GET['id']."'
		";

		insertSQL($sql);
		header("location:edit-page-view.php?id=1&page=home");
}

if($_GET["page"] == "weddings") {
$sql = "UPDATE
			pages
		SET
			strContent = '".$_POST['strContent']."',
			strBodyText1 = '".$_POST['strBodyText1']."',
			strBodyText2 = '".$_POST['strBodyText2']."',
			strBodyText3 = '".$_POST['strBodyText3']."'
			WHERE id='".$_GET['id']."'
		";

		insertSQL($sql);
		header("location:edit-page-view.php?id=2&page=weddings");
}

if($_GET["page"] == "banquets") {
$sql = "UPDATE
			pages
		SET
			strContent = '".$_POST['strContent']."'
			WHERE id='".$_GET['id']."'
		";

		insertSQL($sql);
		header("location:edit-page-view.php?id=3&page=banquets");
}

if($_GET["page"] == "media") {
$sql = "UPDATE
			nMedia
		SET
			strPhoto = '".$updatePhoto."'
			WHERE id='".$_GET['id']."'
		";

		insertSQL($sql);
		header("location:edit-page-view.php?id=4&page=media");
}
?>