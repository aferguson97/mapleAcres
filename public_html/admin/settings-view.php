<?php
include("check-login-status.php");
$pageTitle = "Admin Settings";
include("../../../functions/dbqueries.php");
include("partials/header.php");

$arrAdmin = selectSQL("SELECT * FROM admin");
?>
<div id="adminSettings">
<h1>Admin Settings</h1>
<form method="post" action="update-settings.php?id=<?=$arrAdmin[0]['id']?>">
	 <label>Name</label>
    <input type="text" value="<?=$arrAdmin[0]['strName']?>" name="strName">

    <label>Username</label>
    <input type="text" value="<?=$arrAdmin[0]['strUsername']?>" name="strUsername">

    <label>Password</label> 
   <input type="password" value="<?=$arrAdmin[0]['strPassword']?>" name="strPassword">

    <input type="submit" class="updateBtn" value="Update">
</form>
</div><!--adminSettings-->
<?php include("partials/footer.php") ?>