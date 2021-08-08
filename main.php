<?php
include("get_user.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
</head>
<body>
<table class="table table-hover table-dark" style="width: 50%;" align="center">
	<thead>
	<tr class="table-light">
		<td colspan="5"><?php include("user_logout.php"); ?></td>
	</tr>
	<tr class="table-primary">
		<td colspan="5"><b>USERS</b></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td>First Name</td>
		<td>Username</td>
		<td align="center"><a href="add_user.php">Add</a></td>
	</tr>
	</thead>
	<tbody>
		<?php
		$query_user = mysqli_query($conn,"SELECT * FROM users ORDER BY lname,fname ASC")or die(mysqli_error($conn));
		if(mysqli_num_rows($query_user) > 0){
			while($res = mysqli_fetch_array($query_user) ){
			$id = $res['id'];	
			$lname = $res['lname'];
			$fname = $res['fname'];
			$username = $res['username'];
			?>
			<tr>
				<td><?php echo $lname; ?></td>
				<td><?php echo $fname; ?></td>
				<td><?php echo $username; ?></td>
				<td align="center"><a href="edit_user.php?uid=<?php echo $id; ?>">Edit</a> | <a href="delete_user.php?uid=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a></td>
			</tr>
			<?php
			}
		}
		else{
		?>
		<tr>
			<td colspan="5">No Result Found.</td>
		</tr>
		<?php	
		}
		?>
		<tr>
			<td colspan="5" align="center"><font size="1px">All Rights Reserved. CRUD. &copy; 2019</font></td>
		</tr>
	</tbody>
</table>
</body>
</html>