<?php
session_start();
?>
<?php
include("Customerslibrary.php");
$a=new Customerslibrary("E-commerce");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="Scripts/jquery-1.6.4.min.js"></script>

<title>Untitled Document</title>
</head>

<body style="font-family:Vrinda">

<form name="form1" method="post" action="">
<br />
<p>&nbsp;  </p>
<table width="412" border="0" align="center">
<tr>
    <td>CustomerID</td>
    <td><input name="CustomerID" type="text" id="CustomerID" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>CustomerName</td>
    <td><input name="CustomerName" type="text" id="CustomerName" value="" size="50" maxlength="200" /></td>
  </tr>
   <tr>
    <td>Address</td>
    <td><input name="Address" type="text" id="Address" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Contact</td>
    <td><input name="Contact" type="text" id="Contact" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><input name="Email" type="text" id="Email" value="" size="50" maxlength="200" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="Password" type="Password" id="Password" value="" size="50" maxlength="200" /></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>
    
   
    
    
    
    </td>
  </tr>
  <tr>
    <td>Input Captcha Code</td>
    <td><input name="txtcaptcha" type="text" id="txtcaptcha" value="" size="50" maxlength="200" /></td>
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
//$mysqli=new mysqli("127.0.0.1","root","","E-Commerce");
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error()); 
$CustomerID=$_POST['CustomerID'];
$CustomerName=$_POST['CustomerName'];
$Address=$_POST['Address'];
$Contact=$_POST['Contact'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$cc1=$_POST['txtcaptcha'];
$cc=$_SESSION['cc'];
$query="insert into customers values('','$CustomerID','$CustomerName','$Address','$Contact','$Email','Password','')";
echo "Generated:".$cc;
echo "<br>";
echo "Text:".$cc1;
echo "<br>";
if($cc==$cc1)
{
$result=$mysqli->query($query);
//echo $result;
if($result)
{
header("location: ".$a->golink);
}
else
{
echo $query;
}
}
else
{
echo "Does not match captcha";


session_start(); # REQUIRED

// INCLUDE THE CAPTCHA CLASS
	require("class.AbsCaptcha.php");

// SET THE PATH TO THE DIRECTORY WHERE TO STORE THE IMAGE
	//$dir = '/captcha/';
$dir = $_SERVER['DOCUMENT_ROOT'].'/E-Commerce/private/captcha/';
// INSTANTIATE THE CLASS :: change the background and the foreground color

	$c = new AbsCaptcha('x_session_captcha', $dir, 'captcha', array(0,0,0), array(255,255,255));

// GENERATE IMAGE
	$c->GenerateCaptcha();

// DISPLAY THE IMAGE
	echo '<img src="captcha/'.$c->GetImageName().'" width="'.$c->GetImageWidth().'" height="'.$c->GetImageHeight().'" />';

// DISPLAY THE CODE FROM THE IMAGE
	
$cc=$c->GetCaptchaCode();
$_SESSION['cc']=$cc;
echo '<p>code: '.$_SESSION['cc'].'</p>';

}

$mysqli->close();



}
else

{
	

   /* header("Expires: Mon, 05 June 2001 05:06:07 GMT");
  	header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
    header('Cache-Control: pre-check=0, post-check=0, max-age=0');
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");
*/
	session_start(); # REQUIRED

// INCLUDE THE CAPTCHA CLASS
	require("class.AbsCaptcha.php");

// SET THE PATH TO THE DIRECTORY WHERE TO STORE THE IMAGE
	//$dir = '/captcha/';
$dir = $_SERVER['DOCUMENT_ROOT'].'/E-Commerce/private/captcha/';
// INSTANTIATE THE CLASS :: change the background and the foreground color

	$c = new AbsCaptcha('x_session_captcha', $dir, 'captcha', array(0,0,0), array(255,255,255));

// GENERATE IMAGE
	$c->GenerateCaptcha();

// DISPLAY THE IMAGE
	echo '<img src="captcha/'.$c->GetImageName().'" width="'.$c->GetImageWidth().'" height="'.$c->GetImageHeight().'" />';

// DISPLAY THE CODE FROM THE IMAGE
	
$cc=$c->GetCaptchaCode();
$_SESSION['cc']=$cc;
echo '<p>code: '.$_SESSION['cc'].'</p>';
// uncomment to clear the session.
// session_destroy();	
}
?>
<br />
Go to <a href="#">show page</a>



</body>
</html>