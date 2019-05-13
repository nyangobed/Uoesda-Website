<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo $admin_prof_pic; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $admin_names; ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="dashboard.php"><i class="fa fa-home"></i> <span>Home</span></a></li>
            <li><a href="account.php"><i class="fa fa-gear"></i> <span>Account Settings</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-clipboard"></i> <span>Content</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="sitepost.php"><i class="fa fa-book"></i>Articles</a></li>
                    <li><a href="videos.php"><i class="fa fa-desktop"></i> Videos</a>
                    <li><a href="audio.php"> <i class="fa fa-file-audio-o"></i>Audios</a></li>
                    <li><a href="#"> <i class="fa fa-picture-o"></i>Gallery</a></li>
                </ul>
            </li>
            <li><a href="events.php"><i class="fa fa-calendar"></i> <span>Events</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>