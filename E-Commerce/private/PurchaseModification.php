<?php
include("Purchaselibrary.php");
$a=new Purchaselibrary("E-commerce");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
</head>

<body style="font-family:Vrinda">
<?php
$id=$_GET['sl'];
if(isset($_GET['sl']))
{
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select PurchaseID,SlNo,SuppliersID,ItemCode,ItemName,GroupName,Qty,UnitPrice,TotalPrice,Date from purchase_details where Asl=$id";
//echo $query;
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
while(list($PurchaseID,$SlNo,$SuppliersID,$ItemCode,$ItemName,$GroupName,$Qty,$UnitPrice,$TotalPrice,$Date)=$result->fetch_row())
{
?>

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
<tr>
    <td>PurchaseID</td>
    <td><input name="PurchaseID" type="text" id="PurchaseID" value="<?php echo $PurchaseID; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>SlNo</td>
    <td><input name="SlNo" type="text" id="SlNo" value="<?php echo $SlNo; ?>" size="50" maxlength="200" /></td>
  </tr>
   <tr>
    <td>SuppliersID</td>
    <td><input name="SuppliersID" type="text" id="SuppliersID" value="<?php echo $SuppliersID; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>ItemCode</td>
    <td><input name="ItemCode" type="text" id="ItemCode" value="<?php echo $ItemCode; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>ItemName</td>
    <td><input name="ItemName" type="text" id="ItemName" value="<?php echo $ItemName; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>GroupName</td>
    <td><input name="GroupName" type="text" id="GroupName" value="<?php echo $GroupName; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Qty</td>
    <td><input name="Qty" type="text" id="Qty" value="<?php echo $Qty; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>UnitPrice</td>
    <td><input name="UnitPrice" type="text" id="UnitPrice" value="<?php echo $UnitPrice; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>TotalPrice</td>
    <td><input name="TotalPrice" type="text" id="TotalPrice" value="<?php echo $TotalPrice; ?>" size="50" maxlength="200" /></td>
  </tr>
    <tr>
    <td>Date</td>
    <td><input name="Date" type="text" id="popupDatepicker1" value="<?php echo $Date; ?>" size="50" maxlength="200" /></td>
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
$PurchaseID=trim($_POST['PurchaseID']);
$SlNo=trim($_POST['SlNo']);
$SuppliersID=trim($_POST['SuppliersID']);
$ItemCode=trim($_POST['ItemCode']);
$ItemName=trim($_POST['ItemName']);
$GroupName=trim($_POST['GroupName']);
$Qty=trim($_POST['Qty']);
$UnitPrice=trim($_POST['UnitPrice']);
$TotalPrice=trim($_POST['TotalPrice']);
$Date=trim($_POST['Date']);
$query="update purchase_details set PurchaseID='$PurchaseID',SlNo='$SlNo', SuppliersID='$SuppliersID', ItemCode='$ItemCode',ItemName='$ItemName',GroupName='$GroupName',Qty='$Qty',UnitPrice='$UnitPrice',TotalPrice='$TotalPrice',Date='$Date' where asl=$id";

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
$query="delete from purchase_details where asl='$id'";
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