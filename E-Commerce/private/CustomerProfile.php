<?php
if(isset($_GET['signout']))
{
if(isset($_GET['signout'])=="true")
{
session_start();
unset($_SESSION['user']);
unset($_SESSION['password']);
echo "<script language=\"javascript\">loadPopup('#popupLogin'); centerPopup('#popupLogin')</script>";
}
else
{
session_start();	
}
}
?>
<?php
include("Userslibrary.php");
$a=new Userslibrary("e-commerce");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
</title><meta http-equiv="Pragma" content="no-cache">
<style type="text/css">
        .style7
        {
            text-align: left;
        }
        .style8
        {
            height: 26px;
            text-align: left;
        }
        .style10
        {
            text-align: left;
        }
        .dropShadowPanel 
{
	width:700px;
	height:600px;
	background-color:#5377A9;
	color:white;
	font-weight:bold;
	font-size:18px;
}
.OpenButton 
{
	font-weight:bold;
	font-size:18px;
	float:right;
	text-align:right;
	vertical-align:bottom;
	
}
    </style>
     <script type="text/javascript">
         //Function to allow only numbers to textbox 
         function validate(key) {
             //getting key code of pressed key
             var keycode = (key.which) ? key.which : key.keyCode;
             var phn = document.getElementById('txtmobile');
             var phn2 = document.getElementById('txtaltermobile');
             //comparing pressed keycodes
             if (!(keycode == 8 || keycode == 46) && (keycode < 48 || keycode > 57)) {
                 return false;
             }
             else {
                 //Condition to check textbox contains ten numbers or not
                 if (phn.value.length < 10 || phn2.value.length < 10) {
                     return true;
                 }
                 else {
                     return false;
                 }
             }
         }
</script>

        <script src="CustomerProfile.aspx_files/jquery-1.js" type="text/javascript" language="javascript">
</script>
<script language="javascript" type="text/javascript">
   function showLocation() {
  // alert("OK");
   a = $("#MainContent_txtloc").val() + "," + $("#MainContent_txtdistrict").val();
   //    alert(a);
   b = $("#Label1").text();
   $.ajax({
       type: "POST",
       dataType: "json",
       contentType: "application/json",
       url: "../ConnectionDB.asmx/ShowApproxLocations",
       data: "{'Ilocation':'" + a + "','uname':'" + b + "'}",
       success: function (data) {
          //   alert(data.d);
           if (data.d == "<ol></ol>") {
               $("#div1").html("Your location is not found in the google map. Please input a location which is recognized by google map");
              // $("#div1").slideUp("slow").slideDown("slow");
           }
           else {
               $("#div1").html("Select your preffered location:" + data.d);
             //  $("#div1").slideUp("slow").slideDown("slow");
           }

       },
       error: function () {

           alert("Error calling the web service");
       }
   });




}

function addLocation(a1,b1) {
    // alert("OK");
    //a = $("#MainContent_txtloc").val() + "," + $("#MainContent_txtdistrict").val();
    //    alert(a);
    b = $("#Label1").text();
    a = b1;
    //alert(a);
    //alert(b);
    $.ajax({
        type: "POST",
        dataType: "json",
        contentType: "application/json",
        url: "../ConnectionDB.asmx/AddApproxLocations",
        data: "{'Ilocation':'" + a + "','uname':'" + b + "'}",
        success: function (data) {

           // alert(data.d);

            if (data.d == "1") {
                $("#div1").html("Location Inserted");
             //   $("#div1").slideUp("slow").slideDown("slow");
            }
            else {
                $("#div1").html("Something error");
               // $("#div1").slideUp("slow").slideDown("slow");
            }

        },
        error: function () {

            alert("Error calling the web service");
        }
    });



}



        </script>


  <style type="text/css">
        .style1
        {
            width: 937px;
        }
        .style3
        {
            width: 299px;
        }
        .style4
        {
            width: 132px;
        }
        .style5
        {
            width: 264px;
        }
    </style>
</head>

  


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

<!--<script type="text/javascript" src="GoDaddy%20My%20Account_files/jquery-1.js"></script>
<script language="JavaScript" src="GoDaddy%20My%20Account_files/Utility_Blk1.js"></script>

<script language="JavaScript" src="GoDaddy%20My%20Account_files/Utility_Blk1.js"></script>

 <script type="text/javascript" src="GoDaddy%20My%20Account_files/Utility_Banglalink.js"></script>

<script language="JavaScript" src="GoDaddy%20My%20Account_files/JavaScriptsapplication1.js"></script>
-->


