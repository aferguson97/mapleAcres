<?php
include("check-login-status.php");
$pageTitle = "Add page";
include("../../../functions/dbqueries.php");
include("partials/header.php");
?>
<div id="addForm">
<h1>Add page</h1>
<form method="post" action="add.php" enctype="multipart/form-data">
	<input type="text" placeholder="Page name" name="strName">

   <select name="nTemplatesID">
	<?php
	$arrTemplates = selectSQL("SELECT * FROM templates");

	foreach($arrTemplates as $template) {
		echo "<option value='".$template["id"]."'>".$template["strName"]."</option>";
	}
	?>
	</select>

    <textarea name="strContent">Content</textarea> 

    <textarea name="strBodyText1">Body text 1</textarea> 

    <textarea name="strBodyText2">Body text 2</textarea> 

     <textarea name="strBodyText3">Body text 3</textarea>

    <label>Photo</label>
    <div id="img-holder"></div>
    <input type="file" name="strPhoto" id="upload-photo" class="upload">

    <input type="submit" class="addBtn" value="Add">
</form>
</div><!--addForm-->
<?php include("partials/footer.php") ?>