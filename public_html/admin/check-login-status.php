<?php 
session_start();

if(!isset($_SESSION["adminID"])) {
	header("location: index.php?error=true");
}	
?>