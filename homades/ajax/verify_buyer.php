<?php
	session_start();
	extract($_REQUEST);
	require_once("../inc/connection.php");
	if (isset($_REQUEST['verify_buyer'])) {
		try
		{
			$sql = "select id,password,city from users where email=?";	
			$st = $db->prepare($sql);
			$st->execute(array($txtemail));
			$row = $st->fetch();
			if($row==null)
			{
				$message = "sorry no user found";
				header("location:../login.php?message=$message");
			}
			else 
			{ // email found
				// $result=password_verify($row['password'],$txtpass);
				if($txtpass==$row['password']){
					$_SESSION['buyerid'] = $row['id'];
					$_SESSION['buyercity'] = $row['city'];
					// echo $_SESSION['buyercity'];
					// echo $_SESSION['id'];
					 header("location:../index.php");
				}
				else{
					$message = "oops!!Invalid Attempt";
					header("location:../login.php?message=$message");
				}
			}
		}
		catch(PDOException $error)
		{
			LogError($error);
			echo "oops, something went wrong please try after sometime";
		}
	}
?>