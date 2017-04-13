// Javascript for Hours
//javascript4OfficeHours.js

    //document.getElementById("officeHoursID").getElementsByTagName("span").length;

    var days = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];

    // Get the day for the week
	var n = new Date().getDay();

	console.log("Day " + n);

	for (var day = 0; day < 7; day++) {
	    if( $( "#dayOfWeek li:nth-child(" + day + ") a" ).html() == days[n]) {
		    switch ( n ) {
		       case 0:
		           	showSun();
		         	break;
		       case 1:
		           	showMon();
		           	break;
		       case 2:
		           	showTue();
		           	break;
		       case 3:
		           	showWed();
		          	break;
		       case 4:
		           	showThur();
		           	break;
		       case 5:
		           	showFri();
		           	break;
		       case 6:
		           	showSat();
		           	break;
		   };
		   break;
		}
	}
	

	function showSun() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#daySun").parent().addClass("active");
	  	$( "#dayOfWeek .Sun").show();
	};

	function showMon() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#dayMon").parent().addClass("active");
	  	$( "#officeHoursID .Mon").show();
	};

	function showTue() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#dayTue").parent().addClass("active");
	  	$( "#officeHoursID .Tue").show();
	};

	function showWed() {
		$( "#NoHours").hide();
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#dayWed").parent().addClass("active");
	  	$( "#officeHoursID .Wed").show();
	};

	function showThur() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#dayThur").parent().addClass("active");
	  	$( "#officeHoursID .Thur").show();
	};

	function showFri() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#dayFri").parent().addClass("active");
	  	$( "#officeHoursID .Fri").show();
	};

	function showSat() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#daySat").parent().addClass("active");
	  	$( "#officeHoursID .Sat").show();
	};

// Compleated December 9, 2015