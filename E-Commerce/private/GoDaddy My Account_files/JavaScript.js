// JavaScript Document


function Add_Location()
{
	var Flag = 0;
	var strHtml = "";
	var lstLocationList  = document.getElementById("lstLocation");
	var lstSelectedLocationList = document.getElementById("lstSelectedLocation");

	/*
	ADD THE FIRST LOCATION IN AN EMPTY LIST:
	*/
	if (lstSelectedLocationList.length == 0)
	{
		if (lstLocationList.selectedIndex != -1)
		{
			strHtml = "<SELECT name='lstSelectedLocation' id='lstSelectedLocation' size='5' class='BDJtextarea' style='width:180px;'>";
			strHtml = strHtml + "<option value='" + lstLocationList.options[lstLocationList.selectedIndex].value + "'>" + lstLocationList.options[lstLocationList.selectedIndex].text  + "</option>";
			strHtml = strHtml + "</SELECT>";
						
			document.getElementById("tdSelectedLocation").innerHTML = "";
			document.getElementById("tdSelectedLocation").innerHTML = strHtml;
		}
	}
	/*
	ADD THE LOCATION IN A NON EMPTY LIST:
	*/	
	if (lstSelectedLocationList.length > 0)
	{
		/*
		SERCHING THE MAXIMUM SELECTION(LOCATION) LIMIT:
		*/		
		if(lstSelectedLocationList.length >= 10)
		{
			alert("You cannot select more then 10 locations name!");
			Flag = 0;
		}
		else
		{
			/*
			SERCHING THE SELECTED LOCATION IS DUPLICATE OR NOT:
			*/			
			for(i = 0; i <= lstSelectedLocationList.length-1; i++)
			{
				if (lstSelectedLocationList.options[i].text == lstLocationList.options[lstLocationList.selectedIndex].text)
				{
					alert("This location name already selected!");
					Flag = 0;
					break;
				}
				else
				{	
					Flag = 1;
				} 			
			}
		}
		/*
		ADD THE SELECTED LOCATION  IN A NON EMPTY LIST
		AFTER IT HAS PASSED FROM DUPLICATION CHECKING:
		*/
		if (Flag == 1)
		{
			for(i = 0; i <= lstSelectedLocationList.length-1; i++)
			{
				strHtml = "<SELECT name='lstSelectedLocation' id='lstSelectedLocation' size='5' class='BDJtextarea' style='width:180px;'>";				
				for (i = 0; i <= lstSelectedLocationList.length-1; i++)
				{
					strHtml = strHtml + "<option value='" + lstSelectedLocationList.options[i].value + "'>" + lstSelectedLocationList.options[i].text  + "</option>";					
				}
				strHtml = strHtml + "<option value='" + lstLocationList.options[lstLocationList.selectedIndex].value + "'>" + lstLocationList.options[lstLocationList.selectedIndex].text  + "</option>";
				strHtml = strHtml + "</SELECT>";
				
				document.getElementById("tdSelectedLocation").innerHTML = "";
				document.getElementById("tdSelectedLocation").innerHTML = strHtml;
			}			
		}
	}
}
/*---------------------------------------------
REMOVE LOCATION FROM THE SELECTED LOCATION LIST:
-----------------------------------------------*/
function Remove_Location()
{
	var strHtml = "";
	var lstSelectedLocationList = document.getElementById("lstSelectedLocation");

	/*
	CHECK THE SELECTED LOCATION LIST IS EMPTY OR NOT:
	*/
	if(lstSelectedLocationList.length > 0)
	{
		/*
		CHECK THE LOCATION IS SELECTED IN THE LIST:
		*/		
		if(lstSelectedLocationList.selectedIndex != -1)
		{
			strHtml = "<SELECT name='lstSelectedLocation' id='lstSelectedLocation' size='5' class='BDJtextarea' style='width:180px;'>";
			for(i = 0; i <= lstSelectedLocationList.length-1; i++)			
			{
				/*
				LOAD ALL THE PREVIOUSLY SELECTED LOCATION IN THE LIST EXCEPT THE SELECTED ONE:
				*/
				if (lstSelectedLocationList.options[lstSelectedLocationList.selectedIndex].value != lstSelectedLocationList.options[i].value)
				{
					strHtml = strHtml + "<option value='" + lstSelectedLocationList.options[i].value + "'>" + lstSelectedLocationList.options[i].text  + "</option>";					
				}
			}
			strHtml = strHtml + "</SELECT>";
			document.getElementById("tdSelectedLocation").innerHTML = "";
			document.getElementById("tdSelectedLocation").innerHTML = strHtml;			
		}
	}
}
/*------------------------------------------------------
UPDATE THE HIDDEN CONTROL WITH THE SELECTED LOCATION ID:
-------------------------------------------------------*/
function UpdateLocationIDList()
{
	var strSelectedLocationID = "";
	var strSelectedLocationName = "";
	
	var lstSelectedLocationList = document.getElementById("lstSelectedLocation");
	
	document.getElementById("txtSelectedLocationList").value = "";
	document.getElementById("txtSelectedLocationName").value = "";
	
	if(lstSelectedLocationList.length > 0)
	{
		for(i = 0; i<= lstSelectedLocationList.length-1; i++)
		{
			if (strSelectedLocationID ==  "")
			{
				strSelectedLocationID = lstSelectedLocationList.options[i].value;
				strSelectedLocationName = lstSelectedLocationList.options[i].text;
			}
			else
			{
				strSelectedLocationID = strSelectedLocationID + "," + lstSelectedLocationList.options[i].value;
				strSelectedLocationName = strSelectedLocationName + "," + lstSelectedLocationList.options[i].text;
			}			
		}		
	}
	document.getElementById("txtSelectedLocationList").value = strSelectedLocationID;	
	document.getElementById("txtSelectedLocationName").value = strSelectedLocationName;
}

