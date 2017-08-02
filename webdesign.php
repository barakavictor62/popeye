<!DOCTYPE html>
<?php
include("./backend/myacc.php");
?>
<html lang="en">
<head>
    <?php include("jsfiles.php");?>
    <script type="text/javascript" src="js/js/optimization.js"></script>
    <link rel="stylesheet" href="css/css/webdesign.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="contain">
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
    <form method="post" action="" id="optimization-form">
        <div id="form-header">
            <h3>Request Form</h3>
        </div>
        <div class="inner-form">
            <label for="company-name">Company name</label>
            <input class="form-control" id="company-name">
            <label for="webtype">Type of website</label>
            <select class="form-control" id="webtype">
                <option disabled hidden selected></option>
                <option>Personal</option>
                <option>Business</option>
                <option>Educational</option>
                <option>Arts and Entertainment</option>
                <option>Health and  Fitness</option>
            </select>
            <label for="nav-contents">Navbar contents</label>
            <textarea class="form-control" id="nav-contents" rows="2"></textarea>
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="5"></textarea>
            <label for="key-words">Additional instructions</label>
            <textarea class="form-control" id="key-words" rows="3"></textarea>
            <button type="submit" class="form-control btn btn-primary">Submit</button>
        </div>
    </form>

</div>
<div class="footer">
    <div class="footerRight">
        <li class="hedorfoot"><a href="">Privacy Policy</a></li>
        <li class="hedorfoot"><a href="">Terms of Service</a></br></li></br>
        <span>Copyright<i class="fa fa-copyright"></i>2017</span>
    </div>
</div>
</body>
</html>