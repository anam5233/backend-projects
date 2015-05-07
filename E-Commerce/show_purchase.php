<?php
include("library/library.php");
$a=new library("e-commerce");

?>
<?php
$result=array();
$divall="";		
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select Asl,PurchaseID,SlNo,SuppliersID,ItemCode,ItemName,GroupName,Qty,UnitPrice,TotalPrice,Date,Picture from purchase_details ";
$result1=$mysqli->query($query,MYSQLI_STORE_RESULT);
$divall.= "<table align=\"center\" border=\"1px\"><tr style=\"background-color:red\"><th>Asl</th><th> PurchaseID</th><th> SlNo</th><th> SuppliersID</th><th> ItemCode</th><th> ItemName</th><th> GroupName</th><th> Qty</th><th> UnitPrice</th><th> TotalPrice</th><th> Date</th><th> Picture</th></tr>";
$sl=1;
while(list($Asl,$PurchaseID,$SlNo,$SuppliersID,$ItemCode,$ItemName,$GroupName,$Qty,$UnitPrice,$TotalPrice,$Date,$Picture)=$result1->fetch_row())
{
$divall.= "<tr onmouseover=\"tr_show('trshow_$sl')\" onmouseout=\"tr_hide('trshow_$sl')\" id=\"trshow_$sl\"  onclick=\"gotoedit('$Asl')\" style=\"background-color:white; color:black;cursor: pointer;\">";
$divall.= "<td>$sl</td>";
$sl++;
$divall.= "<td>".$PurchaseID."</td>";
$divall.= "<td>".$SlNo."</td>";
$divall.= "<td>".$SuppliersID."</td>";
$divall.= "<td>".$ItemCode."</td>";
$divall.= "<td>".$ItemName."</td>";
$divall.= "<td>".$GroupName."</td>";
$divall.= "<td>".$Qty."</td>";
$divall.= "<td>".$UnitPrice."</td>";
$divall.= "<td>".$TotalPrice."</td>";
$divall.= "<td>".$Date."</td>";
if ($Picture!="")
{
$divall.= "<td><img height='100px' width='100px' src='titles/$Picture' /><br><a href='PurchaseUploadPicture.php?Asl=$Asl'>Upload Picure</a></td>";
}
else
{
$divall.= "<td><img height='100px' width='100px' src='assistant/upload.jpg' /><br><a href='PurchaseUploadPicture.php?Asl=$Asl'>Upload Picture</a></td>";
}
$divall.= "</tr>";
}



$result1->free();



$result['status']="$divall";

	
	echo json_encode($result);
?>