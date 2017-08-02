<?php
session_start();
$user=$_POST["user"];
$pass=md5($_POST["pass"]);
$passwordsql="";
$userdb="root";
function err_message() {
    echo'<div class="alert alert-danger" role="alert">';
    echo'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true">';
    echo'<span class="sr-only">Error:</span>';
    echo 'Check Username and Password</br>';
    echo '</div>';
}
if($_POST){
    try {
        $conn = new PDO("mysql:host=localhost;dbname=webusers", $userdb, $passwordsql);
        $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($conn) {
            $ssql = $conn->prepare("SELECT Username,Password FROM users WHERE Username=?");
            $ssql->execute(array($user));
            $res = $ssql->fetch(PDO::FETCH_OBJ);
            $rows =$ssql->rowCount();
            if($rows>0) {
                $use = $res->Username;
                $p = $res->Password;
                if ($user == $use && $pass == $p) {
                    $idsql = $conn->prepare("SELECT user_ID,Username FROM users WHERE Username=?");
                    $idsql->execute(array($use));
                    $resid = $idsql->fetch(PDO::FETCH_OBJ);
                    $_SESSION["uid"] = $resid->user_ID;
                    $_SESSION["user"] = $resid->Username;
                    header("location: ../index3.php");
                }
                else {
                    err_message();
                }
            }
            else{
                err_message();
            }
        }
    }
    catch(PDOException $e){
        $e->getMessage();
    }
}

?>
