<?php
include("Purchaselibrary.php");
$a=new Purchaselibrary("E-commerce");
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
    <td>PurchaseID</td>
    <td><input name="PurchaseID" type="text" id="PurchaseID" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>SlNo</td>
    <td><input name="SlNo" type="text" id="SlNo" value="" size="50" maxlength="200" /></td>
  </tr>
   <tr>
    <td>SuppliersID</td>
    <td><input name="SuppliersID" type="text" id="SuppliersID" value="" size="50" maxlength="200" /></td>
  </tr>
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
    <td>Qty</td>
    <td><input name="Qty" type="text" id="Qty" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>UnitPrice</td>
    <td><input name="UnitPrice" type="text" id="UnitPrice" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>TotalPrice</td>
    <td><input name="TotalPrice" type="text" id="TotalPrice" value="" size="50" maxlength="200" /></td>
  </tr>
    <tr>
    <td>Date</td>
    <td><input name="Date" type="text" id="popupDatepicker1" value="" size="50" maxlength="200" /></td>
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
$PurchaseID=$_POST['PurchaseID'];
$SlNo=$_POST['SlNo'];
$SuppliersID=$_POST['SuppliersID'];
$ItemCode=$_POST['ItemCode'];
$ItemName=$_POST['ItemName'];
$GroupName=$_POST['GroupName'];
$Qty=$_POST['Qty'];
$UnitPrice=$_POST['UnitPrice'];
$TotalPrice=$_POST['TotalPrice'];
$Date=$_POST['Date'];
$query="insert into purchase_details values('','$PurchaseID','$SlNo','$SuppliersID','$ItemCode','$ItemName','GroupName','Qty','UnitPrice','TotalPrice','Date','')";
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