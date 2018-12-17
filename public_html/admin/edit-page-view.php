<?php
include("check-login-status.php");
$pageTitle = "Edit";
include("../../../functions/dbqueries.php");
include("partials/header.php");
$_GET["page"] = (isset($_GET["page"]))?$_GET["page"]:"";

if($_GET["page"] == "home") {
$arrHome = selectSQL("SELECT * FROM pages WHERE id=1");
?>
<div id="editForm">
<h1>Edit Home</h1>

<table id="homeTable"> 
<form method="post" action="update-page.php?id=<?=$arrHome[0]['id']?>&page=home" enctype="multipart/form-data">
  <tr>
    <th>Intro Content</th>
  </tr>

  <td>
    <textarea name="strContent"><?=$arrHome[0]['strContent']?></textarea> 
  </td>
  </table>

<input type="submit" class="updateBtn" value="Update">
</form>
</div><!--editForm-->
<?php }?>




<?php
if($_GET["page"] == "weddings") {
$arrWeddings = selectSQL("SELECT * FROM pages WHERE id=2");
?>
<div id="editForm">
<h1>Edit Weddings</h1>

<table id="weddingsTable"> 
<form method="post" action="update-page.php?id=<?=$arrWeddings[0]['id']?>&page=weddings" enctype="multipart/form-data">
  <tr>
    <th>Weddings Intro</th>
  </tr>

  <td>
    <textarea name="strContent"><?=$arrWeddings[0]['strContent']?></textarea> 
  </td>

  <tr>
    <th>Planning Text</th>
    <th>Catering + Menu Text</th>
    <th>Photography Text</th>
  </tr>

  <td>
    <textarea name="strBodyText1"><?=$arrWeddings[0]['strBodyText1']?></textarea> 
  </td>

  <td>
    <textarea name="strBodyText2" class="textareaSpace"><?=$arrWeddings[0]['strBodyText2']?></textarea> 
  </td>

  <td>
     <textarea name="strBodyText3" class="textareaSpace"><?=$arrWeddings[0]['strBodyText3']?></textarea>
  </td>
</table><!--weddingsTable-->

<input type="submit" class="updateBtn" value="Update">
</form>
</div><!--editForm-->
<?php }?>




<?php
if($_GET["page"] == "banquets") {
$arrBanquets = selectSQL("SELECT * FROM pages WHERE id=3");
?>
<div id="editForm">
<h1>Edit Banquets</h1>

<table id="weddingsTable"> 
<form method="post" action="update-page.php?id=<?=$arrBanquets[0]['id']?>&page=banquets" enctype="multipart/form-data">

  <tr>
    <th>Banquets Intro</th>
  </tr>

  <td>
    <textarea name="strContent"><?=$arrBanquets[0]['strContent']?></textarea> 
  </td>

  <tr>
    <th>The Grand Hall Text</th>
    <th>West Coast Lounge Text</th>
    <th>Menu Text</th>
  </tr>

  <td>
    <textarea name="strBodyText1"><?=$arrBanquets[0]['strBodyText1']?></textarea> 
  </td>

  <td>
    <textarea name="strBodyText2"><?=$arrBanquets[0]['strBodyText2']?></textarea> 
  </td>

  <td>
     <textarea name="strBodyText3"><?=$arrBanquets[0]['strBodyText3']?></textarea>
  </td>
</table><!--weddingsTable-->

<input type="submit" class="updateBtn" value="Update">
</form>
</div><!--editForm-->
<?php }?>



<?php
if($_GET["page"] == "media") {
$arrMedia = selectSQL("SELECT * FROM nMedia");
?>
<div id="editForm">
<h1>Edit Media</h1>

<table id="mediaTable"> 
  <form method="post" action="update-page.php?id=<?=$arrMedia[0]['id']?>&page=media" enctype="multipart/form-data">
  
  <p>Photos</p>

  <div class="photo-holder">
  <?php
  foreach ($arrMedia as $media) {?>
      <div class="photo img-holder">
      <img src="../assets/<?=$media['strPhoto']?>" alt="cmsPhoto" class="cms-photo">
      <?php
      if($media['id'] > 3) { ?>
        <a href="delete.php?id=<?=$media['id']?>" onclick="return confirm('Are you sure you want to delete?')" class="deleteBtn">Delete</a>
      <?php }?>
       </div><!--photo-->
  <?php }?>
  </div><!--photo-holder-->
</table><!--mediaTable-->

<!-- <input type="submit" class="updateBtn" value="Update"> -->
</form>
</div><!--editForm-->
<?php }?>
<?php include("partials/footer.php") ?>