<?php
  include 'fkonek.php';


  $username = $_POST['username'];
  $password = $_POST['password'];

  $koneksi = fkonek_db();
  $sql = "select * from pasien";
  $aksi = mysqli_query($koneksi,$sql);

  $login    = mysqli_query($koneksi, "select * from pasien where username='$username' and password='$password'");
  $result   = mysqli_num_rows($login);


  if($result>0){
      $user = mysqli_fetch_array($login);
      session_start();
      $_SESSION['username'] = $user['username'];
      $_SESSION['name'] = $user['name'];
      $_SESSION['phone'] = $user['phone'];
      $_SESSION['saldo'] = $user['saldo'];
      header("location:index.php");
  }else{
      echo ("<script>alert('Username or Password is wrong');history.go(-1);</script>");
  }
?>