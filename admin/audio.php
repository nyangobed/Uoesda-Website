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
     * Audio upload for sermons
     * @params string
     * @param byte[]
     * @return string/bool
     */
    if(isset($_POST['aud_add'])){
        $file_title=trim($_POST['ar_title']);
        $file_desc=trim($_POST['audio_desc']);
        $filename=$_FILES['audio_file']['name'];
        $type=$_FILES['audio_file']['type'];
        $size=$_FILES['audio_file']['size'];
        $tmpname=$_FILES['audio_file']['tmp_name'];
        $ext=substr($filename,strrpos($filename, "."));

        if($file_title && $file_desc && $filename!=null){
            if(ValidateFile("audio",$size,$ext)){
                $audio_location="audios/";
                move_uploaded_file($tmpname,"../".$audio_location.$filename);
                $data=array(null,$file_title,$file_desc,$audio_location.$filename,time());
                if(InsertContent("audios",$data)){
                    $success="Audio file successfully uploaded";
                }else $error="Oops, an error occurred";
            }else $error="Invalid file or  file too large";
        }else $error="Form elements cannot be null";
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
                        <div class="box box-success">
                            <div class="box-header">
                                <i class="ion ion-speakerphone"></i>
                                <div class="box-title">New Audio</div>
                            </div>
                            <div class="box-body">
                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Title" name="ar_title" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="audio_desc" class="form-control" placeholder="some description"
                                               required="required">
                                    </div>
                                    <div class="form-group">
                                        <div class="btn btn-info btn-file">
                                            <i class="fa fa-arrow-up"></i>
                                            Audio
                                            <input type="file" name="audio_file" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="pull-right btn btn-default" name="aud_add" type="submit">Add
                                            <i class="fa fa-plus-square"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="box-footer">
                                <div class="<?php echo ErrorDisplay($error,$success);?>" style="text-align: center; font-size: 16px;">
                                    <?php echo $error;echo $success;?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-warning">
                            <div class="box-header">
                                <i class="ion ion-music-note"></i>
                                <div class="box-title">Recent Audios</div>
                            </div>
                            <div class="box-body no-padding">
                                <table class="table">
                                    <?php
                                    $audios=pullAudioFiles(8);
                                    for($i=0;$i<=count($audios)-1;$i++) {
                                        ?>
                                        <tr>
                                            <td style="font-size: large;"><?php echo $audios[$i]['aud_title']?></td>
                                            <td width="25%">
                                                <div class="btn btn-danger">
                                                    <i class="fa fa-trash-o"></i>
                                                    Delete
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                            <div class="box-footer">

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