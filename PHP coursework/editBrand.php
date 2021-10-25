<?php
session_start();
if(!(isset($_SESSION['uname'])))
{
	header("location: intro.php");
}
?>
<html>

<head>
    <title>Edit a brand.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="color:white;background-color:black">
<?php
 require_once("connect.php");
 $getID = $_SESSION['editbox1'][0];
 $sql = "select * from brand where id = {$getID}";
 $result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
 //print_r($getID);
 if(isset($_POST['edit'])){
	 $newbrand = $_POST['newbrand'];
	 $newcountry = $_POST['newcountry'];
	 $sqlEdit = "UPDATE brand SET brandName='$newbrand',brandCountry='$newcountry' WHERE id = {$getID}";
	 if(mysqli_query($conn,$sqlEdit))
	 {
		 echo"<script> alert(\"A brand has been edited!\")</script>";  // Not working because it closes after editing
	 }
 }
?>
<script>
    window.onunload = refreshParent;
    function refreshParent() {
        window.opener.location.reload();
		window.close();
    }
</script>
<form action="" method="post">
<table align = "center" border="1" style="border-color:#A6ACAF">
<tr><th>Brand:</th> <th><input readonly name="oldbrand" type="text" style="width:100%;text-align:center" value = "<?php echo $row['brandName']?>"></th></tr>
<tr><th>Country:</th> <th><input readonly name="oldcountry" type="text" style="width:100%;text-align:center" value ="<?php echo $row['brandCountry']?>"></th></tr>
<tr><th>New Brand: </th><th><input required type="text" name="newbrand"></th></tr>
<tr><th>New Country: </th><th><input required type="text" name="newcountry" minlength="3"></th></tr>
<tr><th colspan = "2" align="center"><input type="submit" name="edit" value="Confirm edit" style="width:100%;text-align:center"></th></tr>
</form>
</table>
</body>
</html>	