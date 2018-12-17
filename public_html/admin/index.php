<?php
include("../../../functions/dbqueries.php");
$_GET["error"] = (isset($_GET["error"]))?$_GET["error"]:"";
?>
<!DOCTYPE html>
<html>
<head>
	<title>CMS: Maple Acres Golf Course</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300i|Roboto:300" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
if ($_GET["error"]) {
	echo "<div id=errorContainer>
			<div class='error'>
			Please enter a valid username and password.
			</div>
		</div>";
}
?>
	<section id="loginContainer">
	<div id="loginForm">
		<img src="imgs/logo.png" alt="logo" class="logo">
		<form method="post" action="login.php">
		<label>Username</label>
		<input type="text" name="strUserName" placeholder="&nbsp;&nbsp;admin">
		<label>Password</label>
		<input type="password" name="strPassword" placeholder="&nbsp;&nbsp;Enter at least five characters">
		<input type="submit" value="Log in" class="loginBtn">
		</form>
	</div><!--loginForm-->
	</section><!--loginContainer-->
</body>
</html>