<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 12/4/2015
 * Time: 9:25 AM
 */
require_once './inc/functions.php';

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Univeristy of Eldoret SDA Church | Blog</title>
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
<div class="banner two">
    <h2>UoESDA blog</h2>
    <h6></h6>
</div>
<div class="blog-section">
    <div class="container">
        <?php
        $blog_post=count(pullBlogPost(6));

        ?>

            <?php
            for($i=0;$i<=$blog_post-1;$i++){

            ?>
            <div class="col-md-6 grid_3">
                <h3><a href="read_blog.php?blid=<?php echo pullBlogPost(6)[$i]['blgid'];?>"><?php echo pullBlogPost(6)[$i]['pst_title']; ?></a></h3>
                <a href="read_blog.php?blid=<?php echo pullBlogPost(6)[$i]['blgid'];?>"><img src="<?php echo pullBlogPost(6)[$i]['blog_img'];?>" class="img-responsive" alt=""/></a>
                <div class="admin-pic">
                    <a href="#"><img src="<?php echo "./admin/".getAdmin(pullBlogPost(6)[$i]['posted_by'])['prof_pic']; ?>" class="img-responsive" title="admin" alt="" style="height: 90px;width: 90px; border-radius:50%;"/></a>
                </div>
                <div class="blog-poast-info">

                    <ul>
                        <li><i class="admin"> </i><a class="admin" href="#"><span> </span> Admin </a></li>
                        <li><i class="date"> </i><span> </span><?php echo date("d-M-Y",pullBlogPost(6)[$i]['post_date']);?></li>
                    </ul>
                </div>
                <?php
                 echo pullBlogPost(6)[$i]['pst_content'];
                ?>
                <div class="button"><a class="read trd" href="read_blog.php?blid=<?php echo pullBlogPost(6)[$i]['blgid'];?>">Read More</a></div>
            </div>
            <?php
            }
            ?>
            <div class="clearfix"></div>



        <!--start-blog-pagenate-->
        <div class="blog-pagenat">
            <ul>
                <li><a class="frist" href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a class="last" href="#">Next</a></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        <!--//End-blog-pagenate-->
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