<!--<script type="text/javascript">
var _gaDataLayer = _gaDataLayer || [];
_gaDataLayer.push({ 'shopperId': '' });
_gaDataLayer.push({ 'privateLabelId': '1' });
_gaDataLayer.push({ 'isc': 'GPPT02K500' });
_gaDataLayer.push({ 'server': 'M1PWSSOWEB006' });
var _gaq = _gaq || [];
_gaq.push(['_setDomainName', 'godaddy.com']);
</script>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-SXRF" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!--<script>(function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f); })(window, document, 'script', '_gaDataLayer', 'GTM-SXRF');</script>-->
<!-- End Google Tag Manager -->
<style type="text/css">
.masterdiv{margin:0 auto;clear:both;}
.masterwidth{ width: 1000px;}
</style>
<link href="GoDaddy%20My%20Account_files/gd_cds_2014v1_css_20140310.css" rel="stylesheet">
<link rel="shortcut icon" href="https://img1.wsimg.com/assets/godaddy.ico">

<style type="text/css">
.all
{
background-color:#CCC;	
overflow:auto;
}
.picture {
	float:left;
	border:outset;
	
}
.price {
	float:right;
	font-family:Nyala;
	font-size:18px;
	font-weight:bold;
	
}
.EntryPerson {
	float:right;
	font-size:12px;
	font-weight:bold;
	color:#09F;
	
}
.Location {
	float:right;
	font-size:14px;
	font-weight:bold;
	text-decoration:blink;
	color:#09F;
	
}
.Code {
	font-size:14px;
	font-family:Nyala;
	font-weight:bold;
	color:#000;
	
}
.title {
	float:left;
	font-size:14px;
	font-family:Harrington;
	color:#930;
	font-weight:bolder;
	border-bottom:solid;
	border-bottom-style:ridge;
	
}
.Group {
	font-size:12px;
	font-family:"Bookman Old Style", "Bradley Hand ITC";
	color:#000;
	
}
.SubGroup {
	font-size:12px;
	font-family:"Bookman Old Style", "Bradley Hand ITC";
	color:#000;
	
}
.Expire {
	font-size:12px;
	font-family:"Bookman Old Style", "Bradley Hand ITC";
	color:#000;
	
}


.copyri8 {
	background-color: #C96;
}
.Rand {
	font-family: "Bookman Old Style", "Bradley Hand ITC";
	font-size: 18px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	font-style: oblique;
	font-weight: 100;
	color: #CFF;
}
.right {
	background-color: #FFF;
}
</style>
<link rel="stylesheet" href="../blocker/general.css" type="text/css" media="screen" />
<script src="../blocker/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="../blocker/popup.js" type="text/javascript"></script>
<script src="../Scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script language="javascript">
function showImg(a)
{
	loadPopup('#popupImgShow'); 
	centerPopup('#popupImgShow');
$('#showimg').html("<img  Height='440px' src='private/titles/"+a+"' Width='300px' />");
}
</script>
<script type="text/javascript">
$(document).ready(function() {
	
	var watermark = 'UserName';
	
	//init, set watermark text and class
	$('#tuser').val(watermark).addClass('watermark');
	
	//if blur and no value inside, set watermark text and class again.
 	$('#tuser').blur(function(){
  		if ($(this).val().length == 0){
    		$(this).val(watermark).addClass('watermark');
		}
 	});

	//if focus and text is watermrk, set it to empty and remove the watermark class
	$('#tuser').focus(function(){
  		if ($(this).val() == watermark){
    		$(this).val('').removeClass('watermark');
		}
 	});
	
	
	$('#b1').click(function(){
		var u=$("#tuser").val();
		var p=$("#tpass").val();
		
		
		$.ajax({
      url: "private/DoubleField_Verification.php",
      type: "POST",
	  data: { user : u, pass : p },
      success: function(data){
		  //alert(data);
        if(data=="Exist")
		{
			//$("#Loginerror").text("match");
			window.location="private/main.php";
		}
		 else
		 {
				$("#Loginerror").text(data); 
		 }
      },
      error:function(){
          $("#Loginerror").text("failure");		  
      }   
    }); 
		
		
	});
	
	
	$('#notice').click(function(){
		
		
		$.ajax({
      url: "notice_show.php",
      type: "POST",
	  data: {  },
      success: function(data){
		$("#content").html(data);
        
      },
      error:function(){
          $("#content").text("failure");
      }   
    }); 	
	});
});

</script>
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>


<link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
</head>



<body style="font-family:Vrinda" onload="<?php
if(isset($_GET['signout'])=="true")
{
echo "loadPopup('#popupLogin'); centerPopup('#popupLogin')";
}
?>">







