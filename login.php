<?php
session_start();
include("connection.php");

if(isset($_POST['login'])){

	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

	if(!empty($username) || !empty($password)){

		$query_user = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password' ")or die(mysqli_error($conn));
		if(mysqli_num_rows($query_user)){
		while($row = mysqli_fetch_row($query_user)){
			$_SESSION['session_user'] = $row[0];
			header("location:main.php");
			}
		}
		else{
			echo "<script>window.alert('Incorrect Username or Password. Please eneter a valid one.')</script>";	
			echo "<script>window.location.href='index.php'</script>";
		}
	}
	else{
		echo "<script>window.alert('Username or Password is empty. Please enter username and password.')</script>";	
		echo "<script>window.location.href='index.php'</script>";
	}
}
else{
echo "<script>window.alert('An error has occured!')</script>";	
echo "<script>window.location.href='index.php'</script>";
}
?>