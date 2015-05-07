<?php
include("Customerslibrary.php");
$a=new Customerslibrary("E-commerce");
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
$query="select CustomerID,CustomerName,Address,Contact,Email,Password from customers where Asl=$id";
//echo $query;
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
while(list($CustomerID,$CustomerName,$Address,$Contact,$Email,$Password)=$result->fetch_row())
{
?>

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
<tr>
    <td>CustomerID</td>
    <td><input name="CustomerID" type="text" id="CustomerID" value="<?php echo $CustomerID; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>CustomerName</td>
    <td><input name="CustomerName" type="text" id="CustomerName" value="<?php echo $CustomerName; ?>" size="50" maxlength="200" /></td>
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
    <td><input name="Password" type="text" id="Password" value="<?php echo $Password; ?>" size="50" maxlength="200" /></td>
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
$CustomerID=trim($_POST['CustomerID']);
$CustomerName=trim($_POST['CustomerName']);
$Address=trim($_POST['Address']);
$Contact=trim($_POST['Contact']);
$Email=trim($_POST['Email']);
$Password=trim($_POST['Password']);
$query="update customers set CustomerID='$CustomerID',CustomerName='$CustomerName', Address='$Address', Contact='$Contact',Email='$Email',Password='$Password' where asl=$id";

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
$query="delete from customers where asl='$id'";
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