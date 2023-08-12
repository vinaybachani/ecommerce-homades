<?php
	session_start();
	include('../inc/connection.php');
	extract($_POST);

	if (isset($_POST['submit_seller'])) {
		try {
			$sql = "insert into sellers(name,email,mobile,password,shopname,shopaddress,shopcity,shoplogo) values(?,?,?,?,?,?,?,?)";
			$photo = time()."-".$_FILES['shoplogo']['name'];
			$st = $db->prepare($sql);

			$st->bindparam(1,$txtname1);
			$st->bindparam(2,$txtemail1);
			$st->bindparam(3,$txtnumber1);
			$st->bindparam(4,$txtpass1);
			$st->bindparam(5,$txtshopname);
			$st->bindparam(6,$txtshopaddress);
			$st->bindparam(7,$txtshopcity);
			$st->bindparam(8,$photo);

			$st->execute();

			move_uploaded_file($_FILES['shoplogo']['tmp_name'], "../images/business_logo/$photo");

		}
		catch (PDOException $error) {
			$result = FAIL;
			$message = $error->getmessage();
			LogError($error);
		}
		header("location:../login.php");
	}
?>