<?php
session_start();
$session_user = $_SESSION['session_user'];
if(!isset($session_user)){
header("location:index.php");
}
include("connection.php");
$query_user = mysqli_query($conn,"SELECT * FROM users WHERE id=".$_SESSION['session_user'])or die(mysqli_error($conn));
$res = mysqli_fetch_array($query_user);
$lname = $res['lname'];
$fname = $res['fname'];
$name = $lname.", ".$fname;

include("style.php"); //this is for the design of the forms and tables
?>
