<!DOCTYPE html>
<?php
include("./backend/myacc.php");
?>
<html>
<head>
    <?php include("jsfiles.php"); ?>
    <script type="text/javascript" src="js/js/myaccount.js"></script>
    <link rel="stylesheet" href="./css/css/style6.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>
<body>
<div class="container">
<div class="header">
    <ul>
        <div class="toright uldiv">
            <li class="hedorfoot"><a href="index.php"><h5>ACE</h5></a></li>
        </div>
        <div class="toleft uldiv">
            <li class="right hedorfoot"><a href="#">Logged in as <?php echo $_SESSION['user'];?></a></li>
            <button type="button" class="btn btn-info" id="logoutbtn">Logout</button>
        </div>
    </ul>
</div>
<div class="hold_content">
    <div class="side_bar">
        <input  class="search form-control" placeholder="&#xf002;">
        <div class="imgmv">
           <img src="images/default.png">
        </div>
        <div  class="inner-sidenav">
            <h3 id="menu-header">Menu</h3>
           <li><a class="" href="index3.php">Home</a></li>
            <li><a class="alink" href="myaccount.php">My Account</a></li>
            <li><a  href="backend/wallet.php">My Wallet</a></li>
        </div>
    </div>
    <div class="bodycontent">
        <div class="accbody">
            <div id="house">
                <form role="form" method="post" action="" name="">
                    <div class="form-group profile-info" id="">
                        <h3>Profile</h3>
                        <input type="text" class="form-control " name="userem" placeholder="<?php echo htmlspecialchars($_SESSION["user"]);?>"></br>
                        <input type="text" class="form-control" name="aus" placeholder="country"></br>
                        <h3>Private Info</h3>
                        <input type="text" name="kontakt" class="form-control" placeholder="<?php echo htmlspecialchars($kontakt);?>"></br>
                        <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </br><button class="form-control btn btn-primary" type="button"  id="cdp">Update</button>
                    </div>
                </form>
                <button type="button" class="btn btn-link"id="iniatePassChange">Change Password</button></br></br>
                </br>
            </div>
            <div id="dialog" title=" Change Password">
                <form role="form" method="post" action="backend/myacc.php" id="meform" name="changepass">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Old password"></br>
                        <input type="password" class="form-control" name="password1"id="password1" placeholder="New password"></br>
                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Re-type new password"></br>
                        <button class="form-control btn btn-primary" type="button"  id="cdp">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="request">
        </div>
    </div>

</div>
<div class="footer">
    <div class="footerRight">
        <li class="hedorfoot"><a href="">Privacy Policy</a></li>
        <li class="hedorfoot"><a href="">Terms of Service</a></br></li></br>
        <span>Copyright<i class="fa fa-copyright"></i>2017</span>
    </div>
</div>
</div>
</body>
</html>
