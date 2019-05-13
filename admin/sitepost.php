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



if(isset($_POST['ar_btn'])){

    $title=trim($_POST['ar_title']);

    $category=trim($_POST['ar_cat']);

    $content=trim($_POST['content']);

    $blog_pic=$_FILES['pic']['name'];

    $type=$_FILES['pic']['type'];

    $size=$_FILES['pic']['size'];

    $tmpname=$_FILES['pic']['tmp_name'];

    $ext=substr($blog_pic,strrpos($blog_pic, "."));



    if($title!=null && $category !=null && $content!=null){

        $timestamp=time();

        require_once '../inc/PasswordHash.php';

        $id_gen= new PasswordHash(4,false);

        $post_unique=$id_gen->HashPassword(rand()*rand());

        if($category!='blog') {

            $data = array(null,$post_unique, $title, $category, $content, 0, $timestamp, $adID);

            if (InsertContent("sitepost", $data)) {

                $success="New site post created";

            } else $error="Oops, an error occurred";;

        }else{

            if($blog_pic==""){

                $img_loc="images/default.jpg";

                $data = array(null, $post_unique, $title, $category, $content, $img_loc, $timestamp, $adID);

                if (InsertContent("sitepost", $data)) {

                    $success="New site post created";

                } else $error="Oops, an error occurred";

            }else{

                if(ValidateFile('picture',$size,$ext)){

                    $img_loc="images/".$blog_pic;

                    move_uploaded_file($tmpname,"../images/".$blog_pic);

                    $data = array(null, $post_unique, $title, $category, $content, $img_loc, $timestamp, $adID);

                    if (InsertContent("sitepost", $data)) {

                        $success="New site post created";

                    } else $error="Oops, an error occurred";

                }else $error="Invalid file or file too large";

            }

        }

    }else $error="Please fill all fields";



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

                    <li class="active">SitePost</li>

                </ol>

            </section>



            <!-- Main content -->

            <section class="content">

                <div class="row">

                    <div class="col-md-9">

                        <div class="box box-success">

                            <div class="box-header">

                                <i class="ion ion-clipboard"></i>

                                <div class="box-title">New post</div>

                            </div>

                            <div class="box-body">

                                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

                                    <div class="form-group">

                                        <input class="form-control" placeholder="Title" name="ar_title" required="required">

                                    </div>

                                    <div class="form-group">

                                        <label for="selectList">Category</label>

                                        <select name="ar_cat" class="form-control" id="selectList" required="required">

                                            <option value="">--select--</option>

                                            <option value="blog">Blog</option>

                                            <option value="news">News</option>

                                        </select>

                                    </div>

                                    <div class="form-group">

                                        <label for="selectList">Blog Image  (for blog articles)</label>

                                        <div class="btn btn-info btn-file">

                                            <i class="fa fa-picture-o"></i>

                                            Image

                                        <input type="file" class="blog_pic" placeholder="" name="pic">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                    <textarea class="textarea" name="content" placeholder="content here" style="width: 100%; height:

                                     350px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>



                                    </textarea>

                                    </div>

                                    <div class="form-group">

                                        <button class="pull-right btn btn-default" name="ar_btn" type="submit">Add

                                            <i class="fa fa-plus-square"></i></button>

                                    </div>

                                </form>

                            </div>

                            <div class="box-footer">

                                message here

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