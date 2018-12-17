<?php
include("../../../functions/dbqueries.php");

$arrAdmin = selectSQL(
	"SELECT * FROM admin 
	WHERE strUserName='".$_POST["strUserName"]."' AND strPassword='".$_POST["strPassword"]."'");

if (isset($arrAdmin))
{
	session_start();
	$_SESSION["adminID"]=$arrAdmin[0]["id"];
	
	header("location: dashboard-view.php");
} else if(!isset($arrAdmin)) {
	header("location: index.php?error=true");
}

?>