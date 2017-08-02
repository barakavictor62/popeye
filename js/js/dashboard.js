/**
 * Created by baraka62 on 5/21/2017.
 */
$(document).ready(function() {
    $(".one").css({"display":"block","border-bottom": "10px solid #D9D9D9"});
    $(".three,.two").css({"display":"none"});
    $(".undone").css({"background-color":"#D9D9D9"});
    //...................................................................................
    $(".image_plus_name").css("height","50%");
    $("#rrr").click(function() {
        window.location="../../myaccount.php";
    });
    $(".search").click(function () {
        $(".search").css({"text-align":"left"});
    });
    $("#one").click(function () {
        $(".one").css({"display": "block", "border-bottom": "10px solid #D9D9D9"});
    });
    /*    $(".three,.two").css({"display":"none"});
        $(".undone").css({"background-color":"#D9D9D9"})
    });*/
    $("#two").click(function () {
        $(".two").css({"display":"block","border-bottom": "10px solid #D9D9D9"});
        $(".one,.three").css({"display":"none"});
        $(".undone").css({"background-color":"#D9D9D9"})
        //$(".service_options").css({"background-color":"orange"})
    });
    $("#three").click(function () {
        $(".three").css({"display":"block","border-bottom": "10px solid #D9D9D9"});
        $(".one,.two").css({"display":"none"});
        $(".undone").css({"background-color":"#D9D9D9"})
        //$(".service_options").css({"background-color":"dodgerblue"});
    });

    $(function() {
        $("#request").load("articlerequest.html");
    });

    $("#request").dialog({
        autoOpen: false,
        resizable: false,
        width:600,
        dialogClass:"postr"
    });
    $("#third").click(function() {
        var request=$("#request");
        $(request).css("display","block");
        $(request).dialog("open");
    });
});
