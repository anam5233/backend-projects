function myfunction(){
	alert("I am alert");
}
function myCreateFunction(){
	var table = document.getElementById("myTable");
	var row = table.insertRow(-1);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);
		var cell7 = row.insertCell(6);
		// cell1.innerHTML = "form data";
	cell1.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	cell2.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	cell3.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	cell4.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	cell5.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	cell6.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	cell7.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	// cell1.innerHTML ="<input type=\"text\" />";
	// cell1.innerHTML = "<input type="' + "text" +'" name="" id="" />";
	// alert("this is new alert");

}
function myCreateFunctionSecond(){
	var table = document.getElementById("myTable2");
	var row = table.insertRow(-1);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		// cell1.innerHTML = "form data";
	cell1.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	cell2.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	cell3.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	cell4.innerHTML = "<input type=\"text\" name=\"\" id=\"\" class=\"form-control\" required>";
	
	// cell1.innerHTML ="<input type=\"text\" />";
	// cell1.innerHTML = "<input type="' + "text" +'" name="" id="" />";
	// alert("this is new alert");

}

function myDeleteFunction(){
	// document.getElementById("myTable").deleteRow(-1);
	var myrow = document.getElementById("myTable").rows.length;
	if(myrow>3){
		var table = document.getElementById("myTable");
		var row = table.deleteRow(-1);
	}
	else{
		alert("cannot deleted");
	}
	// var table = document.getElementById("mytable");
	// var row = table.deleteRow(-1);
}
function myDeleteFunctionSecond(){
	// document.getElementById("myTable").deleteRow(-1);
	var myrow = document.getElementById("myTable2").rows.length;
	if(myrow>3){
		var table = document.getElementById("myTable2");
		var row = table.deleteRow(-1);
	}
	else{
		alert("cannot deleted");
	}
	// var table = document.getElementById("mytable");
	// var row = table.deleteRow(-1);
}
function countRow(){
	var myrow = document.getElementById("myTable").rows.length;
	alert(myrow);
}