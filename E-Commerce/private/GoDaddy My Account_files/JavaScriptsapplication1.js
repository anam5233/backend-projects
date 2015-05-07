
/*******************************  FOR TRAINING FIELD *******************/
/***********************************************************************/
function createForm_tra(myform) {
data_tra = "";    
tab_outer="";
inter = "'";
var i_tra=1;
i_tra=parseInt(myform.hide_tra.value);

if(i_tra < 11) {

list_mon = "";
list_mon +="<option value='mon' selected>mon</option>"
list_mon +="<option value='01'>Jan</option>"
list_mon +="<option value='02'>Feb</option>"
list_mon +="<option value='03'>Mar</option>"
list_mon +="<option value='04'>Apr</option>"
list_mon +="<option value='05'>May</option>"
list_mon +="<option value='06'>Jun</option>"
list_mon +="<option value='07'>Jul</option>"
list_mon +="<option value='08'>Aug</option>"
list_mon +="<option value='09'>Sep</option>"
list_mon +="<option value='10'>Oct</option>"
list_mon +="<option value='11'>Nov</option>"
list_mon +="<option value='12'>Dec</option>"

list_yea = "";
list_yea +="<option value='year' selected>year</option>"
list_yea +="<option value='04'>04</option>"
list_yea +="<option value='03'>03</option>"
list_yea +="<option value='02'>02</option>"
list_yea +="<option value='01'>01</option>"
list_yea +="<option value='00'>00</option>"
list_yea +="<option value='99'>99</option>"
list_yea +="<option value='98'>98</option>"
list_yea +="<option value='97'>97</option>"
list_yea +="<option value='96'>96</option>"
list_yea +="<option value='95'>95</option>"
list_yea +="<option value='94'>94</option>"
list_yea +="<option value='93'>93</option>"
list_yea +="<option value='92'>92</option>"
list_yea +="<option value='91'>91</option>"
list_yea +="<option value='90'>90</option>"
list_yea +="<option value='89'>89</option>"
list_yea +="<option value='88'>88</option>"
list_yea +="<option value='87'>87</option>"
list_yea +="<option value='86'>86</option>"
list_yea +="<option value='85'>85</option>"

//i_inner=i_tra;


function draw_inner_tab(temp_var){

i_inner=temp_var;

inner_tab="<table width='95%' border=0 align=center>";
inner_tab+="<tr>";
inner_tab+="<td align=center><b><font face='Arial' size='1'>day</font></b></td>";
inner_tab+="<td align=center><b><font face='Arial' size='1'>mon</font></b></td>";
inner_tab+="<td align=center><b><font face='Arial' size='1'>year</font></b></td>"; 
inner_tab+="</tr>";
inner_tab+="<tr>";
inner_tab+="<td><input size='4' name='TF"+((i_inner*10)+1)+"'></td>";
inner_tab+="<td>";
inner_tab +="<select name='TF"+((i_inner*10)+2)+"'>";
inner_tab +=list_mon;
inner_tab +="</select>";
inner_tab+="</td>";
inner_tab+="<td>";
inner_tab +="<select name='TF"+((i_inner*10)+3)+"'>";
inner_tab +=list_yea;
inner_tab +="</select>";
inner_tab+="</td>";
inner_tab+="</tr>";
inner_tab+="<tr>";
inner_tab+="<td><input size='4' name='TT"+((i_inner*10)+1)+"'></td>";
inner_tab+="<td>";
inner_tab +="<select name='TT"+((i_inner*10)+2)+"'>";
inner_tab +=list_mon;
inner_tab +="</select>";
inner_tab+="</td>";
inner_tab+="<td>";
inner_tab +="<select name='TT"+((i_inner*10)+3)+"'>";
inner_tab +=list_yea;
inner_tab +="</select>";
inner_tab+="</td>";
inner_tab+="</tr>";
inner_tab+="</table>";

return inner_tab;
}

data_tra="<table width='100%' bgcolor='#FAF8EF' cellspacing='0' cellpadding='4' border=0 align=center>"
data_tra +="<tr>" 
data_tra +="<td width='20%' align=center>\&nbsp\;</td>" 
data_tra +="<td width='20%' align=center><b><font color='#006666' size='1' face='Verdana'>Training "+(i_tra+1)+"</font></b></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
data_tra +="<td width='20%' align=center><b><font color='#006666' size='1' face='Verdana'>Training "+(i_tra+2)+"</font></b></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
data_tra +="<td width='20%' align=center><b><font color='#006666' size='1' face='Verdana'>Training "+(i_tra+3)+"</font></b></td>" 
data_tra +="</tr>" 

//************************  DUMMY TABLE CREATE ***********

dummy_tab ="<table width='1%' cellspacing='0' cellpadding='0' bgcolor='red' border=0>"
dummy_tab +="<tr>"
dummy_tab +="<td>" 
dummy_tab +="<img src='dot' width='1' height='1'>" 
dummy_tab +="</td>" 
dummy_tab +="</tr>"
dummy_tab +="</table>"


data_tra +="<tr>" 
data_tra +="<td bgcolor='#CC3300' width='25%' align=left><b><font color='#FFFFFF' size='2' face='Verdana'>Training Title</font></b></td>" 
data_tra +="<td bgcolor='#E6E1DF' width='20%' align=center><input name='TRAINING"+(i_tra+1)+"' size='20'></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
//data_tra +="<td width='5%' rowspan='5'>"+dummy_tab+"</td>" 
data_tra +="<td bgcolor='#E9E9E9' width='20%' align=center><input name='TRAINING"+(i_tra+2)+"' size='20'></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
//data_tra +="<td width='5%' rowspan='5'>"+dummy_tab+"</td>" 
data_tra +="<td bgcolor='#E6E1DF' width='20%' align=center><input name='TRAINING"+(i_tra+3)+"' size='20'></td>" 
data_tra +="</tr>" 

data_tra +="<tr>" 
//data_tra +="<td bgcolor='#006666' width='15%' align=left><b><font color='#FFFFFF' size='2' face='Verdana'>Training Period</font></b></td>" 
data_tra +="<td bgcolor='#CC3300' width='10%' align=left><b><font color='#FFFFFF' size='2' face='Verdana'><br>From <br><br>To</font></b></td>" 

tab_id=i_tra+1;

data_tra +="<td bgcolor='#E6E1DF' width='20%' align=center>"+draw_inner_tab(tab_id)+"</td>"
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
++tab_id;
data_tra +="<td bgcolor='#E9E9E9' width='20%' align=center>"+draw_inner_tab(tab_id)+"</td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
++tab_id;
data_tra +="<td bgcolor='#E6E1DF' width='20%' align=center>"+draw_inner_tab(tab_id)+"</td>" 
data_tra +="</tr>" 


data_tra +="<tr>" 
data_tra +="<td bgcolor='#CC3300' width='20%' align=left><b><font color='#FFFFFF' size='2' face='Verdana'>Name of Institute</font></b></td>" 
data_tra +="<td width='20%' bgcolor='#E6E1DF' align=center><input name='TINSTITUTE"+(i_tra+1)+"' size='20'></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
data_tra +="<td bgcolor='#E9E9E9' width='20%' align=center><input name='TINSTITUTE"+(i_tra+2)+"' size='20'></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
data_tra +="<td bgcolor='#E6E1DF' width='20%' align=center><input name='TINSTITUTE"+(i_tra+3)+"' size='20'></td>" 
data_tra +="</tr>" 

data_tra +="<tr>" 
data_tra +="<td bgcolor='#CC3300' width='20%' align=left><b><font color='#FFFFFF' size='2' face='Verdana'>City</font></b></td>" 
data_tra +="<td width='20%' bgcolor='#E6E1DF' align=center><input name='TCITY"+(i_tra+1)+"' size='20'></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
data_tra +="<td bgcolor='#E9E9E9' width='20%' align=center><input name='TCITY"+(i_tra+2)+"' size='20'></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
data_tra +="<td bgcolor='#E6E1DF' width='20%' align=center><input name='TCITY"+(i_tra+3)+"' size='20'></td>" 
data_tra +="</tr>" 


data_tra +="<tr>" 
data_tra +="<td bgcolor='#CC3300' width='20%' align=left><b><font color='#FFFFFF' size='2' face='Verdana'>Country</font></b></td>" 
data_tra +="<td bgcolor='#E6E1DF' width='20%' align=center><input name='TCOUNTRY"+(i_tra+1)+"' size='20'></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
data_tra +="<td bgcolor='#E9E9E9' width='20%' align=center><input name='TCOUNTRY"+(i_tra+2)+"' size='20'></td>" 
data_tra +="<td width='5%' align=center>\&nbsp\;</td>" 
data_tra +="<td bgcolor='#E6E1DF' width='20%' align=center><input name='TCOUNTRY"+(i_tra+3)+"' size='20'></td>" 
data_tra +="</tr>" 

data_tra +="</table>"


tab_outer +="<br><table width='95%' border='0' cellspacing='0' cellpadding='1' align='center' bgcolor='#336699'>"
tab_outer +="<tr>" 
tab_outer +="<td>"

tab_outer +=data_tra

tab_outer +="</td>"
tab_outer +="</tr>" 
tab_outer +="</table>"

data_tra = tab_outer

}

if (document.layers) {
document.layers.cust_tra1.document.write(data_tra);
document.layers.cust_tra1.document.close();
i_tra=i_tra+3;
myform.hide_tra.value = i_tra;
}
else {
if (document.all) {
switch (i_tra){
	case 1:cust_tra1.innerHTML = data_tra;
	break;
	case 2:cust_tra2.innerHTML = data_tra;
	break;
	case 3:cust_tra3.innerHTML = data_tra;
	break;
	case 4:cust_tra4.innerHTML = data_tra;
	break;
	case 5:cust_tra5.innerHTML = data_tra;
	break;
	case 6:cust_tra6.innerHTML = data_tra;
	break;
	case 7:cust_tra7.innerHTML = data_tra;
	break;
	case 8:cust_tra8.innerHTML = data_tra;
	break;
	case 9:cust_tra9.innerHTML = data_tra;
	break;
	case 10:cust_tra10.innerHTML = data_tra;
	break;
	default:alert('Sorry !');
	i_tra=i_tra-3;
	myform.hide_tra.value = i_tra;
	break;

	}

	i_tra=i_tra+3;
myform.hide_tra.value = i_tra;
 		}//if
	}//else

}//function

