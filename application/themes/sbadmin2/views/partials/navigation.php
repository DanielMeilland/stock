<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= site_url(); ?>">Test</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <?php if ($this->session->userdata("logged_in")): ?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= site_url("auth/logout") ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
        <?php else : ?>
            <li><a href="<?= site_url("auth/login") ?>">Login</a></li>
        <?php endif; ?>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li><a href="<?= site_url('dashboard'); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                <li>
                    <a href="#"><i class="fa fa-table fa-fw"></i> Tables<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="<?= site_url('items'); ?>">Items</a></li>
                        <li><a href="<?= site_url('users'); ?>">Users</a></li>
                        <li><a href="<?= site_url('departments'); ?>">Departments</a></li>
                        <li><a href="<?= site_url('suppliers'); ?>">Fournisseurs</a></li>
                    </ul>
                </li>
                <li><a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a></li>
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="panels-wells.html">Panels and Wells</a></li>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="notifications.html">Notifications</a></li>
                        <li><a href="typography.html">Typography</a></li>
                        <li><a href="icons.html"> Icons</a></li>
                        <li><a href="grid.html">Grid</a></li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>