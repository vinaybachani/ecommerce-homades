<?php 
	require_once("../inc/connection.php");
	session_start();
	extract($_POST);
	if(isset($_REQUEST['add_to_cart'])==true){
		try{
			$sql = "insert into cart(userid,productid,quantity,price) values(?,?,?,?)";
				 
			$st = $db->prepare($sql);
				
			$st->bindparam(1,$_SESSION['buyerid']);
			$st->bindparam(2,$productid);
			$st->bindparam(3,$quantity);
			$st->bindparam(4,$price);
				 
			$st->execute();
		}
	catch(PDOException $error){
		$result = FAIL;
		$message = $error->getMessage();
		LogError($error);
	}
	// header("location:../products_info.php?categoryid=$categoryid&categoryname=$categoryname&message=$message");
}
	
?>