<table width="1000px" border="0" align="center">
  <tr>
    <td width="150px" height="150px" align="center"><img src="../E-Commerce Link/e-commerce - Geeoogle অনুসন্ধান_files/images_067.jpg" width='146px' height='150px'></td>
    <td colspan="2" width="850px" height="150px" align="right" valign="top" background="../E-Commerce Link/logo and banner for E-Commerce web site - Google অনুসন্ধান_files/images_093.jpg"><div id="OpenButton" class="OpenButton"> 
      <a tabindex="-1" id="OpenButton" class="OpenButton" href="javascript:__doPostBack('ctl00$OpenButton','')">Customer Login/Register</a></div>
    </td>
  </tr>
  <tr>
    <td height="15px" colspan="3" align="left" valign="top" style="background-color: #09F;"><center><ul id="MenuBar3" class="MenuBarHorizontal">
       <li><a class="MenuBarItemSubmenu" href="UserMain.php">Customer Home</a>
       <li><a class="MenuBarItemSubmenu" href="#">Sell Product</a>
       <li><a class="MenuBarItemSubmenu" href="#">View Product</a>
       <li><a class="MenuBarItemSubmenu" href="#">Add Advertize</a>
       <li><a class="MenuBarItemSubmenu" href="#">Customer Profile</a>
      <li><a class="MenuBarItemSubmenu" href="#">Customer Picture</a></li>
    </ul></center></td>
  </tr>
  <tr>
    <td width="150px" height="600px" align="center" valign="top" background="../E-Commerce Link/lightgreen_2.jpg"><div id="left_show">
      </div></td>
    <td width="700px" height="600px" valign="top"><div id="middle_show"><form id="CustomerProfile" class="CustomerProfile" method="post" action="">
    <table class="dropShadowPanel">
        <tbody><tr>
            <td width="168" class="style10">
                Full Name:</td>
            <td width="520" class="style7">
                <input name="FullName" value=""  id="FullName"  style="width:150px;" type="text">
            </td>
        </tr>
        <tr>
            <td class="style10">
                Gender:</td>
            <td class="style7">
                <select name="Gender"  id="Gender" style="width:155px;">
	<option selected="selected" value="select">Select </option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	<option value="Common">Common</option>

</select>              
            </td>
         
        </tr>
        <tr>
            <td class="style10">
                Address:</td>
            <td class="style7">
                <textarea name="Address" rows="2" cols="20" id="Address" style="width:150px;"></textarea>
            </td>
        </tr>
        <tr>
            <td class="style10">
                Mobile:</td>
            <td class="style7">
                <input name="Mobile" value="" id="Mobile" style="width:150px;" type="text">
                <span id="MainContent_RequiredFieldValidator1" title="You Must give your Active mobile no." style="visibility:hidden;">*</span>
                
            </td>
        </tr>
        <tr>
            <td class="style10">
                Alternate Mobile:</td>
            <td class="style7">
                <input name="AlternateMobile" value="" id="AlternateMobile" style="width:150px;" type="text">
            </td>
        </tr>
        <tr>
            <td class="style8">
                E-Mail:</td>
            <td class="style7">
                <input name="Email" value="" id="Email" style="width:150px;" type="text">
                    
            </td>
        </tr>
        <tr>
            <td class="style10">
                Phone:</td>
            <td class="style7">
                <input name="Phone" value="" id="Phone" style="width:150px;" type="text">
            </td>
        </tr>
        <tr>
            <td class="style10">
                Company Name:</td>
            <td class="style7">
                <input name="CompanyName" value="" id="CompanyName" style="width:150px;" type="text">
            </td>
        </tr>
        <tr>
            <td class="style10">
                Designation:</td>
            <td class="style7">
                <input name="Designation" value="" id="Designation" style="width:150px;" type="text">
            </td>
        </tr>
        <tr>
            <td class="style10">
                Location:</td>
            <td class="style7">
                <input name="Location" value="" id="Location" style="width:150px;" type="text">
                 <span id="MainContent_RequiredFieldValidator3" title="You Must give your Location" style="visibility:hidden;">*</span>
            </td>
        </tr>
        <tr>
            <td class="style10">
                City:</td>
            <td class="style7">
                <input name="City" value="" id="City" style="width:150px;" type="text">
                 <span id="MainContent_RequiredFieldValidator2" title="You Must give your City Name" style="visibility:hidden;">*</span>
            </td>
        </tr>
        <tr>
            <td class="style10">
                District:</td>
            <td class="style7">
                <input name="District" value="" id="District" onkeyup="showLocation()" style="width:150px;" type="text">
                 <span id="MainContent_RequiredFieldValidator4" title="You Must give your District Name" style="visibility:hidden;">*</span>
            </td>
        </tr>
        <tr>
            <td>&nbsp;
                </td>
            <td align="left">
                
                <div id="div1"></div>
                </td>
        </tr>
        <tr>
            <td>
                <input name="s1" value="Save" id="s1" type="submit">
            </td>
            <td>&nbsp;
                </td>
        </tr>
    </tbody></table><?php


