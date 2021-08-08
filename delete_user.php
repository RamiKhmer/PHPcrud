<?php
include("get_user.php");
$uid = $_GET['uid'];
$delete_user = mysqli_query($conn,"DELETE FROM users WHERE id='$uid' ")or die(mysqli_error($conn));
echo "<script>window.location.href='main.php?attempt=userdeleted'</script>";
?>