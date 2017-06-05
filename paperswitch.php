<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


    <script type="text/javascript" src="js/shCore.js"></script>
    <script type="text/javascript" src="js/shBrushXml.js"></script>
    <script type="text/javascript" src="js/shBrushJScript.js"></script>
    <script src="js/jquery.easing.js"></script>
    <script src="js/jquery.mousewheel.js"></script>
    <script defer src="js/demo.js"></script>


    <title>PaperSwitch</title>
    <link rel="shortcut icon" href="images/CB_just_logo.ico">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="Responsive%20Sidebar%20Push%20Menu%20Demo_files/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/demo.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom-style.css">
    <link rel="stylesheet" href="css/paperswitch.css">

    <script src="css/jquery.js"></script>
    <script src="js/modernizr.js"></script>
    <!-- jQuery -->

    <script src="js/jquery.js"></script>

    <!-- Slidx -->
    <script type="text/javascript" src="js/slidx.js"></script>

<style>
.spe: hover{
 color:#f6ff00 !important;
    
}
.spe{
 color:#00deff !important;

}
.btn1:hover {
 border: 2px solid #f6ff00;
 color:#f6ff00;
    }
    .btn1 {
        cursor:pointer;
     transition: 0.5s;
    display: inline-block;
    margin-bottom: 15px;
    padding: 14px 28px 13px 28px;
    line-height: 1;
    border: 2px solid #00deff;
    border-radius: 5px;
    font-size: 12px;
    color:#00deff;
    
}
@media screen and (max-width: 480px){
.auto-text {
padding:0 30px;
}
.install-slider p{
font-size:17px;
}
#installation {
margin: 50px auto;
width: 58%;
}
    .contact {
    float: none;
    margin-right: 35px;
    width: 100%;
}
    .icon {
    float: none;
    width: 100%;
}

    .switch_sensor-img img {
  
    margin-top: 0px;
}
   .text {
    
    width: 83%;
    top: 25px;
    margin: -5% auto 18% 17%;
    margin-left: 10%;
    
}
    .ps_logo {
   
    position: absolute;
    left: 105px;
    width: 50%;
    z-index: 999999;
    top: 10px;
}
  .margins{
margin-top:132px;
}}
@media screen and (min-width: 481px){
.possibilities h2 {
position: absolute;
margin: 3% 4%;
font-size: 40px;
}
  .spe1{
position:relative;
top:-250px;
}
.margins{
margin-top:400px;
}
    .security-img img {
   
    position: relative;
    top: -6px;
}
p {
    font-size: 17px;
}
   h3{
font-size: 40px;

    }
}
</style>
</head>

<body>
<!-- Side Menu -->
<div style="position: fixed; top: 0px; width: 250px; max-width: 100%; height: 100%; overflow-y: auto; transition: all 0.5s ease 0s; z-index: 98; right: -250px;"
     class="slidx-menu">
    <ul class="list-unstyled">
        <li><a href="#"><H2>PAPER SWITCH</H2></a>
        </li>
        <li><a href="#slider"> HOME</a>
        </li>
        <li><a href="#features"> FEATURES</a>
        </li>
        <li><a href="#installation"> 2 STEPS TO START</a>
        </li>
        <li><a href="#footer"> CONTACT</a>
        </li>
    </ul>
</div>

<!-- Side Menu Button -->
<div id="wrapper">
    <div class="container-fluid">
        <a style="position: fixed; top: 0px; transition: all 0.5s ease 0s; z-index: 97; right: 0px;"
           id="slidx-button"><img src="images/triger.png">
        </a>
    </div>
</div>

<!-- First Slider -->
<div id="slider" style="position:relative;">
    <div class="logo">
        <a href="/"></a>
    </div>
       <div style="width:350px;margin:0 auto;">
        <img  id="ps_logo" class = "ps_logo"src="images/PS_logo.png">
           
      </div>
    <img id="first_image" src="images/home_PS.jpg">

    <div class="text" id="opening_block">
        <div class="text-sec">
            <!--&lt;!&ndash; <img src="images/CB_white.png" /> &ndash;&gt;-->
            <!--&lt;!&ndash;<h3>CloverBoard</h3>&ndash;&gt;-->
    No internet. No smartphone. Just an intelligent switch.<br>
    <div class="btn1 margins" id="click">LEARN  &nbsp;MORE</div><div id="11" class="spe1"></div>
            <!--&lt;!&ndash; <p>CloverBoard is a Wi-Fi enabled switch that gives convenience,energy saving and security.</p>-->
            <!--<p>It senses motion,follows your routine and communicate together to intelligently control appliances.</p> &ndash;&gt;-->
        </div>
       
    </div>
</div>
<div class="row" style="padding-bottom:50px;">
    <div class="col-sm-6" style="margin:0 auto;float:none;text-align:center;padding10px;">
       <h3> Automation and Simplicity.</h3>
        
                    <p>PaperSwitch is a touch switch that can also be operated by a handheld remote.</p>
                    <p>It senses occupancy and ambient light for intelligent control of appliances.</p>
                    
    </div>

