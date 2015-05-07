<?php
include("Adslibrary.php");
$a= new Adslibrary("e-commerce");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<?php
$id=$_GET['sl'];
if(isset($_GET['sl']))
{
//$mysqli=new mysqli();
//$mysqli->connect("127.0.0.1","root","","ebook");
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select AdsID,Company,Title,Description,InputDate,ExpireDate,EntryPerson,Contact,Location from Ads where Asl=$id";
//echo $query;
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
while(list($AdsID,$Company,$Title,$Description,$InputDate,$ExpireDate,$EntryPerson,$Contact,$Location)=$result->fetch_row())
{
?>
<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
  <tr>
    <td width="102">AdsID</td>
    <td width="300"><input name="AdsID" type="text" id="AdsID" style="font-family:Vrinda" value="<?php
	echo $AdsID;
	?>" size="50" /></td>
  </tr>
  <tr>
    <td width="102">Company</td>
    <td width="300"><input name="Company" type="text" id="Company" style="font-family:Vrinda" value="<?php
	echo $Company;
	?>" size="50" /></td>
  </tr>
  <tr>
    <td>Title</td>
    <td><input name="Title" type="text" id="Title" value="<?php
	echo $Title;
	?>" size="50" maxlength="50"
     /></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><input name="Description" type="text" id="Description" value="<?php
	echo $Description;
	?>" size="50" maxlength="50"
     /></td>
  </tr>
  <tr>
    <td>InputDate</td>
    <td><input name="InputDate" type="text" id="popupDatepicker1" value="<?php
	echo $InputDate;
	?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>ExpireDate</td>
    <td><input name="ExpireDate" type="text" id="popupDatepicker2" value="<?php
	echo $ExpireDate;
	?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>EntryPerson</td>
    <td><input name="EntryPerson" type="text" id="EntryPerson" value="<?php
	echo $EntryPerson;
	?>" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><input name="Contact" type="text" id="Contact" value="<?php
	echo $Contact;
	?>" size="50" maxlength="200" /></td>
  </tr>
   <tr>
    <td>Location</td>
    <td><input name="Location" type="text" id="Location" value="<?php
	echo $Location;
	?>" size="50" maxlength="200" /></td>
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
//echo date("Y-m-d h:i:sa");



if(isset($_POST['s1'])){
$InputDate=trim($_POST['InputDate']);//date("Y-m-d h:i:sa");
$ExpireDate=trim($_POST['ExpireDate']);//date("Y-m-d h:i:sa");
$mysqli=$a->db;
$AdsID=trim($_POST['AdsID']);//utf8_encode($_POST['txttitle']);
$Company=trim($_POST['Company']);//utf8_encode($_POST['txtauthor']);
$Title=trim($_POST['Title']);//utf8_encode($_POST['txttitle']);
$Description=trim($_POST['Description']);//utf8_encode($_POST['txtauthor']);
$EntryPerson=trim($_POST['EntryPerson']);//utf8_encode($_POST['txttitle']);
$Contact=trim($_POST['Contact']);//utf8_encode($_POST['txtauthor']);
$Location=trim($_POST['Location']);//utf8_encode($_POST['txtauthor']);


$query="update ads set AdsID='$AdsID',Company='$Company', Title='$Title',Description='$Description', InputDate='$InputDate', ExpireDate='$ExpireDate', EntryPerson='$EntryPerson', Contact='$Contact', Location='$Location' where Asl=$id";

$result=$mysqli->query($query);
if($result)
{
//header("location: http://localhost/IDB ROUND-19/sharif last/private/bookssuccess.php");//http://localhost/IDB ROUND-19/sharif last/
header("location: ".$a->goshowlinkall."AdsShow.php");
//echo $query;
}
else
{
echo $query;
}
$mysqli->close();
}
if(isset($_POST['s2'])){
//$productid=$_POST['productid'];
//$mysqli=new mysqli("127.0.0.1","root","","ebook");
$mysqli=$a->db;
$query="delete from ads where Asl='$id'";
$result=$mysqli->query($query);
if($result)
{
//echo "Successfully deleted";	
//header("location: http://localhost/IDB ROUND-19/sharif last/private/showbooks.php");
header("location: ".$a->goshowlinkall."AdsShow.php");
}
$mysqli->close();
}
?>



</body>
</html>