<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 12/3/2015
 * Time: 11:47 AM
 */
require_once './inc/functions.php';
if(isset($_POST['btn_send'])){
    $sname=trim($_POST['s_name']);
    $smail=trim($_POST['s_email']);
    $subject=trim($_POST['s_subject']);
    $meso=trim($_POST['s_meso']);

    if($sname && $smail && $subject && $meso){
        if(ValidateEmail($smail)){
            $data=array(null,$sname,$smail,$subject,$meso,time());
            if(InsertContent("SendMessage",$data)){
                $success="Message sent successfully!";
            }else $error="Invlid email address";
        }else $error="Invlid email address";
    }

}
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>UoESDA Church | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="University of Eldoret Seventh Day Adventist,UOESDA,SDA groups in Kenya" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"> </script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700|Playball' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <link href="css/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css' />
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <!---End-smoth-scrolling---->
</head>
<body>
<!--start-home-->
<?php include 'header.php'; ?>
<div class="banner two">
    <h2>Contact Us</h2>
    <h6></h6>
</div>
<div class="container">
    <div class="contact">
        <div class="col-md-6 contact-top">
            <h3>Send us a message</h3>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="con-text">
                    <span>Your Name </span>
                    <input type="text" name="s_name" required="required">
                </div>
                <div class="con-text">
                    <span>Your Email </span>
                    <input type="text" name="s_email" required="required">
                </div>
                <div class="con-text">
                    <span>Subject</span>
                    <input type="text" name="s_subject" required="required">
                </div>
                <div class="con-text">
                    <span>Your Message</span>
                    <textarea name="s_meso" required="required"> </textarea>
                </div>
                <input type="submit" value="SEND" name="btn_send">
            </form>
        </div>
        <div class="col-md-6 contact-top">
            <h3 class="info">Info</h3>
            <p>We are situated at the University of Eldoret Main Campus along Eldoret-Ziwa road</p>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18977.906551388736!2d35.29914463139077!3d0.5807090887446194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178104290dcc2a0d%3A0x2ab96c7c18b0fe0e!2sUniversity+Of+Eldoret!5e0!3m2!1sen!2s!4v1449207980660"></iframe>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path id="trianglePath5" d="M0 0 L50 100 L100 0 Z"></path>
    <path id="trianglePath6" d="M50 100 L100 40 L100 0 Z"></path>
</svg>
<!--footer-->
<?php include 'footer.php'; ?>

<!--start-smoth-scrolling-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>