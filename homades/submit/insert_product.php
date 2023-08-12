<?php 
	require_once("../inc/connection.php");
	session_start();
	extract($_POST);
	if(isset($_REQUEST['add_product'])==true){
		try{
			$sql = "insert into product (sellerid,categoryid,name,photo,price,quantity,detail,islive,weight) values(?,?,?,?,?,?,?,?,?)";
			$photo =  time() . "-" . $_FILES['productphoto']['name'];
				 
			$st = $db->prepare($sql);
				
			$st->bindparam(1,$_SESSION['sellerid']);
			$st->bindparam(2,$categoryid);
			$st->bindparam(3,$producttitle);
			$st->bindparam(4,$photo);
			$st->bindparam(5,$productprice);
			$st->bindparam(6,$productquantity);
			$st->bindparam(7,$productdetail);
			$st->bindparam(8,$productislive);
			$st->bindparam(9,$productweight);
				 
			$st->execute();
			move_uploaded_file($_FILES['productphoto']['tmp_name'],"../images/products/$photo");
			$message="Product Added";
		}
	catch(PDOException $error){
		$result = FAIL;
		$message = $error->getMessage();
		LogError($error);
	}
	header("location:../products_info.php?categoryid=$categoryid&categoryname=$categoryname&message=$message");
}
	
?>