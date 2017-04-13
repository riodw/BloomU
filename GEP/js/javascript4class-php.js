// Javascript for Class.php
//javascript4class-php.js

    //var amountOfHours = document.getElementById("officeHoursID").getElementsByTagName("span").length;
    //console.log(amountOfHours);


    var arr = 1;

    var mon = 0;
    var tue = 0;
    var wed = 0;
    var thur = 0;
    var fri = 0;
    var sat = 0;
    var sunday = 11;

    if( $( "#dayOfWeek li:nth-child(" + arr + ") a" ).html() == "Mon") {
    	$("#dayOfWeek li:nth-child(" + arr + ") a").attr('id', "a_Hours_" + arr);
    	arr++; mon = 1;
    }
    if( $( "#dayOfWeek li:nth-child(" + arr + ") a" ).html() == "Tue") {
    	$("#dayOfWeek li:nth-child(" + arr + ") a").attr('id', "a_Hours_" + arr);
    	arr++; tue = 2;
    }
    if( $( "#dayOfWeek li:nth-child(" + arr + ") a" ).html() == "Wed") {
    	$("#dayOfWeek li:nth-child(" + arr + ") a").attr('id', "a_Hours_" + arr);
    	arr++; wed = 3;
    }
    if( $( "#dayOfWeek li:nth-child(" + arr + ") a" ).html() == "Thur") {
    	$("#dayOfWeek li:nth-child(" + arr + ") a").attr('id', "a_Hours_" + arr);
    	arr++; thur = 4;
    }
    if( $( "#dayOfWeek li:nth-child(" + arr + ") a" ).html() == "Fri") {
    	$("#dayOfWeek li:nth-child(" + arr + ") a").attr('id', "a_Hours_" + arr);
    	arr++; fri = 5;
    }
    if( $( "#dayOfWeek li:nth-child(" + arr + ") a" ).html() == "Sat") {
    	$("#dayOfWeek li:nth-child(" + arr + ") a").attr('id', "a_Hours_" + arr);
    	arr++; sat = 6;
    }
    if( $( "#dayOfWeek li:nth-child(" + arr + ") a" ).html() == "Sun") {
    	$("#dayOfWeek li:nth-child(" + arr + ") a").attr('id', "a_Hours_" + arr);
    	arr++; sunday = 0;
    }

    // Set the id attribute to relate directly with the day; should be in order; hence the loop
    $( "#officeHoursID span" ) .attr( "id", function( arrr ) {
	    return "span_Hours_" + (arrr + 1);
	});

	// Get the day for the week
	var d = new Date();
	var n = d.getDay();


	if( n != mon &&
		n != tue &&
		n != wed &&
		n != thur&&
		n != fri &&
		n != sat &&
		n != sunday ) {
			$( "#officeHoursID span:last-child" ).show(); 
			console.log(n); console.log("arr: " + arr);  console.log(false + "\n\n");
			console.log(mon); console.log(tue); console.log(wed); console.log(thur); console.log(fri);
		}
	else {
		$( "#a_Hours_" + n ).parent().addClass("active");
		$( "#span_Hours_" + n ).show();
		console.log("else\n\n");
	}



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