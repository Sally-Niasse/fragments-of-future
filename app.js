 $(document).ready(function(){
    $(".background").hide();
    $("#start").click(function(){
        $(".background").fadeIn(500);
    });
    
    $(".close-button").on("click", function(){
        $(".vision").fadeOut(1000)
    })
 });