</div>
<div id="auto-mode" style="position:relative;">
    <img src="images/auto-mode.jpg">

    <div class="auto-text" style="top:-100px;">
        <h3 >When you save energy....it shows.</h3>
    </div>
    <br>

    <div class="auto-text">
        <p>Long press a button to place an appliance in AUTO mode.
            It greets you with a green halo & the appliance switches on only when needed.</p>

        <p>It senses light, knows time of the day and keeps learning to give intelligent control.</p>

        <p>Save 10-15% on heading and cooling cost $ 30-40% on lighting cost.</p>
    </div>
</div>
<!-- <div class="auto-text">
    <h2>When you save energy....it shows.</h2>
</div>
<br>
<div class="auto-text">
    <p>Long press a button to place an appliance in AUTO mode.</p>
     It greets you with a green halo & the appliance switches on only when needed.</p>
    <p>It senses light, knows time of the day and keeps learning to give intelligent control.</p>
    <p>Save 10-15% on heading and cooling cost $ 30-40% on lighting cost.</p>
</div> -->

</div>

<div id="features">

</div>
<div class="security">
    <h3>Everything you need...</h3>
    <div class="col-sm-6 theme-right">
        <div class="security-img">
            <p><img src="images/hand_remote.png" style="float:top" /><span align="bottom" style="display:block;text-align:right;margin-right:20%;margin-top:-5%">Remote</span></p>

        </div>
    </div>

    <div class="col-sm-6 theme-left">
        <div class="switch_sensor-img">

            <p><img src="images/PS_sensor.png" style="float:top" align="top" />
                <span align="left" style="display:block; margin-top:-5%">Sensor</span>
                <span align="middle" style="display:block; margin-top:-3%">Switch</span>
                </p>


            <!--<p>Sensor Switch</p>-->

        </div>

    </div>

</div>
<div class="possibilities">
    <h2>Beautifully simple.</h2>

    <div class="im">
        <img src="newimage/ps_schematics5.jpg">
    </div>


</div>


<div id="installation">
    <div class="install-slider">
        <p>What’s the point of anything if you do not understand it...</p>

        <p>or cannot install it.</p>

        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="images/71.jpg"/>
                </li>
                <li>
                    <img src="images/72.jpg"/>
                </li>

            </ul>
        </div>
        <p>2 steps to start using PaperSwitch. The simplest installation imaginable.</p>
    </div>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(function () {
            SyntaxHighlighter.all();
        });
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</div>


<div id="footer">
    <div class="f-container">
        <div class="contact">
            <h3>Write to us</h3>
            <a href="#">hello@basilsystems.com</a>

            <h3>Call us</h3>

            <p>+91 888 450 3432 / 1652</p>
        </div>
        <div class="icon">
           <a href="https://www.facebook.com/pages/CloverBoard/3289123977816368?ref=settings"><img
                          class="fb1" style="width:46px;" src="newimage/icons/fb.png">
                    </a>
                    <a href="https://twitter.com/Basil_Systems"><img class="twitter1" style="width:46px;" src="newimage/icons/twitter.png">
                    </a>
                    <a href=""><img id="blog1"  style="width:46px;"src="newimage/icons/blog.png">
                    </a>

            <form name="form" method="post" action="#">
                <input type="text" placeholder="enter email for basil’s news." name="subscribe_email">
                <input type="submit" hidden="true"/>
            </form>
            <p>*No spamming. We promise</p>
        </div>
        <div class="copyright">
            <p>©2015 basil systems. All rights reserved. Designs patented.</p>
        </div>
    </div>
</div>


</body>

</html>
<?php
    if(isset($_POST['subscribe_email'])) { //only do file operations when appropriate
        $a = $_POST['subscribe_email'];
        $myFile = "emails.txt";
        $fh = fopen($myFile, 'a') or die("can't open file");
        fwrite($fh, $a."\n");
        fclose($fh);
    }
?>
<script src="js/jquery.js"></script>


   <script>
        $(document).ready(function (){
            $("#click").click(function (){
                //$(this).animate(function(){
                    $('html, body').animate({
                        scrollTop: $("#11").offset().top
                    }, 1500);
                //});
            });
        });
    </script>
<script>
            $('document').ready(function ()
        {
            $(function ()
            {
                $(".fb1")
                    .mouseover(function ()
                    {
                        var src ="newimage/icons/fbhover.png";
                        $(this).attr("src", src);
                    })
                    .mouseout(function ()
                    {
                        var src = "newimage/icons/fb.png";
                        $(this).attr("src", src);
                    });
            });
        });
</script>

<script>
            $('document').ready(function ()
        {
            $(function ()
            {
                $(".twitter1")
                    .mouseover(function ()
                    {
                        var src ="newimage/icons/twitterhover.png";
                        $(this).attr("src", src);
                    })
                    .mouseout(function ()
                    {
                        var src = "newimage/icons/twitter.png";
                        $(this).attr("src", src);
                    });
            });
        });
</script>
<script>
            $('document').ready(function ()
        {
            $(function ()
            {
                $("#blog1")
                    .mouseover(function ()
                    {
                        var src ="newimage/icons/bloghover.png";
                        $(this).attr("src", src);
                    })
                    .mouseout(function ()
                    {
                        var src = "newimage/icons/blog.png";
                        $(this).attr("src", src);
                    });
            });
        });
</script>