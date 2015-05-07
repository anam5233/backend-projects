// JavaScript Document

//var bgcolor = "#F9A51B";
var bgcolor = "#F47820";
var fgcolor = "#FFF";

function  ErrorMessage(LineNumber, errLog, flag , pageName, systemName)
{
	//alert(ip);
	try
	{
	if(ip == "123.49.32.141"  || ip == "serverbdj" )
	{
		alert(errLog.message);
		//ShowMessage_ADOErrors ( errLog, pageName , LineNumber, systemName );
	}
	else 
	{
		ShowMessage_ADOErrors ( errLog, pageName , LineNumber, systemName );
	}
	}
	catch(ex)
	{
		alert("error"+ex.message);
	}
}

function ShowMessage_ADOErrors ( errLog, pageName , LineNumber, systemName )
{	
   	if (window.XMLHttpRequest)
   {// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
   }
 else
   {// code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }

 xmlhttp.open("GET","ErrorMailForJavaScript.asp?strADOErrorNumber="+window.navigator.userAgent+"&strADOErrorMessage="+errLog+"&strFullPath="+pageName+"&strLineNo="+LineNumber+"&strSystemName="+systemName,true);
 xmlhttp.send();
	
}

function addElement() {

  var ni = document.getElementById('myDiv');

  var numi = document.getElementById('theValue');

  var num = (document.getElementById('theValue').value -1)+ 2;

  numi.value = num;

  var newdiv = document.createElement('div');

  var divIdName = 'my'+num+'Div';

  newdiv.setAttribute('id',divIdName);

  newdiv.innerHTML = 'Element Number '+num+' has been added! <a href=\'#\' onclick=\'removeElement('+divIdName+')\'>Remove the div "'+divIdName+'"</a>';

  ni.appendChild(newdiv);

}

function removeElement(divNum) {

  var d = document.getElementById('myDiv');

  var olddiv = document.getElementById(divNum);

  d.removeChild(olddiv);

}




 function CheckEmail(strEmail)
{	
	//alert(objEmail);
	var filter = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
	
	if (filter.test(strEmail))
	{
		return true;
	}
	else 
	{
		//document.getElementById(strID).focus();
		return false;
	}
}


 function EmailTypeInputValidation(Required,strVariable,DbType,DbFieldSize,strMsgVariableName)
 {
	var filter = /^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
    if(Required == "True")
       {  
			if (filter.test(strVariable.value))
			{			
				strVariable.style.backgroundColor = fgcolor;
				return true;
			}
			else 
			{
				//document.getElementById(strID).focus();
	           ShowValidateMsg( "Invalid " + strMsgVariableName + " address .", strVariable);
				return false;
			}
	  }
	  else
	  {
		  if(strVariable.value != "")
		  {
				if (filter.test(strVariable.value))
				{			
					strVariable.style.backgroundColor = fgcolor;
					return true;
				}
				else 
				{
					//document.getElementById(strID).focus();
				   ShowValidateMsg( "Invalid " + strMsgVariableName + " address .", strVariable);
					return false;
				}
		   }
		   else
		   {
				strVariable.style.backgroundColor = fgcolor;
				return true;
		   }
	  }
 }



function  PasswordTypeInputValidation(Required,strVariable,FormInputType,DbType,DbFieldSize,strMsgVariableName,clientTop)
{
	if(Required == "True")
	{
	var strPassword = strVariable;
	var strConfirmpassword = DbType;
       if(strPassword.value == "")
	     {
					 ShowValidateMsg( strMsgVariableName+"  is  empty ",strPassword,clientTop );
					 return false;
		 }
	  if(strConfirmpassword.value  ==  "" )
	    {
					 ShowValidateMsg( strMsgVariableName +"  is  empty ",strConfirmpassword,clientTop );
					 return false;
		}
	  var strLengthPass =  strPassword.value.length;
	  var strLengthConPass = strConfirmpassword.value.length;
	  
	  var DbFieldSize = parseInt(DbFieldSize);
		if (strLengthPass > DbFieldSize)
		{ 
			  ShowValidateMsg(strMsgVariableName + " can't be greater than " + DbFieldSize.toString()+ " characters " , strPassword,clientTop);
		} 
		else
		{
			strPassword.style.backgroundColor = fgcolor;
		}
		if (strLengthConPass > DbFieldSize)
		{ 
			  ShowValidateMsg( strMsgVariableName + " can't be greater than " + DbFieldSize.toString()+ " characters " , strConfirmpassword,clientTop);
		} 
		else
		{
			strConfirmpassword.style.backgroundColor = fgcolor;
		}

	    if(strPassword.value !=strConfirmpassword.value)
		  {
					 ShowValidateMsg( strMsgVariableName+"  are not same ! ",strPassword,clientTop );
					 return false;
		  }
		  
		if(strPassword.value !="" || strConfirmpassword.value !="")
		{
			var arr = new Array("`","~","!","@","#","$","%","^","&","*","(",")","-","+","=","_","[","]","{","}","/","?",".",",","<",">","|","\\","\'",":",";","\""); 
			
			for(i=0;i<arr.length;i++)
			{
				if(strPassword.value.indexOf(arr[i])>-1)
				{
					popup("Your Given Password Contains "+arr[i]+ " Characters. Which is not accepted, Please Choose Password With out this "+arr[i]+" type of Charecters",clientTop );				
					return false;
					break;
				}
				if(strConfirmpassword.value.indexOf(arr[i])>-1)
				{
					popup("Your Given Confirm Password Contains "+arr[i]+ " Characters. Which is not accepted, Please Choose Password With out this "+arr[i]+" type of Charecters",clientTop );				
					return false;
					break;
				}
			}
			 
		}	
	}
   return true;	 
}




function   SelectTypeInputValidation(Required,strVariable,DbType,DbFieldSize,strMsgVariableName,clientTop)
 {
   if(Required == "True")
       {  
/*	   alert(strVariable.value);
*/       if(strVariable.value == DbType)
	     { 
	        ShowValidateMsg(strMsgVariableName + " should be selected.", strVariable,clientTop);
			return false;
		 }
	   else
	    {
			strVariable.style.backgroundColor = fgcolor;
		}
	  }
 }
 
function  CheckValidation(Required,strVariable,FormInputType,DbType,DbFieldSize,strMsgVariableName,clientTop)
{
	 var txt = ""
	 try 
	 {
		 switch(FormInputType)
		 {
			  case  "text" : 
			      txt = TextTypeInputValidation(Required,strVariable,DbType,DbFieldSize,strMsgVariableName,clientTop);
			  break;
			  case "select":
			     txt = SelectTypeInputValidation(Required,strVariable,DbType,DbFieldSize,strMsgVariableName,clientTop);
			   break;
			  case "email":
			     txt = EmailTypeInputValidation(Required,strVariable,DbType,DbFieldSize,strMsgVariableName,clientTop);
			   break;
			  case "pass":
			     txt = PasswordTypeInputValidation(Required,strVariable,FormInputType,DbType,DbFieldSize,strMsgVariableName,clientTop);
			   break;
			  default: 
			  break;
		 }
		 if ( txt == false )
		 {
			  return false;
		 }
		 else
		 {
		 var  correctVariable = "";
		 correctVariable = checkCopyPestFromWord(strVariable);
	//	 return correctVariable;
		 }
	 }
	 catch(ex)
	 {		   
		//  ShowValidateMsg(strMsgVariableName+" is invalid and  has some errors  "+ex.message, strVariable);
		  ErrorMessage("46", ex, "1" , "Application.asp :::  Utitlity_Coats.js  :: function CheckValidation", "COATS");

	      return false; 
	 }
	return true; 	 
}


function TextTypeInputValidation(Required,strVariable,DbType,DbFieldSize,strMsgVariableName,clientTop)
{
	var txt = "";
	 if(Required == "True")
	 {
		 var obj = strVariable.value;
		 if (obj ==  ""  || obj == null)
		 {
			 ShowValidateMsg(strMsgVariableName +"  can't be empty.",strVariable,clientTop);
			 return false;
		 }	
		 else
		 {
		       txt =  RequiredTextTypeDataValidation(Required,strVariable,DbType,DbFieldSize,strMsgVariableName,clientTop);
				 
		 }
	 }
	 else 
	 {   	      
		     txt  =   RequiredTextTypeDataValidation(Required,strVariable,DbType,DbFieldSize,strMsgVariableName,clientTop);
	 }
	 
	 if(txt == false)
	 {
		 return false;
	 }
	 else
	 {
		 return true ; 
	 }

}

function  RequiredTextTypeDataValidation(Required,strVariable,DbType,DbFieldSize,strMsgVariableName,clientTop)
 {
      var strDataType = DbType.toString(); 
			   switch(strDataType)
			     { 
				 case "Text":
					  var strLength =  strVariable.value.length;
                     // alert(strVariable);
					  var DbFieldSize = parseInt(DbFieldSize);
						  if (strLength > DbFieldSize)
						    { 
							  ShowValidateMsg(strMsgVariableName + " can't be greater than " + DbFieldSize.toString()+ " characters " , strVariable);
		                    	 return false;
							} 
						else
						{
							strVariable.style.backgroundColor = fgcolor;
						}
					break;
				  case  "Number":
                        if (isNaN(strVariable.value) == false)
						  {							   
					        ShowValidateMsg(strMsgVariableName + " should be number or numeric " , strVariable);
			                return false;
						  }					 	  
						else
						{
							strVariable.style.backgroundColor = fgcolor;
						}
		      	
				break;
				default : 
				break;
		}
	
}


function  ShowValidateMsgNext(strMsg)
{
    var  strHtml = ""; 	
	strHtml = strHtml + "<div id='dialog-overlay'></div>";
	strHtml = strHtml + "<div id='dialog-box' style='position:absolute;'>";
	strHtml = strHtml + "<div class='dialog-content'>";
	strHtml = strHtml + "<div id='dialog-message'></div>";
	strHtml = strHtml + "<div style='position:absolute;'>";
	strHtml = strHtml + "<a href='#' class='button'>Close</a>";
	strHtml = strHtml + " </div></div></div>";
	document.getElementById('body').innerHTML = document.getElementById('body').innerHTML +  strHtml;

  // popup(strMsg);
}



function  MarksTypeInputValidation(Required,strResult,strCgpaOrMarks,cgPaScale,strMsgVariableName,obj)	
  {

   if ( Required == "True")
    {		
		 if(strResult == "15" ) 
		  {    // first division 
			   if (parseInt(strCgpaOrMarks) > 100  ||   parseInt(strCgpaOrMarks)  < 60 )
				  { 
					 ShowValidateMsg( "Invalid  "+strMsgVariableName,obj );
					 return false;
				  }		   
		  }
		  
	      if(strResult == "14")
				 {   // second division 
					if ( parseInt(strCgpaOrMarks) < 45  ||   parseInt(strCgpaOrMarks)  > 60  )  
					   {  
						ShowValidateMsg( "Invalid  "+strMsgVariableName + " ",obj);
						return false;
					   }
				 }
			}		
		 if(strResult == "13" )
			  {  // third division 
				   if (strCgpaOrMarks < 33  ||  parseInt(strCgpaOrMarks)  > 45 )
				   { 
						 ShowValidateMsg( "Invalid  "+strMsgVariableName + " ",obj);
						 return false;
				   }
			  }
	    if(strResult ==  "12" ) 
			 {  // appeard
				if (isNaN(strCgpaOrMarks)  == true ) 
				{ 
						 ShowValidateMsg( "Invalid  "+strMsgVariableName + " ",obj);
						 return false;
				 }		
			 }
		 if(strResult == "0" ) 
			 {  // grade 
				 if (cgPaScale == "-1" )
				  { 
						 ShowValidateMsg( "please select out of cgpa scale  ",obj);
						 return false;
				 } 	 
				if (parseFloat(strCgpaOrMarks) > parseFloat(cgPaScale) ) 
					 { 
							 ShowValidateMsg( "Invalid  "+strMsgVariableName + " ",obj);
						     return false;
					}
			     if(parseFloat(strCgpaOrMarks) < 2)
				 {
						 ShowValidateMsg( "Invalid  "+strMsgVariableName + " ",obj);
						 return false;
				 }
			}
			return true;
  }
    
 function ShowValidateMsg(strMsg,obj,clientTop)
{
    popup(strMsg,clientTop);
	obj.focus();
	obj.style.backgroundColor = bgcolor;
	return false;
}
function stringToAscii (someString){
    var arry = someString.split("");
    for(var i in arry){
        arry[i] = arry[i].charCodeAt(0);
    }
    return arry;
}
function asciiToString (asciiArray){
    var str = "";
    var len = asciiArray.length;

    for(var i=0; i<len; i++){
		if (asciiArray[i]  < 32  ||  asciiArray[i]  > 126 )
		 {
			  asciiArray[i]  = 126;
		 }
		 if(asciiArray[i] == 35  || asciiArray[i] == 39)
		 {
			  asciiArray[i]  = 126;
		 }
        str += String.fromCharCode(asciiArray[i]);
    }
    return str;
}


function checkCopyPestFromWord(obj)
{
	var  strValue = obj.value;
	if(strValue !="")
	{
	var  strValueInAcsii  = "";
	var  chkValueInAscii  = "";
	var  strCorrectText = "";
	var  ascii = stringToAscii(strValue);
	var  string  = asciiToString(ascii);
	//alert("Your  input:"+strValue);
	//alert("Change in ascii"+ascii);
	//alert("Your in put wiil be "+string); 
	obj.value = string;
//	alert(obj.value );
	return obj.value;
	}
}