/*-------------------------------------------------------------------
CAREER & APPLICATION INFORMATION:Do you have relative in Banglalink?
-------------------------------------------------------------------*/
function SetOptions_Relative()
{
	document.getElementById("txtRelativeName").value = "";
	document.getElementById("txtRelation").value = "";				

	if(document.getElementById("optRelativeYes").checked == true)
	{
		document.getElementById("spnRelative").style.color = "#000000";
		document.getElementById("txtRelativeName").disabled = false;
		document.getElementById("txtRelation").disabled = false;		
	}

	if(document.getElementById("optRelativeNo").checked == true)
	{
		document.getElementById("spnRelative").style.color = "#CCCCCC";
		document.getElementById("txtRelativeName").disabled = true;
		document.getElementById("txtRelation").disabled = true;				
	}	
}
function SetOption_Position()
{

	document.getElementById("txtPosition").value = "";
	//document.getElementById("cboPositionDay").selectedIndex = 0;
	document.getElementById("cboPositionMonth").selectedIndex = 0;
	document.getElementById("cboPositionYear").selectedIndex = 0;		

	if(document.getElementById("optInterviewedYes").checked == true)
	{
		document.getElementById("spnInterviewed").style.color = "#000000";
		document.getElementById("txtPosition").disabled = false;
		//document.getElementById("cboPositionDay").disabled = false;
		document.getElementById("cboPositionMonth").disabled = false;
		document.getElementById("cboPositionYear").disabled = false;
	}	

	if(document.getElementById("optInterviewedNo").checked == true)
	{
		document.getElementById("spnInterviewed").style.color = "#CCCCCC";
		document.getElementById("txtPosition").disabled = true;		
		//document.getElementById("cboPositionDay").disabled = true;
		document.getElementById("cboPositionMonth").disabled = true;
		document.getElementById("cboPositionYear").disabled = true;		
	}
}
function SetOption_JobLocation()
{
	document.getElementById("txtSelectedLocationList").value = "" ;
	document.getElementById("txtSelectedLocationName").value = "" ;
	
	if(document.getElementById("optJobLocationYes").checked == true)
	{
		document.getElementById("spnLocation").style.color = "#000000";
		document.getElementById("spnSelectedLocation").style.color = "#000000";		
		document.getElementById("lstLocation").disabled = false;
		document.getElementById("tdSelectedLocation").innerHTML = "";
		document.getElementById("tdSelectedLocation").innerHTML = "<SELECT name='lstSelectedLocation' id='lstSelectedLocation' size='5' class='BDJtextarea' style='width:180px;'></SELECT>";
		document.getElementById("lstSelectedLocation").disabled = false;		
		document.getElementById("cmdAddLocation").disabled = false;
		document.getElementById("cmdRemoveLocation").disabled = false;		
	}

	if(document.getElementById("optJobLocationNo").checked == true)
	{
		document.getElementById("spnLocation").style.color = "#CCCCCC";
		document.getElementById("spnSelectedLocation").style.color = "#CCCCCC";				
		document.getElementById("lstLocation").disabled = true;
		document.getElementById("tdSelectedLocation").innerHTML = "";
		document.getElementById("tdSelectedLocation").innerHTML = "<SELECT name='lstSelectedLocation' id='lstSelectedLocation' size='5' class='BDJtextarea' style='width:180px;'></SELECT>";		
		document.getElementById("lstSelectedLocation").disabled = true;
		document.getElementById("cmdAddLocation").disabled = true;
		document.getElementById("cmdRemoveLocation").disabled = true;				
	}	
}

function DeselectComputerSkills()
{
	if (document.getElementById("chkComputerSkill1").checked == true)
	{
		for(i=2; i <=9; i++)
		{
			document.getElementById("chkComputerSkill" + i ).checked = false;
			document.getElementById("chkComputerSkill" + i ).disabled = true;
		}
		
		document.getElementById("txtComputerSkill").value = "";
		document.getElementById("txtComputerSkill").disabled = true;
	}
	else
	{
		for(i=2; i <=9; i++)
		{
			document.getElementById("chkComputerSkill" + i ).disabled = false;
		}
		
	}
}
function AdvanceComputerSkill()
{
	if (document.getElementById("chkComputerSkill9").checked == true)
	{
		document.getElementById("txtComputerSkill").value = "";
		document.getElementById("txtComputerSkill").disabled = false;	
	}
	else
	{
		document.getElementById("txtComputerSkill").value = "";
		document.getElementById("txtComputerSkill").disabled = true;
	}
}