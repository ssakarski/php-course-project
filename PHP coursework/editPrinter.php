<?php
session_start();
if(!(isset($_SESSION['uname'])))
{
	header("location: intro.php");
}
?>
<html>

<head>
    <title>Edit a printer.</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="color:white;background-color:black">
<?php
 require_once("connect.php");
 $getID = $_SESSION['editboxPrinter'][0];
 $sql = "select printer.id,printer.brandID,brand.id,brandName,model,type,pagesPerMin,pagesPerCartridge from printer,brand where printer.brandID=brand.id and printer.id ={$getID}";
 $result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($result);
 //print_r($getID);
 if(isset($_POST['edit'])){
	 $newbrand = $_POST['newbrand'];
	 $newmodel = $_POST['newmodel'];
	 $newtype = $_POST['newtype'];
	 $newppm = $_POST['newppm'];
	 $newppc = $_POST['newppc'];
	 $sqlEdit = "UPDATE printer SET brandID='$newbrand',model='$newmodel',type='$newtype',pagesPerMin='$newppm',
	 pagesPerCartridge='$newppc' WHERE printer.id={$getID}";
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
<tr><th>Model:</th> <th><input readonly name="oldmodel" type="text" style="width:100%;text-align:center" value ="<?php echo $row['model']?>"></th></tr>
<tr><th>Type: </th><th><input readonly name="oldtype" type="text" style="width:100%;text-align:center" value = "<?php echo $row['type']?>"></th></tr>
<tr><th>Pages Per Minute: </th><th><input readonly name="oldppm" type="text" style="width:100%;text-align:center" value = "<?php echo $row['pagesPerMin']?>"></th></tr>
<tr><th>Pages Per Cartridge: </th><th><input readonly name="oldppc" type="text" style="width:100%;text-align:center" value = "<?php echo $row['pagesPerCartridge']?>"></th></tr>
</table ><p></p>
<table align = "center" border="1" style="border-color:#A6ACAF">
<tr><th>Brand:</th><th><select name="newbrand" style="width:100%;text-align:center">
<?php
  $sqlB="select * from brand";
  $result=mysqli_query($conn,$sqlB);
  while ($row=mysqli_fetch_assoc($result))
	  echo "<option value=\"".$row['id']."\">".$row['brandName']."</option>\n";
?></select></th></tr>
<tr><th>Model:</th><th> <input required type="text" name="newmodel" style="width:100%;text-align:center"></th></tr>
<tr><th>Type:</th><th><select name="newtype" style="width:100%;text-align:center">
  <option value="matrix"style="width:100%;text-align:center;" selected>Matrix</option>
  <option value="inkjet"style="width:100%;text-align:center">Inkjet</option>
  <option value="laser"style="width:100%;text-align:center">Laser</option>
</select></th></tr>
<tr><th>Pages per minute: </th><th><input required type="number" min = "1" name="newppm" style="width:100%;text-align:center"></th></tr>
<tr><th>Pages per cartridge: </th><th><input required type="number" min = "1"  name="newppc" style="width:100%;text-align:center"></th></tr>
<tr><th colspan = "2" align="center"><input type="submit" name="edit" value="Confirm edit" style="width:100%;text-align:center"></th></tr>
</form>
</table>
</body>
</html>	