/**********************  FOR EXPERIENCE FIELD  *********************/
/*******************************************************************/
function createForm_exp(myform) {
data_exp = "";    
inter = "'";
var i_exp=1;
i_exp=parseInt(myform.hide_exp.value);
//alert(i_exp);
if(i_exp < 11) {
//alert(i_exp);
data_exp="<table bgcolor='#F2F3EB' width='97%' cellspacing='0' cellpadding='3'>"
data_exp +="<tr bgcolor='#FFFFFF'><td colspan='4' height='5'><b><font size='2' face='Verdana' color='#006868'>Work Experience "+(i_exp+1)+"<br></font></b>"
data_exp +="</td></tr>" 

data_exp +="<tr bgcolor='#F2F3EB'>"
data_exp +="<td colspan='4'><font size='1' face='Verdana' color='#006666'><b>Select the Area of Experience from the list "
data_exp +="for this particular Work Experinece"
data_exp +="<select name='EXPAR"+(i_exp+1)+"'>" 
data_exp +="<option value='no' selected>Select One</option>"
data_exp +="<option value='IT & Billing'>IT & Billing</option>"
data_exp +="<option value='Customer Operations'>Customer Operations</option>"
//data_exp +="<option value='IT'>IT</option>"
data_exp +="<option value='Human Resources & Administration'>Human Resources & Administration</option>"
data_exp +="<option value='Accounting & Finance'>Accounting & Finance</option>"
data_exp +="<option value='Commercial'>Commercial</option>"
data_exp +="<option value='Technology'>Technology</option>"
data_exp +="<option value='Other'>Other</option>"
data_exp +="</select>" 

data_exp +="</b></font></td>"
data_exp +="</tr>"

data_exp +="<tr bgcolor='#F2F3EB'>"
data_exp +="<td width='23%'><font size='1' face='Verdana'><b>Company Name</b></font></td>" 
data_exp +="<td width='29%'><input name='COMPANY"+(i_exp+1)+"' maxlength='200'></td>" 
data_exp +="<td width='18%'><font size='1' face='Verdana'><b>Position held</b></font></td>" 
data_exp +="<td width='30%'><input name='EPOSITION"+(i_exp+1)+"' maxlength='150'></td>" 
data_exp +="</tr>"

data_exp +="<tr bgcolor='#F2F3EB'>"
data_exp +="<td width='23%'><font size='1' face='Verdana'><b>Duties</b></font></td>" 
data_exp +="<td colspan='3' width='23%'><textarea name='DUTY"+(i_exp+1)+"' cols='50'></textarea></td>" 
data_exp +="</tr>"

data_exp +="<tr bgcolor='#F2F3EB'>"
data_exp +="<td width='23%'><font size='1' face='Verdana'><b>Company Location</b></font></td>" 
data_exp +="<td width='29%'><input name='CLOCATION"+(i_exp+1)+"' maxlength='150'></td>" 
data_exp +="<td width='18%'><font size='1' face='Verdana'><b>Business</b></font></td>" 
data_exp +="<td width='30%'><input name='BUSINESS"+(i_exp+1)+"' maxlength='150'></td>" 
data_exp +="</tr>"

data_exp +="<tr bgcolor='#F2F3EB'>"
data_exp +="<td width='23%'><font size='1' face='Verdana'><b>Served from</b></font></td>" 
data_exp +="<td width='29%'><font size='1' face='Verdana'><b>Month</b></font>" 
data_exp +="<select name='EFM"+(i_exp+1)+"'>" 
data_exp +="<option value='mon' selected>mon</option>"
data_exp +="<option value='01'>Jan</option>"
data_exp +="<option value='02'>Feb</option>"
data_exp +="<option value='03'>Mar</option>"
data_exp +="<option value='04'>Apr</option>"
data_exp +="<option value='05'>May</option>"
data_exp +="<option value='06'>Jun</option>"
data_exp +="<option value='07'>Jul</option>"
data_exp +="<option value='08'>Aug</option>"
data_exp +="<option value='09'>Sep</option>"
data_exp +="<option value='10'>Oct</option>"
data_exp +="<option value='11'>Nov</option>"
data_exp +="<option value='12'>Dec</option>"
data_exp +="</select>" 
data_exp +="<font size='1' face='Verdana'><b>Year</b></font>"
data_exp +="<select name='EFY"+(i_exp+1)+"'>" 
data_exp +="<option value='year' selected>year</option>"
data_exp +="<option value='04'>04</option>"
data_exp +="<option value='03'>03</option>"
data_exp +="<option value='02'>02</option>"
data_exp +="<option value='01'>01</option>"
data_exp +="<option value='00'>00</option>"
data_exp +="<option value='99'>99</option>"
data_exp +="<option value='98'>98</option>"
data_exp +="<option value='97'>97</option>"
data_exp +="<option value='96'>96</option>"
data_exp +="<option value='95'>95</option>"
data_exp +="<option value='94'>94</option>"
data_exp +="<option value='93'>93</option>"
data_exp +="<option value='92'>92</option>"
data_exp +="<option value='91'>91</option>"
data_exp +="<option value='90'>90</option>"
data_exp +="<option value='89'>89</option>"
data_exp +="<option value='88'>88</option>"
data_exp +="<option value='87'>87</option>"
data_exp +="<option value='86'>86</option>"
data_exp +="<option value='85'>85</option>"
data_exp +="</select></td>" 
data_exp +="<td width='18%'><font size='1' face='Verdana'><b>Served till</b></font></td>" 
data_exp +="<td width='30%'>" 
data_exp +="<font size='1' face='Verdana'><b>Month</b></font>" 
data_exp +="<select name='ETM"+(i_exp+1)+"'>" 
data_exp +="<option value='mon' selected>mon</option>"
data_exp +="<option value='01'>Jan</option>"
data_exp +="<option value='02'>Feb</option>"
data_exp +="<option value='03'>Mar</option>"
data_exp +="<option value='04'>Apr</option>"
data_exp +="<option value='05'>May</option>"
data_exp +="<option value='06'>Jun</option>"
data_exp +="<option value='07'>Jul</option>"
data_exp +="<option value='08'>Aug</option>"
data_exp +="<option value='09'>Sep</option>"
data_exp +="<option value='10'>Oct</option>"
data_exp +="<option value='11'>Nov</option>"
data_exp +="<option value='12'>Dec</option>"
data_exp +="</select>" 
data_exp +="<font size='1' face='Verdana'><b>Year</b></font>"
data_exp +="<select name='ETY"+(i_exp+1)+"'>" 
data_exp +="<option value='year' selected>year</option>"
data_exp +="<option value='04'>04</option>"
data_exp +="<option value='03'>03</option>"
data_exp +="<option value='02'>02</option>"
data_exp +="<option value='01'>01</option>"
data_exp +="<option value='00'>00</option>"
data_exp +="<option value='99'>99</option>"
data_exp +="<option value='98'>98</option>"
data_exp +="<option value='97'>97</option>"
data_exp +="<option value='96'>96</option>"
data_exp +="<option value='95'>95</option>"
data_exp +="<option value='94'>94</option>"
data_exp +="<option value='93'>93</option>"
data_exp +="<option value='92'>92</option>"
data_exp +="<option value='91'>91</option>"
data_exp +="<option value='90'>90</option>"
data_exp +="<option value='89'>89</option>"
data_exp +="<option value='88'>88</option>"
data_exp +="<option value='87'>87</option>"
data_exp +="<option value='86'>86</option>"
data_exp +="<option value='85'>85</option>"
data_exp +="</select>" 
data_exp +="</td>"
data_exp +="</tr>"

data_exp +="</table><br>"
}

if (document.layers) {
document.layers.cust_exp1.document.write(data_exp);
document.layers.cust_exp1.document.close();
myform.hide_exp.value = ++i_exp;
//alert(myform.hide_exp.value);
}
else {
if (document.all) {
switch (i_exp){
	case 1:cust_exp1.innerHTML = data_exp;
	break;
	case 2:cust_exp2.innerHTML = data_exp;
	break;
	case 3:cust_exp3.innerHTML = data_exp;
	break;
	case 4:cust_exp4.innerHTML = data_exp;
	break;
	case 5:cust_exp5.innerHTML = data_exp;
	break;
	case 6:cust_exp6.innerHTML = data_exp;
	break;
	case 7:cust_exp7.innerHTML = data_exp;
	break;
	case 8:cust_exp8.innerHTML = data_exp;
	break;
	case 9:cust_exp9.innerHTML = data_exp;
	break;
	case 10:cust_exp10.innerHTML = data_exp;
	break;
	default:alert('Sorry !');
	myform.hide_exp.value = --i_exp;
	break;

	}
myform.hide_exp.value = ++i_exp;
 		}//if
	}//else

}//function

