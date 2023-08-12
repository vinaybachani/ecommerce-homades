<?php
	require_once("../inc/connection.php");
	extract($_POST);
	if (isset($_POST['save'])) {
		try{
			$email = $_POST['email'];
			$sql1 = "select * from admin where email=?";
			$st1 = $db->prepare($sql1);
			$st1->execute(array($email));
			$row = $st1->fetch();
			if ($row == null) {
			 	$sql = "INSERT INTO admin (name,email,password) values(?,?,?)";
				$st = $db->prepare($sql);
				$st->bindparam(1,$name);
				$st->bindparam(2,$email);
				$st->bindparam(3,$pass);
				$st->execute();
				header("location:../login.php");
			 } 
			 else{
			 	header("location:../signup.php");
			 	echo "email already exists";
			 	$result = Fail;
			 	$message = "email already exists";
			 }

		}
		catch(PDOException $error){
			$result = FAIL;
			$message = $error->getmessage();
			LogError($error);
		}
	}
?>