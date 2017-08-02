$(document).ready(function () {
    $("#logoutbtn").click(function () {
        window.location.href="./backend/logout.php";
    });

    $("#dialog").dialog({
        autoOpen: false,
        modal: true,
        height: 300,
        width: 350
    });
    $("#iniatePassChange").click(function () {
        $("#dialog").dialog("open");
    });

});
