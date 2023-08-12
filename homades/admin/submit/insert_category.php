<?php 
	require_once("../inc/connection.php");
	extract($_POST);
	if (isset($_POST['insertbtn'])) {
		try{
		$sql = "insert into category (title,photo,islive) values(?,?,?)";
		$photo =  time() . "-" . $_FILES['image']['name'];
		 
		$st = $db->prepare($sql);
		
		$st->bindparam(1,$title);
		$st->bindparam(2,$photo);
		$st->bindparam(3,$rdoislive);
		 
		$st->execute();
		move_uploaded_file($_FILES['image']['tmp_name'],"../images/categories/$photo");
		echo "category added";
	}
	catch(PDOException $error){
		$result = FAIL;
		$message = $error->getMessage();
		LogError($error);
	}
	header("Location:../categories.php");
	}
?>