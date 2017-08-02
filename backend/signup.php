<?php
$fn=$_POST["First_name"];
$ln=$_POST["Last_name"];
$email=$_POST["Email"];
$username=$_POST["uname"];
$pass=md5($_POST["Password"]);
$pass2=md5($_POST["Retype_Password"]);
if($_POST){
            try {
                $userdb = "root";
                $passwordsql="";
                $conn = new PDO("mysql:host=localhost;dbname=webusers", $userdb, $passwordsql);
                $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                if ($conn) {
                    echo "connected";
                    $signup = $conn->prepare("INSERT INTO users(Firstname, Lastname,Email, Username,  Password)VALUES (?,?,?,?,?)");
                    $signup->execute(array($fn, $ln,$email, $username,  $pass));
                    if ($signup) {
                        echo "Signed Up successfully";
                    }
                    else {
                        echo 'failed';
                    }
                }
            }
            catch(PDOException $e){
                $e->getMessage();
            }
        }
?>
