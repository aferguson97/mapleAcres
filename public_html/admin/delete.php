<?php
include("../../../functions/dbqueries.php");
$sql = "DELETE FROM pages WHERE id='".$_GET["id"]."'";
delete($sql);

header("location: pages-view.php");
?>