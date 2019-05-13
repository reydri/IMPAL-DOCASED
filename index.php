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
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="header">
		<ul>
			<li><h2>DOCASED</h2></li>
		</ul>
	</div>

	<div class="menu">
		<ul>
			<li><a href="logout.php" style="color:white; text-decoration : none;"><span class="fa fa-sign-out"  style="float: left; margin-left: 20px; margin-top: 5px;"></span>Logout</a></li>
			
			<i class="fa fa-credit-card" style="float: right; margin-right: 30px; margin-top: -5px; padding: 5px; "><font face="Poppins"> E-Wallet<br>Rp <?php echo $_SESSION['saldo']?></i></font>
		</ul>
	</div>

	<center>
	<table class = "tabel">
		<tr>
	  		<td class="x"><a class="list-group-item" href="checkup.php"><i class="fa fa-medkit fa-5x" aria-hidden="true"></i>&nbsp;</a></td>
	  		<td class="x"><a class="list-group-item" href="history.php"><i class="fa fa-history fa-5x" aria-hidden="true"></i>&nbsp;</a></td>
  		</tr>
  		<tr>
  			<td>Check Up</td>
  			<td>History</td>
  		</tr>
	</table>
	<table class = "tabel">
		<tr>
			<td class="x"><a class="list-group-item" href="topup.php"><i class="fa fa-plus fa-5x" aria-hidden="true"></i>&nbsp;</a></td>
	  		<td class="x"><a class="list-group-item" href="account.php"><i class="fa fa-user fa-5x" aria-hidden="true"></i>&nbsp;</a></td>
		</tr>
		<tr>
			<td>Top Up</td>
  			<td>Account</td>
		</tr>
	</table>
	</center>
</body>
</html>