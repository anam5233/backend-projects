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
$query="select distinct SubGroup from items_entry $wherecond order by SubGroup";
//echo $query;
$result1=$mysqli->query($query,MYSQLI_STORE_RESULT);
$sl=1;
while(list($SubGroup)=$result1->fetch_row())
{
$sl++;
$divall.= "<ul id=\"MenuBar2\" class=\"MenuBarVertical\"><li ><a href=\"#\"  id=\"MenuBar2\" class=\"MenuBarVertical\" onclick=\"show_by_location('SubGroup','$SubGroup',0,6)\">$SubGroup</a></li></ul>";
}

$result1->free();

$result['status']="$divall";

	
	echo json_encode($result);
?>