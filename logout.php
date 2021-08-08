<?php
session_start();
unset($_SESSION['session_user']);
echo "<script>window.location.href='index.php?attempt=loggedout'</script>";
?>