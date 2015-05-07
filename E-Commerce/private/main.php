<?php
include("session_verification.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1 align="center" style="font-family:Verdana, Geneva, sans-serif; color:#336">DASH BOARD</h1>
<div style="text-align:right">
<span style="text-align:right"><a href="../index.php?signout=true">Sign Out</a></span>
</div>
<div id="TabbedPanels1" class="TabbedPanels">
  <ul class="TabbedPanelsTabGroup">
    <li class="TabbedPanelsTab" tabindex="0">Admin</li>
    <li class="TabbedPanelsTab" tabindex="0">Customers</li>
    <li class="TabbedPanelsTab" tabindex="0">Items</li>
    <li class="TabbedPanelsTab" tabindex="0">Purchase</li>
        <li class="TabbedPanelsTab" tabindex="0">Suppliers</li>
         <li class="TabbedPanelsTab" tabindex="0">Ads</li>
  </ul>
  <div class="TabbedPanelsContentGroup">
    <div class="TabbedPanelsContent">
      <div id="TabbedPanels2" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Show</li>
          <li class="TabbedPanelsTab" tabindex="0">Insert</li>
          
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent">
          <iframe src="AdminShow.php?begin=0&end=5" width="950px" height="800px" align="center"></iframe>
          </div>
          <div class="TabbedPanelsContent">
          <iframe src="AdminEntry.php" width="950px" height="800px" align="center"></iframe>
          </div>
        </div>
      </div>
     </div>
    <div class="TabbedPanelsContent">
    <div id="TabbedPanels3" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Show</li>
          <li class="TabbedPanelsTab" tabindex="0">Insert</li>
          
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent">
          <iframe src="CustomersShow.php" width="950px" height="800px" align="center"></iframe>
          </div>
          <div class="TabbedPanelsContent">
          <iframe src="CustomersEntry.php" width="950px" height="800px" align="center"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="TabbedPanelsContent">
    <div id="TabbedPanels4" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Show</li>
          <li class="TabbedPanelsTab" tabindex="0">Insert</li>
          
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent">
          <iframe src="ItemsShow.php" width="950px" height="800px" align="center"></iframe>
          </div>
          <div class="TabbedPanelsContent">
          <iframe src="ItemsEntry.php" width="950px" height="800px" align="center"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="TabbedPanelsContent">
    <div id="TabbedPanels5" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Show</li>
          <li class="TabbedPanelsTab" tabindex="0">Insert</li>
          
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent">
          <iframe src="PurchaseShow.php" width="950px" height="800px" align="center"></iframe>
          </div>
          <div class="TabbedPanelsContent">
          <iframe src="PurchaseEntry.php" width="950px" height="800px" align="center"></iframe>
          </div>
        </div>
      </div>
    </div>
   
    
    <div class="TabbedPanelsContent">
    <div id="TabbedPanels8" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Show</li>
          <li class="TabbedPanelsTab" tabindex="0">Insert</li>
          
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent">
          <iframe src="suppliersShow.php" width="950px" height="800px" align="center"></iframe>
          </div>
          <div class="TabbedPanelsContent">
          <iframe src="suppliersEntry.php" width="950px" height="800px" align="center"></iframe>
          </div>
        </div>
      </div>
    </div>
    
    <div class="TabbedPanelsContent">
    <div id="TabbedPanels9" class="TabbedPanels">
        <ul class="TabbedPanelsTabGroup">
          <li class="TabbedPanelsTab" tabindex="0">Show</li>
          <li class="TabbedPanelsTab" tabindex="0">Insert</li>
          
        </ul>
        <div class="TabbedPanelsContentGroup">
          <div class="TabbedPanelsContent">
          <iframe src="AdsShow.php" width="950px" height="800px" align="center"></iframe>
          </div>
          <div class="TabbedPanelsContent">
          <iframe src="AdsEntry.php" width="950px" height="800px" align="center"></iframe>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    
  </div>
</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
var TabbedPanels2 = new Spry.Widget.TabbedPanels("TabbedPanels2");
var TabbedPanels3 = new Spry.Widget.TabbedPanels("TabbedPanels3");
var TabbedPanels4 = new Spry.Widget.TabbedPanels("TabbedPanels4");
var TabbedPanels5 = new Spry.Widget.TabbedPanels("TabbedPanels5");
var TabbedPanels8 = new Spry.Widget.TabbedPanels("TabbedPanels8");
var TabbedPanels9 = new Spry.Widget.TabbedPanels("TabbedPanels9");
</script>
</body>
</html>