<?php
session_start();
$_SESSION['username']
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<title></title>
	<link rel="stylesheet" href="css/index.css">

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
	<div class="mapouter"><div class="gmap_canvas"><iframe class="mapsize" id="gmap_canvas" src="https://maps.google.com/maps?q=telkom%20universit&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.crocothemes.net"></a></div><style></style></div>
	<div class="checkup" style="background-color: #009688;padding: 10px 10px;text-align: center;color:white;font-size: 20px;"><span class="fa fa-stethoscope"  style="float: left;  font-size: 35px;"></span>CHECK UP</div>
	<center>

	<form action="inputcheckup.php" method="POST" autocomplete="off">
	<table style="border-radius: 20px; background-color: #ffff; box-shadow: 2px 2px 2px grey; margin-top: 30px; padding:5px 10px;" >
	    <tr>
	        <td style="padding:10px 10px"><span class="fa fa-clipboard" style="color:#cddc39; font-size: 30px;margin-right: 20px;float : left"></span><input type="text" name = "keluhan" class="login" placeholder="What do you feel?" required="" style="font-size:18px;margin-right: 20px;border: none;border-bottom: 1px solid black;outline: none;"></input></td>
	        
	 	</tr>
 	</table>

 	<table style="border-radius: 20px; background-color: #ffff; box-shadow: 2px 2px 2px grey; margin-top: 30px; padding:5px 10px;" >
	    <tr>
	        <td ><span class="fa fa-location-arrow" style="color:#f44336; font-size: 30px;float : left"></span><span style="font-size:18px;margin-right: 10px;"></span>
	        </td>
	        <td style="height: 50px;">
	        	<div class="box">
					<select name="location" required>
				    <option value='x' >Choose your location</option>
				    <option value="Jl. Buah batu">Jl. Buah Batu</option>
				    <option value="Perumahan Batununggal">Perumahan Batununggal</option>
				    <option value="Jl. Mekarsari, Baleendah">Jl. Mekarsari, Baleendah</option>
					</select>
				</div>
	        </td>
	 	</tr>
 	</table>
 	<br><br>
	<button class="button">CALL</button>
	</center></form>
	</div>
	<div class="mapbig">
	
	</div>
</body>
</html>