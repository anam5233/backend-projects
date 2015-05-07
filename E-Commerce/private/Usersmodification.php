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
</div>
</div>
</div>
</div>
<?php
$id=$_GET['sl'];

if(isset($_GET['sl']))
{
	//echo $id;
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select Type,Username,Email,FullName,Password,PasswordHint,Gender,Address,Mobile,AlternateMobile,Phone,CompanyName,Designation,Location,City,District from customerdetails where Asl=$id";
//echo $query;
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
while(list($Type,$Username,$Email,$FullName,$Password,$PasswordHint,$Gender,$Address,$Mobile,$AlternateMobile,$Phone,$CompanyName,$Designation,$Location,$City,$District)=$result->fetch_row())
{
?>

</div>
</div>

<div id="main" class="masterdiv masterwidth" style="padding-top: 0; padding-bottom: 0;">


<form id="create-account" method="post" action="">

<div id="header">Update Your Account
  <div class="quick-help help-tip ibfix header-qh prel g-tooltip-hover" data-keyname="qhCreateNewAccount" data-qhtitle="Entering complete and accurate information into each of the following fields is vital for these reasons:" data-qhtext="&lt;ol&gt;
&lt;li&gt;It allows you to open and make changes to your account.&lt;/li&gt;
&lt;li&gt;It allows us to tell you when your domains or products are about to expire.&lt;/li&gt;
&lt;li&gt;It helps protect your account from anyone who might try to open it using partial information.&lt;/li&gt;
&lt;li&gt;It enables us to give you fast, efficient answers when you need help.&lt;/li&gt;
&lt;/ol&gt;"></div>
</div>
<div class="left" id="account-c">
<div id="account-type">
<div class="b t12">How will you be using this account?</div>
We'll use this information to suggest products you may like.
<div id="account-type-select">
<input class="rb" id="type-business" name="Type" value="Business" title="Business" type="radio">Business
<input class="rb" id="type-personal" name="Type" value="Personal" title="Personal" type="radio">Personal
<input class="rb" id="type-both" name="Type" value="Both" title="Both" type="radio">Both
</div>
</div>
<div class="account-header t14 b">Enter Account Holder Information</div>
<div><span class="sup red">*</span>&nbsp;<span class="t11">Required</span></div>
<div class="field-l">
<div class="label-t">Username:&nbsp;<span class="sup red">*</span></div>
<input class="input-t" name="Username" id="Username" autofocus="" value="<?php echo $Username; ?>" maxlength="30" type="text">
</div>
<div class="field-l" style="float:none">
  <div class="label-t">Email:&nbsp;<span class="sup red">*</span>
<div class="quick-help help-tip ibfix g-tooltip-hover" data-qhtitle="Why using free email accounts is a bad idea" data-keyname="qhEmailNoComp" data-qhtext="We recommend that you NOT use an email address from a free service (e.g. Yahoo! ® or Hotmail) for your GoDaddy account. Instead, please enter a traditional address, such as a GoDaddy email address or one issued to you by your Internet Service Provider (ISP). This makes it easier for us to contact you if we need to and helps protect you from fraud."></div>
</div>
<input class="input-t" name="Email" id="Email" value="<?php echo $Email; ?>" maxlength="100" type="text">
</div>
<div class="field-l">
<div class="label-t">Full Name:&nbsp;<span class="sup red">*</span></div>
<input class="input-t" name="FullName" id="FullName" value="<?php echo $FullName; ?>" maxlength="100" type="text">
</div>
<div class="field-l">
  <div class="label-t">Password:&nbsp;<span class="sup red">*</span></div>
  <input class="input-t" name="Password" id="Password" value="<?php echo $Password; ?>" maxlength="100" type="text">
</div>
<div class="field-l">
  <div class="label-t">Password Hint:&nbsp;<span class="sup red">*</span></div>
  <input class="input-t" name="PasswordHint" id="PasswordHint" value="<?php echo $PasswordHint; ?>" maxlength="100" type="text">
</div>
<div class="field-l">
  <div class="label-t">Gender:&nbsp;<span class="sup red">*</span></div>
  <span class="field-ls">
  <select id="Gender" name="Gender">
    <option selected="selected" value="">Select</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
  </select>
  </span> </div>
<div class="field-l">
  <div class="label-t">Address:&nbsp;<span class="sup red">*</span></div>
  <input class="input-t" name="Address" id="Address" value="<?php echo $Address; ?>" maxlength="100" type="text">
</div>
<div class="field-l cboth">
  <div class="label-t">Mobile:&nbsp;<span class="sup red">*</span></div>
<div class="ux-tel-control"><input value="+880 " id="Mobile" name="Mobile" maxlength="50" class="form-control" style="padding-left:4.25em !important;" type="tel"></div>
</div>
<div class="field-l cboth">
  <div class="label-t">Alternet Mobile:&nbsp;<span class="sup red">*</span></div>
  <div class="ux-tel-control">
    <input value="+880 " id="AlternetMobile" name="AlternetMobile" maxlength="50" class="form-control" style="padding-left:4.25em !important;" type="tel">
  </div>
</div>
<div class="field-l cboth">
  <div class="label-t">Phone:&nbsp;<span class="sup red">*</span></div>
  <div class="ux-tel-control">
    <input value="+880 " id="Phone" name="Phone" maxlength="50" class="form-control" style="padding-left:4.25em !important;" type="tel">
  </div>
</div>
<div class="field-l" style="float:none">
  <div class="label-t">Company Name:&nbsp;<span class="sup red">*</span>
  </div>
  <input class="input-t" name="CompanyName" id="CompanyName" value="<?php echo $CompanyName; ?>" maxlength="100" type="text">
</div>
<div class="field-l" style="float:none">
  <div class="label-t">Designation:&nbsp;<span class="sup red">*</span>
  </div>
  <input class="input-t" name="Designation" id="Designation" value="<?php echo $Designation; ?>" maxlength="100" type="text">
  <div class="field-l" style="float:none">
    <div class="label-t">Location:&nbsp;<span class="sup red">*</span>
    </div>
    <input class="input-t" name="Location" id="Location" value="<?php echo $Location; ?>" maxlength="100" type="text">
    <div class="field-l" style="float:none">
      <div class="label-t">City:&nbsp;<span class="sup red">*</span>
      </div>
      <input class="input-t" name="City" id="City" value="<?php echo $City; ?>" maxlength="100" type="text">
      <div class="field-l" style="float:none">
        <div class="label-t">District:&nbsp;<span class="sup red">*</span>
        </div>
        <input class="input-t" name="District" id="District" value="<?php echo $District; ?>" maxlength="100" type="text">
      </div>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<div class="field-l tos-l">
<input class="g-btn-lg g-btn-prg" name="s1" type="submit" id="s1" value="Update Profile" /><input class="g-btn-lg g-btn-prg" name="s1" type="submit" id="s2" value="Delete Profile" />

</div>
<div id="utos-html" class="hide"></div>
<div id="privacy-html" class="hide"></div>
<div id="utos-modal-message" class="g-modal">
<a class="g-modal-close" href="#">

<span>Close</span>
</a>

<div id="modal-h-utos" class="g-modal-header hide">
Universal Terms of Service Agreement
</div>
<div id="modal-h-privacy" class="g-modal-header hide">
Privacy Policy
</div>
<div class="g-modal-content">
<p></p>
</div>
<div class="g-modal-buttonpane">
<div id="print-modal" class="pointer t14">Print</div><a id="modal-f-close" class="u toslink pointer t14">Close</a>
</div>
</div>
</div>

<!-- *********************  MARKETING CONTENT ****************** -->

</form>

<?php
}
}


