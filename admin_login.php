<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 12/4/2015
 * Time: 3:24 PM
 */
require_once './inc/functions.php';
require_once './inc/PasswordHash.php';

if(isset($_POST['sbtn'])){
    $username=trim($_POST['user']);
    $password=trim($_POST['password']);

    if($username && $password){
        $details=adminExist($username);
        if(count($details) > 0){
            $pass=$details['password'];
            $hasher= new PasswordHash(8,false);
            if($hasher->CheckPassword($password,$pass)==1){
                secure_session();
                $_SESSION['adm_id']=$details['id'];
                header("location:./admin/dashboard.php");
            }else $msg="Incorrect password";
        }else $msg="User not found";
    }else $msg="Fields cannot be null";
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>UoESDA Church | Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Kindness Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!--custom-files-->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/extra.css" rel='stylesheet' type='text/css' />
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
<?php include'./header.php'; ?>
<div class="banner two">
    <h2>Admin Login</h2>
    <h6></h6>
</div>
<!--welcome-->
<div class="blog-section">
    <div class="container">
        <div class="col-md-4"></div>
        <div class="col-md-4 shadowed">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <div class = "input-group">
                    <span class = "input-group-addon addon"><i class="fa fa-user-md"></i> </span>
                    <input type = "text" class =" form-control" name="user" placeholder="Username" required="required">
                </div>
                <br>
                <div class = "input-group">
                    <span class = "input-group-addon addon"><i class="fa fa-key"></i> </span>
                    <input type = "password" class =" form-control" name="password" placeholder="******" required="required">
                </div>
                <br><br>
                <div class = "input-group">
                    <button type = "submit" class = "btn btn-primary" name="sbtn"><i class="fa fa-sign-in"></i> Login</button>
                </div>
                <br>
                <div class="msg-box <?php echo ErrorDisplay($msg,null);?>" style="text-align: center;">
                    <?php echo $msg; ?>
                </div>
            </form>
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
