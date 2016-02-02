<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= site_url(); ?>">test</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class=""><a href="<?= site_url(); ?>">Home</a></li>
                <li class=""><a href="<?= site_url('dashboard'); ?>">Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">CRUD<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class=""><a href="<?= site_url('items'); ?>">Item</a></li>
                        <li class=""><a href="<?= site_url('suppliers'); ?>">Fournisseurs</a></li>
                        <li class=""><a href="<?= site_url(''); ?>"></a></li>
                        <li role="separator" class="divider"></li>
                        <li class=""><a href="<?= site_url('users'); ?>">Utilisateurs</a></li>
                        <li class=""><a href="<?= site_url('groups'); ?>">Groups</a></li>
                        <li class=""><a href="<?= site_url('departments'); ?>">Département</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if ($this->session->userdata("logged_in")): ?>
                    <li><a href="<?= site_url("auth/logout") ?>">Logout</a></li>
                <?php else : ?>
                    <li><a href="<?= site_url("auth/login") ?>">Login</a></li>
                <?php endif; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>