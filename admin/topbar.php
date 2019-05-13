<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">c...</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>UoESDA</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"><?php echo getMessageCount();?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have <?php echo getMessageCount();?> messages</li>
                        <li>
                            <!-- inner menu: contains the messages -->
                            <ul class="menu">
                                <?php
                                $mscount=count(getMessages(4));
                                for($i=0;$i<=$mscount-1;$i++){
                                    ?>
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <!-- User Image -->
                                                <img src="dist/img/droid.jpg" class="img-circle" alt="User Image">
                                            </div>
                                            <!-- Message title and timestamp -->
                                            <h4>
                                                <?php echo getMessages(4)[$i]['sender_names']; ?>
                                                <small><i class="fa fa-clock-o"></i> <?php echo formatTime(getMessages(4)[$i]['sent_date']);
                                                    ?></small>
                                            </h4>
                                            <!-- The message -->
                                            <p><?php echo substr(getMessages(4)[$i]['sender_subject'],0,30)."..."; ?></p>
                                        </a>
                                    </li><!-- end message -->
                                <?php
                               }
                                ?>
                            </ul><!-- /.menu -->
                        </li>
                        <li class="footer"><a href="./messagebox.php">See All Messages</a></li>
                    </ul>
                </li><!-- /.messages-menu -->
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="<?php echo $admin_prof_pic; ?>" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $admin_names; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="<?php echo $admin_prof_pic; ?>" class="img-circle" alt="User Image">
                            <p>
                                Site Admin
                                <small>Managed Site Content</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">

                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="./logout.php" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>