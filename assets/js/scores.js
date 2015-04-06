var jsonListMale = [
	// event 1 male
	"https://spreadsheets.google.com/feeds/list/1QdHKZqKFk4sUH5Yc5vrMJBTq7_NGjj9Q6txDz_bXDL0/1/public/values?alt=json"
	];

var jsonListFemale = [
	// event 1 female
	"https://spreadsheets.google.com/feeds/list/1QdHKZqKFk4sUH5Yc5vrMJBTq7_NGjj9Q6txDz_bXDL0/2/public/values?alt=json"
	];

var currentScores = 0;

$(document).ready(function(){

	hideScores();

	$("#event1-button").click(function(){
		toggleButton("1");
	});	

	$("#event2-button").click(function(){
		toggleButton("2");
	});	

	$("#event3-button").click(function(){
		toggleButton("3");
	});	

	$("#event4-button").click(function(){
		toggleButton("4");
	});	

	$("#event5-button").click(function(){
		toggleButton("5");
	});	

	$("#event6-button").click(function(){
		toggleButton("6");
	});	

	$("#event7-button").click(function(){
		toggleButton("7");
	});	

	$("#event8-button").click(function(){
		toggleButton("8");
	});	

	$("#event9-button").click(function(){
		toggleButton("9");
	});	

	$("#event10-button").click(function(){
		toggleButton("10");
	});	

	$("#event11-button").click(function(){
		toggleButton("11");
	});	

	$("#event12-button").click(function(){
		toggleButton("12");
	});	

	$("#event13-button").click(function(){
		toggleButton("13");
	});	

	$("#event14-button").click(function(){
		toggleButton("14");
	});	

	$("#event15-button").click(function(){
		toggleButton("15");
	});	

	$("#event16-button").click(function(){
		toggleButton("16");
	});	

	$("#event17-button").click(function(){
		toggleButton("17");
	});	

	$("#event18-button").click(function(){
		toggleButton("18");
	});	

	$("#event19-button").click(function(){
		toggleButton("19");
	});	

	$("#event20-button").click(function(){
		toggleButton("20");
	});	

});

var toggleButton = function (buttonNum) {

		hideScores();

		if(currentScores != buttonNum){
			currentScores = buttonNum;
			// determines id of the event based on button pressed
			var event = "#event" + buttonNum;

			var maleContestants = [];
			var femaleContestants = [];
			var numContestants = 0;

			// retrieve the json from the list of urls based on the button number

			// male
			// *note - jefferson and cokwr may change
			$.getJSON(jsonListMale[buttonNum - 1], function(data) {
				numContestants = data.feed.entry.length;
				for (i = 0; i < numContestants; i++){
					var tempScore = [];
					tempScore[0] = data.feed.entry[i].title.$t;
					tempScore[1] = data.feed.entry[i].gsx$_cokwr.$t;

					maleContestants[i] = tempScore;
				}

				// append the entries to the scores page
				$(".male").append("<h1>Male Scores</h1> <hr>");
				$(".male").append("<div class='col-sm-3 col-xs-3'></div><div class='male-col col-sm-9 col-xs-9'></div>")
				for (i = 0; i < numContestants; i++){
					$(".male .male-col").append("<div><b>" + maleContestants[i][0] + "</b>: " + maleContestants[i][1] + ": " + maleContestants[i][1] + ": " + maleContestants[i][1] + ": " + maleContestants[i][1] + "</div>");
				}
	        });
	 
	        // female
	        $.getJSON(jsonListFemale[buttonNum - 1], function(data) {
	        	numContestants = data.feed.entry.length;
	        	for (i = 0; i < numContestants; i++){
	        		var tempScore = [];
					tempScore[0] = data.feed.entry[i].title.$t;
					tempScore[1] = data.feed.entry[i].gsx$_cokwr.$t;

	        		femaleContestants[i] = tempScore;
	        	}
	        	
	        	$(".female").append("<h1>Female Scores</h1> <hr>");
	        	$(".female").append("<div class='col-sm-3 col-xs-3'></div><div class='female-col col-sm-9 col-xs-9'></div>")
	        	for (i = 0; i < numContestants; i++){
        			$(".female .female-col").append("<div><b>" + femaleContestants[i][0] + "</b>: " + femaleContestants[i][1] + "</div>");


	        	}

	        })

	        $("#select-score").hide();
	        $("body").append('<div id="scores-border-bottom"></div>');
		}
		else{
			currentScores = 0;
			$("#select-score").show();
		}
};

var hideScores = function () {
	$("#eventScores .male").children().remove();
	$("#eventScores .female").children().remove();
	$("#scores-border-bottom").remove();
	$("#select-score").show();
};