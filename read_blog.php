<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 12/4/2015
 * Time: 3:24 PM
 */
require_once './inc/functions.php';

if(isset($_GET['blid'])){
    $blog_id=trim($_GET['blid']);
    if(checkBlogById($blog_id)){
        $blog=pullSpecificBlogPost($blog_id);

        if(isset($_POST['btnsend'])){
            $uname=trim($_POST['uname']);
            $umail=trim($_POST['umail']);
            $ucomment=trim($_POST['ucomment']);
            $blogId=trim($_POST['bid']);
            $avatar=trim($_POST['av_type']);
            if($uname && $umail && $ucomment){
                if(ValidateEmail($umail)){
                    $data=array(null,$blogId,$uname,$umail,$ucomment,$avatar,time());
                    if(InsertContent('comments',$data)){
                        $success="Comment posted";
                    }else $error="Oops, an error occurred";
                }else $error="Invalid email";
            }else $error="Form elements cannot be null";
        }

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>UoESDA Church | Read Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Kindness Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!--custom-files-->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
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
<?php include'./header.php'; ?>
<div class="banner two">
    <h2>UoESDA blog</h2>
    <h6></h6>
</div>
<!--welcome-->
<div class="blog-section">
    <div class="container">
        <div class="blog-top">
            <div class="grid_3 two">
                <h3><?php echo $blog['pst_title']; ?></h3>
                <img src="<?php echo $blog['blog_img']; ?>" class="img-responsive" alt=""/>
                <div class="admin-pic">
                    <a href="#"><img src="<?php echo "./admin/".getAdmin($blog['posted_by'])['prof_pic']; ?>" class="img-responsive" title="admin" alt="" style="height: 90px;width: 90px; border-radius:50%;"/></a>
                </div>
                <div class="blog-poast-info">
                    <ul>
                        <li><i class="admin"> </i><a class="admin" href="#"><span> </span> Admin </a></li>
                        <li><i class="date"> </i><span> </span><?php echo date("d-M-Y",$blog['post_date']);?></li>
                    </ul>
                </div>
                <?php echo $blog['pst_content']; ?>
            </div>
            <div class="single">
                <div class="leave">
                    <h4>Leave a comment</h4>
                </div>
                <form id="commentform" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                    <p class="comment-form-author-name"><label for="author">Name</label>
                        <input id="author" type="text" name="uname" value="" size="30" aria-required="true" required>
                    </p>
                    <p class="comment-form-email">
                        <label class="email">Email</label>
                        <input id="email" type="text" name="umail" value="" size="30" aria-required="true" required>
                        <input type="hidden" name="bid" value="<?php echo $blog_id; ?>">
                    </p>
                    <p class="comment-form-comment">
                        <label class="comment">Comment</label>
                        <textarea id="comment" name="ucomment" required></textarea>
                    </p>
                    <p class="comment-form-comment">
                        <label class="comment">Choose Avatar type</label>
                        <input type="radio" name="av_type" value="M"> Male &nbsp;&nbsp; <input type="radio" name="av_type" value="F"> Female
                    </p>
                    <div class="clearfix"></div>
                    <p class="form-submit">
                        <input type="submit" id="submit" value="Send" name="btnsend">
                    </p>
                    <div class="clearfix"></div>
                </form>
                <div class="single_grid2">
                    <h4 class="tz-title-4 tzcolor-blue">
                        Comments
                    </h4>
                    <ul class="list">
                        <?php
                        $comments=count(PullUserComments(6,$blog_id));
                        for($i=0;$i<=$comments-1;$i++){
                            if(PullUserComments(6,$blog_id)[$i]['u_avatar']=="M"){
                                $img="images/male.png";
                            }else{
                                $img="images/female.png";
                            }
                        ?>
                            <li>
                                <div class="col-md-2 preview"><a href="#"><img src="<?php echo $img; ?>" class="img-responsive" alt=""></a></div>
                                <div class="col-md-10 data">
                                    <div class="title"><a href="#"><?php echo PullUserComments(6,$blog_id)[$i]['u_name']; ?></a><br><span
                                            class="m_14"><?php echo date("F d, Y",PullUserComments(6,$blog_id)[$i]['post_date']);
                                            ?></span></div>
                                    <p><?php echo PullUserComments(6,$blog_id)[$i]['u_comment']; ?></p>
                                </div>
                                <div class="clearfix" style="margin-top: 20px;"></div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<svg id="bigTriangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path id="trianglePath5" d="M0 0 L50 100 L100 0 Z"></path>
    <path id="trianglePath6" d="M50 100 L100 40 L100 0 Z"></path>
</svg>
<!--footer-->
<?php include'./footer.php'; ?>
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
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>
<?php
    }else header("location:blog.php");
}else header("location:blog.php");
?>