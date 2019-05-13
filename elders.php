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
    <h2>Elders Department</h2>
    <h6></h6>
</div>
<!--error-->
<div class="error">
    <div class="container">
        <div class="story">
            <p>
                This is the most key department in the church recognized as strong spiritual leaders in the church. Elders conduct the services of the church and minister in both word and doctrine. Elders are charged with the responsibilities such as
                fostering prayer, Bible study, tithing, and running affairs of the church in conjuction with the Pastor of the church.
            </p><br>
            <p>Past First Elders include:</p><br>
            <table border="1" style="" class="dt-table">
                <tr>
                    <th style="text-align: center;">Name</th>
                    <th style="text-align: center;">Year of Service</th>
                </tr>
                <tr>
                    <td>Elder Peter Mbeche</td>
                    <td>2011</td>
                </tr>
                <tr>
                    <td>Elder Edwin Nyambare</td>
                    <td>2012</td>
                </tr>
                <tr>
                    <td>Elder Oyoo Wycliff</td>
                    <td>2013</td>
                </tr>
                <tr>
                    <td>Elder Doe Samuel</td>
                    <td>2014</td>
                </tr>
                <tr>
                    <td>Elder Ogindi Calvince</td>
                    <td>2015</td>
                </tr>
                <tr><td>Elder Ogindi Calvince</td>
                <td>2016</td>
                </tr>
</tr>
                <tr><td>Elder Obare Obed</td>
                <td>2017</td>
                </tr>
            </table><br><br>
            <p>Current serving Elders:</p><br>
            <table border="1" style="" class="dt-table">
                <tr>
                    <th style="text-align: center;">Name</th>
                </tr>
                <tr>
                    <td>Elder Obed Obare - First Elder</td>
                </tr>
                <tr>
                    <td>Elder Joel Rotich</td>
                </tr>
                <tr>
                    <td>Elder Yego Abraham</td>
                </tr>
                <tr>
                    <td>Elder Curtis Chepsiror</td>
                </tr>
                <tr>
                    <td>Elder Oketch Chrysantus</td>
                </tr>
                <tr>
                    <td>Elder Odero Brian</td>
                </tr>
                <tr>
                    <td>Elder Wycliffe Akumu</td>
                </tr>
                
            </table><br><br>
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