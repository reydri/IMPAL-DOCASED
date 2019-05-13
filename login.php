
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/file.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="fadein">
<?php 
//include('statik_variabel.php');
//mulai session
session_start();
//cek cookie, dalam sistem login sederhana ini, cookie diberinama "cookielogin"
if(isset($_COOKIE['cookielogin'])){
    //cek cookie login dengan password dan username yang valid
    //$user = $_COOKIE['cookielogin']['username'];
    //print_r($user);
    if(($_COOKIE['cookielogin']['user']==$username)&&($_COOKIE['cookielogin']['pass']==$password)){
        print_r($_COOKIE);
        //jika valid set status login 1
        $_SESSION['logged']=1;
        //redirect ke halaman member area
        header('Location: http://localhost/docased/index.php');  
    }
}
?>

<h1 class= "a">DOCASED</h1>
  <div class="form">
    <form action="inputlogin.php" method="POST">
      <center>
      <input name = "username" type="text" class="user" placeholder="Username" required=""/>
      <input name = "password" type="password" class="pass" placeholder="Password" required=""/>

      <label for="setcookie"><input class="c" type="checkbox" name="setcookie" value="true" id="setcookie" /> Keep Me Signed In</label>
      <a href="register.php" class="b"> Register </a>
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