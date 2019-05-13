<?php
/**
 * Created by PhpStorm.
 * User: Astroguy.pc
 * Date: 11/26/2015
 * Time: 12:23 PM
 */
require_once '../inc/functions.php';
secure_session();
$adID=$_SESSION['adm_id'];
if($adID){
    $admin_result_set=getAdmin($adID);
    $admin_names=$admin_result_set['ad_names'];
    $admin_prof_pic=$admin_result_set['prof_pic'];

    /**
     * Adding administator
     * @param string--credentials
     * @param byte[]--photo
     * @return string/bool
     */
    if(isset($_POST['add_admin'])){
        $names=trim($_POST['adm_name']);
        $email=trim($_POST['adm_email']);
        $username=trim($_POST['adm_login']);
        $pass=trim($_POST['adm_pass']);
        $repass=trim($_POST['adm_pass_two']);
        $filename=$_FILES['adm_prof_pic']['name'];
        $type=$_FILES['adm_prof_pic']['type'];
        $size=$_FILES['adm_prof_pic']['size'];
        $tmpname=$_FILES['adm_prof_pic']['tmp_name'];
        $ext=substr($filename,strrpos($filename, "."));

        if($names && $email && $username && $pass && $repass && $filename!=null){
            if(ValidateEmail($email)){
                if($pass===$repass){
                    $profile_folder="./profPics/";
                    $newpicname=$names."_Profile_".time().$ext;
                    if(ValidateProfilePic($size,$ext)){
                        move_uploaded_file($tmpname,$profile_folder.$newpicname);
                        require_once '../inc/PasswordHash.php';
                        $hasher = new PasswordHash(8,false);
                        $hashed = $hasher->HashPassword($pass);

                        $data = array(null,$username,$hashed,$email,$names,$profile_folder.$newpicname);
                        if(InsertContent("AddAdmin",$data)){
                            $success="Admin successfully added";
                        }else {unlink($profile_folder.$newpicname); $error="Oops. An error occurred";}
                    }else $error="Invalid file or file too large";
                }else $error="Password Mismatch";
            }else $error="Invalid Email";
        }else $error="Form elements cannot be empty";
    }

    /**
     * Changing password to new ones
     * @params string
     * @return string/bool
     */
    if(isset($_POST['change_pass'])){
        $old=trim($_POST['adm_old_pass']);
        $new=trim($_POST['adm_new_pass']);
        $retype=trim($_POST['adm_retype']);
        if($old && $new && $retype){
            if($new===$retype){
                require_once '../inc/PasswordHash.php';
                $hasher = new PasswordHash(8,false);
                $hashed = $hasher->HashPassword($new);
                $data=array($hashed,$adID);
                if(UpdateData("ChangeAdminPass",$data)){
                    $success1="password successfully changed";
                }else $error1="Oops. An error occurrred";
            }else $error1="Passwords did not match";
        }else $error1="Form Elements cannot be null";
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
                    <li class="active">Accounts</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-info">
                            <div class="box-header">
                                <i class="ion ion-android-add-circle"></i>
                                <div class="box-title">Add an Administrator</div>
                            </div>
                            <div class="box-body">
                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="adm_name" placeholder="Names" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="adm_email" placeholder="Email Adress" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="adm_login" placeholder="Username" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="adm_pass" placeholder="Password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="adm_pass_two" placeholder="Retype Password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <div class="btn btn-success btn-file">
                                            <i class="fa fa-picture-o"></i>
                                            Picture
                                            <input type="file" name="adm_prof_pic" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="pull-right btn btn-default" type="submit" name="add_admin">Add
                                            <i class="fa fa-plus-circle"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="box-footer">
                                <div class="<?php echo ErrorDisplay($error,$success);?>" style="text-align: center;
                                font-size:16px;">
                                    <?php echo $error;echo $success;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="box box-info">
                            <div class="box-header">
                                <i class="fa fa-user-md"></i>
                                <div class="box-title">Site Admins</div>
                            </div>
                            <div class="box-body">
                                <ul class="users-list clearfix">
                                    <?php
                                    $count_admins=count(getAdmin());
                                    for($i=0;$i<=$count_admins-1;$i++){
                                    ?>
                                    <li>
                                        <img src="<?php echo getAdmin()[$i]['prof_pic']; ?>" alt="User Image">
                                        <a class="users-list-name" href="#"><?php echo getAdmin()[$i]['ad_names']; ?></a>
                                        <span class="users-list-date"></span>
                                    </li>
                                    <?php
                                    }
                                    ?>

                                </ul>
                            </div>
                            <div class="box-footer">

                            </div>
                        </div>
                        <div class="box box-warning">
                            <div class="box-header">
                                <i class="fa fa-user-secret"></i>
                                <div class="box-title">
                                    Change Password here
                                </div>
                            </div>
                            <div class="box-body">
                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="adm_old_pass" placeholder="Current Password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="adm_new_pass" placeholder="New Password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="adm_retype" placeholder="Retype Password" required="required">
                                    </div>
                                    <button class="pull-left btn btn-danger" name="change_pass" type="submit">
                                        <i class="fa fa-refresh"></i>
                                        Change password
                                    </button>
                                </form>
                            </div>
                            <div class="box-footer">
                                <div class="<?php echo ErrorDisplay($error1,$success1);?>" style="text-align: center; font-size:16px;">
                                    <?php echo $error1;echo $success1;?>
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
                Design and Code by Patrick
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