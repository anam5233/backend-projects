<?php
session_start();
?>
<?php
include("Userslibrary.php");
$a=new Userslibrary("e-commerce");
?>

<!DOCTYPE html>
<html lang="en-us"><head id="ctl00_Head1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>
E-Commerce Account
</title><meta http-equiv="Pragma" content="no-cache">
<link rel="stylesheet" type="text/css" href="GoDaddy%20My%20Account_files/idp_rebrand_20140109.css"><script language="javascript" src="../Scripts/jquery-1.6.4.min.js"></script>
<style type="text/css">
@import "../Scripts/DatePicker/flora.datepick.css";

.account-c {
	text-align:center;
	vertical-align:top;
	margin:auto;
}
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
<link href="Banglalink%20%20%20Online%20Job%20Application%20Form_files/style.css" rel="stylesheet" type="text/css">
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-SXRF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<style type="text/css">
.masterdiv{margin:0 auto;clear:both;}
.masterwidth{ width: 1000px;}
</style>
<link href="GoDaddy%20My%20Account_files/gd_cds_2014v1_css_20140310.css" rel="stylesheet">
<link rel="shortcut icon" href="https://img1.wsimg.com/assets/godaddy.ico">
</head>
<body id="ctl00_PageBody" style="width: 100%; margin: 0;">
<img src="GoDaddy%20My%20Account_files/image.gif" alt="" class="hide s0 h0">
<div class="masterdiv ">
<div id="headerHtml" style="clear: both;">
<div id="pcHtmlPhModal"></div>
<label id="pcScriptPh"></label>
<div id="pch5"><!-- end .utility-bar -->
  <div id="page-nav-bar" style="visibility: hidden; display: none;">
  <div class="page-nav">
<div class="page-width horizontal-center classy-row">
<div class="page-nav-pagemap">
<div class="classy-row">
<h3>&nbsp;</h3>
<div>
<ul class="float-wrap classy-row"></ul>
</div>
</div>
</div>
<a class="page-nav-domain-toggle oi-group1" href="#" data-openit="{&quot;event&quot;:&quot;click&quot;,&quot;mask&quot;:&quot;#page-nav-bar .page-nav-search&quot;,&quot;guide&quot;:&quot;.page-width&quot;,&quot;animate&quot;:&quot;height&quot;,&quot;speed&quot;:&quot;200&quot;,&quot;group&quot;:&quot;group1&quot;,&quot;offclick&quot;:&quot;true&quot;}">FIND A DOMAIN</a>
</div>
</div>
<div class="page-nav-search">
<div class="page-width horizontal-center">
<div class="openit-wrap">
<form action="http://www.godaddy.com/domains/search.aspx" data-domainscout="{&quot;search-element&quot;:&quot;#page-nav-search-field&quot;,&quot;placeholder-element&quot;:&quot;label&quot;,&quot;button&quot;:&quot;.submit-button&quot;,&quot;ci&quot;:&quot;54814&quot;}">
<label for="page-nav-search-field">Enter a <strong>domain name</strong></label>
<input id="page-nav-search-field" autocomplete="off" type="text">
<input class="submit-button" value="Search Domain" type="submit">
</form>
</div>
</div>
</div>
</div><!-- end #page-nav-bar -->
</div>
<!-- end #pch5-header -->
<!--HEADEREND-->
</div>
</div>
<div id="main" class="masterdiv masterwidth" style="padding-top: 0; padding-bottom: 0;">
<form id="create-account" method="post" action="">
<div id="header">Create a New Account
<div class="quick-help help-tip ibfix header-qh prel g-tooltip-hover" data-keyname="qhCreateNewAccount" data-qhtitle="Entering complete and accurate information into each of the following fields is vital for these reasons:" data-qhtext="&lt;ol&gt;
&lt;li&gt;It allows you to open and make changes to your account.&lt;/li&gt;
&lt;li&gt;It allows us to tell you when your domains or products are about to expire.&lt;/li&gt;
&lt;li&gt;It helps protect your account from anyone who might try to open it using partial information.&lt;/li&gt;
&lt;li&gt;It enables us to give you fast, efficient answers when you need help.&lt;/li&gt;
&lt;/ol&gt;"></div>
</div>
<div class="left" id="account-c">
  <div><span class="sup red">*</span>&nbsp;<span class="t11">Required</span></div>
<div class="field-l">
<div class="label-t"> Username:&nbsp;<span class="sup red">*</span></div>
<input class="input-t" name="Username" id="Username" autofocus="" maxlength="30" type="text">
</div>
<div class="field-l" style="float:none">
  <div class="label-t">Email:&nbsp;<span class="sup red">*</span>
<div class="quick-help help-tip ibfix g-tooltip-hover" data-qhtitle="Why using free email accounts is a bad idea" data-keyname="qhEmailNoComp" data-qhtext="We recommend that you NOT use an email address from a free service (e.g. Yahoo! ® or Hotmail) for your GoDaddy account. Instead, please enter a traditional address, such as a GoDaddy email address or one issued to you by your Internet Service Provider (ISP). This makes it easier for us to contact you if we need to and helps protect you from fraud."></div>
</div>
<input class="input-t" name="Email" id="Email" maxlength="100" type="text">
</div>
<div class="field-l">
  <div class="label-t">Full name:&nbsp;<span class="sup red">*</span></div>