if(isset($_POST['s1'])){
//$mysqli=new mysqli("127.0.0.1","root","","E-Commerce");
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
$mysqli->query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error()); 
$FullName=$_POST['FullName'];

$Gender=$_POST['Gender'];
$Address=$_POST['Address'];
$Mobile=$_POST['Mobile'];
$AlternateMobile=$_POST['AlternateMobile'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$CompanyName=$_POST['CompanyName'];
$Designation=$_POST['Designation'];
$Location=$_POST['Location'];
$City=$_POST['City'];
$District=$_POST['District'];
$query="insert into customerdetails values('','$FullName','$Gender','$Address','$Mobile','$AlternateMobile','$Email','$Phone','$CompanyName','$Designation','$Location','$City','$District')";
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

?>

    </form>
    </div>
     
    </td>
    <td width="150px" height="600px" valign="top" align="center" class="right" background="../E-Commerce Link/lightgreen_2.jpg"><div id="right_show"></div></td>
  </tr>
  <tr>
    <td colspan="3" width="1000px" height="15px" align="center" class="copyri8"><div class="copyri8" id="footer_show"><center>
      Copyright@sharif 2014 wpsi-ditc
    </center></div></td>
  </tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>

<div id="backgroundPopup"></div>
<div id="popupLogin">
		<a id="popupLoginClose">x</a>
		<h1>Login Here!</h1>
		
			
			<center>
      <br />
    <div style="width:100%; border:solid 1px gray;" >
   <form class="cmxform" id="commentForm" method="post" action="">
        <table border="3px" 
            
            style="text-align:right; vertical-align:top;  background-color: #FFFFFF; color:#0000CC; height: 70%; font-family:Constantia;">
                        
            <tr>
                <td align="right" valign="top" class="style11" 
                    style="background-color:white;" colspan="2">
                   <img   Height="100px" 
                    src="../image/login_up.jpg" Width="100%" />
              </td>
                   
              
                   
            </tr>
            
            <tr>
                <td class="style12" style="font-size: medium; width:50%">
                    
                    <table>
                     <tr>
                <td class="style13" style="font-size: large; color:#0000CC; vertical-align:top;">
                    UserName:
                       </td>
                <td class="style14" style="font-size: medium">&nbsp;
                    </td>
                <td class="style15" align="right" style="vertical-align:top;">
<input name="tuser" ID="tuser" type="text"  class="required" minlength="2" />
                </td>
            </tr>
            <tr>
                <td class="style8" style="font-size: large; vertical-align:top; color:#0000CC" 
                    align="left">
                    Password:<br />
                   
                  </td>
                <td class="style9" style="font-size: medium">&nbsp;
                  </td>
                <td class="style10" align="right" style="vertical-align:top;">
                <input name="tpass" ID="tpass" type="password" />
                    <br />
                    <br />
                </td>
            </tr>
            
            <tr>
                <td class="style8">
                    
                </td>
                <td class="style9">
                  </td>
                <td class="style10">
                   <input  name="button" type="button" id="b1" style="width:80px" value="Login" />
                </td>
            </tr>
            <tr>
                <td class="style8">
                  </td>
                <td class="style7" colspan="2" align="left">
                    <div style="color:red" id="Loginerror"></div>
                    <br />
                    Forget Password? Click <a style="color:Red;" href="#">Here</a>.</td>
            </tr>
           
                    
                    </table>
                    
                    
                    
              </td>
                    <td>
                
                       <img ID="Image40" Height="80%" 
                           src="../image/login icon 1.jpg" Width="153px" />
                         
                </td>
            </tr>
        </table>
    </form>
    </div>
  </center> 
		
</div>  
  <div id="middle_show">

<div id="Carousel" style="position:relative; text-align:center">
</div>

<div id="popupImgShow">
		<a id="popupLoginClose1">x</a>
		
		
			
			<center>
     <h1>Larger Show</h1>
     <div id="showimg">
      
              </div>
      </center>
</div>
<script type="text/javascript">
var MenuBar3 = new Spry.Widget.MenuBar("MenuBar3", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>