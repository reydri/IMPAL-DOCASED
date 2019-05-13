
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
    <form method="POST" action="inputregister.php" role="register">
      <center>
      <input name="username" type="username" class="user" placeholder="Username" required=""/>
      <input name="name" type="name" class="user" placeholder="Name" required=""/>
      <input name = "password" id="password" type="password" class="pass" placeholder="Password" required=""/>
      <input id = "password1" type="password" class="pass" placeholder="Confirm Password" required=""/>
      <input name="phone"type="phone" class="user" placeholder="Phone Number" required=""/>
      <a href="login.php" class="d"> Login </a>
      <br><br><br>
      <button id="go" class="login" type="submit" onclick="return Validate()"> <b>REGISTER</b></button>

  	  </center>
    </form>
  </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
  function Validate() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password1").value;
    if (password != confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }
    return true;
  }
</script>
</body>

</html>