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
    <title>Add a brand.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="color:white;background-color:black">
<?php
 require_once("connect.php");
 
 if ($_SERVER['REQUEST_METHOD']=="POST"){
 $brand=addslashes($_POST["brand"]);
 $country=addslashes($_POST['country']);
 $sql="INSERT INTO brand(id, brandName, brandCountry) VALUES (NULL,'$brand','$country')";
 if (mysqli_query($conn,$sql)) echo "<script>alert(\"A new brand has been added!\")</script>";
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
<tr>
<th>Brand: </th><th><input required type="text" name="brand"></th></tr>
<tr>
<th>Country: </th><th><input required type="text" name="country" minlength="3"></th></tr>
<tr>
<th colspan = "2" align="center"><input type="submit" name="add" value="Add" style="width:100%;text-align:center"></th></tr>
</form>
</table>
</body>
</html>	