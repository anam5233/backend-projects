<?php
include("supplierslibrary.php");
$a=new supplierslibrary("E-commerce");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="Scripts/jquery-1.6.4.min.js"></script>

<title>Untitled Document</title>
</head>

<body style="font-family:Vrinda">

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
<tr>
    <td>SuppliersID</td>
    <td><input name="SuppliersID" type="text" id="SuppliersID" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>SuppliersName</td>
    <td><input name="SuppliersName" type="text" id="SuppliersName" value="" size="50" maxlength="200" /></td>
  </tr>
   <tr>
    <td>Address</td>
    <td><input name="Address" type="text" id="Address" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><input name="Contact" type="text" id="Contact" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="Email" type="text" id="Email" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="Password" type="Password" id="Password" value="" size="50" maxlength="200" /></td>
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
$SuppliersID=$_POST['SuppliersID'];
$SuppliersName=$_POST['SuppliersName'];
$Address=$_POST['Address'];
$Contact=$_POST['Contact'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$query="insert into Suppliers values('','$SuppliersID','$SuppliersName','$Address','$Contact','$Email','Password','')";
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