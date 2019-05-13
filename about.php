<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 12/4/2015
 * Time: 9:11 AM
 */
require_once './inc/functions.php';
require_once './inc/db.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>UoESDA Church | About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Kindness Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome/css/font-awesome.min.css" rel='stylesheet' type='text/css' />
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
<!--start-about-->
<div class="about">
    <div class="container">
        <div class="about-top">
            <div class="col-md-7 about-top-right">
                <h4>University of Eldoret Seventh Day Adventist Church</h4>
                <p></p>
            </div>
            <div class="col-md-5 about-top-left">
                <img src="slider/08.JPG" class="img-responsive" alt=""/>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--charities-->
<div class="welcome">
    <div class="container">
        <!--start-content-->
        <div class="welcome-top">
            <h3>Departments</h3>
        </div>
        <div class="charitys">
            <div class="col-md-4 chrt_grid">
                <div class="chrty">
                    <h3>Elders Department</h3>
                    <p>This is the most key department in the church recognized as strong spiritual leaders in the church. Elders conduct the
                        services of the church and minister in both word and doctrine. Elders are charged with....
                        <a class="more" href="elders.php" style="background-color: #00733e">MORE</a>
                    </p>

                </div>
            </div>

            <div class="col-md-4 chrt_grid middle">
                <div class="chrty">
                    <h3>Deaconry Departent</h3>
                    <p>A department in the church which takes care of the church as a whole.It comprises of ordained deacons and deaconesses
                        who are prayed for. The deaconry department...
                        <a class="more" href="deconry.php" style="background-color: #00733e">MORE</a></p>
                </div>
            </div>

            <div class="col-md-4 chrt_grid">
                <div class="chrty">
                    <h3>Youth Department</h3>
                    <p>A department responsible for nourishing the youth,ambassador, pathfinders, adventurers and children as a whole. It
                        plays the role of assisting youths realise...
                        <a class="more" href="youth.php" style="background-color: #00733e">MORE</a></p>
                </div>
            </div>
            <div class="clearfix"></div><br><br><br>

            <div class="col-md-4 chrt_grid ">
                <div class="chrty">
                    <h3>Prayer Department</h3>
                    <p>This department has the following objectives.Coordinate all prayer meeting in the church.:...
                        <a class="more" href="prayerdept.php" style="background-color: #00733e">MORE</a></p>
                </div>
            </div>

            <div class="col-md-4 chrt_grid middle">
                <div class="chrty">
                    <h3>Health and Temperance Department</h3>
                    <p>A department whose responsibilites are as follows:. Dispersing members after the divine hour...
                        <a class="more" href="socialdep.php" style="background-color: #00733e">MORE</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!---->
</div>
<svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path id="trianglePath1" d="M0 0 L50 100 L100 0 Z"></path>
    <path id="trianglePath2" d="M50 100 L100 40 L100 0 Z"></path>
</svg>
<!-- events -->
<div class="events">
    <div class="container">
        <div class="event-grids">
            <div class="col-md-6 upcoming">
                <h3>Upcoming Events</h3>
                <?php
                $event_count=count(pullEvents(3));
                for($i=0;$i<=$event_count-1;$i++){
                    $event_title=pullEvents(3)[$i]['ev_title'];
                    $event_start=pullEvents(3)[$i]['ev_start'];
                    ?>
                    <div class="family">
                        <div class="twenty">
                            <h4><?php echo date("d",$event_start);//date ?></h4>
                            <p><?php echo strtoupper(date("M",$event_start));//month name ?></p>
                        </div>
                        <div class="sunday">
                            <h5><?php echo $event_title; ?></h5>
                            <p><?php echo date("l",$event_start);//day name ?> | <?php echo date("g:i a",$event_start); //time am pm
                                ?></p>
                        </div>
                        <div class="mor">
                            <a class="more" href="#">MORE</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md-6 keep">
                <h3>Recent News</h3>
                <?php
                echo "<p>".getLatestNews()['pst_content']."</p>";
                ?>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--events-->


<svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path id="trianglePath3" d="M0 0 L50 100 L100 0 Z"></path>
    <path id="trianglePath4" d="M50 100 L100 40 L100 0 Z"></path>
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