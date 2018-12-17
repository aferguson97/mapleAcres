<?php
include("check-login-status.php");
$pageTitle = "Page Manager";
include("../../../functions/dbqueries.php");
include("partials/header.php");
$_GET["page"] = (isset($_GET["page"]))?$_GET["page"]:"";
?>
<div id="pagesTable">
<h1>Page Manager</h1>
<a href="add-page-view.php">
  <p>Add a page</p>
</a>
<table>	
<?php
$arrPages = selectSQL("SELECT * FROM pages");

foreach($arrPages as $page) {?>
	<tr>
	<td><?=$page["strName"]?></td>
	<?php
		if($page['id'] == 1){ ?>
		<td>
			<a href="edit-page-view.php?id=<?=$page['id']?>&page=home" class="editBtn">Edit</a>
		</td>
	<?php }?>

	<?php
		if($page['id'] == 2){ ?>
		<td>
			<a href="edit-page-view.php?id=<?=$page['id']?>&page=weddings" class="editBtn">Edit</a>
		</td>
	<?php }?>

	<?php
		if($page['id'] == 3){ ?>
		<td>
			<a href="edit-page-view.php?id=<?=$page['id']?>&page=banquets" class="editBtn">Edit</a>
		</td>
	<?php }?>

	<?php
		if($page['id'] == 4){ ?>
		<td>
			<a href="edit-page-view.php?id=<?=$page['id']?>&page=media" class="editBtn">Edit</a>
		</td>
	<?php }?>

	<?php
      if($page['id'] > 6) { ?>
      	<td>
			<a href="edit-page-view.php?id=<?=$page['id']?>&page=<?=$page['id']?>" class="editBtn">Edit</a>
		</td>

		<td>
        <a href="delete.php?id=<?=$page['id']?>" onclick="return confirm('Are you sure you want to delete?')" class="deleteBtn">Delete</a>
   		</td>
     <?php }?>
	</tr>
<?php } ?>
</table>
</div><!--pagesTable-->

<?php include("partials/footer.php") ?>