<?php
session_start();
$userid=$_SESSION["uid"];
$fname=$_FILES["upload"]["name"];
$_SESSION["fname"]=$fname;
$fsize=$_FILES["upload"]["size"];
$ftype=$_FILES["upload"]["type"];
$fpath=$_FILES["upload"]["tmp_name"];
move_uploaded_file($fpath,"/var/www/popeyeweb/images/$fname");
$err=$_FILES["upload"]["error"];
echo $error;
$nfpath="/images/$fname";
$passwordsql="\$litherine";
$userdb="root";
try{
    $conn=new PDO("mysql:host=localhost;dbname=WebUsers",$userdb,$passwordsql);
    $conn->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if($conn){
        if(isset($fname)){
            $sql=$conn->prepare("UPDATE Users SET Profile=? WHERE ID=?");
            $sql->execute(array($nfpath,$userid));
            $ssql=$conn->prepare("SELECT profile FROM Users WHERE ID=?");
            $ssql->execute(array($userid));
            $res=$ssql->fetch(PDO::FETCH_OBJ);
            $got=$res->profile;
            header("location: myaccount.php");
        }
    }
    else{
        echo "failed to connect to database";
    }
}
catch(PDOException $e){
    $e->getMessage();
    echo $e;
}
?>
