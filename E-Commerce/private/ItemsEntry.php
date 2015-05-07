<?php
include("Itemslibrary.php");
$a=new Itemslibrary("E-commerce");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
@import "../Scripts/DatePicker/flora.datepick.css";
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="../Scripts/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="../Scripts/DatePicker/jquery.datepick.js"></script>
<script type="text/javascript">
$(function() {
	$('#popupDatepicker1').datepick();
	$('#popupDatepicker2').datepick();
	
});
</script>

<title>Untitled Document</title>
</head>

<body style="font-family:Vrinda">

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
<tr>
    <td>ItemCode</td>
    <td><input name="ItemCode" type="text" id="ItemCode" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>ItemName</td>
    <td><input name="ItemName" type="text" id="ItemName" value="" size="50" maxlength="200" /></td>
  </tr>
   <tr>
    <td>GroupName</td>
    <td><input name="GroupName" type="text" id="GroupName" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>SubGroup</td>
    <td><input name="SubGroup" type="text" id="SubGroup" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>ItemsDetails</td>
    <td><input name="ItemsDetails" type="text" id="ItemsDetails" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>UnitPurchasePrice</td>
    <td><input name="UnitPurchasePrice" type="text" id="UnitPurchasePrice" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>UnitSalePrice</td>
    <td><input name="UnitSalePrice" type="text" id="UnitSalePrice" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Qty</td>
    <td><input name="Qty" type="text" id="Qty" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>InputDate</td>
    <td><input name="InputDate" type="text" id="popupDatepicker1" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Role</td>
    <td><input name="Role" type="text" id="Role" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>ExpireDate</td>
    <td><input name="ExpireDate" type="text" id="popupDatepicker2" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input name="Username" type="text" id="Username" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><input name="Contact" type="text" id="Contact" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Division</td>
    <td><input name="Division" type="text" id="Division" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>District</td>
    <td><input name="District" type="text" id="District" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Location</td>
    <td><input name="Location" type="text" id="Location" value="" size="50" maxlength="200" /></td>
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
$ItemCode=$_POST['ItemCode'];
$ItemName=$_POST['ItemName'];
$GroupName=$_POST['GroupName'];
$SubGroup=$_POST['SubGroup'];
$ItemsDetails=$_POST['ItemsDetails'];
$UnitPurchasePrice=$_POST['UnitPurchasePrice'];
$UnitSalePrice=$_POST['UnitSalePrice'];
$Qty=$_POST['Qty'];
$InputDate=$_POST['InputDate'];
$Role=$_POST['Role'];
$ExpireDate=$_POST['ExpireDate'];
$Username=$_POST['Username'];
$Contact=$_POST['Contact'];
$Division=$_POST['Division'];
$District=$_POST['District'];
$Location=$_POST['Location'];
$query="insert into items_entry values('','$ItemCode','$ItemName','$GroupName','$SubGroup','$ItemsDetails','$UnitPurchasePrice','$UnitSalePrice','$Qty','$InputDate','$Role','$ExpireDate','$Username','$Contact','$Division','$District','$Location','')";
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
Go to <a href="private/SuccessInsert.php">show page</a>



</body>
</html>