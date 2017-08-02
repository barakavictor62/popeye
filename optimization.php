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
            <select id="tone" class="form-control" >
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
            <select id="words" class="form-control">
                <option disabled selected hidden></option>
                <option>500</option>
                <option>1000</option>
                <option>1500</option>
                <option>2000</option>
            </select><br>
            <label for="cost">Cost</label>
            <input type="text" class=" form-control" id="cost">
            <button type="submit" id="submit-btn" class="form-control btn btn-primary">Submit</button>
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