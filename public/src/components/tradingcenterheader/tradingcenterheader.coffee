$(document).ready ()->
	pathname = document.location.pathname

	target = pathname.split("/")[2];

	if(target == "buyer")
		index = 0;
	else if  (target == "account")
		index  = 1
	else if(target == "mynews") 
		index = 2;

	if(index != undefined)
		nav = $("#trading-center-header").find(".nav").removeClass("active");
		$(nav[index]).addClass("active");