/*******************************  FOR EDUCATION FIELD *******************/
/***********************************************************************/
/***********************************************************************/
function createForm(myform) {
data_edu = "";    
inter = "'";
var i_edu=1;
i_edu=parseInt(myform.hide_edu.value);

if(i_edu < 11) {

data_edu="<table align='center' cellspacing='0' cellpadding='2' bgcolor='#FEF4E2' width='90%'>"
data_edu +="<td width='19%'><div align='center'><input name='EDUCATION"+(i_edu+1)+"' size='20'></div></td>" 
data_edu +="<td width='22%'><div align='center'><input name='INSTITUTE"+(i_edu+1)+"' size='20'></div></td>" 
data_edu +="<td width='5%' bgcolor='#E9EBE7' ><div align='center'><input name='FYEAR"+(i_edu+1)+"' size='4'></div></td>" 
data_edu +="<td width='5%' bgcolor='#E9EBE7' ><div align='center'><input name='TYEAR"+(i_edu+1)+"' size='4'></div></td>" 
data_edu +="<td align='center' width='23%'><div align='center'><font face='Verdana' size='2'><input name='GRADE"+(i_edu+1)+"' size='8'></font></div></td>" 
data_edu +="<td width='26%'><input name='SUBJECT"+(i_edu+1)+"''></td>" 
data_edu +="</table>"
}
if (document.layers) {
document.layers.cust_edu1.document.write(data_edu);
document.layers.cust_edu1.document.close();
myform.hide_edu.value = ++i;
}
else {
if (document.all) {
switch (i_edu){
	case 1:cust_edu1.innerHTML = data_edu;
	break;
	case 2:cust_edu2.innerHTML = data_edu;
	break;
	case 3:cust_edu3.innerHTML = data_edu;
	break;
	case 4:cust_edu4.innerHTML = data_edu;
	break;
	case 5:cust_edu5.innerHTML = data_edu;
	break;
	case 6:cust_edu6.innerHTML = data_edu;
	break;
	case 7:cust_edu7.innerHTML = data_edu;
	break;
	case 8:cust_edu8.innerHTML = data_edu;
	break;
	case 9:cust_edu9.innerHTML = data_edu;
	break;
	case 10:cust_edu10.innerHTML = data_edu;
	break;
	default:alert('Sorry !');
	myform.hide_edu.value = --i_edu;
	break;

	}
myform.hide_edu.value = ++i_edu;
 		}//if
	}//else

}//function

