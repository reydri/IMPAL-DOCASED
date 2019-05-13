<?php
  include ("fkonek.php");
  session_start();
  $diagnosis = $_POST['diagnosis'];
  $medicine = $_POST['medicine'];
  $price = $_POST['price'];
  $checkup = $_SESSION['keluhan'];
  $username = $_SESSION['username'];
  $saldo = $_SESSION['saldo'];
  $newsaldo = $saldo - $price;

  $koneksi = fkonek_db();
  $sql = "select * from pelayanan";
  $aksi = mysqli_query($koneksi,$sql);

  $jumlah = mysqli_query($koneksi, "select * from pelayanan");
  $hitung   = mysqli_num_rows($jumlah);
  if($hitung<10){
    $id_pelayanan = "P000".$hitung;
  }else{
    $id_pelayanan = "P00".$hitung;
  }
  $input1=mysqli_query($koneksi,"UPDATE `pasien` SET `saldo` = '$newsaldo' WHERE `pasien`.`username` = '$username';");
  $input=mysqli_query($koneksi,"INSERT INTO pelayanan (id_pelayanan, checkup, diagnosis, medicine,price) VALUES ('$id_pelayanan','$checkup','$diagnosis' ,'$medicine','$price')");
  $orderan = mysqli_query($koneksi, "select * from pelayanan where id_pelayanan='$id_pelayanan'");
  $result   = mysqli_num_rows($orderan);
  
if($result>0){
    $user = mysqli_fetch_array($orderan);
    $_SESSION['diagnosis'] = $diagnosis;
    $_SESSION['medicine'] = $medicine;
    $_SESSION['price'] = $price;
    echo ("<script LANGUAGE='JavaScript'> window.alert('Submit Successful');window.location.href='dokter.php';</script>");
    
}else{
    echo "<script>alert('Save Failed');history.go(-1); </script>";
}

?>