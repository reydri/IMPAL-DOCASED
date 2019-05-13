<?php
session_start();
include 'fkonek.php';
$koneksi = fkonek_db();
$x = "select * from dokter";
$sql    = mysqli_query($koneksi, "select * from dokter where nama_dokter='Kemal pasha'");
$user = mysqli_fetch_array($sql);
$_SESSION['nama_dokter']=$user['nama_dokter'];
$_SESSION['id_dokter']=$user['id_dokter'];
$_SESSION['no_telp']=$user['no_telp'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<title></title>
	<link rel="stylesheet" href="css/yourdoctor.css">

</head>
<body style="background-color:#f0f0f0;">
	<div class="header2">
		<ul>
			<li><h2>DOCASED</h2></li>
		</ul>
	</div>
	<div class="menu" style="padding-top: 10px;">
		<ul>
			<i><a href="index.php" style="color:white; text-decoration : none;"><span class="fa fa-arrow-left"  style="float: left; margin-left: 20px;  font-size: 30px;"></span></a></i>
			
			<i class="fa fa-credit-card" style="float: right; margin-right: 30px; margin-top: -5px; padding: 5px; "><font face="Poppins"> E-Wallet<br>Rp <?php echo $_SESSION['saldo']?></i></font>
		</ul>
	</div>
	<div class="mapsmall">
	<div class="mapouter"><div class="gmap_canvas"><iframe class="mapsize" id="gmap_canvas" src="https://maps.google.com/maps?q=telkom%20universit&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div></div>
	
	<div class="checkup" style="background-color: #009688;padding: 10px 10px;text-align: center;color:white;font-size: 20px;"><span class="fa fa-user-md"  style="float: left;  font-size: 35px;"></span>YOUR DOCTOR</div>

		
		<center style="background-color: #f5f5f5">
			<div id="hide" style="display: none">
			<center style="color:#3f51b5;">
				<p style="font-size: 20px;margin-top: 10px;">DETAIL<p>
				<table style="margin-top: 20px;margin-bottom: 20px;background-color: white;padding:10px 10px;border-radius: 10px;">
					<tr>
						<td>
							ID :
						</td>
						<td>
							 <?php echo $_SESSION['id_dokter'] ?>
						</td>
					</tr>
					<tr>
						<td>
							Name :
						</td>
						<td>
							 <?php echo $_SESSION['nama_dokter'] ?>
						</td>
					</tr>
					<tr>
						<td>
							Phone :
						</td>
						<td>
							 <?php echo $_SESSION['no_telp'] ?>
						</td>
					</tr>	 	 
				</table>
			</center>
			</div>
			<div id="hide2">
			<i class="fa fa-user-circle-o fa-4x" style="font-style: normal; margin-top: 10px; color: #3f51b5"></i>
			<ul style="margin-top: 10px;">dr. Kemal</ul>
			<ul class="fa fa-star" style="color: #3f51b5; font-style: normal;"></ul>
			<ul class="fa fa-star" style="color: #3f51b5; font-style: normal;"></ul>
			<ul class="fa fa-star" style="color: #3f51b5; font-style: normal;"></ul>
			<ul class="fa fa-star" style="color: #3f51b5; font-style: normal;"></ul>
			<ul class="fa fa-star-o" style="color: #3f51b5; font-style: normal;"></ul>
			</div>
			<ul><button onclick="cek()" style="background-color: #fff; padding: 10px 10px;margin:10px 0px; border-radius: 10px; box-shadow: bottom;width: 100px;color:#3f51b5;outline: none;" ><b>VIEW</b></button></ul>

		</center>
			<center class="abu">
			<table  class="tabeldokter" style="background-color: white;padding:10px 10px;padding-left: 40px;border-radius: 17px;">
				<tr>
					<td ><span class="fa fa-map-marker" style="color:#3f51b5; margin-left: -20px;"></span></td>
					<td><?php echo $_SESSION['alamat']?></td>

				</tr>
				<tr>
					<td ><span class="fa fa-clock-o" style="color:#3f51b5; margin-left: -20px;"></span></td>
					<td>arrived in 05 minutes</td>
				</tr>
			</table>
			</center>
		
	</div>
</body>
<script type="text/javascript">
	function cek() {
	  var x = document.getElementById('hide');
	  var y = document.getElementById('hide2');
	  if (x.style.display === 'none') {
	    x.style.display = 'block';
	    y.style.display = 'none';
	  } else {
	    x.style.display = 'none';
	    y.style.display = 'block';
	  }
	}
</script>
</html>