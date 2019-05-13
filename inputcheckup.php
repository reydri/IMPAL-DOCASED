<?php
  include ("fkonek.php");
  session_start();
  $keluhan = $_POST['keluhan'];
  $location = $_POST['location'];
  $username = $_SESSION['username'];

  $koneksi = fkonek_db();
  $sql = "select * from tabel_order";
  $aksi = mysqli_query($koneksi,$sql);

  $jumlah = mysqli_query($koneksi, "select * from tabel_order");
  $hitung   = mysqli_num_rows($jumlah);
  if($hitung<10){
    $id_order = "P000".$hitung;
  }else{
    $id_order = "P00".$hitung;
  }
  
  if($location == 'x'){
    echo "<script>alert('Please choose your location');history.go(-1); </script>";
  }
  
  $input=mysqli_query($koneksi,"INSERT INTO tabel_order (id_order, username, alamat, keluhan) VALUES ('$id_order','$username','$location' ,'$keluhan')");
  $orderan = mysqli_query($koneksi, "select * from tabel_order where keluhan='$keluhan'");
  $result   = mysqli_num_rows($orderan);
  
if($result>0){
    $user = mysqli_fetch_array($orderan);
    
    $_SESSION['keluhan'] = $keluhan;
    $_SESSION['alamat'] = $location;
    $_SESSION['id_order'] = $id_order;

    header("location:yourdoctor.php");
}else{
    echo "<script>alert('Save Failed');history.go(-1); </script>";
}

?>