<input class="input-t" name="FullName" id="FullName" maxlength="30" type="text">
</div>
<div class="field-l prel">
<div class="label-t">Password:&nbsp;<span class="sup red">*</span>
<div class="quick-help help-tip  g-tooltip-hover ibfix" data-keyname="qhPasswordRequirements" data-qhtitle="Password Requirements" data-qhtext="&lt;span class='pwquickhelp'&gt;
&lt;ul&gt;
&lt;li&gt;Be at least 9 characters long&lt;/li&gt;
&lt;li&gt;Contain at least 1 numeric&lt;/li&gt;
&lt;li&gt;Contain at least 1 capital&lt;/li&gt;
&lt;li&gt;Cannot match Password Hint&lt;/li&gt;
&lt;li&gt;Cannot use the same password within 30 days&lt;/li&gt;
&lt;li&gt;Cannot reuse the last 5 passwords&lt;/li&gt;
&lt;li&gt;May contain spaces&lt;/li&gt;
&lt;li&gt;Cannot begin or end with a space.&lt;/li&gt;
&lt;li&gt;May not contain words from the password blacklist&lt;/li&gt;
&lt;/ul&gt;
&lt;/span&gt;"></div>
</div>
<input autocomplete="off" maxlength="255" class="input-t g-tooltip-content-focus" data-keyname="pwInfo" name="Password" id="Password" type="password">
<div id="pwInfo" style="display: none;">
<div class="ui-tooltip-titlebar">Password criteria:</div>
<div class="ui-tooltip-content">
<div id="pw-alc" class="pw-icon-row">
<div class="idp_sprite redx_circle left pw-icon">&nbsp;</div><div class="left pw-icon-text">Must be at least 9 characters</div>
</div>
<div id="pw-oucl" class="pw-icon-row">
<div class="idp_sprite redx_circle left pw-icon">&nbsp;</div><div class="left pw-icon-text">Must contain an upper-case letter, a number, and cannot begin or end with a space</div>
</div>
</div>
<div style="position: absolute; left: -1px; display: block; top: 20px;" id="qharrow" class="idp_sprite arrow-top-left">&nbsp;</div>
</div>
</div>
<div class="field-l prel">
<div class="label-t">Confirm Password:&nbsp;<span class="sup red">*</span></div>
<input autocomplete="off" maxlength="255" class="input-t g-tooltip-content-focus" data-keyname="confirmPwInfo" name="ConfirmPassword" id="ConfirmPassword" type="password">
<div id="confirmPwInfo" style="display: none;">
<div class="ui-tooltip-titlebar">Password criteria:</div>
<div class="ui-tooltip-content">
<div id="pw-match" class="pw-icon-row">
<div class="idp_sprite redx_circle left">&nbsp;</div><div class="pw-icon-text">Password matches</div>
</div>
</div>
<div style="position: absolute; left: -1px; display: block; top: 20px;" class="idp_sprite arrow-top-left">&nbsp;</div>
</div>
</div>
<div class="field-l">
<div class="label-t">Password Hint:&nbsp;<span class="sup red">*</span>
<div class="quick-help help-tip ibfix g-tooltip-hover" data-keyname="qhPasswordHint" data-qhtitle="Password Hint:" data-qhtext="Pick a hint that will remind you of your password if you forget."></div>
</div>
<input maxlength="250" class="input-t" name="PasswordHint" id="PasswordHint" type="text">
</div>
<div class="field-l"><?php


if(isset($_POST['s1'])){
//$mysqli=new mysqli("127.0.0.1","root","","E-Commerce");
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error()); 
$Username=$_POST['Username'];
$Email=$_POST['Email'];
$FullName=$_POST['FullName'];
$Password=$_POST['Password'];
$PasswordHint=$_POST['PasswordHint'];
$cc1=$_POST['txtCapcha'];
$cc=$_SESSION['cc'];
$query="insert into customerdetails values('','','$Username','$Email','$FullName','$Password','$PasswordHint','','','','','','','','','','','')";
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
echo "Does not match captcha.<br>";


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
?></div>
<div class="field-l">
  <div class="label-t">Verify  Capcha:&nbsp;<span class="sup red">*</span>
    <div class="quick-help help-tip ibfix g-tooltip-hover"></div>
  </div>
  <input maxlength="250" class="input-t" name="txtCapcha" id="txtCapcha" type="text">
</div>
<p>&nbsp;</p>
<div class="field-l tos-l">
  <div class="idp_sprite three_arrows left">&nbsp;</div>
<input class="left" id="agree_tos" name="agree_tos" type="checkbox">
<div class="left">
I have read and agree to the terms<br>and conditions of the following:
<div id="utos_error" class="hide">
<label class="red t11">Please accept the terms before continuing</label>
</div>
</div>
<ul class="cboth">
<li><span id="utos" class="tos-link u pointer">Universal Terms of Service Agreement</span></li>
<li><span id="privacy" class="tos-link u pointer">Privacy Policy</span></li>
</ul>
<input class="g-btn-lg g-btn-prg" name="s1" type="submit" id="s1" value="Create Account" />
</div>

<div id="modal-h-utos" class="g-modal-header hide">
Universal Terms of Service Agreement
</div>
<div id="modal-h-privacy" class="g-modal-header hide">
Privacy Policy
</div>
</div>
</div>
<!-- *********************  MARKETING CONTENT ****************** -->
</form>


</div>
</body></html>