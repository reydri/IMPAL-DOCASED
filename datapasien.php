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
	<link rel="stylesheet" href="css/datapasien.css">

</head>
<body  style="background: #e0e0e0;">
	<div class="header1" style="float: left;">
		<ul>
			<li><h2 style="margin-left: 10px;">DOCASED</h2></li>
		</ul>
	</div>

	<div class="pasien1" style="background-color: #009688;text-align: center;color:white;font-size: 20px;">YOUR PATIENT</div>
	<form autocomplete="off" method="POST" action="inputdatapasien.php">
	<center class="table1" style="margin-top: 10px;">
		<i class="fa fa-user-circle-o fa-5x" aria-hidden="true" style="color: #3f51b5;"></i><br>
		<p style="color: #3f51b5; font-size: 20px;"><?php echo $_SESSION['name']?></p>
		<table style="background-color: #ffff; margin-top: 30px;border-radius: 10px;padding: 10px 10px; " >
     		<tr>
         		<td ><span style="color:#cddc39; font-size: 30px;float : left"></span><input id = "nomor2" type="text" name = "diagnosis" class="login" value="Diagnosis" style="font-size:18px;border: none;border-bottom: 1px solid black;padding-right: 90px;" readonly></input><a href="#" class="fa fa-pencil" style="text-decoration: none; font-size: 20px;float:right; color: #cddc39;" onclick="cek('2');"></a></td>
	 		</tr>
	 		<tr>
         		<td ><span style="color:#cddc39; font-size: 30px;float : left"></span><input id = "nomor3" type="text" name = "medicine" class="login" value="Medicine" style="font-size:18px;border: none;border-bottom: 1px solid black;padding-right: 90px;" readonly></input><a href="#" class="fa fa-pencil" style="text-decoration: none; font-size: 20px;float:right; color:#cddc39;" onclick="cek('3');"></a></td>
	 		</tr>
	 		<tr>
         		<td ><span style="color:#cddc39; font-size: 30px;float : left"></span><input id = "nomor4" type="text" name = "price" class="login" value="Price" style="font-size:18px;border: none;border-bottom: 1px solid black;padding-right: 90px;" readonly></input><a href="#" class="fa fa-pencil" style="text-decoration: none; font-size: 20px;float:right; color:#cddc39;" onclick="cek('4');"></a></td>
	 		</tr>
  		</table>
  		<br><br>
  		<button type="submit" class="button" style="background-color: #cddc39; margin-top: -20px;" >SUBMIT</button>
  		<label class="switch1"> 			
			<input type="checkbox" onclick="add()"><span class="slider round"></span>
		</label>
	</center>
</form>	
	<center class="pilih1" style="margin-top: 40px;">
		
 		<table id = "ambulan" style="border-radius: 10px; background-color: #ffff; box-shadow: 2px 2px 2px grey; margin-top: 10px; padding:5px 10px;visibility: hidden;">
	    	<tr>
	        	<td style="padding:1px 1px;"><span class="fa fa-ambulance" style="font-size: 30px;margin-right: 20px;float : left"></span></td>
	        	<td><a href="https://api.whatsapp.com/send?phone=6281220849807&text=Pesan%20Ambulance%20dong" style="font-size:18px; text-align: center;">Call Ambulance</a></td>
	 		</tr>
 		</table>

	</center>

	<div class="header2" style="float: left;">
		<ul>
			<li><h2 style="margin-left: 10px;">DOCASED</h2></li>
		</ul>
	</div>

	<div class="pasien2" style="background-color: #009688;text-align: center;color:white;font-size: 20px;">YOUR PATIENT</div>
	<form autocomplete="off" method="POST" action="inputdatapasien.php">
	<center class="table2" style="margin-top: 10px;border-radius: 20px;">
		<i class="fa fa-user-circle-o fa-5x" aria-hidden="true" style="color: #3f51b5;"></i><br>
		<p style="color: #3f51b5; font-size: 20px;"><?php echo $_SESSION['name']?></p>
		<table style="background-color: #ffff; margin-top: 30px; " >
     		
	 		<tr>
         		<td ><span style="color:#cddc39; font-size: 30px;float : left"></span><input id = "nomor6" type="text" name = "diagnosis" class="login" placeholder="Diagnosis" style="font-size:18px;border: none;border-bottom: 1px solid black;padding-right: 90px;" readonly></input><a href="#" class="fa fa-pencil" style="text-decoration: none; font-size: 20px;float:right; color:#cddc39;" onclick="cek('6');"></a></td>
	 		</tr>
	 		<tr>
         		<td ><span style="color:#cddc39; font-size: 30px;float : left"></span><input id = "nomor7" type="text" name = "medicine" class="login" placeholder="Medicine" style="font-size:18px;border: none;border-bottom: 1px solid black;padding-right: 90px;" readonly></input><a href="#" class="fa fa-pencil" style="text-decoration: none; font-size: 20px;float:right; color:#cddc39;" onclick="cek('7');"></a></td>
	 		</tr>
	 		<tr>
         		<td ><span style="color:#cddc39; font-size: 30px;float : left"></span><input id = "nomor8" type="text" name = "price" class="login" placeholder="Price" style="font-size:18px;border: none;border-bottom: 1px solid black;padding-right: 90px;" readonly></input><a href="#" class="fa fa-pencil" style="text-decoration: none; font-size: 20px;float:right; color:#cddc39;" onclick="cek('8');"></a></td>
	 		</tr>
  		</table>
  		<br><br>
  		<button class="button" type="submit" style="background-color: #cddc39; margin-top: -10px; margin-left: 300px;" >SUBMIT</button>
  		</form>
  		<label class="switch2"> 			
			<input type="checkbox" onclick="add()"><span class="slider round"></span>
		</label>
	</center>

	<center class="pilih2" style="margin-top: 40px;">

 		<table id = "ambulan" style="border-radius: 10px; background-color: #ffff; box-shadow: 2px 2px 2px grey; margin-top: 10px; padding:5px 10px; visibility: hidden" >
	    	<tr>
	        	<td style="padding:1px 1px;"><span class="fa fa-ambulance" style="font-size: 30px;margin-right: 20px;float : left"></span></td>
	        	<td><a href="https://api.whatsapp.com/send?phone=6281220849807&text=Pesan%20Ambulance%20dong" style="font-size:18px; text-align: center;">Call Ambulance</a></td>
	 		</tr>
 		</table>
	</center>
	<script type="text/javascript">
	  function cek(n) {
	  	if (n =='1'){
	  		document.getElementById("nomor1").removeAttribute('readonly');
	  	}else if(n=='2'){
	  		document.getElementById("nomor2").removeAttribute('readonly');
	  	}else if(n=='3'){
	  		document.getElementById("nomor3").removeAttribute('readonly');
	  	}else if(n=='4'){
	  		document.getElementById("nomor4").removeAttribute('readonly');
	  	}else if(n=='5'){
	  		document.getElementById("nomor5").removeAttribute('readonly');
	  	}else if(n=='6'){
	  		document.getElementById("nomor6").removeAttribute('readonly');
	  	}else if(n=='7'){
	  		document.getElementById("nomor7").removeAttribute('readonly');
	  	}else if(n=='8'){
	  		document.getElementById("nomor8").removeAttribute('readonly');
	  	}
	  }	
	</script>
	<script type="text/javascript">
	function add() {
	  var x = document.getElementById('ambulan');
	  if (x.style.visibility === 'hidden') {
	    x.style.visibility = 'visible';
	  } else {
	    x.style.visibility = 'hidden';
	  }
	}
</script>
</body>
</html>