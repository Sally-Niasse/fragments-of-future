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
    $("#close-menu").on("click", function(){
        $("nav").css("left","0%");
        $("#close-menu").html("&times;")
    })


    
 });