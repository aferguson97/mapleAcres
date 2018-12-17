<?php
include("../../../functions/dbqueries.php");

$sql = "UPDATE
			pages
		SET
			strStreetAddress = '".$_POST['strStreetAddress']."',
			strLocation = '".$_POST['strLocation']."',
			nPhoneNumber = '".$_POST['nPhoneNumber']."'
			WHERE id='".$_GET['id']."'
		";

		insertSQL($sql);
		header("location:contact-info-view.php");

?>