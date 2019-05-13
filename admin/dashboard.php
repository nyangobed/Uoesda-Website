<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 11/26/2015
 * Time: 12:23 PM
 */
require_once '../inc/functions.php';
require_once '../UoESDABot/functions.php';

secure_session();
$adID=$_SESSION['adm_id'];

if($adID!=null){
    $admin_result_set=getAdmin($adID);
    $admin_names=$admin_result_set['ad_names'];
    $admin_prof_pic=$admin_result_set['prof_pic'];

    /**
     * Bot communication to users subscribed
     * @param string
     * @return string
     *
     */
    if(isset($_POST['botSend'])){
        $messages=trim($_POST['UserMessage']);
        if($messages){
            require_once '../UoESDABot/botauth.php';
            $userCount=count(getBotUserchatId());
            for($i=0;$i<=$userCount-1;$i++){
                $chat_id=getBotUserchatId()[$i]['chat_id'];
                curl_get_contents($link.$auth.$sendMessage."?chat_id=".$chat_id."&text=".urlencode($messages));
            }
            $success="All bot users have been texted";
        }else $error="Message should be included";
    }

    /**
     * Quick Email sender
     * @param string
     * @return string
     */
    if(isset($_POST['QuickMailSend'])){
        $email_to=trim($_POST['emailto']);
        $subject=trim($_POST['subject']);
        $mail_message=trim($_POST['mailMessage']);
        if($email_to!=null && $subject!=null && $mail_message!=null){
            if(SendQuickMail($email_to,$subject,$mail_message)){
                $success1="Email Sent!";
            }else $error1="Mail not sent";
        }else $error1="Form elements cannot be empty";
    }
?>
    <!DOCTYPE html>
    <html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>UoESDA Admin Panel</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">
        <!-- bootstrap wysihtml5 - text editor -->
        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">
        <?php include 'topbar.php'; ?>

        <?php include 'sidebar.php'; ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Administator Dashboard
                    <small>Manage the site here</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
                    <li class="active">Home</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3><?php echo getPost(); ?></h3>
                                <p>New Articles</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-clipboard"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3><?php echo getVideos(); ?></h3>
                                <p>Videos Posted</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-android-desktop"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3><?php echo getBotUsers(); ?></h3>
                                <p>Bot Users</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3><?php echo getEvents(); ?></h3>
                                <p>Upcoming Events</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-alarm"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div><!-- ./col -->
                </div>
                <div class="row">
                    <div class="col-md-7 col-xs-6">
                        <!-- quick email widget -->
                        <div class="box box-info">
                            <div class="box-header">
                                <i class="fa fa-envelope"></i>
                                <h3 class="box-title">Quick Email</h3>
                                <!-- tools box -->
                                <div class="pull-right box-tools">
                                    <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                </div><!-- /. tools -->
                            </div>
                            <div class="box-body">
                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="emailto" placeholder="Email to:"
                                               required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="required">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="textarea" name="mailMessage" placeholder="Message" style="width: 100%;
                                        height: 125px;
                                        font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="pull-right btn btn-default" id="sendEmail" name="QuickMailSend" type="submit">Send <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="box-footer clearfix">
                                <div class="<?php echo ErrorDisplay($error1,$success1);?>" style="text-align: center; font-size:16px;">
                                    <?php echo $error1;echo $success1;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-6">
                        <div class="box box-solid box-success">
                            <div class="box-header">
                                <i class="fa fa-send"></i>
                                <h3 class="box-title">Send Message to Bot Users</h3>
                            </div>
                            <div class="box-body">
                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="form-group">
                                        <textarea class="textarea_2" placeholder="Message" style="width: 100%; height: 200px;
                                         font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; resize: none;" required="required"
                                                  name="UserMessage"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="pull-right btn btn-success" type="submit" name="botSend">Send <i class="fa
                                        fa-send"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="box-footer">
                                <div class="<?php echo ErrorDisplay($error,$success);?>" style="text-align: center; font-size:16px;">
                                    <?php echo $error;echo $success;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section><!-- /.content -->

        </div><!-- /.content-wrapper -->

        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Design and Code by NYANGSOFT
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2015 <a href="#">UoESDA</a>.</strong> All rights reserved.
        </footer>



    </div><!-- wrapper div-->

    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jQueryUI/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

    <script type="text/javascript">
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();

    </script>
    </body>
    </html>
<?php
    $db=null;
}else{
    header("location:../admin_login.php");
}
?>