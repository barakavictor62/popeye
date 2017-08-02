$(document).ready(function () {
    $("#logout").click(function () {
        window.location.href="./backend/logout.php";
    });
    $("#words").on(function () {
        var numOfWOrds = $("#words").val();
        alert(numOfWOrds);

    })

});