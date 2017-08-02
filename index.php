<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <meta charset = "utf-8">
    <?php include("jsfiles.php"); ?>
    <script type="text/javascript" src="./js/js/logindisplay.js"></script>
    <link rel="stylesheet" href="./css/css/landing.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>
<div class="outside">
    <ul class="ul-header">
            <li class="logo"><h3>ACE</h3></li>
       <!-- <div class="toleft uldiv">-->
        <div class="right">
            <li><a href=""><h4>Blog</h4> </a></li>
            <li><a href="#"><h4>About</h4></a></li>
            <li><a href="#"><h4>News</h4></a></li>
        </div>
            <button type="button" class="loginbtn2 signlogin" id="loginbtn">Login</button>
            <button type="button" class="signupbtn signlogin">Sign Up</button>
      <!--  </div>-->
    </ul>
    <div class="home-page">
        <div class="inner-home">
        </div>
    </div>
    <div class="bodycontent">
        <div class="what-we-do">
            <div class="holder">
                <div class="writing se">
                    <i class="fa fa-book fa-4x icon"></i>
                    <h5 >Content Optimization</h5>
                    <p>Blog content. Reviews. Essays. Have it all done for you proffesionally and on time so you remain stress free
                    </p>
                </div>
                <div class="tocenter-holder se">
                    <i class="fa fa-desktop fa-4x icon"></i>
                    <h5>Web Design & Development</h5>
                    <p>Beautifully crafted visual effects that bring
                        out spectacular UI/UX design and well structured front-end and backend
                    </p>
                </div>
            </div>
        </div>
        <div class="contactUs">
           <form >
                <div class="inTouch">
                <h2>Contact Us</h2>
                <input type="text" id="First-name"  placeholder="First name">
                <input type="text" id="Last-name" placeholder="Last name"><br>
                <input type="text" id="phone"  placeholder="Phone">
                <input type="email" id="email"  placeholder="Email"><br>
                <textarea  rows="7" class="form-control" placeholder="Message"></textarea><br>
                <button type="submit">Send</button>
                </div>
            </form>
        </div>
        <div class="footer">
            <div class="footerRight">
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms of Service</a></br></li></br>
            <span>Copyright<i class="fa fa-copyright"></i>2017</span>
            </div>
        </div>
    </div>
</div>
<div class="logininfo" title="Login">
<form method="Post" action="backend/login2.php" id="loginform" >
    <div class="holderlogin form-group">
        <div class="input-group margin-bottom-sm inputlg">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
        <input type="text" class="input-fields form-control" name="user" id="user" placeholder="Username">
        </div>
        <div class="input-group margin-bottom-sm inputlg">
            <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
        <input type="password" class="input-fields form-control" name="pass" id="pass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary form-control" id="login-btn" >Login</button>
    </div>
    <a class="loglinks" href="">Forgot Password?</a></br>
    <a href="" class="loglinks">Sign Up</a>
</form>
</div>
<div class="with-input-fields" title="Sign Up">
    <form role="form"name="signup" id="sign" method="post" action="backend/signup.php">
        <div class="form-group signup">
            <input type="text" class="user-name form-control" name="First_name" id="fname" placeholder="First name" required>
            <input type="text" class="user-name form-control" name="Last_name" id="lname" placeholder="Last name" required>
            <input type="text" class="signup-input form-control" name="Email" id="mail" placeholder="Email" required>
            <input type="text" class="signup-input form-control" name="uname" id="uname" placeholder="Username" required>
            <input type="password" class="signup-input form-control" name="Password" id="pass" placeholder="Password" required>
            <input type="password" class="signup-input form-control" name="Retype_Password" id="pass2" placeholder="Retype Password" required>
            <button type="submit" class="form-control btn" id="sub" >Submit</button>
        </div>
    </form>
</div>
</body>
</html>
