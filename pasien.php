<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<title></title>
	<link rel="stylesheet" href="css/pasien.css">

</head>
<body style="background-color:#f0f0f0;">
	<div class="header1" style="float: left;height: 50%;">
		<ul>
			<li><h2 style="margin-left: 10px;"><a href="dokter.php" style="text-decoration: none;color: white;">DOCASED</a></h2></li>
		</ul>
	</div>
	<div class="mapsmall">
	<div class="mapouter"><div class="gmap_canvas"><iframe width="375" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=telkom%20universit&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div><style>.mapouter{position:relative;text-align:left;height:400px;width:375px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:375px;}</style></div>
	<div class="pasien1" style="background-color: #009688;padding: 10px 10px;text-align: center;color:white;font-size: 20px; margin-top: -50px;">NEW PATIENT</div>
	<center class="table1">
		<i class="fa fa-user-circle-o fa-4x" aria-hidden="true" style="color: #3f51b5;margin-top: 20px;"></i><br>
		<p style="color: #3f51b5; font-size: 20px;"><?php echo $_SESSION['name']?></p>
	<table style="border-radius: 20px; background-color: #ffff; box-shadow: 2px 2px 2px grey; margin-top: 5px; padding:5px 10px; width: 95%;" >
	    <tr>
	        <td style="padding:1px 1px;"><span class="fa fa-clipboard" style="color:#cddc39; font-size: 30px;margin-right: 20px;float : left"></span></td>
	        <td><p style="font-size:18px;"><?php echo $_SESSION['keluhan']?></p></td>
	 	</tr>
 	</table>

 	<table style="border-radius: 20px; background-color: #ffff; box-shadow: 2px 2px 2px grey; margin-top: 10px; padding:5px 10px; width: 95%;" >
	    <tr>
	        <td style="padding:1px 1px;"><span class="fa fa-location-arrow" style="color:#f44336; font-size: 30px;float : left;"></span><span style="font-size:18px;margin-right: 10px;"></span>
	        </td>
	        <td><p style="font-size:18px;margin-left: 45px;"><?php echo $_SESSION['alamat']?></p></td>
	 	</tr>
 	</table>
 	<br><br>
	<a class="button" style="margin-top: -10px; background-color: #009688; float: right; margin-right: 5px;text-decoration: none;padding-bottom: -30px;" href="datapasien.php">ACCEPT</a>
	<a href="dokter.php" class="button" style="margin-top: -10px; background-color: #009688; float: left; margin-left: 10px;text-decoration: none;" >CANCEL</a>

	</center>
	</div>
	<div class="header2" style="float: left;">
		<ul>
			<li><h2 style="margin-left: 10px;"><a href="dokter.php" style="text-decoration: none;color: white;">DOCASED</a></h2></li>
		</ul>
	</div>
	<div class="mapbig">
	<div class="mapouter"><div class="gmap_canvas"><iframe width="1144" height="702" id="gmap_canvas" src="https://maps.google.com/maps?q=telkom%20university&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div></div>
	<div class="pasien2" style="background-color: #009688;padding: 10px 10px;text-align: center;color:white;font-size: 20px; float: right; width: 40%; margin-top: -250px;">NEW PATIENT</div>
	<center class="table2" style="float: right; width: 40%; margin-top: -200px;">
		<i class="fa fa-user-circle-o fa-lg" aria-hidden="true" style="color: #3f51b5;"></i><br>
		<p style="color: #3f51b5; font-size: 14px;"><?php echo $_SESSION['name']?></p>
	<table style="border-radius: 20px; background-color: #ffff; box-shadow: 2px 2px 2px grey; margin-top: 5px; padding:5px 10px; width: 95%;" >
	    <tr>
	        <td style="padding:1px 1px;"><span class="fa fa-clipboard" style="color:#cddc39; font-size: 30px;margin-right: 20px;float : left"></span></td>
	        <td><p style="font-size:18px; text-align: center; margin-right: 80px;"><?php echo $_SESSION['keluhan']?></p></td>
	 	</tr>
 	</table>

 	<table style="border-radius: 20px; background-color: #ffff; box-shadow: 2px 2px 2px grey; margin-top: 10px; padding:5px 10px; width: 95%;" >
	    <tr>
	        <td style="padding:1px 1px;"><span class="fa fa-location-arrow" style="color:#f44336; font-size: 30px;float : left;"></span><span style="font-size:18px;margin-right: 10px;"></span>
	        </td>
	        <td><p style="font-size:18px;margin-right: 60px; text-align: center;"><?php echo $_SESSION['alamat']?></p></td>
	 	</tr>
 	</table>
 	<br><br>
	<button class="button" style="margin-top: -15px; background-color: #009688; float: right; margin-right: 10px;" href="datapasien.php">ACCEPT</button>
	<button class="button" style="margin-top: -15px; background-color: #009688; float: left; margin-left: 15px;" href="dokter.php">CANCEL</button>
	</center>
	</div>
</body>
</html>