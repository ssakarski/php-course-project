<?php
 require_once("connect.php");
 
 if ($_SERVER['REQUEST_METHOD']=="POST"){
 $username=addslashes($_POST["username"]);
 $password=addslashes($_POST["password"]);
 $Repassword=addslashes($_POST['Repassword']);
 $email=addslashes($_POST['email']);
 if(isset($_POST["password"]) && isset($_POST["Repassword"])){ // pass check and hashing
	 if($password === $Repassword){
			$hashpass = md5($password);
			$sql="INSERT INTO user (id, username, password, email, type) VALUES (NULL,'$username','$hashpass', '$email','2')";
		    if (mysqli_query($conn,$sql)) echo "Добавянето е успешно!";
			else echo "Добавянето е неуспешно!";
	 }else{
		 echo "<script> alert(\"Passwords do not match!\") </script>";
	 }
	}
 }  
?>
<html>
<head>
<meta charset="utf-8"/>
<title>Registration</title>
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
	<tr><td>Re-enter Password:</td><td><input required minlength ="5" maxlength = "32" type="password" name="Repassword" />  </td></tr>
	<tr><td>Email:</td><td><input required type="email" name="email" />  </td></tr>
	<tr><td colspan = "2" align = "right"> <input type="submit" name="submit"/> </td></tr>
	</table>
   </form>
  </div>
</div>
</body>
</html>
