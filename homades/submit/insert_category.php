<?php 
	require_once("../inc/connection.php");
	extract($_POST);
	try{
		//build query 
		$sql = "insert into category (name,photo,status,isdeleted) values (?,?,?,?)";
		$photo =  rand(10,99) . rand(10,99) . rand(10,99) . "-" . $_FILES['filphoto']['name'];

		
		//return file name
		//prepare query 
		$st = $db->prepare($sql);
		
		//bind parameters 
		
		$st->bindparam(1,$txtname);
		$st->bindparam(2,$photo);
		$st->bindparam(3,$rdoisavailable);
		$value = NOTDELETED;
		$st->bindparam(4,$value);
		
		//execute query 
		$st->execute();
		move_uploaded_file($_FILES['filphoto']['tmp_name'],"../$photo");
		$result = SUCCESS;
		$message = "Category Added";
	}
	catch(PDOException $error){
		$result = FAIL;
		$message = $error->getMessage();
		LogError($error);
	}
	header("Location:../seller_homepage.php?result=$result&message=$message");
?>