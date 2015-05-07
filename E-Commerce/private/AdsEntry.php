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

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
  <tr>
    <td>Ads ID</td>
    <td><input type="text" name="AdsID" id="AdsID"></td>
  </tr>
  <tr>
    <td width="102"><p>Company</p></td>
    <td width="300"><input type="text" name="Company" id="Company" /></td>
  </tr>
  <tr>
    <td>Title</td>
    <td><input name="Title" type="text" id="Title" /></td>
  </tr>
  <tr>
    <td>Description</td>
    <td><input name="Description" type="text" id="Description" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Input Date</td>
    <td><input type="text" name="InputDate" id="popupDatepicker1"></td>
  </tr>
  <tr>
    <td>Expire Date</td>
    <td><input type="text" name="ExpireDate" id="popupDatepicker2"></td>
  </tr>
  <tr>
    <td>EntryPerson</td>
    <td><input type="text" name="EntryPerson" id="EntryPerson"></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><input type="text" name="Contact" id="Contact"></td>
  </tr>
  <tr>
    <td>Location</td>
    <td><input type="text" name="Location" id="Location"></td>
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
$InputDate=trim($_POST['InputDate']);
$ExpireDate=trim($_POST['ExpireDate']);
	
//$mysqli=new mysqli("127.0.0.1","root","","ebook");
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error()); 
$AdsID=trim($_POST['AdsID']);//utf8_encode($_POST['txttitle']);
$Company=trim($_POST['Company']);//utf8_encode($_POST['txtauthor']);
$Title=trim($_POST['Title']);//utf8_encode($_POST['txttitle']);
$Description=trim($_POST['Description']);//utf8_encode($_POST['txtauthor']);
$EntryPerson=trim($_POST['EntryPerson']);//utf8_encode($_POST['txttitle']);
$Contact=trim($_POST['Contact']);//utf8_encode($_POST['txtauthor']);
$Location=trim($_POST['Location']);//utf8_encode($_POST['txtauthor']);

$query="insert into ads values( '','$AdsID','$Company','$Title','$Description','$InputDate','$ExpireDate','$EntryPerson','$Contact','$Location','')";
$result=$mysqli->query($query);
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