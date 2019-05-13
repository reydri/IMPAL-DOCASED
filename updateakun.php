<?php
	include ("fkonek.php");
	session_start();
	$username = $_SESSION['username'];
	$name = $_SESSION['name'];
	$phone = $_SESSION['phone'];
	$newname = $_POST['name'];
	$newphone = $_POST['phone'];

	$koneksi = fkonek_db();
	$sql = "select * from pasien";
	$aksi = mysqli_query($koneksi,$sql);

	$input=mysqli_query($koneksi,"UPDATE `pasien` SET `name` = '$newname' WHERE `pasien`.`username` = '$username'");
	$input2=mysqli_query($koneksi,"UPDATE `pasien` SET `phone` = '$newphone' WHERE `pasien`.`username` = '$username'");

	$cek = mysqli_query($koneksi, "SELECT * FROM `pasien` WHERE username = '$username' AND name = '$newname' AND phone = '$newphone';");
	$itung = mysqli_num_rows($cek);

	if($itung>0){
		$_SESSION['name'] = $newname;
		$_SESSION['phone'] = $newphone;
		//echo "<script>alert('Update Successful');history.go(-1); </script>";
		echo ("<script LANGUAGE='JavaScript'> window.alert('Update Successful');window.location.href='account.php';</script>");
		
	}else{
		echo "<script>alert('Update Failed');history.go(-1); </script>";
		#window.location.href = 'account.php';
	}


?>