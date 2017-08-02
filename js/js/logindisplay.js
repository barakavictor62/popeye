/**
 * Created by baraka62 on 5/22/2017.
 */
$(document).ready(function () {
    $(".logininfo").dialog({
        autoOpen: false,
        modal: true,
        height:300,
        width: 350
    });
    $("#loginbtn").click(function () {
        $(".logininfo").dialog("open");
    });
    $(".with-input-fields").dialog({
        autoOpen:false,
        modal:true,
        width: 400
    });
    function signUp () {
        $(".with-input-fields").dialog("open");

    }
    $(".signupbtn").click(function(){
        signUp()
    });
    $("#login-btn").click(function login() {
        var err = new XMLHttpRequest();
        var username = $("#user").val();
        var pass = $("#pass").val();
        var params = [username, pass];
        err.open("POST", "./backend/login2.php");
        err.send(params);
    });
});
