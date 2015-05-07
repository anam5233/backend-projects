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
include("library/library.php");
$a=new library("e-commerce");

?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>


<link rel="stylesheet" href="blocker/general.css" type="text/css" media="screen" />
<script src="blocker/jquery-1.2.6.min.js" type="text/javascript"></script>
<script src="blocker/popup.js" type="text/javascript"></script>
<script src="Scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
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
<script type="text/javascript" language="javascript">
	
	function show_by_location(f,v,suru,sesh)
	{
	$.get(
	"show_items_by_location.php",
	{field: f,value:v,begin:suru,end:sesh},/*argument the function of the file available.php*/
	function(response)
		{
				$("#middle_show").html(response.status);	
				$("#middle_show").slideUp();
				$("#middle_show").slideToggle("slow");
		},
		"json"
		);
		e.preventDefault();
	}
	
	
	function show_by_sub_cat(f,v,suru,sesh)
	{
		//alert(f+":"+v);
	$.get(
	"show_sub_category.php",
	{field: f,value:v,begin:suru,end:sesh},/*argument the function of the file available.php*/
	function(response)
		{
			//alert(response.status);
				$("#left_show2").html(response.status);	
				$("#left_show2").slideUp();
				$("#left_show2").slideToggle("slow");
		},
		"json"
		);
		e.preventDefault();
	}
	
	
	function show_purchase()
	{
		alert("gg");
	$.get(
	"show_purchase.php",
	{},/*argument the function of the file available.php*/
	function(response)
		{
			//alert(response.status);
				$("#middle_show").html(response.status);	
				$("#middle_show").slideUp();
				$("#middle_show").slideToggle("slow");
		},
		"json"
		);
		e.preventDefault();
	}
	
	
	
	function goDetails(a)
	{
		window.location="details.php?itemcode="+a;
	}
	
	
</script>
<!--WaterMark Ends-->

<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
</head>



<body style="font-family:Vrinda" onload="show_by_location('','',0,7)   <?php
if(isset($_GET['signout'])=="true")
{
echo "loadPopup('#popupLogin'); centerPopup('#popupLogin')";
}
?>">

<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
$(document).ready(function() {
	//alert($(".sidevar").height());
	var a=$(".sidevar").height();
	$(".contant").css({"height":a});
	$('.slide_pic').click(function(){
  		//alert($(this).attr("id"));
		var inputValue = $(this).attr("id");
//alert(inputValue);

$.ajax({
      url: "getitembycode.php",
      type: "POST",
	  data: { icode : inputValue },
      success: function(data){
         // alert("success");
		// $(".middle").center();
		  $(".middle").fadeOut("slow");
           $(".middle").html(data).attr('align','center').fadeIn("slow");
		   
      },
      error:function(){
         // alert("failure");
          $(".middle").html('there is error while submit');
		  $(".middle").fadeOut("slow").fadeIn("slow");
		 
		  
      }   
    }); 


 	});
	
	
});
</script>

</head>


