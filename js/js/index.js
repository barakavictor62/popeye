$(document).ready(function() {
      $("#request").css({"border-bottom":"solid"});
       $("#request").click(function () {
       $("#request").css({"border-bottom":"solid"});
       $("#pending, #done").css({"border-bottom":"none"});
       $(".inner-request2,.inner-request3").css({"display":"none"});
       $(".inner-request").css({"display":"inline-block"});
   });
    $("#pending").click(function () {
        $("#pending").css({"border-bottom":"solid"});
        $("#request, #done").css({"border-bottom":"none"});
        $(".inner-request,.inner-request3").css({"display":"none"});
        $(".inner-request2").css({"display":"block"});
    });
    $("#done").click(function () {
        $("#done").css({"border-bottom":"solid"});
        $("#request, #pending").css({"border-bottom":"none"});
        $(".inner-request,.inner-request2").css({"display":"none"});
        $(".inner-request3").css({"display":"block"});
    });
    $("#optimize").click(function () {
        window.location.href="optimization.php";
    });
    $("#logout").click(function () {
        window.location.href = "./backend/logout.php";
    });
    $("#webdesign").click(function () {
        window.location.href= "webdesign.php";
    })

});
