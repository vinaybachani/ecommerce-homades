<?php
	include '../inc/connection.php';
	extract($_POST);
	try{
		$sql = "update category set title=?,photo=?,islive=? where id=?";
		$photo = $oldphoto;
		if (strlen($_FILES['image']['name'])>=1) {
			unlink("../images/categories/$photo");
			$photo = rand(10,99) . rand(10,99) . rand(10,99) . "_" . $_FILES['image']['name'];
		}
		$st = $db->prepare($sql);
		$st->bindparam(1,$title);
		$st->bindparam(2,$image);
		$st->bindparam(3,$rdoislive);
		$st->bindparam(4,$id);

		if ($photo!=$oldphoto) {
			move_uploaded_file($_FILES['image']['tmp_name'],"../images/categories/$photo");
		}
		$st->execute();
	}
	catch(PDOException $error){
		Logerror($error);
	}
	echo "category updated";
	header("location:../categories.php");
?>