/**********************  FOR PROFEDU FIELD  *********************/
/****************************************************************/
function createForm_pedu(myform) {
data_pedu = "";    
inter = "'";
var i_pedu=1;
i_pedu=parseInt(myform.hide_pedu.value);

if(i_pedu < 5) {

data_pedu="<table align='center' bgcolor='#D3D3D3' width='650'>"

data_pedu +="<tr>"
data_pedu +="<td width='23%'><input size='20' name='PEDU"+(i_pedu+1)+"' maxlength='50'></td>" 
data_pedu +="<td width='15%'><input size='15' name='PPLACE"+(i_pedu+1)+"' maxlength='100'></td>" 

data_pedu +="<td width='21%'><select name='PFM"+(i_pedu+1)+"'>" 
data_pedu +="<option value='mon' selected>mon</option>"
data_pedu +="<option value='01'>Jan</option>"
data_pedu +="<option value='02'>Feb</option>"
data_pedu +="<option value='03'>Mar</option>"
data_pedu +="<option value='04'>Apr</option>"
data_pedu +="<option value='05'>May</option>"
data_pedu +="<option value='06'>Jun</option>"
data_pedu +="<option value='07'>Jul</option>"
data_pedu +="<option value='08'>Aug</option>"
data_pedu +="<option value='09'>Sep</option>"
data_pedu +="<option value='10'>Oct</option>"
data_pedu +="<option value='11'>Nov</option>"
data_pedu +="<option value='12'>Dec</option>"
data_pedu +="</select>" 

data_pedu +="<select name='PFY"+(i_pedu+1)+"'>" 
data_pedu +="<option value='year' selected>year</option>"
 //<%For i=CInt(Year(Date))-50 to (CInt(Year(Date))+3)%>
/*var y = new Date();
for (var i = y.getFullYear()-50; i <= y.getFullYear()+3; i++ )
{
	data_pedu +="<option value='"+i+"'>"+i+"</option>"
}*/

/*data_pedu +="<option value='03'>03</option>"
data_pedu +="<option value='02'>02</option>"
data_pedu +="<option value='01'>01</option>"
data_pedu +="<option value='00'>00</option>"
data_pedu +="<option value='99'>99</option>"
data_pedu +="<option value='98'>98</option>"
data_pedu +="<option value='97'>97</option>"
data_pedu +="<option value='96'>96</option>"
data_pedu +="<option value='95'>95</option>"
data_pedu +="<option value='94'>94</option>"
data_pedu +="<option value='93'>93</option>"
data_pedu +="<option value='92'>92</option>"
data_pedu +="<option value='91'>91</option>"
data_pedu +="<option value='90'>90</option>"
data_pedu +="<option value='89'>89</option>"
data_pedu +="<option value='88'>88</option>"
data_pedu +="<option value='87'>87</option>"
data_pedu +="<option value='86'>86</option>"
data_pedu +="<option value='85'>85</option>"*/
data_pedu +="</select></td>" 

data_pedu +="<td width='19%' align='center'><select name='PTM"+(i_pedu+1)+"'>" 
data_pedu +="<option value='mon' selected>mon</option>"
data_pedu +="<option value='01'>Jan</option>"
data_pedu +="<option value='02'>Feb</option>"
data_pedu +="<option value='03'>Mar</option>"
data_pedu +="<option value='04'>Apr</option>"
data_pedu +="<option value='05'>May</option>"
data_pedu +="<option value='06'>Jun</option>"
data_pedu +="<option value='07'>Jul</option>"
data_pedu +="<option value='08'>Aug</option>"
data_pedu +="<option value='09'>Sep</option>"
data_pedu +="<option value='10'>Oct</option>"
data_pedu +="<option value='11'>Nov</option>"
data_pedu +="<option value='12'>Dec</option>"
data_pedu +="</select>" 

data_pedu +="<select name='PTY"+(i_pedu+1)+"'>" 
data_pedu +="<option value='year' selected>year</option>"
data_pedu +="<option value='04'>04</option>"
data_pedu +="<option value='03'>03</option>"
data_pedu +="<option value='02'>02</option>"
data_pedu +="<option value='01'>01</option>"
data_pedu +="<option value='00'>00</option>"
data_pedu +="<option value='99'>99</option>"
data_pedu +="<option value='98'>98</option>"
data_pedu +="<option value='97'>97</option>"
data_pedu +="<option value='96'>96</option>"
data_pedu +="<option value='95'>95</option>"
data_pedu +="<option value='94'>94</option>"
data_pedu +="<option value='93'>93</option>"
data_pedu +="<option value='92'>92</option>"
data_pedu +="<option value='91'>91</option>"
data_pedu +="<option value='90'>90</option>"
data_pedu +="<option value='89'>89</option>"
data_pedu +="<option value='88'>88</option>"
data_pedu +="<option value='87'>87</option>"
data_pedu +="<option value='86'>86</option>"
data_pedu +="<option value='85'>85</option>"
data_pedu +="</select></td>" 

data_pedu +="<td width='19%'><input name='PSUBJECT"+(i_pedu+1)+"' maxlength='250'></td>" 
data_pedu +="</tr>"
data_pedu +="</table>"
}

if (document.layers) {
document.layers.cust_pedu1.document.write(data_pedu);
document.layers.cust_pedu1.document.close();
myform.hide_pedu.value = ++i_pedu;
}
else {
if (document.all) {
switch (i_pedu){
	case 1:cust_pedu1.innerHTML = data_pedu;
	break;
	case 2:cust_pedu2.innerHTML = data_pedu;
	break;
	case 3:cust_pedu3.innerHTML = data_pedu;
	break;
	case 4:cust_pedu4.innerHTML = data_pedu;
	break;
	default:alert('Sorry !');
	myform.hide_pedu.value = --i_pedu;
	break;

	}
myform.hide_pedu.value = ++i_pedu;
 		}//if
	}//else

}//function
/*
function chk_other()
{
	document.form1.PREF_OTH.checked=true
}

function unchk_other()
{//alert("UnCHK_Other");
	if (document.form1.PREF2.value=="")
	{
		document.form1.PREF_OTH.checked=false;
	//	alert("Unchk In");	
	}
}
*/
function countChoices(myform,objbox) {
//alert(parseInt(myform.hide_box.value));
i=parseInt(myform.hide_box.value);

if(objbox.checked){
myform.hide_box.value=++i;
//alert(parseInt(myform.hide_box.value));
	}

if(!objbox.checked){
myform.hide_box.value=--i;
//alert(parseInt(myform.hide_box.value));
	}
/* strt---- job binding 2
if(parseInt(myform.hide_box.value) > 3){
alert("You can\'t select more than \n two jobs to apply !");
objbox.checked = false;
myform.hide_box.value=--i;
	}
    end---- job binding  2*/
	
	/* */ //strt---- job binding 1
if(parseInt(myform.hide_box.value) > 2){
alert("You can\'t select more than \n one job to apply !");
objbox.checked = false;
myform.hide_box.value=--i;
	}
   // end---- job binding  1
}

