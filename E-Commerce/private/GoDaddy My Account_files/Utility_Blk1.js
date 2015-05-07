// JavaScript Document


function intonly(myfield, e, dec)
{
	var key;
	var keychar;
	 
	if (window.event)
	   key = window.event.keyCode;
	else if (e)
	   key = e.which;
	else
	   return true;
	keychar = String.fromCharCode(key);
	 
	// control keys
	if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) )
	   return true;
	 
	// numbers
	else if ((("0123456789-").indexOf(keychar) > -1))
	   return true;
	 
	 
	else
	   return false;
}





function changeEstericColor(fieldId)
{
	if(document.getElementById(fieldId).value != "")
	{
		document.getElementById(fieldId + "Esteric").style.color = "#009900";
	}
	
	else
	{
		document.getElementById(fieldId + "Esteric").style.color = "#FF0000";
	}
}

function changeEstericColorForSelect(fieldId,selectValue)
{
	if(document.getElementById(fieldId).value != selectValue)
	{
		document.getElementById(fieldId + "Esteric").style.color = "#009900";
	}
	
	else
	{
		document.getElementById(fieldId + "Esteric").style.color = "#FF0000";
	}
}


function ChangeEstaricColor(Obj, fieldId)
{
	//alert(fieldId);
	if(Obj == "BIRTH1" ||  Obj == "BIRTH2" ||  Obj == "BIRTH3")
	{
		//alert("If");
	//	if(document.getElementById(fieldId + "Day").value != "S" && document.getElementById(fieldId + "Month").value != "S" && document.getElementById(fieldId + "Year").value != "S")
				if(document.getElementById("BIRTH1").value != "day" || document.getElementById("BIRTH2").value != "mon" ||  document.getElementById("BIRTH3").value != "year")
		{
			
			document.getElementById(fieldId).style.color = "#009900";
		}
		
		else
		{
			document.getElementById(fieldId).style.color = "#FF0000";
		}
	}
	else
	{
		//alert("Else");
		if(document.getElementById(Obj).value != "S")
		{
			document.getElementById(fieldId).style.color = "#009900";
		}
		
		else
		{
			document.getElementById(fieldId).style.color = "#FF0000";
		}
	}
}

function ChangeEstaricColorOfCheck(fieldId)
{
	if(document.getElementById(fieldId).checked == true)
	{
		document.getElementById(fieldId + "Esteric").style.color = "#009900";
	}
	
	else
	{
		document.getElementById(fieldId + "Esteric").style.color = "#FF0000";
	}
}




function Count_Letter(textareanm , maxChar , spanName , MessageCaption , shouldShowSpan )
{  
	span_area = document.getElementById(spanName) ;
	txtara = document.getElementById(textareanm)   ;
	ev_v =  txtara.value ;
	tfVal = parseInt(ev_v.length) ; 
	maxChar = parseInt(maxChar) ; 


	if(tfVal != 0)
	{
		window.status = tfVal ; 
		shouldShowSpan == 1 ? span_area.innerHTML = "You wrote <b>"+tfVal+"</b> character(s)" : "" ;
  
 
	 	if(tfVal >= ( maxChar + 1 ) ) 
	 	{
			alert("Please stop writing on "+MessageCaption +", you are crossing the "+maxChar+" letter limit !") ;
			txtara.focus() ;
	 	}// if(tfVal >= ( maxChar + 1 ) ) 
	 	if(tfVal > maxChar )
	 	{
		 nb =  txtara.value.substr(0, maxChar ) ;
		 txtara.value =  nb ;
		 shouldShowSpan == 1 ? span_area.innerHTML ="You wrote <b>"+nb.length+"</b> character(s)" : "" ;
	    }//if(tfVal > maxChar )
 
	}//if(tfVal != 0)
	else
	{
		 window.status = "" ;
		 shouldShowSpan == 1 ? span_area.innerHTML = "" : "" ;
 
     }//else of if(tfVal != 0)
}