<?php
include("Adminlibrary.php");
$a=new Adminlibrary("e-commerce");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="../Scripts/jquery-1.6.4.min.js"></script>

<title>Untitled Document</title>
</head>

<body style="font-family:Vrinda">

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
<tr>
    <td>AdminID</td>
    <td><input name="AdminID" type="text" id="AdminID" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>AdminName</td>
    <td><input name="AdminName" type="text" id="AdminName" value="" size="50" maxlength="200" /></td>
  </tr>
   <tr>
    <td>Email</td>
    <td><input name="Email" type="text" id="Email" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="Password" type="password" id="Password" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Role</td>
    <td><input name="Role" type="text" id="Role" value="" size="50" maxlength="200" /></td>
  </tr>
<tr>
    <td>&nbsp;</td>
    <td><input name="s1" type="submit" id="s1" value="Save" /></td>
  </tr>
</table>
</p>
</form>
<?php



if(isset($_POST['s1'])){
//$mysqli=new mysqli("127.0.0.1","root","","E-Commerce");
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error()); 
$AdminID=$_POST['AdminID'];
$AdminName=$_POST['AdminName'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Role=$_POST['Role'];
$Picture=$_POST['Picture'];
$query="insert into admin values('','$AdminID','$AdminName','$Email','$Password','$Role','')";
$result=$mysqli->query($query);
echo $result;
if($result)
{
header("location: ".$a->golink);
}
else
{
echo $query;
}
$mysqli->close();
}

?>
<br />
Go to <a href="#">show page</a>



</body>
</html>