function validate(form) {
	
	var msg = "";
	
	dv = document.getElementById('E_MAIL').value;

	//CAREER & APPLICATION INFORMATION 


   if ( CheckValidation("True",form.NAME,"text","Text","100"," Full Name ", 1600) == false)
	{
		   return false;		   
	}

   if ( CheckValidation("True",form.FNAME,"text","Text","100","Fathers Name ", 1550) == false)
	{
		   return false;		   
	}
	
	//txtMothersName
   if ( CheckValidation("True",form.txtMothersName,"text","Text","100","Mothers  Name ", 1530) == false)
	{
		   return false;		   
	}
	
	// txtReligion 
	
   if ( CheckValidation("False",form.txtReligion,"text","Text","50","Religion  ", 1530) == false)
	{
		   return false;		   
	}
		
   if ( CheckValidation("True",form.BIRTH1,"select","day","1","Day of your date of birth  ", 1500) == false)
	{
		   return false;		   
	}

   if ( CheckValidation("True",form.BIRTH2,"select","mon","1","Month  of your date of birth  ", 1450) == false)
	{
		   return false;		   
	}


   if ( CheckValidation("True",form.BIRTH3,"select","year","1","Year  of your date of birth  ", 1400) == false)
	{
		   return false;		   
	}

   if ( CheckValidation("True",form.NATION,"text","Text","50","Nationality  ", 1350) == false)
	{
		   return false;		   
	}
	
   if ( CheckValidation("True",form.HOME_PH,"text","Text","50","Home Phone   ", 1400) == false)
	{
		   return false;		   
	}

// MOBILE  
   if ( CheckValidation("False",form.MOBILE,"text","Text","50","Mobile Phone  ", 1400) == false)
	{
		   return false;		   
	}
//OFF_PH 
   if ( CheckValidation("False",form.OFF_PH ,"text","Text","50","Office  Phone  ", 1400) == false)
	{
		   return false;		   
	}
   if ( CheckValidation("True",form.E_MAIL ,"email","Text","50","Email  ", 1400) == false)
	{
		   return false;		   
	}
	
   if ( CheckValidation("True",form.cboHomeDist,"select","-1","1"," Home district  ", 1350) == false)
	{
		   return false;		   
	}


    if ( CheckValidation("True",form.CADD ,"text","Text","255"," Permanent  Address  ", 1350) == false)
	{
		   return false;		   
	}
	
    if ( CheckValidation("True",form.txtAlternateAddress ,"text","Text","255","Alternative Correspondence Address  ", 1300) == false)
	{
		   return false;		   
	}
//OBJ

    if ( CheckValidation("False",form.OBJ ,"text","Text","65500"," Career Plan ", 1300) == false)
	{
		   return false;		   
	}
	
//PSALARY 

     if ( CheckValidation("False",form.PSALARY ,"text","Text","50","Present   Salary   ", 1200) == false)
	{
		   return false;		   
	}
 
    if ( CheckValidation("True",form.ESALARY ,"text","Text","50","Expected Salary   ", 1200) == false)
	{
		   return false;		   
	}
	
	//NOTICE 
	
    if ( CheckValidation("True",form.NOTICE  ,"select","day","50"," Notice for joining before    ", 950) == false)
	{
		   return false;		   
	}
	
  if(document.getElementById("optRelativeYes").checked == true)
  {
	  //txtRelativeName 
		if ( CheckValidation("True",form.txtRelativeName  ,"text","Text","50"," Relative name    ", 950) == false)
		{
			   return false;		   
		}	  
		
		//txtRelation
		if ( CheckValidation("True",form.txtRelation  ,"text","Text","50"," Relation     ", 950) == false)
		{
			   return false;		   
		}		
  }
  
  // optInterviewedYes 
  
  if(document.getElementById("optInterviewedYes").checked == true)
  {
	  //txtPosition 
		if ( CheckValidation("True",form.txtPosition  ,"text","Text","100","Previous job position  ", 950) == false)
		{
			   return false;		   
		}	
		if ( CheckValidation("True",form.cboPositionMonth  ,"select","mon","1","Previous job position month   ", 950) == false)
		{
			   return false;		   
		}	
		if ( CheckValidation("True",form.cboPositionYear  ,"select","year","1","Previous job position year  ", 950) == false)
		{
			   return false;		   
		}			
  }
  
 // ILL 
 
		if ( CheckValidation("False",form.ILL  ,"text","Text","50"," Serious illness    ", 750) == false)
		{
			   return false;		   
		}	 
 

//&& !eval("form.ABILITY"+i)[5].checked
 
 var msg = '';
 try
   {
	if (msg =='')
	{		
		for (var i = 1; i <= 3; i++)
		{
			if (document.getElementById('LANGUAGE'+i+'').value != '' && !eval("form.ABILITY"+i)[0].checked && !eval("form.ABILITY"+i)[1].checked && !eval("form.ABILITY"+i)[2].checked && !eval("form.ABILITY"+i)[3].checked && !eval("form.ABILITY"+i)[4].checked && !eval("form.ABILITY"+i)[5].checked)
			{
				msg= "Please select level of ability."+","+"ABILITY"+i;
				popup(msg,750);
				break;
			}
			else if ((eval("form.ABILITY"+i)[0].checked || eval("form.ABILITY"+i)[1].checked || eval("form.ABILITY"+i)[2].checked || eval("form.ABILITY"+i)[3].checked || eval("form.ABILITY"+i)[4].checked || eval("form.ABILITY"+i)[5].checked) && document.getElementById('LANGUAGE'+i+'').value == '')
			{
				msg= "Please enter language."+","+"LANGUAGE"+i;
				popup(msg,750);
				break;
			}
		} //end for
	}	
   }
   catch(ex)
   {
	  // alert(ex.message);
   }
   
   		if ( CheckValidation("False",document.getElementById('LANGUAGE1') ,"text","Text","50"," Laguage skills 1    ", 750) == false)
		{
			   return false;		   
		}	
		
		if ( CheckValidation("False",document.getElementById('LANGUAGE2')  ,"text","Text","50"," Laguage skills 2    ", 750) == false)
		{
			   return false;		   
		}	
		
			if ( CheckValidation("False",document.getElementById('LANGUAGE3')  ,"text","Text","50","  Laguage skills 3    ", 750) == false)
		{
			   return false;		   
		}		
				
		
   
   
   
	   if ( CheckValidation("True",document.getElementById('PASSWORD'),"pass",document.getElementById('PASSWORD2'),"20","PASSWORD/CONFIRM Password ", 500) == false)
		{
			   return false;		   
		}

	
	if (msg =='')
	{	
		//if (form.radDist[1].checked && document.getElementById("Dist_hid").value == "")
		if (document.getElementById("Dist_hid").value == "")	//By Naznin
	    	msg= "Please Select prefered job location from the list."+","+"Dist_Source";
			popup(msg,750);
	}
		
		
		
  return true;


} // end of validate func()

