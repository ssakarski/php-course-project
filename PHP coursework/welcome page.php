<?php
session_start();
if(!(isset($_SESSION['uname'])))
{
	header("location: intro.php");
}
//print_r($_SESSION);
?>
<html>
<head>
<meta charset="utf-8"/>
<title>Welcome</title>
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
	<p style = "color:red; font-size:56px"> Welcome <?php $user = $_SESSION['uname'];echo"$user";?></p>
  </div>

</div>
</body>
</html>