if(isset($_POST['s1'])){
//$mysqli=new mysqli("127.0.0.1","root","","E-Commerce");
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error()); 
$Type=trim($_POST['Type']);
$Username=trim($_POST['Username']);
$Email=trim($_POST['Email']);
$FullName=trim($_POST['FullName']);
$Password=trim($_POST['Password']);
$PasswordHint=trim($_POST['PasswordHint']);
$Gender=trim($_POST['Gender']);
$Address=trim($_POST['Address']);
$Mobile=trim($_POST['Mobile']);
$AlternateMobile=trim($_POST['AlternateMobile']);
$Phone=trim($_POST['Phone']);
$CompanyName=trim($_POST['CompanyName']);
$Designation=trim($_POST['Designation']);
$Location=trim($_POST['Location']);
$City=trim($_POST['City']);
$District=trim($_POST['District']);
$query="update customerdetails set Type='$Type',Username='$Username', Email='$Email', FullName='$FullName',Password='$Password',PasswordHint='$PasswordHint', Gender='$Gender', Address='$Address',Mobile='$Mobile',AlternateMobile='$AlternateMobile', Phone='$Phone', CompanyName='$CompanyName',Designation='$Designation',Location='$Location',City='$City',District='$District' where asl=$id";

$result=$mysqli->query($query);
echo $result;
if($result)
{
header("location: ".$a->goshowlink);
}
else
{
echo $query;
}
$mysqli->close();
}
if(isset($_POST['s2'])){
$mysqli=$a->db;
$query="delete from customerdetails where asl='$id'";
$result=$mysqli->query($query);
if($result)
{
header("location: ".$a->goshowlink);
}
$mysqli->close();
}

?>

</div>
</body></html>