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
    
    $(".user").hide();
    $("#user").click(function(){
        $(".user").fadeIn(500);
    });
    $(".user .retour").click(function(){
        $(".user").hide();
    });

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
  
    });
