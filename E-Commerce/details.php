<?php
include("library/library.php");
$a=new library("e-commerce");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$icode=$_REQUEST['itemcode'];
//echo $icode;
$mysqli=$a->db;
$mysqli->query("SET CHARACTER SET utf8");
 $mysqli->query("SET SESSION collation_connection ='utf8_unicode_ci'");
$query="select Asl,ItemCode,ItemName,GroupName,SubGroup,ItemsDetails,UnitSalePrice,ExpireDate,EntryPerson,Contact,Division,District,Location,Picture from items_entry where itemcode='$icode'";
$result1=$mysqli->query($query,MYSQLI_STORE_RESULT);
$sl=0;
while(list($Asl,$ItemCode,$ItemName,$GroupName,$SubGroup,$ItemsDetails,$UnitSalePrice,$ExpireDate,$EntryPerson,$Contact,$Division,$District,$Location,$Picture)=$result1->fetch_row())
{
	
	?>
<table width="900px" align="center" >
        <tr>
            <td colspan="3" bgcolor="#99CC00">&nbsp;
                </td>
        </tr>
        <tr bgcolor="#CC66FF"> 
            <td width="660" >
                <a href="http://localhost/E-Commerce/Index.php">Back</a></td>
            <td width="1">
                <asp:Menu ID="Menu1" runat="server"  
                    ShowStartingNode="false">
                </asp:Menu>
            </td>
            <td width="223">
                </td>
        </tr>
        <tr>
            <td  bgcolor="#CCCCFF"><h1>Item Code</h1>
                 <span id=\"ItemCode\"><?php echo $ItemCode; ?></span>
            </td>
            <td bgcolor="#CCCCCC">&nbsp;
                </td>
            <td bgcolor="#FFCCFF"><h1>Price</h1>
                ৳ <span id=\"Price\"><?php echo $UnitSalePrice; ?></span>
            </td>
        </tr>
        <tr>
           
            <td rowspan="5" bgcolor="#CCCCFF"><?php echo "<img src=\"Private/titles/$Picture\" width=\"200px\" height=\"300px\">" ?>
                </td>
            <td rowspan="5" bgcolor="#CCCCCC">
              
        

        
            </td>

            <td  bgcolor="#FFCCFF"><h1>Seller</h1>
                <strong>
    <span id=\"EntryPerson\"><?php echo $EntryPerson; ?></span></strong></td>
        </tr>
        <tr>
            <td  bgcolor="#FFCCFF"><h1>Mobile</h1>
                <span id=\"contact\"><?php echo $Contact; ?></span>
            </td>
        </tr>
        <tr>
            <td  bgcolor="#FFCCFF">&nbsp;
                </td>
        </tr>
        <tr>
            <td  bgcolor="#FFCCFF"><h1>Area</h1>
               <span id=\"location\"><?php echo $Location; ?>|<?php echo $District; ?>|<?php echo $Division; ?></span>
            </td>
        </tr>
        <tr>
           
            <td  bgcolor="#FFCCFF">
                <p>Send Email To<strong> 
                </strong><br />
                Mail&nbsp; : <input type="text" id="mail" size="27" />
                <br />
                Body :
                <textarea rows="3" id="bodymail"></textarea>
                  <br />
                  <input type="radio" ID="RadioButton1" Name="rdb" Text="Mail" />Mail
                  <input type="radio" ID="RadioButton1" Name="rdb" Text="SMS" />SMS
                  <br />
                  <input type="submit" ID="btnsend"  Text="Send" onclick="btnsend_Click" />
                </p></td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#FF9966">
               
            </td>
            <td  bgcolor="#FFCCFF">&nbsp;
                </td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#FF9966">
                 <Label ID="lblItemName1" Text="Item Name"></Label><br />
                <Label ID="lblItemDetails"  Text="Item Details"></Label>
            </td>
            <td  bgcolor="#FFCCFF">
                </td>
        </tr>
        <tr>
            <td colspan="2" bgcolor="#FF9966">
                <img id="map" src="Details/staticmap.png"><strong><Label ID="lblsname" 
                     Text="SellerName"></Label>
                </strong></td>
                <Label ID="lblLocation"  Text="Location"></Label>
            <td  bgcolor="#FFCCFF"><Label ID="lblSellerName"  Text="SellerName"></Label>
                </td>
        </tr>
        <tr bgcolor="#CC66FF">
            <td colspan="2">
                All Shares</td>
            <td>&nbsp;
                </td>
        </tr>
        <tr bgcolor="#99CC00">
            <td><a href="paypal_pro-2009-05-27/index.php">Shop Online</a>
              </td>
            <td>&nbsp;
                </td>
            <td>&nbsp;
                </td>
        </tr>
    </table>
<?php
}
?>
</body>
</html>