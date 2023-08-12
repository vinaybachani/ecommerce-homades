<?php
	session_start();
	extract($_POST);
	require_once("../inc/connection.php");
	if (isset($_POST['verify_seller'])) {
		try {
			$sql = "select id,shopcity,password from sellers where email=?";
			$st = $db->prepare($sql);
			$st->execute(array($txtemail1));
			$row = $st->fetch();

			if($row==null){
				echo "no user found";
			}	
			else{
				if($txtpass1==$row['password']){
					$_SESSION['sellerid'] = $row['id'];
					$_SESSION['sellercity'] = $row['shopcity'];
					echo $_SESSION['id'];
					header("location:../seller_homepage.php");
				}
				else{
					echo "ivalid login attempt";
				}
			}
		} 
		catch (PDOException $error) {
			LogError($error);
			echo "oops something went wrong";
		}
	}
?>