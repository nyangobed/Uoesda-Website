<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 12/3/2015
 * Time: 10:29 AM
 */
require_once './inc/functions.php';
require_once './inc/db.php';
?>
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
    <link rel="shortcut icon" href="sda.ico">
    <style>
        .banner-2{
            position: relative;
            min-height: 100px;
            width: 100%;
        }
        .jssorb05 {
            position: absolute;
        }

        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('./slider/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }

        .jssorb05 div {
            background-position: -7px -7px;
        }

        .jssorb05 div:hover, .jssorb05 .av:hover {
            background-position: -37px -7px;
        }

        .jssorb05 .av {
            background-position: -67px -7px;
        }

        .jssorb05 .dn, .jssorb05 .dn:hover {
            background-position: -97px -7px;
        }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('./slider/a22.png') center center no-repeat;
            overflow: hidden;
        }

        .jssora22l {
            background-position: -10px -31px;
        }

        .jssora22r {
            background-position: -70px -31px;
        }

        .jssora22l:hover {
            background-position: -130px -31px;
        }

        .jssora22r:hover {
            background-position: -190px -31px;
        }

        .jssora22l.jssora22ldn {
            background-position: -250px -31px;
        }

        .jssora22r.jssora22rdn {
            background-position: -310px -31px;
        }
        .cp-tit{
            padding: 20px;
            background-color: #0f6644;
            color: #FFFFFF;
            opacity: 0.9;
            width: auto;
            height: auto;
            border-radius: 4px;
        }
    </style>
    <script src="js/jquery.min.js"> </script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="js/slide.js"></script>
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
<div class="banner-2">

        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow:
        hidden; visibility: hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                <div style="position:absolute;display:block;background:url('./slider/loading.gif') no-repeat center center;top:0px;
                left:0px;width:100%;height:100%;"></div>
            </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="./slider/13.jpg" />
                    <div style="position: absolute; top: 30px; left: 30px; font-size: 50px; color:
                    #ffffff; line-height: 60px;" class="cp-tit">Finalist</div>
                    <div style="position: absolute; top: 300px; left: 30px;  font-size: 30px; color:
                    #ffffff; line-height: 38px;">Finalist last moment in school</div>
                </div>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="./slider/10.jpg" />
                    <div style="position: absolute; top: 30px; left: 30px;  font-size: 50px; color:
                    #ffffff; line-height: 60px;" class="cp-tit">picnic</div>
                    <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color:
                    #ffffff; line-height: 38px;">AM Picnic to mlango falls</div>
                </div>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="./slider/pokot.png" />
                    <div style="position: absolute; top: 30px; left: 30px;  font-size: 50px; color:
                    #ffffff; line-height: 60px;" class="cp-tit">Mission</div>
                    <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color:
                    #ffffff; line-height: 38px;">Mission at West Pokot</div>
                </div>
                <div data-p="225.00" style="display: none;">
                    <img data-u="image" src="./slider/04.jpg" />
                    <div style="position: absolute; top: 30px; left: 30px;  font-size: 50px; color:
                    #ffffff; line-height: 60px;" class="cp-tit">Members</div>
                    <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color:
                    #ffffff; line-height: 38px;">A group of UoESDA members</div>
                </div>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        </div>
</div>
<!--banner-bottom-->
<div class="banner-bottom">
    <div class="container">
        <ul id="flexiselDemo3">
            <li>
                <div class="biseller-column">
                    <div class="banner-grid red">
                        <h3>Our mission</h3>
                        <p>To preach the everlasting gospel in context of three angels message; REVELATION 14:6-12</p>
                        <div class="read-more two"> <a class="read two" href="about.php">Read More</a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="biseller-column">
                    <div class="banner-grid yewllow">
                        <h3>Our vision</h3>
                        <p>To win as many souls as possible for God.</p>
                        <div class="read-more two"> <a class="read two" href="about.php">Read More</a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="biseller-column">
                    <div class="banner-grid green">
                        <h3>Elders Department</h3>
                        <p>The major department of the spiritual leaders who are in charge of the church.</p>
                        <div class="read-more two"> <a class="read two" href="elders.php">Read More</a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="biseller-column">
                    <div class="banner-grid">
                        <h3>UoESDA bot</h3>
                        <p>This is an automated reminder to aid church members keep track of activities.</p>
                        <div class="read-more two"><a class="read two" href="#">Read More</a></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems:3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint:480,
                        visibleItems:2
                    },
                    landscape: {
                        changePoint:640,
                        visibleItems:2
                    },
                    tablet: {
                        changePoint:768,
                        visibleItems:3
                    }
                }
            });

        });
    </script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
