<?php
	session_start();
	require_once("../inc/connection.php");
	extract($_POST);
	if (isset($_POST['submit_buyer'])) {
		try {
			$sql = "insert into users(name,email,mobile,state,city,password) values(?,?,?,?,?,?)";
			$st = $db->prepare($sql);

			$st->bindparam(1,$txtname);
			$st->bindparam(2,$txtemail);
			$st->bindparam(3,$txtnumber);
			$st->bindparam(4,$txtstate);
			$st->bindparam(5,$txtcity);
			$st->bindparam(6,$txtpass);

			$_SESSION['city'] = $_POST['txtcity'];
			// echo $_SESSION['city'];	

			$st->execute();

		} 
		catch(PDOException $error) {
			$result = FAIL;
			$message = $error->getMessage();
			LogError($error);
		}
		header("location:../login.php");
	}

?>