function countLetter(nm){
//alert(nm);E_CUR = nm;eval(nm);//nm;document.form1.
//alert(E_CUR.value)
//tfVal = parseInt(E_CUR.value.length);tfVal = parseInt(document.form1.nm.value.length);
//alert(nm.Source());
ev_v = eval("document.form1."+nm+".value")
tfVal = parseInt(ev_v.length);//tfVal = parseInt(document.form1.nm.value.length);
if(tfVal != 0){
 window.status = tfVal ; 
 txt_area = eval("document.all."+nm+"_sp1");
 txt_area.innerHTML = "You wrote <b>"+tfVal+"</b> character(s)" ;
 //document.all.sp1.innerHTML = tfVal ;
 //eval("document.all."+nm+"_sp1.innerHTML") = tfVal ;
 
 //window.status = tfVal + 1;
 if(tfVal >= 201)//if(tfVal >= 200)
 {
 	alert("Please stop writing you are crossing the 200 letter limit!")
 }
 if(tfVal > 200)
 {
 nb = eval("document.form1."+nm+".value").substr(0,200);
 txtara = eval("document.form1."+nm) ;
 txtara.value =  nb;
 span_area = eval("document.all."+nm+"_sp1");
 span_area.innerHTML ="You wrote <b>"+nb.length+"</b> character(s)" ;
 //alert(nb)
 
 }
 
}else{
 window.status = "";
 txt_area = eval("document.all."+nm+"_sp1");
 txt_area.innerHTML = "";
  //document.all.sp1.innerHTML = "";
}


}//end countLetter fnc

