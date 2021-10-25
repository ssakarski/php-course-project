<?php
session_start();
if(!(isset($_SESSION['uname'])))
{
	header("location: intro.php");
}
//print_r($_SESSION);
?>
<HTML>
<HEAD>
<title>Brands</title>
<style>
th{
	width:100px;
	height:30px;
	text-align:center;
}
td{
	text-align:center;
}
</style>
<META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="Main page.css">
<script language="javascript">
function newWin(url)
{ window.open(url,'mywin','width=500, height=300')
}
</script>
</HEAD>
<BODY class = "backgroundColor" style="color:white">
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
<h2 align="center">Available Brands</h2>
<?php
require_once("connect.php");

$sql="select * from brand";

//print_r($_POST);

$result=mysqli_query($conn, $sql);
if(isset($_POST['delete']) && $_SESSION['uname'] == "admin"){
			//print_r($_POST);
			for($i=0;$i<count($_POST['delbox']);$i++)
			{
				$sql1 = "delete from brand where id = ".$_POST['delbox'][$i];
				mysqli_query($conn,$sql1);
			}
	}
if(isset($_POST['edit']))
{		
	$_SESSION['editbox1'] = $_POST['editbox'];
	
}
		$result=mysqli_query($conn, $sql);
		if (mysqli_num_rows($result)==0)
		echo "<h3 align=\"center\"> No available brands!</h3>";
else{
?>
<form align="center" method="post"action="">
<input type="submit" value="Add a new brand" onclick="javascript:newWin('add_brand.php')">
<input type="submit" name="edit" value="Edit a brand" onclick="javascript:newWin('editBrand.php')">
<input type="submit" name="delete" value="Delete">
<p></p>
<table border="1" align="center" style="border-color:#A6ACAF">
<tr>
<th>Number</th><th>Brand</th><th>Country</th><th>Delete</th><th>Edit</th>
</tr>
<?php
  $br=1;
  while($row=mysqli_fetch_assoc($result))
  { echo "<tr><td>$br</td>";
    echo "<td>".$row['brandName']."</td>";
    echo "<td>".$row['brandCountry']."</td>";
	echo "<td><input type=\"checkbox\" name = \"delbox[]\" value = \"".$row['id']."\"></td>";
	echo "<td><input type=\"checkbox\" name = \"editbox[]\" value = \"".$row['id']."\"></td>";
    echo "</tr>";
   $br++;
  }   
?>	
	
</table>
</form>	
<?php	
}
?>
<div align="center">
</div>
</body>
</html>