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
	<link rel="stylesheet" href="css/account.css">
</head>
<body style="background: #e0e0e0;">
<form autocomplete="off" method="POST" action="updateakundokter.php">
	<div class="header" style="padding-top: 20px;padding-bottom: 30px;">
		<ul>
			<div style="float:right;margin-right: 20px;"><h2><button href="#" class="save" style="" type="submit" id="go">SAVE</button></h2>
			</div>
			<i><a href="dokter.php" style="color:white; text-decoration : none;"><span class="fa fa-arrow-left"  style="float: left; margin-left: 20px;  font-size: 30px;"></span></a></i>
		</ul>
	</div>
<div class="baru">
	<ul>
		<li>Account</li>
		<li><i class="fa fa-user-circle-o fa-4x" style="font-style: normal; margin-top: 10px;"></i></li>

	</ul>
</div>

<center class="table">
	<table style="background-color: #ffff; margin-top: 30px; " >
     <tr>
         <td >
         	<span style="color:#3f51b5; font-size: 30px;float : left"></span>
         	<input id = "kel" type="text" name = "nama_dokter" value="<?php echo $_SESSION['nama_dokter']?>" style="border: none;border-bottom: 1px solid black;outline: none;" required="" readonly></input>
         	<a href="#" class="fa fa-pencil" style="text-decoration: none; font-size: 20px;float:right" onclick="cek('1');"></a>
         </td>
	 </tr>
	 <tr>
         <td >
         	<span style="color:#3f51b5; font-size: 30px;float : left"></span>
         	<input id = "kel2" type="text" name = "no_telp" value="<?php echo $_SESSION['no_telp']?>" style="border: none;border-bottom: 1px solid black;outline: none;" readonly></input>
         	<a href="#" class="fa fa-pencil" style="text-decoration: none; font-size: 20px;float:right" onclick="cek('2');"></a>
         </td>
	 </tr>
  </table>

</center>
</form>
<script type="text/javascript">
  function cek(n) {
  	if (n =='1'){
  		document.getElementById("kel").removeAttribute('readonly');
  	}else if(n=='2'){
  		document.getElementById("kel2").removeAttribute('readonly');
  	}else if(n=='3'){
  		document.getElementById("kel3").removeAttribute('readonly');
  	}
  }
</script>
</body>
</html>