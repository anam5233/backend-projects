<?php
include("Adminlibrary.php");
$a=new Adminlibrary("e-commerce");
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
	//echo $id;
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select AdminID,AdminName,Email,Password,Role from admin where Asl=$id";
//echo $query;
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
while(list($AdminID,$AdminName,$Email,$Password,$Role)=$result->fetch_row())
{
?>

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
<tr>
    <td>AdminID</td>
    <td><input name="AdminID" type="text" id="AdminID" value="<?php echo $AdminID; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>AdminName</td>
    <td><input name="AdminName" type="text" id="AdminName" value="<?php echo $AdminName; ?>" size="50" maxlength="200" /></td>
  </tr>
   <tr>
    <td>Email</td>
    <td><input name="Email" type="text" id="Email" value="<?php echo $Email; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="Password" type="password" id="Password" value="<?php echo $Password; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Role</td>
    <td><input name="Role" type="text" id="Role" value="<?php echo $Role; ?>" size="50" maxlength="200" /></td>
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
$AdminID=trim($_POST['AdminID']);
$AdminName=trim($_POST['AdminName']);
$Email=trim($_POST['Email']);
$Password=trim($_POST['Password']);
$Role=trim($_POST['Role']);
$Picture=trim($_POST['Picture']);
$query="update admin set AdminID='$AdminID',AdminName='$AdminName', Email='$Email', Password='$Password',Role='$Role' where asl=$id";

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
$query="delete from admin where asl='$id'";
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