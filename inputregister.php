<?php
	include ("fkonek.php");

	$username = $_POST['username'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	echo $_POST['password'];


	$koneksi = fkonek_db();
	$sql = "select * from pasien";
	$aksi = mysqli_query($koneksi,$sql);
	
	$cek = mysqli_query($koneksi, "select * from pasien where username='$username'");
	$itung = mysqli_num_rows($cek);

	if($itung>0){
		echo "<script>alert('Username already taken');history.go(-1); </script>";
	}else{
		
		$input=mysqli_query($koneksi,"INSERT INTO pasien (username, name, password, phone) VALUES ('$username' ,'$name', '$password', '$phone')");
		$login = mysqli_query($koneksi, "select * from pasien where name='$name'");
		$result   = mysqli_num_rows($login);
		
		if($result>-1){
		    $user = mysqli_fetch_array($login);
		    session_start();
		    $_SESSION['username'] = $user['username'];
		    $_SESSION['name'] = $user['name'];
		    $_SESSION['saldo'] = $user['saldo'];
		    header("location:login.php");
		}else{
		    echo "<script>alert('Save Failed');history.go(-1); </script>";
		}
		
	}


?>