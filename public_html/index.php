<?php
include_once("../../functions/dbqueries.php");

$pageID = (isset($_GET["pagesID"]))?$_GET["pagesID"]:1;

$arrPages = selectSql(
	"SELECT pages.*, templates.strFilePath 
	FROM pages 
	LEFT JOIN templates 
	ON templates.id=pages.nTemplatesID 
	WHERE pages.id='".$pageID."' LIMIT 0,1"
);

$templateFileName = "templates/".$arrPages[0]["strFilePath"];

if(file_exists($templateFileName))
{
	include($templateFileName);
} else {
	echo "No file found";
}

?>