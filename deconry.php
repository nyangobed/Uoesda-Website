<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>University of Eldoret SDA Church | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css' />
    <style type="text/css">
        .dt-table{
            border-collapse: collapse;
            border-color:#CCC;
            width: 80%;
        }
        .dt-table td{
            padding-left: 5px;
            border: 1px solid #cccccc;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .dt-table tr:nth-child(even){
            background-color: #fff4ce;
        }
        .dt-table tr:nth-child(1){
            background-color: #008d4c;
            color: #FFFFff;

        }
    </style>
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
<!--welcome-->
<div class="clearfix"></div>
<div class="banner two">
    <h2>Deaconry Department</h2>
    <h6></h6>
</div>
<!--error-->
<div class="error">
    <div class="container">
        <div class="story">
            <p>
                A department in the church which takes care of the church as a whole.It comprises of ordained deacons and deaconesses
                who are prayed for. The deaconry department has the following roles:

            </p><br>
            <ol>
                <li>
                    Offering assistance at services and meetings through welcoming of members and visitors as well as cooperating
                    with elders and pastors for smooth running of meetings.
                </li>
                <li>
                    Visitation of members.
                </li>
                <li>
                    Preparation of baptismal services.
                </li>
                <li>
                    Assistance of communion services.
                </li>
                <li>
                    Taking care of the sick and aiding the poor and the unfortunate.
                </li>
            </ol><br>
            <p style="text-decoration: underline"><b>Aims of the Deaconry department</b></p><br>
            <ol>
                <li>Ensure order of the church through proper cleaning and arrangements</li>
                <li>Reach for the needy and offer a helping hand</li>
                <li>Maintenance of church property</li>
                <li>Kickstart income generating projects for the church</li>
                <li>Carry out inreach programs to both Adventist and non-Adventist</li>
                <li>Participate in missions and crusades</li>
            </ol><br>
            <p>Current serving Leaders:</p><br>
            <table border="1" style="" class="dt-table">
                <tr>
                    <th style="text-align: center;">Name</th>
                </tr>
                <tr>
                    <td>Hesbone Gekonge - Head Deacon</td>
                </tr>
                <tr>
                    <td>Ruth Kerubo - Head Deaconess</td>
                </tr></table><br><br>
                
        </div>
    </div>
</div>
<svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path id="trianglePath5" d="M0 0 L50 100 L100 0 Z"></path>
    <path id="trianglePath6" d="M50 100 L100 40 L100 0 Z"></path>
</svg>
<!--footer-->
<!--footer-->
<?php include 'footer.php'; ?>

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