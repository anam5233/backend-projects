<?php
include("library/library.php");
$a=new library("e-commerce");

?>
<?php
$result=array();
$start=0;//-1;
$stop=7;
if(isset($_GET['value']))
{
	$aut=$_GET['value'];
	$qu=$_GET['field'];
	if (($aut=="") && ($qu==""))
	$wherecond="";
	else
	$wherecond=" where $qu='$aut' ";
	$paramcond="'$qu','$aut'";
}
else

{
	$wherecond="";
	$paramcond="'',''";
}

	$all="";
	$limit="";
if((isset($_GET['begin'])) && (isset($_GET['end'])))
{
	$start=$_GET['begin'];//-1;
	$stop=$_GET['end'];
	$limit=" limit $start,$stop";
}


$divall="";


$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select Asl,ItemCode,ItemName,GroupName,SubGroup,ItemsDetails,UnitSalePrice,ExpireDate,EntryPerson,Contact,Division,District,Location,Picture from items_entry $wherecond order by Asl $limit";
$result1=$mysqli->query($query,MYSQLI_STORE_RESULT);
$sl=0;
while(list($Asl,$ItemCode,$ItemName,$GroupName,$SubGroup,$ItemsDetails,$UnitSalePrice,$ExpireDate,$EntryPerson,$Contact,$Division,$District,$Location,$Picture)=$result1->fetch_row())
{
$sl++;
$divall.= "<div class=\"all\" id=\"all_$sl\"><div class=\"picture\"><a href=\"#\" id=\"icode_$sl\" onclick=\"goDetails('$ItemCode')\" ><img src=\"Private/titles/$Picture\" width=\"160\" height=\"160\"></a></div> <div class=\"Code\">Item Code: <a href=\"#\" id=\"icode_$sl\" onclick=\"goDetails('$ItemCode')\" >$ItemCode </a></div><br/><div class=\"title\">$ItemName </div><br/><br/><div class=\"Group\">Group: <a href=\"#\" class=\"MenuBarItemSubmenu2\"   onclick=\"show_by_location('GroupName','$GroupName',0,6)\" >$GroupName  </a></div><div class=\"SubGroup\">Sub-Catagory: <a href=\"#\" class=\"MenuBarItemSubmenu3\"   onclick=\"show_by_location('SubGroup','$SubGroup',0,6)\"  >$SubGroup  </a></div><div class=\"Expire\">ExpireDate: $ExpireDate </div> <div class=\"price\"> ৳$UnitSalePrice </div><br/><br/><br/><br/><div class=\"Location\"> <a href=\"#\" class=\"Code\">$EntryPerson</a>&nbsp;&nbsp;<img src=\"Icon/From my Nokia 418.png\" width=\"20\" height=\"20\">&nbsp;<a href=\"#\" class=\"MenuBarItemSubmenu2\"   onclick=\"show_by_location('Location','$Location',0,6)\" > $Location </a>|<a href=\"#\" class=\"MenuBarItemSubmenu3\"   onclick=\"show_by_location('District','$District',0,6)\" > $District  </a>|<a href=\"#\" class=\"MenuBarItemSubmenu3\"   onclick=\"show_by_location('Division','$Division',0,6)\"  > $Division  </a> - থেকে।</div></div><hr/>
";
}




//$divall.="<br>";
$result2=$mysqli->query("select count(asl) as count from items_entry $wherecond");
list($totalrows) = $result2->fetch_row();
$mod=$totalrows%6;
$nop=($totalrows-$mod)/6;
for($i=1;$i<=$nop;$i++)
{
	$recordstart=($i-1)*6;
	//$url=$_SERVER['PHP_SELF']."?recordstart=$recordstart";
	//printf("<a href='%s'> %s</a>", $url,$i);
	//$recordend=
	if($recordstart==$start)
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#666'\" style=\"background-color:sky\"><a href=\"#\" onclick=\"show_by_location($paramcond,$recordstart,6);this.bgColor='yellow';\">$i</a></span> , ";
	else
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#666'\" style=\"background-color:green\"><a href=\"#\" onclick=\"show_by_location($paramcond,$recordstart,6);this.bgColor='yellow';\">$i</a></span> , ";
	
}
if($mod>0)
{
	$recordstart=($i-1)*6;
	if($recordstart==$start)
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#666'\" style=\"background-color:sky\"><a href=\"#\"  onclick=\"show_by_location($paramcond,$recordstart,$mod)\">$i</a></span>";
	else
	$divall.= "<span onmouseover=\"this.bgcolor='sky'\" onmouseout=\"this.bgColor='#666'\" style=\"background-color:green\"><a href=\"#\"  onclick=\"show_by_location($paramcond,$recordstart,$mod)\">$i</a></span>";
}
		//$all.= "<tr><td colspan='2'><div style=\"background-color:lemon; color:sky; text-align:center; font-size:large; font-family:verdana\">$divall</div></td></tr>";	

//$all.= "</table>";









$result1->free();
$result2->free();

$result['status']="$divall";

	
	echo json_encode($result);
?>