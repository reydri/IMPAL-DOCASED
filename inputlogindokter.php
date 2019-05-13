<?php
  include 'fkonek.php';


  $id_dokter = $_POST['id_dokter'];
  $no_telp = $_POST['no_telp'];

  $koneksi = fkonek_db();
  $sql = "select * from dokter";
  $aksi = mysqli_query($koneksi,$sql);

  $login    = mysqli_query($koneksi, "select * from dokter where id_dokter='$id_dokter' and no_telp='$no_telp'");
  $result   = mysqli_num_rows($login);


  if($result>0){
      $user = mysqli_fetch_array($login);
      session_start();
      $_SESSION['id_dokter'] = $user['id_dokter'];
      $_SESSION['nama_dokter'] = $user['nama_dokter'];
      $_SESSION['no_telp'] = $user['no_telp'];
      
      header("location:dokter.php");
  }else{
      echo ("<script>alert('ID or Phone is wrong');history.go(-1);</script>");
  }
?>