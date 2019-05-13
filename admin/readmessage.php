<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 2/2/2016
 * Time: 9:38 AM
 */
require_once '../inc/functions.php';
secure_session();
$adID=$_SESSION['adm_id'];
if($adID){
    $admin_result_set=getAdmin($adID);
    $admin_names=$admin_result_set['ad_names'];
    $admin_prof_pic=$admin_result_set['prof_pic'];

    if(isset($_GET['mesID'])){
        $ms=trim($_GET['mesID']);
        $message=getMessagebyID($ms);
        if($message!=null){
            $sender_name=$message['sender_names'];
            $sender_subject=$message['sender_subject'];
            $mail=$message['sender_mail'];
            $sent_date=$message['sent_date'];
            $message=$message['sender_message'];

        }else header('location:messagebox.php');
    }else header('location:messagebox.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UoESDA Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="./plugins/iCheck/flat/blue.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

    <?php include './topbar.php'; ?>

    <?php include './sidebar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Read Message
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Messagebox</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Folders</h3>
                            <div class="box-tools">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body no-padding">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="./messagebox.php"><i class="fa fa-inbox"></i> Inbox
                                        <span class="label label-primary pull-right"><?php echo getMessageCount(); ?></span>
                                    </a></li>
                            </ul>
                        </div><!-- /.box-body -->
                    </div><!-- /. box -->
                </div><!-- /.col -->
                <div class="col-md-9">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Read Message</h3>
                            <div class="box-tools pull-right">
                                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="mailbox-read-info">
                                <h3><?php echo $sender_subject; ?></h3>
                                <h5>From: <?php echo $sender_name." ".$mail; ?>
                                    <span class="mailbox-read-time pull-right">
                                        <?php echo date("d F Y h:i a",$sent_date); ?>
                                    </span>
                                </h5>
                            </div><!-- /.mailbox-read-info -->
                            <div class="mailbox-controls with-border text-center">
                                <div class="btn-group">
                                    <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                                </div><!-- /.btn-group -->
                                <button class="btn btn-default btn-sm" data-toggle="tooltip" title="Print"><i class="fa fa-print"></i></button>
                            </div><!-- /.mailbox-controls -->
                            <div class="mailbox-read-message">
                                <p>
                                    <?php echo $message; ?>
                                </p>
                            </div><!-- /.mailbox-read-message -->
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <?php markRead($ms); ?>
                        </div><!-- /.box-footer -->
                        <div class="box-footer">
                            <button class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                            <button class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                        </div><!-- /.box-footer -->
                    </div><!-- /. box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Design and Code by Patrick
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="#">UoESDA</a>.</strong> All rights reserved.
    </footer>

</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="./plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="./plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="./plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="./dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
</body>
</html>
<?php
$db=null;
}else{
    header("location:../admin_login.php");
}
?>