<?php
include("Itemslibrary.php");
$a=new Itemslibrary("E-commerce");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
	  $("#"+val1).css('background', 'green');
}
function gotoedit(a)
{
	window.location="ItemsModification.php?sl="+a;
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

	if((isset($_GET['begin'])) && (isset($_GET['end'])))
	{
		$start=$_GET['begin'];//-1;
	$stop=$_GET['end'];
	$limit=" limit $start,$stop";
	$paramcond="$start,$stop";
	}
	else
	$limit="";
	$paramcond="";

$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select Asl,ItemCode,ItemName,GroupName,UnitPurchasePrice,UnitSalePrice,Qty,InputDate,Role,ExpireDate,Picture from items_entry order by Asl $limit";
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
echo "<table align=\"center\" border=\"1px\"><tr style=\"background-color:red\"><th>Asl</th><th> ItemCode</th><th> ItemName</th><th> GroupName</th><th> UnitPurchasePrice</th><th> UnitSalePrice</th><th> Qty</th><th> InputDate</th><th> Role</th><th> ExpireDate</th><th> Picture</th></tr>";
$sl=1;
while(list($Asl,$ItemCode,$ItemName,$GroupName,$UnitPurchasePrice,$UnitSalePrice,$Qty,$InputDate,$Role,$ExpireDate,$Picture)=$result->fetch_row())
{
echo "<tr onmouseover=\"tr_show('trshow_$sl')\" onmouseout=\"tr_hide('trshow_$sl')\" id=\"trshow_$sl\"  onclick=\"gotoedit('$Asl')\" style=\"background-color:white; color:black;cursor: pointer;\">";
echo "<td>$sl</td>";
$sl++;
echo "<td>".$ItemCode."</td>";
echo "<td>".$ItemName."</td>";
echo "<td>".$GroupName."</td>";
echo "<td>".$UnitPurchasePrice."</td>";
echo "<td>".$UnitSalePrice."</td>";
echo "<td>".$Qty."</td>";
echo "<td>".$InputDate."</td>";
echo "<td>".$Role."</td>";
echo "<td>".$ExpireDate."</td>";
if ($Picture!="")
{
echo "<td><img height='100px' width='100px' src='titles/$Picture' /><br><a href='ItemsUploadPicture.php?Asl=$Asl'>Upload Picure</a></td>";
}
else
{
echo "<td><img height='100px' width='100px' src='assistant/upload.jpg' /><br><a href='ItemsUploadPicture.php?Asl=$Asl'>Upload Picture</a></td>";
}
echo "</tr>";
}

if((isset($_GET['begin'])) && (isset($_GET['end'])))
{
$divall="";
$result2=$mysqli->query("select count(Asl) as count from items_entry");
list($totalrows) = $result2->fetch_row();
$mod=$totalrows%$stop;
$nop=($totalrows-$mod)/$stop;
for($i=1;$i<=$nop;$i++)
{
	$recordstart=($i-1)*$stop;
	if($recordstart==$start)
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#566'\" style=\"background-color:pink\"><a href=\"ItemsShow.php?begin=$recordstart&end=$stop\" onclick=\"this.bgColor='yellow';\">$i</a></span>";
	else
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#566'\" style=\"background-color:green\"><a href=\"ItemsShow.php?begin=$recordstart&end=$stop\" onclick=\"this.bgColor='yellow';\">$i</a></span>";
	
}
if($mod>0)
{
	$recordstart=($i-1)*$stop;
	if($recordstart==$start)
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#566'\" style=\"background-color:pink\"><a href=\"ItemsShow.php?begin=$recordstart&end=$stop\"  >$i</a></span>";
	else
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#566'\" style=\"background-color:green\"><a href=\"ItemsShow.php?begin=$recordstart&end=$stop\"  >$i</a></span>";
}
echo $divall;
$result2->free();

}

$result->free();







?>


</body>
</html>