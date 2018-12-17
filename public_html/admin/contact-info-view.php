<?php
include("check-login-status.php");
$pageTitle = "Contact Info";
include("../../../functions/dbqueries.php");
include("partials/header.php");
$_GET["id"] = (isset($_GET["id"]))?$_GET["id"]:"";

$arrContact = selectSQL("SELECT * FROM pages WHERE id=6");
?>
<div id="contactInfo">
<h1>Contact Info</h1>
<form method="post" action="update-contact-info.php?id=<?=$arrContact[0]['id']?>">
	<label>Street Address</label>
    <input type="text" value="<?=$arrContact[0]['strStreetAddress']?>" name="strStreetAddress">

 
    <label>Location</label>
    <input type="text" value="<?=$arrContact[0]['strLocation']?>" name="strLocation">

       <label>Phone number</label>
    <input type="text" value="<?=$arrContact[0]['nPhoneNumber']?>" name="nPhoneNumber">

    <input type="submit" class="updateBtn" value="Update">
</form>
</div><!--contactInfo-->
<?php include("partials/footer.php") ?>