/***************************/
//@Author: Adrian "yEnS" Mato Gondelle
//@website: www.yensdesign.com
//@email: yensamg@gmail.com
//@license: Feel free to use it, but keep this credits please!					
/***************************/

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;

//loading popup with jQuery magic!
function loadPopup(target){
	//target="#popupContact";
	//loads popup only if it is disabled
	if(popupStatus==0){
		$("#backgroundPopup").css({
			"opacity": "0.7"
		});
		$("#backgroundPopup").fadeIn("slow");
		$(target).fadeIn("slow");
		popupStatus = 1;
	}
}

//disabling popup with jQuery magic!
function disablePopup(target){
	//disables popup only if it is enabled
	
	if(popupStatus==1){
		$("#backgroundPopup").fadeOut("slow");
		$(target).fadeOut("slow");
		popupStatus = 0;
	}
}

//centering popup
function centerPopup(target){
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $(target).height();
	var popupWidth = $(target).width();
	//centering
	$(target).css({
		"position": "absolute",
		"top": windowHeight/2-popupHeight/2,
		"left": windowWidth/2-popupWidth/2,
		"z-index":"2000000"
	});
	//only need force for IE6
	
	$("#backgroundPopup").css({
		"height": windowHeight
	});
	
}


//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
	
	//LOADING POPUP
	//Click the button event!
	$("#button").click(function(){
		//centering with css
		centerPopup(target);
		//load popup
		loadPopup(target);
	});
				
	//CLOSING POPUP
	//Click the x event!
	$("#popupContactClose").click(function(){
		//disablePopup("#backgroundPopup");
		//	disablePopup("#popupContactClose");
			disablePopup("#popupContact");
	});
	//Click out event!
	$("#backgroundPopup").click(function(){
		disablePopup("#popupContact");
	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus==1){
			disablePopup("#popupContact");
			
		}
	});
	
	
	
	$("#popupLoginClose").click(function(){
		//disablePopup("#backgroundPopup");
		//	disablePopup("#popupContactClose");
			disablePopup("#popupLogin");
	});
	//Click out event!
	$("#popupLoginClose").click(function(){
		disablePopup("#popupLogin");
	});
	
	$("#popupLoginClose1").click(function(){
		//disablePopup("#backgroundPopup");
		//	disablePopup("#popupContactClose");
			disablePopup("#popupImgShow");
	});
	//Click out event!
	$("#popupLoginClose1").click(function(){
		disablePopup("#popupImgShow");
	});
	

});