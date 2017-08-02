<!DOCTYPE html>
<?php
include("./backend/myacc.php");
?>
<html>
<head>
    <?php include("jsfiles.php");?>
    <script type="text/javascript" src="js/js/index.js"></script>
    <link rel="stylesheet" href="css/css/style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>
<body>
<div class="header">
    <ul>
        <div class="toright uldiv">
            <li class="hedorfoot"><a href="index.php"><h5>ACE</h5></a></li>
        </div>
        <div class="toleft uldiv">
            <li class="right hedorfoot">Logged in as <?php echo $_SESSION["user"]?></li>
            <button type="button" class="btn btn-info" id="logout">Logout</button>
        </div>
    </ul>
</div>
<div class="hold">
    <div class="side_bar col-lg-3">
        <input type="text" class="search form-control" placeholder="&#xf002;">
        <div class="imgmv">
            <img src="images/default.png">
        </div>
        <div class="inner-side-bar">
            <h3 id="inner-side-bar-menu">Menu</h3>
            <li><a href="">&nbsp;Home</a></li>
            <li><a  href="myaccount.php">Account</a></li>
            <li><a href="backend/wallet.php">&nbsp;My wallet</a></li>
        </div>
    </div>
    <div class="bodycontent">
        <div class="name">
            <div class="inner-name">
                <h2><?php echo  $vorname." ".$familiename; ?></h2>
                <h4>Kenya</h4>
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
                    <h5 class="inform">Get content written</h5>
                    <button type="button" class="btn choose " id="optimize">Content Optimization</button>
                </div>
                <div class="web-dev inner-request">
                    <h5 class="inform">Get your website built</h5>
                    <button type="button" class="btn  choose">Web Development</button>
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
        <ul>
            <li class="hedorfoot"><a href="">Privacy Policy</a></li>
            <li class="hedorfoot"><a href="">Terms of Service</a></br></li></br>
            <span>Copyright<i class="fa fa-copyright copyrightsymbol"></i>2017</span>
        </ul>
    </div>
</div>
</div>
</body>
</html>



<!DOCTYPE html>
<?php
include("./backend/myacc.php");
?>
<html lang="en">
<head>
    <?php include("jsfiles.php");?>
    <script type="text/javascript" src="js/js/optimization.js"></script>
    <link rel="stylesheet" href="css/css/optimization.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="full-container">
    <div class="header">
        <ul>
            <div class="toright uldiv">
                <li class="hedorfoot"><a href="index.php"><h5>ACE</h5></a></li>
            </div>
            <div class="toleft uldiv">
                <li class="right hedorfoot"><a href="#">Logged in as <?php echo $_SESSION["user"]; ?></a></li>
                <button type="button" class="btn btn-info" id="logout">Logout</button>
            </div>
        </ul>
    </div>
    <div class="contain">
        <div class="form">
            <div id="form-header">
                <h2>Request Form</h2>
            </div>
            <div class="inner-form">
                <form method="post" action="" id="optimization-form">
                    <label for="topic">Topic</label>
                    <select class="form-control" id="topic">
                        <option disabled hidden selected></option>
                        <option>Arts and Entertainment</option>
                        <option>Technology and science</option>
                        <option>Politics</option>
                        <option>Health and  Fitness</option>
                        <option>Education</option>
                    </select>
                    <label for="title">Title</label>
                    <input class="form-control" id="title">
                    <label for="tone">Tone</label><br>
                    <select id="tone">
                        <option disabled selected hidden></option>
                        <option>Proffessional</option>
                        <option>Friendly</option>
                        <option>Informal</option>
                    </select><br>
                    <label for="key-words">Key Phrases</label>
                    <textarea class="form-control" id="key-words" rows="3"></textarea>
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="5"></textarea>
                    <label for="duedate">Due Date</label><br>
                    <input type="date" class="form-control" id="duedate">
                    <label for="words">Word Count</label><br>
                    <select id="words">
                        <option disabled selected hidden></option>
                        <option>500</option>
                        <option>1000</option>
                        <option>1500</option>
                        <option>2000</option>
                    </select><br>
                    <label for="cost">Cost</label>
                    <input type="text" class=" form-control" id="cost">
                    <button type="submit" id="submit-btn" class="form-control btn btn-primary">Submit</button>
                </form>
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