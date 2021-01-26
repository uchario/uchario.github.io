// jqscript.js

$(function() {
    /*
    
    $("button").click(function() {
        $("#box").fadeOut(1000);
    });
    
    $("h2, h3, h4").css("border", "solid 1px red");
    
    $("div#container").css("border", "solid 1px blue");
    
    $("p.lead").css("border", "solid 1px #fc3");
    
    $("li:first").css("border", "solid 1px #c0f");
    
    $("p:even").css("border", "solid 1px #f0c");
    
    $("p:odd").css("border", "solid 1px #ac0");
    
    $("div em").css("border", "solid 1px #0ca");
    
    //$("div > p").css("color" "#999");
    
    $(":header").css("color", "#0af");
    
    $("div:contains('Brad')").css("border", "solid 1px #127");
    */
    
    /* ---------------------
        jQUERY EVENT METHODS
        -------------------- */
    
    $("#box").click(function() {
        alert("My name is Brad!");
    });
    
    
    $("input").blur(function() {
        if($(this).val() == "") {
            $(this).css("border", "solid 1px #58c");
            $("#box").text("Forgot to add text!");
           }
    });
    
    $("input").keydown(function() {
        if($(this).val() !== "") {
            $(this).css("border", "solid 1px #777");
            $("#box").text("Thanks for that!");
        }
    });
    
    $("#box").hover(function() {
        $(this).text("You hovered in!");
    }, function(){
        $(this).text("You hovered out!");
    });
    
    $("input:submit").click(function() {
        $("#box").hide();
    })
    
    /* ---------------
       jQUERY CHAINING
       --------------- */
    $(".notification-bar").delay(1000).slideDown().delay(2000).fadeOut();
    
    /* ---------------
       jQUERY CHAINING
       --------------- */
    
    // $("h1").hide();
    $("div.hide").hide();
    // $("p").fadeOut(1000);
    // $("div.hidden").fadeIn(8000);
    
    $("#box1").click(function() {
        $(this).fadeTo(1000, 0.75, function() {
            // animation is complete
            
            $(this).slideUp();
            $("div.hide").slideDown()
        });
    });
    
    $("button").click(function() {
       $("#box1").slideToggle(); 
    });
    
    /* ---------------
       jQUERY ANIMATE
       --------------- */
    
    $("#left").click(function() {
        $(".box").animate({
            left: "-=40px",
            fontSize: "+=2px"
        }, function() {
            // animation is complete
        });
    })
    
    $("#up").click(function() {
        $(".box").animate({
            top: "-=40px",
            opacity: "+=0.1"
        }, function() {
            // animation is complete
        });
    })
    
    $("#right").click(function() {
        $(".box").animate({
            left: "+=40px",
            fontSize: "-=2px"
        }, function() {
            // animation is complete
        });
    })
    
    $("#down").click(function() {
        $(".box").animate({
            top: "+=40px",
            opacity: "-=0.1"
        }, function() {
            // animation is complete
        });
    })
    
    
    /* ---------------
       jQUERY CSS
       --------------- */
    
    $("#circle2").css({
        "background":"#8a8d22", 
        "display":"inline-block", 
        "color":"white", 
        "text-align":"center", 
        "line-height":"140px", 
        "height":"140px", 
        "width":"140px"
    }).addClass("circleShape");
    
    /* ---------------
       jQUERY RACR 2.0
       --------------- */
    
    // Click the GO button
    $("#go").click(function() {
        
        // build a function that checks to see if a car has won the race
        function checkIfComplete() {
            
            if(isComplete == false) {
                isComplete = true;
            } else {
                place = "second";
            }
        }
        
        // get the width of the cars
        var carWidth = $("#car1").width();
        
        // get the width of the racetrack
        var raceTrackWidth = $(window).width() - carWidth;
        
        // generate a random # between 1 and 5000
        var raceTime1 = Math.floor( (Math.random() * 5000) + 1 );
        var raceTime2 = Math.floor( (Math.random() * 5000) + 1 );
        
        // set a flag variable to FALSE by default
        var isComplete = false;
        
        // set a flag variable to FIRST by default
        var place = 'first';
        
        // animate car 1
        $("#car1").animate({
            
            // move the car the width of the race track
            left: raceTrackWidth,
            
        }, raceTime1, function() {
           
            // animation is complete
            
            // run a function
            checkIfComplete();
            
            // give some text feedback in the race info box
            $("#raceInfo1 span").text( "Finished in " + place + " place and clocked in at " + raceTime1 + " milliseconds!" );
        });
       
        // animate car 2
        $("#car2").animate({
            
            // move the car the width of the race track
            left: raceTrackWidth,
            
        }, raceTime2, function() {
           
            // animation is complete
            
            // run a function
            checkIfComplete();
            
            // give some text feedback in the race info box
            $("#raceInfo2 span").text( "Finished in " + place + " place and clocked in at " + raceTime2 + " milliseconds!" );
        });
        
        
    });
    
    // reset the race
    $("#reset").click(function() {
        $(".car").css("left", "0");
        $(".raceInfo span").text("");
    });
    
});