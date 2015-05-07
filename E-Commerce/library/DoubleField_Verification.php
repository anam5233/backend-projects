<?php
session_start();
?>
<?php
include("globalcl.php");
$a=new global_R16("ecomidb");
if( $a->DoubleField_Verification("admin","AdminId",$_POST['user'],"Password",$_POST['pass'])=="Exist")
{
		$_SESSION['user']=$_POST['user'];
			$_SESSION['password']=$_POST['pass'];
	//header("Location: http://localhost/ECommerce-Round16/Inputs/");
	echo "Exist";
}
else
{
	echo "Not Exist";
}
?>
