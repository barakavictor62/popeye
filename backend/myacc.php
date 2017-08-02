<?php
session_start();
if(empty($_SESSION["user"]))
{
    header("location:./index.php");
}
elseif(!empty($_SESSION["user"]))
{
    $userem= $_SESSION["user"];
    $uid= $_SESSION["uid"];
    $passwordsql="";
    $userdb="root";
    try{
        $conn=new PDO("mysql:host=localhost;dbname=WebUsers",$userdb,$passwordsql);
        $conn->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $ssql=$conn->prepare("SELECT * FROM users WHERE user_ID=?");
        $ssql->execute(array($uid));
        $res=$ssql->fetch(PDO::FETCH_OBJ);
        $vorname=$res->Firstname;
        $familiename=$res->Lastname;
        $kontakt=$res->Email;
    }
    catch(PDOException $e) {
        $e->getMessage();
    }
}
?>
