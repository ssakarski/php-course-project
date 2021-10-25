<?php
session_start();
unset($_SESSION['uname']);
unset($_SESSION['uid']);
session_destroy();
header("location: Intro.php");
?>
<html>
<head>
<meta charset="utf-8"/>
<title>Logout</title>
<link rel="stylesheet" href="Main page.css">
</head>
<body class = "backgroundColor" style="color:white">
<div class = "contentBox">
	<div class = "header">
      <div>
      <img  class = "center" src="logo.png" width="1000" height="300" alt=""/>
      </div>
    </div>
 <div>
	  <ul>
  			<li><a href="Intro.php">Home</a></li>
			<li><a href="welcome page.php">Welcome</a></li>
			<li><a href="brandReport.php">Printer brands</a></li>
			<li><a href="printerReport.php">Printers</a></li>
			<li class="dropdown" align = "right">
    			<a href="javascript:void(0)" class="dropbtn">Account</a>
    			<div class="dropdown-content">
      			<a href="login.php">Login</a>
				<a href="logout.php">Logout</a>
      			<a href="register.php">Register</a>
    			</div>
  			</li>
	</ul>
  </div>
  
  <div align = "center" class = "contentBox">
   <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table align = "center" style = "color:white; margin:10%">
	<tr><td>Username:</td><td><input required minlength ="5" maxlength = "30" type="text" name="username" />  </td></tr>
	<tr><td>Password:</td><td><input required minlength ="5" maxlength = "32" type="password" name="password" />  </td></tr>
	<tr><td colspan = "2" align = "right"> <input type="submit" name="submit"/> </td></tr>
	</table>
   </form>
  </div>

</div>
</body>
</html>
