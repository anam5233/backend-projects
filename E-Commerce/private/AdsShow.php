<?php
include("Adslibrary.php");
$a= new Adslibrary("e-commerce");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--<script src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("jquery", "1");
</script>-->
<script language="javascript" src="../Scripts/jquery-1.6.4.min.js"></script>
<script language="javascript">
function tr_show(val1)
{
	//alert(val1);
	  $("#"+val1).css('background', 'pink');
}
function tr_hide(val1)
{
	//alert(val1);
	  $("#"+val1).css('background', 'white');
}
function gotoedit(a)
{
	window.location="AdsModification.php?sl="+a;
}
$(document).ready(function()//when the page is loaded
{

	
});
</script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//$mysqli=new mysqli();
//$mysqli->connect("127.0.0.1","root","","ebook");
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select AdsID,Company,Title,Description,InputDate,ExpireDate,EntryPerson,Contact,Location,Picture from Ads order by Asl $limit";
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
echo "<table align=\"center\" border=\"1px\"><tr style=\"background-color:red\"><th>Asl</th><th>AdsID</th><th>Company</th><th>Title</th><th>Description</th><th> EntryDate</th><th> ExpiryDate</th><th> Entryperson</th><th> Contact</th><th> Location</th><th> Picture</th></tr>";
$sl=1;
while(list($AdsID,$Company,$title,$Description,$InputDate,$ExpireDate,$EntryPerson,$Contact,$Location,$Picture)=$result->fetch_row())
{
echo "<tr onmouseover=\"tr_show('trshow_$sl')\" onmouseout=\"tr_hide('trshow_$sl')\" id=\"trshow_$sl\"  onclick=\"gotoedit('$AdsID')\" style=\"background-color:white; color:black;cursor: pointer;\">";
echo "<td>$sl</td>";
$sl++;
echo "<td>".$AdsID."</td>";
echo "<td>".$Company."</td>";
echo "<td>".$title."</td>";
echo "<td>".$Description."</td>";
echo "<td>".$InputDate."</td>";
echo "<td>".$ExpireDate."</td>";
echo "<td>".$EntryPerson."</td>";
echo "<td>".$Contact."</td>";
echo "<td>".$Location."</td>";
if ($Picture!="")
{
echo "<td><img height='100px' width='100px' src='titles/$Picture' /><br><a href='AdsUploadPicture.php?Asl=$AdsID'>Upload Picure</a></td>";
}
else
{
echo "<td><img height='100px' width='100px' src='assistant/upload.jpg' /><br><a href='AdsUploadPicture.php?Asl=$AdsID'>Upload Book</a></td>";
}
echo "</tr>";
}

if((isset($_GET['begin'])) && (isset($_GET['end'])))
{
$divall="";
$result2=$mysqli->query("select count(Asl) as count from Ads");
list($totalrows) = $result2->fetch_row();
$mod=$totalrows%$stop;
$nop=($totalrows-$mod)/$stop;
for($i=1;$i<=$nop;$i++)
{
	$recordstart=($i-1)*$stop;
	if($recordstart==$start)
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#566'\" style=\"background-color:pink\"><a href=\"AdsShow.php?begin=$recordstart&end=$stop\" onclick=\"this.bgColor='yellow';\">$i</a></span> , ";
	else
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#566'\" style=\"background-color:green\"><a href=\"AdsShow.php?begin=$recordstart&end=$stop\" onclick=\"this.bgColor='yellow';\">$i</a></span> , ";
	
}
if($mod>0)
{
	$recordstart=($i-1)*$stop;
	if($recordstart==$start)
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#566'\" style=\"background-color:pink\"><a href=\"AdsShow.php?begin=$recordstart&end=$stop\"  >$i</a></span>";
	else
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#566'\" style=\"background-color:green\"><a href=\"AdsShow.php?begin=$recordstart&end=$stop\"  >$i</a></span>";
}
echo $divall;
$result2->free();

}

$result->free();







?>


</body>
</html>