<?php
include("../../../functions/dbqueries.php");
// $hashpass = password_hash($_POST['strPassword'], PASSWORD_DEFAULT);

$sql = "UPDATE
			admin
		SET
			strUsername = '".$_POST['strUsername']."',
			strName = '".$_POST['strName']."',
			strPassword = '".$_POST['strPassword']."'
		";

		insertSQL($sql);
		header("location:settings-view.php");

?>