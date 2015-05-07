<?php
include("supplierslibrary.php");
$a=new supplierslibrary("E-commerce");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="font-family:Vrinda">
<?php
$id=$_GET['sl'];
if(isset($_GET['sl']))
{
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select SuppliersID,SuppliersName,Address,Contact,Email,Password from Suppliers where Asl=$id";
//echo $query;
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
while(list($SuppliersID,$SuppliersName,$Address,$Contact,$Email,$Password)=$result->fetch_row())
{
?>

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
<tr>
    <td>SuppliersID</td>
    <td><input name="SuppliersID" type="text" id="SuppliersID" value="<?php echo $SuppliersID; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>SuppliersName</td>
    <td><input name="SuppliersName" type="text" id="SuppliersName" value="<?php echo $SuppliersName; ?>" size="50" maxlength="200" /></td>
  </tr>
   <tr>
    <td>Address</td>
    <td><input name="Address" type="text" id="Address" value="<?php echo $Address; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><input name="Contact" type="text" id="Contact" value="<?php echo $Contact; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="Email" type="text" id="Email" value="<?php echo $Email; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="Password" type="Password" id="Password" value="<?php echo $Password; ?>" size="50" maxlength="200" /></td>
  </tr>
<tr>
    <td>&nbsp;</td>
    <td><input name="s1" type="submit" id="s1" value="Update" />
      <input name="s2" type="submit" id="s2" value="Delete" /></td>
  </tr>
</table>
</p>
</form>
<?php
}
}

if(isset($_POST['s1'])){
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$mysqli=$a->db;
$SuppliersID=trim($_POST['SuppliersID']);
$SuppliersName=trim($_POST['SuppliersName']);
$Address=trim($_POST['Address']);
$Contact=trim($_POST['Contact']);
$Email=trim($_POST['Email']);
$Password=trim($_POST['Password']);
$query="update Suppliers set SuppliersID='$SuppliersID',SuppliersName='$SuppliersName', Address='$Address', Contact='$Contact',Email='$Email',Password='$Password' where asl=$id";

$result=$mysqli->query($query);
if($result)
{
header("location: ".$a->goshowlink);
}
else
{
echo $query;
}
$mysqli->close();
}
if(isset($_POST['s2'])){
$mysqli=$a->db;
$query="delete from Suppliers where asl='$id'";
$result=$mysqli->query($query);
if($result)
{
header("location: ".$a->goshowlink);
}
$mysqli->close();
}
?>



</body>
</html>