function unselect_one()
{
document.form1.CSKILL_NA.checked = false
}//fnc unselect_one()
function unselect_others()
{
	document.form1.CSKILL1.checked = false;
	document.form1.CSKILL2.checked = false;
	document.form1.CSKILL3.checked = false;
	document.form1.CSKILL4.checked = false;
	document.form1.CSKILL5.checked = false;
	document.form1.CSKILL6.checked = false;
	document.form1.CSKILL7.checked = false;
	document.form1.DUMMY.checked = false;
	document.form1.CSKILL8.value = "";

}//fnc unselect_others()
function chk_other(val_txt,chkbx_2_unchk)
{
	// document.form1.PREF_OTH.checked=true
	othr_txt = eval("document.form1."+val_txt);
	if (othr_txt.value!="")	//if (document.form1.PREF2.value=="")
	{
	chckbx = eval("document.form1."+chkbx_2_unchk);
	chckbx.checked=true;
	}
	
}//fnc chk_other

function unchk_other(val_txt,chkbx_2_unchk)
{//alert("UnCHK_Other");

 othr_txt = eval("document.form1."+val_txt);
	if (othr_txt.value=="")	//if (document.form1.PREF2.value=="")
	{
	    chckbx = eval("document.form1."+chkbx_2_unchk);
		chckbx.checked=false;
		///document.form1.PREF_OTH.checked=false;
		//alert("Unchk In");	
	}
}//fnc unchk_other
/********************** edu dynamic for others edulevel  *********************/
/****************************************************************/

