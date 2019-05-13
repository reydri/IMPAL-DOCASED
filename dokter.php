<?php
session_start();
$_SESSION['saldo_dokter'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<title></title>
	<link rel="stylesheet" href="css/dokter.css">
</head>
<body>
	<div class="header1">
		<ul>
			<li><h2>DOCASED</h2></li>
		</ul>
	</div>

	<div class="header2">
		<ul>
			<li><h1>DOCASED</h1></li>
		</ul>
	</div>

	<div class="menu1">
		<ul>
			<i class="fa fa-sign-out" aria-hidden="true" style="float: left; margin-left: 20px; margin-top: 15px;"><a href="logoutdokter.php">Logout</a></i>
			
			<i class="fa fa-credit-card" style="float: right; margin-right: 20px; margin-top: -5px; padding: 5px;"><a href="#">E-Wallet</a><br>Rp <?php echo $_SESSION['saldo_dokter']?></i>
		</ul>
	</div>

	<div class="menu2">
		<ul>
			<i class="fa fa-sign-out" aria-hidden="true" style="float: left; margin-left: 10px; margin-top: 25px;"><a href="logoutdokter.php">Logout</a></i>
			
			<i class="fa fa-credit-card" style="float: right; margin-right: 10px; margin-top: 5px; padding: 5px;"><a href="#">E-Wallet<br>Rp  <?php echo $_SESSION['saldo_dokter']?></a></i>
		</ul>
	</div>

	<center class="main1">
		<i class="fa fa-plus-circle fa-5x" aria-hidden="true" style="color: #009688"></i><br>
		<p style="color: #009688; font-size: 20px; margin-top:24px; margin-right: 250px;">Active</p>
		<label class="switch1"> 			
			<input type="checkbox" onclick="cek()"><span class="slider round"></span>
		</label>
	</center>

	<center class="main2">
		<i class="fa fa-plus-circle fa-5x" aria-hidden="true" style="color: #009688"></i><br>
		<p style="color: #009688; font-size: 24px; margin-top:10px; margin-right: 150px;padding-bottom: 183px;">Active</p>
		<label class="switch2"> 			
			<input type="checkbox" onclick="cek()"><span class="slider round"></span>
		</label>
		<div ><span id="notif" style="color: black;text-decoration: none;background-color: #e0e0e0;padding : 10px 10px; visibility: hidden;margin-bottom: 100px;margin:10px 10px;">You have a new order</span></div>
	</center>

	<div class="footer1">
		<ul>
			<i class="fa fa-home" aria-hidden="true" style="float: left; margin-left: 20px; margin-top: 15px;"><a href="dokter.php">Home</a></i>
			<i  class="fa fa-bell" aria-hidden="true" style=" margin-left: 500px; margin-top: 15px;"><a href="pasien.php">Notification</a></i>
			<i class="fa fa-user" style="float: right; margin-right: 20px; margin-top: 10px; padding: 5px;"><a href="akundokter.php">Account</a></i>
		</ul>
	</div>

	<div class="footer2">

		<ul>
			<i class="fa fa-home" aria-hidden="true" style="float: left; margin-left: 20px; margin-top: 10px;"><a href="dokter.php">Home</a></i>

			<i id = "bell2" class="fa fa-bell" aria-hidden="true" style="margin-left: 50px; margin-top: 10px;"><a href="pasien.php">Notification</a></i>
			<i class="fa fa-user" style="float: right; margin-right: 15px; margin-top: 5px; padding: 5px;"><a href="akundokter.php">Account</a></i>
		</ul>
	</div>	
</body>
<script type="text/javascript">
	function cek() {
	  var x = document.getElementById('notif');
	  if (x.style.visibility === 'hidden') {
	    x.style.visibility = 'visible';
	  } else {
	    x.style.visibility = 'hidden';
	  }
	}
</script>
</html>