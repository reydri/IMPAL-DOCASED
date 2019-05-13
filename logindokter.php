<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/file.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="fadein">

<h1 class= "a">DOCASED</h1>

  <div class="form">
    <form action="inputlogindokter.php" method="POST">
      <center>
      <input name = "id_dokter" type="text" class="user" placeholder="Insert your ID" required=""/>
      <input name = "no_telp" type="text" class="pass" placeholder="Insert your Phone" required=""/>

      <label for="setcookie"><input class="c" type="checkbox" name="setcookie" value="true" id="setcookie" /> Keep Me Signed In</label>
      
      <br><br><br>
      <button class="login"> <b>LOGIN</b></button>
      <hr class="garis"><div class = "or">OR</div>
      
      <button class="goo" > <i class="fa fa-google" style="margin-right: 10px;"></i> Sign in with Google</button>
      <button class="fb" > <i class="fa fa-facebook" style="margin-right: 6px;"></i> Sign in with Facebook</button>
  	  </center>
    </form>
  </div>
</div>
</body>
</html>