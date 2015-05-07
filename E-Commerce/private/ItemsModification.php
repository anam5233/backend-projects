<?php
include("Itemslibrary.php");
$a=new Itemslibrary("E-commerce");
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
$query="select ItemCode,ItemName,GroupName,ItemsDetails,UnitPurchasePrice,UnitSalePrice,Qty,InputDate,Role,ExpireDate,Username,Contact,Location from items_entry where Asl=$id";
//echo $query;
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
while(list($ItemCode,$ItemName,$GroupName,$ItemsDetails,$UnitPurchasePrice,$UnitSalePrice,$Qty,$InputDate,$Role,$ExpireDate,$Username,$Contact,$Location)=$result->fetch_row())
{
?>

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
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
    <td>ItemsDetails</td>
    <td><input name="ItemsDetails" type="text" id="ItemsDetails" value="<?php echo $ItemsDetails; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>UnitPurchasePrice</td>
    <td><input name="UnitPurchasePrice" type="text" id="UnitPurchasePrice" value="<?php echo $UnitPurchasePrice; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>UnitSalePrice</td>
    <td><input name="UnitSalePrice" type="text" id="UnitSalePrice" value="<?php echo $UnitSalePrice; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Qty</td>
    <td><input name="Qty" type="text" id="Qty" value="<?php echo $Qty; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>InputDate</td>
    <td><input name="InputDate" type="text" id="popupDatepicker1" value="<?php echo $InputDate; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Role</td>
    <td><input name="Role" type="text" id="Role" value="<?php echo $Role; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>ExpireDate</td>
    <td><input name="ExpireDate" type="text" id="popupDatepicker2" value="<?php echo $ExpireDate; ?>" size="50" maxlength="200" /></td>
  </tr>
<tr>
    <td>Username</td>
    <td><input name="Username" type="text" id="Username" value="<?php echo $Username; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><input name="Contact" type="text" id="Contact" value="<?php echo $Contact; ?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Location</td>
    <td><input name="Location" type="text" id="Location" value="<?php echo $Location; ?>" size="50" maxlength="200" /></td>
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
$ItemCode=trim($_POST['ItemCode']);
$ItemName=trim($_POST['ItemName']);
$GroupName=trim($_POST['GroupName']);
$ItemsDetails=trim($_POST['ItemsDetails']);
$UnitPurchasePrice=trim($_POST['UnitPurchasePrice']);
$UnitSalePrice=trim($_POST['UnitSalePrice']);
$Qty=trim($_POST['Qty']);
$InputDate=trim($_POST['InputDate']);
$Role=trim($_POST['Role']);
$ExpireDate=trim($_POST['ExpireDate']);
$Username=trim($_POST['Username']);
$Contact=trim($_POST['Contact']);
$Location=trim($_POST['Location']);
$query="update items_entry set ItemCode='$ItemCode',ItemName='$ItemName', GroupName='$GroupName', ItemsDetails='$ItemsDetails',UnitPurchasePrice='$UnitPurchasePrice',UnitSalePrice='$UnitSalePrice',Qty='$Qty',InputDate='$InputDate',Role='$Role',ExpireDate='$ExpireDate',Username='$Username',Contact='$Contact',Location='$Location' where asl=$id";

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
$query="delete from items_entry where asl='$id'";
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