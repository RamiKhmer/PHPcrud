<?php
session_start();
if(isset($_SESSION['session_user'])){
header("location:main.php");
}
include("style.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
<form method="post" action="login.php">
<table class="table table-hover table-dark" style="width: 25%;" align="center">
	<tr>
		<td align="center"><b>USER LOGIN</b></td>
	</tr>
	<tr>
		<td><br><b>Username:</b><br><input type="text" name="username" placeholder="Enter username here..." required=""></td>
	</tr>
	<tr>
		<td><b>Password:</b><br><input type="password" name="password" placeholder="Enter password here..." required=""></td>
	</tr>
	<tr>
		<td align="center"><button type="submit" name="login" style="cursor: pointer;"><b>Login</b></button></td>
	</tr>
	<tr>
		<td align="center"><font size="1px">Developed By: Paolo Jon Caraig. All Rights Reserved. CRUD. &copy; 2019</font></td>
	</tr>
</table>
</form>
</body>
</html>