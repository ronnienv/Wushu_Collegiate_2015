
$(document).ready(function(){

	$("#newsfeedbutton").click(function(){
		document.getElementById("newsfeed").style.display = "block";
		document.getElementById("newsfeedbutton").style.display = "none";
	});	

	$("#aboutusbutton").click(function(){
		document.getElementById("aboutus").style.display = "block";
		document.getElementById("aboutusbutton").style.display = "none";
	});	

	$("#mediabutton").click(function(){
		document.getElementById("media").style.display = "block";
		document.getElementById("mediabutton").style.display = "none";
	});	

	$("#tournamentbutton").click(function(){
		document.getElementById("tournament").style.display = "block";
		document.getElementById("tournamentbutton").style.display = "none";
	});	

	$("#contactbutton").click(function(){
		document.getElementById("contact").style.display = "block";
		document.getElementById("contactbutton").style.display = "none";
	});	

});

/* trigger when window is resized */ 
$(window).resize(function() {  
	var w = $(window).width();
	if(w < 768)
	{

		document.getElementById("newsfeed").style.display = "none";
		document.getElementById("newsfeedbutton").style.display = "block";

		document.getElementById("contact").style.display = "none";
		document.getElementById("contactbutton").style.display = "block";

		document.getElementById("tournament").style.display = "none";
		document.getElementById("tournamentbutton").style.display = "block";

		document.getElementById("media").style.display = "none";
		document.getElementById("mediabutton").style.display = "block";
		
		document.getElementById("aboutus").style.display = "none";
		document.getElementById("aboutusbutton").style.display = "block";
		
	}

	else
	{

		document.getElementById("newsfeed").style.display = "block";
		document.getElementById("newsfeedbutton").style.display = "none";

		document.getElementById("contact").style.display = "block";
		document.getElementById("contactbutton").style.display = "none";

		document.getElementById("tournament").style.display = "block";
		document.getElementById("tournamentbutton").style.display = "none";

		document.getElementById("media").style.display = "block";
		document.getElementById("mediabutton").style.display = "none";
		
		document.getElementById("aboutus").style.display = "block";
		document.getElementById("aboutusbutton").style.display = "none";
		
	}
}); 
// end trigger when window is resized