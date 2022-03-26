$(document).ready(function(){
    $(".background").hide();
    $("#start").click(function(){
        $(".background").fadeIn(500);
    });
    
    $(".close-button").on("click", function(){
        $(".vision").fadeOut(1000)
    })
    $(".reset").hide();
    $("#reinitialiser").click(function(){
        $(".reset").fadeIn(500);
    });

    
   /* $("#close-menu").on("click", function(){
        if ($("nav").css("left","-100%")) {
            $("#close-menu").html("&times;");
            $("nav").css("left","0%");
        }
        else {}
    }); */
    
    $("#open-menu").on("click", function(){
        $("nav").animate({left: '0%'}, "slow");
        $("#open-menu").css("display","none");
        $("#close-menu").css("display","block");
        });
    $("#close-menu").on("click", function(){
            $("nav").animate({left: '-100%'}, "slow");
            $("#open-menu").css("display","block");
            $("#close-menu").css("display","none");
            });
  

    // $("#close-menu").on("click", function(){
    //     symbol = $("#close-menu").html();
    //     console.log(symbol);
    //     if (symbol == "&equiv;") {
    //         $("nav").css("left","0vw");
    //         $("#close-menu").html("&times;");
    //     }
    //     else {
    //         console.log("bingo");
    //         $("nav").css("left","-100vw");
    //         $("#close-menu").html("&equiv;");

    //     }
  
    });