</div>
<!--welcome-->
<div class="welcome">
    <div class="container">
        <div class="welcome-top">
            <h3>Welcome !</h3>
            <h6>The University of Eldoret Seventh Day Adventist Church</h6>
            <p>
                A message from the Head Elder:<br>
                In these last days, we look forward to God's call to faithfulness to the Holy Word, Church and prophetic movement
                . Jesus Christ is our role model and Savior. Through  His righteousness and grace, we can be faithful because He is
                faithful. God has called us to be a people with a mission; a wonderful mission indeed, to proclaim the Three Angel's
                messages and to share the wonderful news of Christ's soon return. This divinely appointed mission is the reason why the
                Seventh-Day Adventist Church exists and it is a calling given to everyone (Joel 2:27-28). The light that God has given
                His people is not to be shut up within the churches that already know the truth. My beloved brothers and sisters, 
                this is the exciting future for which you and I are being empowered and equipped to finish God's great work as we
                proclaim those mighty messages. Only by relying completely on Jesus and the power of the Holy Spirit; we will be
                able to accomplish anything. God is preparing us for something unusual. Are we ready to answer Heaven's call? Are we
                willing to dedicate ourselves fully to the Lord and allow Him to work through us to reach those perishing? Get
                ready! Get ready!
            </p>
        </div>
    </div>
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
                  <img data-u="image"  src="./slider/NEW-animated-gif.gif" />
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
<!--events -->
       <div>
       
       
       
        
            <b><font size=17>Click images to;</font></b><p>
            
             <table align="right"><tr> <a href="https://news.adventist.org/en/"><img src="slider/news-65344_1920.jpg" width="15%" length="15%"> access Adventist news</a></tr></table>
             
              <table align="left"><tr><a href="https://www.adventist.org">  <img src="images/sda.png" width="15%" height="15%">General Conference</a></tr></table>
             
             
             <table align="center"><tr> <a href="http://www.whiteestate.org/"> <img src="slider/ellen_white_008.jpg" width="15%" length="25%">White Estate </a> 
            
              </tr></table>
            <a href="home/uoesdaor/public_html/downloads"target="_blank">Download </a> 
              
            </div>
<div class="team">
    <div class="container">
        <div class="event-grids">
            <div class="col-md-6 upcoming">
                <h3>Audio Sermons</h3>
                <?php
                $audio_count=count(pullAudioFiles(3));
                for($i=0;$i<=$audio_count-1;$i++) {
                    $pos_date=pullAudioFiles(3)[$i]['post_date'];
                    $file_title=pullAudioFiles(3)[$i]['aud_title'];
                    $file_loc=pullAudioFiles(3)[$i]['aud_link'];
                ?>
                    <div class="family">
                        <div class="twenty">
                            <h4><?php echo date("d",$pos_date); ?></h4>
                            <p style="color: #FFFFFF;"><?php echo strtoupper(date("M",$pos_date)); ?></p>
                        </div>
                        <div class="sunday">
                            <h5 style="color: #FFFFFF;"><?php echo $file_title; ?></h5>

                            <p></p>
                        </div>
                        <audio src="<?php echo $file_loc; ?>" controls="controls" style="margin-top: 8px;">
                            Your browser does not support the audio element
                        </audio>
                        <div class="clearfix"></div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-md-6 keep">
                <h3>Videos</h3>
                <?php
                $vid_count=count(pullVideos(6));
                for($i=0;$i<=$vid_count-1;$i++){
                ?>
                    <div class="video-grid">
                        <iframe class="y-vid" src="<?php echo pullVideos(6)[$i]['vid_link']; ?>">hello</iframe>
                    </div>
                <?php
                }
                ?>


            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
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