<?php
include("../../../functions/dbqueries.php");
$addPhoto = uploadFile("strPhoto");

$sql = "INSERT INTO pages (
		strName,
		strContent,
		strBodyText1,
		strBodyText2,
		strBodyText3,
		nTemplatesID
		)

VALUES (
	'".$_POST["strName"]."',
	'".$_POST["strContent"]."',
	'".$_POST["strBodyText1"]."',
	'".$_POST["strBodyText2"]."',
	'".$_POST["strBodyText3"]."',
	'".$_POST["nTemplatesID"]."'
)";

insertSQL($sql);
header("location:pages-view.php");
?>