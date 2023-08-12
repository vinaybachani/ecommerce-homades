<?php
	session_start();
	include('inc/connection.php');
	extract($_REQUEST);
	try{
		$sql = "delete from product where id = ?";
		$st = $db->prepare($sql);
		$st->bindparam(1,$productid);
		$st->execute();
		$photo = $oldphoto;
		unlink("images/products/$photo");
		$message = "Product Deleted";
	}
	catch(PDOException $error){
		LogError($error);
	}
	header("location:products_info.php?categoryid=$categoryid&categoryname=$categoryname&message=$message");
?>