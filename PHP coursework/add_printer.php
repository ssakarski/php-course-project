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
<title>Add a printer</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="color:white;background-color:black">
<?php
 require_once("connect.php");
 
 if ($_SERVER['REQUEST_METHOD']=="POST"){
 $brand=addslashes($_POST["brand"]);
 $model=addslashes($_POST["model"]);
 $type=addslashes($_POST['type']);
 $ppm=intval($_POST['ppm']);
 $ppc=intval($_POST['ppc']);
 //if(strlen($model) or $ppm=="" or $ppm==)
 $sql="INSERT INTO printer(id, brandID, model, type, pagesPerMin, pagesPerCartridge) 
 VALUES (NULL,'$brand','$model','$type','$ppm','$ppc')";
 if (mysqli_query($conn,$sql))echo "<script>alert(\"A new brand has been added!\")</script>";
 }
?>
<script>
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
    }
</script>
<form action="" method="post">
<table align = "center" border="1" style="border-color:#A6ACAF">
<tr><th>Brand:</th><th><select name="brand" style="width:100%;text-align:center">
<?php
  $sqlB="select * from brand";
  $result=mysqli_query($conn,$sqlB);
  while ($row=mysqli_fetch_assoc($result))
	  echo "<option value=\"".$row['id']."\">".$row['brandName']."</option>\n";
?></select></th></tr>
<tr><th>Model:</th><th> <input required type="text" name="model" style="width:100%;text-align:center"></th></tr>
<tr><th>Type:</th><th><select name="type" style="width:100%;text-align:center">
  <option value="matrix"style="width:100%;text-align:center" selected>Matrix</option>
  <option value="inkjet"style="width:100%;text-align:center">Inkjet</option>
  <option value="laser"style="width:100%;text-align:center">Laser</option>
</select></th></tr>
<tr><th>Pages per minute: </th><th><input required type="number" min = "1" name="ppm" style="width:100%;text-align:center"></th></tr>
<tr><th>Pages per cartridge: </th><th><input required type="number" min = "1"  name="ppc" style="width:100%;text-align:center"></th></tr>
<tr><th colspan = "2" align="center"><input type="submit" name="add" value="Add" style="width:100%;text-align:center"></th></tr>
</form>
</table>
</body>
</html>	