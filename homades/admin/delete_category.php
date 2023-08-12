<?php
	include('inc/connection.php');
	extract($_REQUEST);
	try{
		$sql = "delete from category where id = ?";
		$st = $db->prepare($sql);
		$st->bindparam(1,$id);
		$st->execute();
	}
	catch(PDOException $error){
		LogError($error);
	}
	header("location:categories.php");
?>