<table width="1000px" border="0" align="center">
  <tr>
    <td width="150px" height="150px" align="center"><img src="banner/images_067.jpg" width='146px' height='150px'></td>
    <td colspan="2" width="850px" height="150px" align="right" valign="top" background="banner/banner.jpg"><div id="OpenButton" class="OpenButton"> 
      <a tabindex="-1" id="OpenButton" class="OpenButton" href="" onclick="loadPopup('#popupLogin'); centerPopup('#popupLogin')">Customer Login/Register</a></div>
    </td>
  </tr>
  <tr>
    <td height="10px" colspan="3" align="left" valign="top" style="background-color: #09F;"><center><ul id="MenuBar3" class="MenuBarHorizontal">
      <li><a href="index.php">Home</a>
      <li><a class="MenuBarItemSubmenu" href="#">সাব-ক্যটাগরী</a>
         <ul>
    <?php
	
			$img=array();
			$img=$a->showsingledata("items_entry","SubGroup");
			//print_r($img);
			$l=40;
			foreach($img as $a1)
			{
				//$b=$a->searchsingledata("itemsentry","itemcode","$a1","picture");
				echo "<li><a href=\"#\"  class=\"MenuBarItemSubmenu\"   onclick=\"show_by_location('SubGroup','$a1',0,6)\">$a1</a></li>";	
				$l+=40;
			}
	
	?>
    </ul>
      </li>
      
      <li><a class="MenuBarItemSubmenu" href="#">লোকেশন</a>
      
      <ul>
    <?php
	
			$img=array();
			$img=$a->showsingledata("items_entry","Location");
			//print_r($img);
			$l=40;
			foreach($img as $a1)
			{
				//$b=$a->searchsingledata("itemsentry","itemcode","$a1","picture");
				echo "<li><a href=\"#\"  class=\"MenuBarItemSubmenu\"   onclick=\"show_by_location('Location','$a1',0,6)\">$a1</a></li>";	
				$l+=40;
			}
	
	?>
   
    </ul>
     <li><a class="MenuBarItemSubmenu" href="#">জেলা</a>
      
      <ul>
    <?php
	
			$img=array();
			$img=$a->showsingledata("items_entry","District");
			//print_r($img);
			$l=40;
			foreach($img as $a1)
			{
				//$b=$a->searchsingledata("itemsentry","itemcode","$a1","picture");
				echo "<li><a href=\"#\"  class=\"MenuBarItemSubmenu\"   onclick=\"show_by_location('District','$a1',0,6)\">$a1</a></li>";	
				$l+=40;
			}
	
	?>
   
    </ul>
      <li><a class="MenuBarItemSubmenu" href="#">বিভাগ</a>
      
      <ul>
    <?php
	
			$img=array();
			$img=$a->showsingledata("items_entry","Division");
			//print_r($img);
			$l=40;
			foreach($img as $a1)
			{
				//$b=$a->searchsingledata("itemsentry","itemcode","$a1","picture");
				echo "<li><a href=\"#\"  class=\"MenuBarItemSubmenu\"   onclick=\"show_by_location('Division','$a1',0,6)\">$a1</a></li>";	
				$l+=40;
			}
	
	?>
   
    </ul>
      <li><a href="#" style="" onclick="loadPopup('#popupLogin'); centerPopup('#popupLogin')">লগ ইন</a></li>
      <li><a href="#" style="" onclick="show_purchase()">Purchase Report</a></li>
    </ul></center></td>
  </tr>
  <tr>
    <td width="150px" height="500px" align="center" valign="top" background="banner/lightgreen_2.jpg"><div id="left_show">
    
<ul id="MenuBar2" class="MenuBarVertical">
    
   <?php
   $mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select distinct GroupName from items_entry order by GroupName";
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
$sl=1;
while(list($GroupName)=$result->fetch_row())
{
$sl++;
echo "<li><a href=\"#\" onclick=\"show_by_sub_cat('GroupName','$GroupName',0,6)\">$GroupName</a></li>";
}

$result->free();
?>
    
    </ul></div>
    <hr/>
    সাব-ক্যটাগরী
    <hr/>  
    <div id="left_show2">
    
<ul id="MenuBar2" class="MenuBarVertical">
    
   <?php
   $mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select distinct SubGroup from items_entry order by SubGroup";
$result=$mysqli->query($query,MYSQLI_STORE_RESULT);
$sl=1;
while(list($SubGroup)=$result->fetch_row())
{
$sl++;
echo "<li><a href=\"#\" onclick=\"show_by_location('SubGroup','$SubGroup',0,6)\">$SubGroup</a></li>";
}

$result->free();
?>
    
    </ul></div> 
    </td>
    <td width="700px" height="500px" valign="top">
    <table align="center" width="700px" background="-Commerce Link/lightgreen_3.jpg"><tr><td valign="top" align="center">
<!--   <div ib="blank"> <img src="E-Commerce Link/logo and banner for E-Commerce web site - Google অনুসন্ধান_files/images_048_2.jpg" /> </div>
-->
    <div id="middle_show">
</div>
</td></tr></table> 
    </td>
    <td width="150px" height="600px" valign="top" align="center" class="right" background="banner/lightgreen_2.jpg"><div class="Rand">Random Product</div>
<br>
      <div class="randomproduct">
<?php
           	//include("library/library.php");
			$a=new library("e-commerce");
			$img=array();
			$img=$a->showsingledatalast_n_random("Ads","AdsID",10,"AdsID");
			//print_r($img);
			foreach($img as $a1)
			{
				$b=$a->searchsingledata("Ads","AdsID","$a1","Picture");
				echo "<a href=\"#\" class=\"slide_pic\" id=\"$a1\"><img src='Private/titles/".$b. "' width='146px' height='200px'></a><br>";	
			}
			
			?>
</div>
    </td>
  </tr>
  <tr>
    <td colspan="3" width="1000px" height="10px" align="center" class="copyri8"><div id="footer_show"><center>
      Copyright@sharif 2014 wpsi-ditc
    </center></div></td>
  </tr>
</table>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
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
                    src="images/images_081.jpg" Width="100%" />
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
                    New User? To SignUp, Click Here <a style="color:Red;" href="">Here</a>.</td>
            </tr>
           
                    
                    </table>
                    
                    
                    
              </td>
                    <td>
                
                       <img src="images/E-Commerce.png" Width="100%" height="100%" />
                         
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