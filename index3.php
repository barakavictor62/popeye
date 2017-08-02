<!DOCTYPE html>
<?php
include("./backend/myacc.php");
?>
<html>
<head>
    <?php include("jsfiles.php"); ?>
    <script type="text/javascript" src="js/js/index.js"></script>
    <link rel="stylesheet" href="./css/css/style3.css">
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
                <button type="button" class="btn btn-info" id="logout">Logout</button>
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
            <div class="name">
                <div class="inner-name">
                    <h2><?php echo  $vorname." ".$familiename; ?></h2>
                    <h3>Kenya</h3>
                </div>
            </div>
            <div class="service_options">
                <div class="tab-buttons">
                    <button type="button" class="tabs" id="request">Request</button>
                    <button type="button" class="tabs" id="pending">Pending</button>
                    <button type="button" class="tabs" id="done">Done</button>
                </div>
                <div class="request">
                    <div class="conent-optimization inner-request">
                        <h4 class="inform">Get content written</h4>
                        <button type="button" class="btn choose " id="optimize">Content Optimization</button>
                    </div>
                    <div class="web-dev inner-request">
                        <h4 class="inform">Get your website built</h4>
                        <button type="button" class="btn  choose" id="webdesign">Web Development</button>
                    </div>
                    <div class="inner-request2">
                        <h4 class="inform">No pending Requests!!</h4>
                    </div>
                    <div class="inner-request3">
                        <h4 class="inform">No done jobs!!</h4>
                    </div>
                </div>
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
