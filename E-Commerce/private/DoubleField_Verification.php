<?php
session_start();
?>
<?php
include("../library/library.php");
$a=new library("e-commerce");
if( $a->DoubleField_Verification("admin","AdminName",$_POST['user'],"Password",$_POST['pass'])=="Exist")
{
		$_SESSION['user']=$_POST['user'];
			$_SESSION['password']=$_POST['pass'];
	echo "Exist";
}
else
{
	echo "Not Exist";
}
?>
