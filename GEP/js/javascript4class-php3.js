// Javascript for Class.php
//javascript4class-php.js

    //var amountOfHours = document.getElementById("officeHoursID").getElementsByTagName("span").length;
    //console.log(amountOfHours);

    var days = ["Mon", "Tue", "Wed", "Thur", "Fri", "Sat", "Sun"];

    var day = 1;

    var mon = 0;
    var tue = 0;
    var wed = 0;
    var thur = 0;
    var fri = 0;
    var sat = 0;
    var sunday = 0;

    for (day = 1; day < 7; day++) {
    	if( $( "#dayOfWeek li:nth-child(" + day + ") a" ).html() == days[day-1]) {
	    	$("#dayOfWeek li:nth-child(" + day + ") a").attr('id', "a_Hours_" + day);
	    	day++; 
	    }
    };

    // Set the id attribute to relate directly with the day; should be in order; hence the loop
    $( "#officeHoursID span" ) .attr( "id", function( arr ) {
	    return "span_Hours_" + (arr + 1);
	});

	// Get the day for the week
	var d = new Date();
	var n = d.getDay();
	n++;


	if( n == mon ||
		n == tue ||
		n == wed ||
		n == thur||
		n == fri ||
		n == sat ||
		n == sunday )
		{$( "#officeHoursID span:last-child" ).show(); console.log("g");}
	else {
		$( "#a_Hours_" + n ).parent().addClass("active");
		$( "#span_Hours_" + n ).show();
	}



	if(n == 6 || n == 0) $( "#span_Hours_1" ).show();

	$("#a_Hours_" + 1).click(function() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#span_Hours_" + 1).show();
	  	$( "#dayOfWeek li:eq(0)").addClass("active");
	});

	$("#a_Hours_" + 2).click(function() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#span_Hours_" + 2).show();
	  	$( "#dayOfWeek li:eq(1)").addClass("active");
	});

	$("#a_Hours_" + 3).click(function() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#span_Hours_" + 3).show();
	  	$( "#dayOfWeek li:eq(2)").addClass("active");
	});

	$("#a_Hours_" + 4).click(function() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#span_Hours_" + 4).show();
	  	$( "#dayOfWeek li:eq(3)").addClass("active");
	});

	$("#a_Hours_" + 5).click(function() {
		//Remove Active class and hide all hours
		$( "#officeHoursID span" ).hide();
		$( "#dayOfWeek li" ).removeClass("active");
		//Changes to those that should still show
		$( "#span_Hours_" + 5).show();
	  	$( "#dayOfWeek li:eq(4)").addClass("active");
	});