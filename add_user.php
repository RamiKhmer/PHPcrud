<?php
include("get_user.php");
error_reporting(0);

	$lname = "";
	$fname = "";
	$username = "";
	$password ="";
	$confirm_password = "";

if(isset($_POST['add'])){

	$lname = mysqli_real_escape_string($conn,$_POST['lname']);
	$fname = mysqli_real_escape_string($conn,$_POST['fname']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$confirm_password = mysqli_real_escape_string($conn,$_POST['confirm_password']);

	//$name = "WebDev-PJCaraig";

	if($password != $confirm_password){
	echo "<center><font color='red'><b>Password did not match.<br> Make sure password matched with the confirm password!<br></b></font></center>";
	}
	else{
	$insert_user = mysqli_query($conn,"INSERT INTO users(
	lname,fname,username,password,added_date,added_by)VALUES(
	'$lname','$fname','$username','$password',NOW(),'$name')")or die(mysqli_error($conn));	
	echo "<script>window.alert('User successfully added!')</script>";
	echo "<script>window.location.href='main.php?attempt=useradded'</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>
	<form method="post" action="">
<table class="table table-hover table-dark" style="width: 50%;" align="center">
	<tr>
		<td align="center"><b>ADD USER</b></td>
	</tr>
	<tr>
		<td>Last Name:<br><input type="text" name="lname" placeholder="Enter lastname here..." required="" value="<?php echo $lname; ?>"></td>
	</tr>
	<tr>
		<td>First Name:<br><input type="text" name="fname" placeholder="Enter firstname here..." required="" value="<?php echo $fname; ?>"></td>
	</tr>
	<tr>
		<td>Username:<br><input type="text" name="username" placeholder="Enter username here..." required="" value="<?php echo $username; ?>"></td>
	</tr>
	<tr>
		<td>Password:<br><input type="password" name="password" placeholder="Enter password here..." required="" value="<?php echo $password; ?>"></td>
	</tr>
	<tr>
		<td>Confirm Password:<br><input type="password" name="confirm_password" placeholder="Confirm password..." required="" value="<?php echo $confirm_password; ?>"></td>
	</tr>
	<tr>
		<td align="center"><button type="submit" name="add" onclick="return confirm('Are you sure you want to add this user?')" style="cursor: pointer;">ADD</button></td>
	</tr>
	<tr>
		<td align="center"><font size="1px">All Rights Reserved. CRUD. &copy; 2019</font></td>
	</tr>
	<tr>
		<td><a href="main.php"><b>BACK</b></a></td>
	</tr>
</table>
	</form>
</body>
</html>