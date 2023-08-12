<?php 
	session_start();
	session_destroy();
	if(isset($_POST['buyer_logout']))
		header("Location:index.php");
	else
		header("location:login.php");
?>