function createEdu(myobj,place)
{
//alert(myobj.value);

	obj_name = "sp_edu"+place;

	if(myobj.value == "other")
	{
		eval(obj_name).innerHTML="<font face='Verdana' color='#FF0000' size='1'>* Please mention<br><input maxlength='30' name='INSTITUTE"+place+"'><br></font>";
	}
	else
		eval(obj_name).innerHTML="";

	return;
}
//function createEdu(myobj,place)
/*
 // Work Experience SECTION //
	 
	 BIRTHA BIRTHA BIRTHA BIRTHA BIRTHA
	 if(BIRTHA=="day" || BIRTHB=="mon" || BIRTHC=="year" || BIRTHA=="" || BIRTHB=="" || BIRTHC=="")	
			{       
				alert(' Filled properly BIRTH date field!');
				form.BIRTH1.options.focus();
				return false;
			}
*/
/************************** For Multiple Selection for Prefered Job Location ****************/
function enableThem()
{
document.getElementById("Dist_Area").disabled = false
document.getElementById("Dist_hid").disabled = false
document.getElementById("Dist_Source").disabled = false
document.getElementById("Confirm_Dist").disabled = false
}
function disableThem()
{
document.getElementById("Dist_Area").value = "";
document.getElementById("Dist_hid").value = "";
	
document.getElementById("Dist_Area").disabled = true
//document.getElementById("Dist_hid").disabled = true
document.getElementById("Dist_Source").disabled = true
document.getElementById("Confirm_Dist").disabled = true
}
function passway()
{
ss = "";
vv = "";
//document.getElementById("textarea").value = document.getElementById("select").options[document.getElementById("select").selectedIndex].text ;
totl = document.getElementById("Dist_Source").length ;
	for(ee = 0 ; ee < totl ; ee++)
	{
	 if(document.getElementById("Dist_Source").options[ee].selected )//= true;
	 {
	// alert(document.getElementById("select").options[ee].text)
	  if(ss != "")
	   { ss = ss  + ", " + document.getElementById("Dist_Source").options[ee].text ;
	     vv = vv + "," + document.getElementById("Dist_Source").options[ee].value ;
	   }	
	  else
	   { ss =  document.getElementById("Dist_Source").options[ee].text ;
	     vv =  document.getElementById("Dist_Source").options[ee].value ;
	   }	
	 }
	 
	}
	document.getElementById("Dist_Area").value = ss ;
	//alert(vv);
	document.getElementById("Dist_hid").value = vv ;
}
// End of Prefered job Location
function chkRad()
{ 
	  if(document.form1.radDist[1].checked & document.getElementById("Dist_hid").value == "")
	{
		alert("Select from the list");
		document.getElementById("Dist_Source").focus();
		return false;
	}
}

function blockNonNumbers(obj,e, allowDecimal, allowNegative)// for numeric validation
{
	var key;
	var isCtrl = false;
	var keychar;
	var reg;

	if(window.event) 
	{
		key = e.keyCode;
		isCtrl = window.event.ctrlKey
	}
	else if(e.which) 
	{
		key = e.which;
		isCtrl = e.ctrlKey;
	}

	if (isNaN(key)) return true;
	
	keychar = String.fromCharCode(key);

	// check for backspace or delete, or if Ctrl was pressed
	if (key == 8 || isCtrl)
	{
		return true;
	}

	reg = /\d/;
	var isFirstN = allowNegative ? keychar == '-' && obj.value.indexOf('-') == -1 : false;
	var isFirstD = allowDecimal ? keychar == '.' && obj.value.indexOf('.') == -1 : false;

	return isFirstN || isFirstD || reg.test(keychar);
}

function extractNumber(obj, decimalPlaces, allowNegative)// extrack non-numeric character
{ 
	var temp = obj.value;
	
	// avoid changing things if already formatted correctly
	var reg0Str = '[0-9]*';
	if (decimalPlaces > 0) {
		reg0Str += '\\.?[0-9]{0,' + decimalPlaces + '}';
	} else if (decimalPlaces < 0) {
		reg0Str += '\\.?[0-9]*';
	}
	reg0Str = allowNegative ? '^-?' + reg0Str : '^' + reg0Str;
	reg0Str = reg0Str + '$';
	var reg0 = new RegExp(reg0Str);
	if (reg0.test(temp)) return true;

	// first replace all non numbers
	var reg1Str = '[^0-9' + (decimalPlaces != 0 ? '.' : '') + (allowNegative ? '-' : '') + ']';
	var reg1 = new RegExp(reg1Str, 'g');
	temp = temp.replace(reg1, '');

	if (allowNegative) {
		// replace extra negative
		var hasNegative = temp.length > 0 && temp.charAt(0) == '-';
		var reg2 = /-/g;
		temp = temp.replace(reg2, '');
		if (hasNegative) temp = '-' + temp;
	}
	
	if (decimalPlaces != 0) {
		var reg3 = /\./g;
		var reg3Array = reg3.exec(temp);
		if (reg3Array != null) {
			// keep only first occurrence of .
			//  and the number of places specified by decimalPlaces or the entire string if decimalPlaces < 0
			var reg3Right = temp.substring(reg3Array.index + reg3Array[0].length);
			reg3Right = reg3Right.replace(reg3, '');
			reg3Right = decimalPlaces > 0 ? reg3Right.substring(0, decimalPlaces) : reg3Right;
			temp = temp.substring(0,reg3Array.index) + '.' + reg3Right;
		}
	}
	
	obj.value = temp;
}
