<?php
	include ("fkonek.php");
	session_start();
	$id_dokter = $_SESSION['id_dokter'];
	$nama_dokter = $_SESSION['nama_dokter'];
	$no_telp = $_SESSION['no_telp'];
	$newname = $_POST['nama_dokter'];
	$newphone = $_POST['no_telp'];

	$koneksi = fkonek_db();
	$sql = "select * from dokter";
	$aksi = mysqli_query($koneksi,$sql);

	$input=mysqli_query($koneksi,"UPDATE `dokter` SET `nama_dokter` = '$newname' WHERE `dokter`.`id_dokter` = '$id_dokter'");
	$input2=mysqli_query($koneksi,"UPDATE `dokter` SET `no_telp` = '$newphone' WHERE `dokter`.`id_dokter` = '$id_dokter'");

	$cek = mysqli_query($koneksi, "SELECT * FROM `dokter` WHERE id_dokter = '$id_dokter' AND nama_dokter = '$newname' AND no_telp = '$newphone';");
	$itung = mysqli_num_rows($cek);

	if($itung>0){
		$_SESSION['nama_dokter'] = $newname;
		$_SESSION['no_telp'] = $newphone;
		//echo "<script>alert('Update Successful');history.go(-1); </script>";
		echo ("<script LANGUAGE='JavaScript'> window.alert('Update Successful');window.location.href='akundokter.php';</script>");
		
	}else{
		echo "<script>alert('Update Failed');history.go(-1); </script>";
		#window.location.href = 'account.php';
	}


?>