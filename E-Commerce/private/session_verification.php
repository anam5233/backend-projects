<?php
session_start();
?>
<?php
include("../library/library.php");
$a=new library("e-commerce");

?>
<?php

if(!isset($_SESSION['user']) || !isset($_SESSION['password']))
{
header("Location: ".$a->gogloballink."index.php?signout=true");
}
else
{
	$u=$_SESSION['user'];
$p=$_SESSION['password'];
//echo "Hi, ".$u;

if( $a->DoubleField_Verification("admin","AdminName",$u,"Password",$p)!="Exist")
{
	header("Location: ".$a->gogloballink."index.php?signout=true");
}
}
?>