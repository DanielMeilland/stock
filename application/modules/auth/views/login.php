<section class="container">

    <div id="infoMessage"><?php echo $message; ?></div>

    <section class="row">
        <?= form_open(); ?>

        <?php $error = form_error("identity", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : '' ?>">
            <?= lang('login_identity_label', 'identity'); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <?= form_input($identity); ?>
            </div>
            <?= $error; ?>
        </div>

        <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : '' ?>">
            <?= lang('login_password_label', 'password'); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <?= form_password($password); ?>
            </div>
            <?= $error; ?>
        </div>

        <div class="form-group">
            <?= lang('login_remember_label', 'remember'); ?>
            <?= form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
            <a href="forgot_password" class="pull-right"><?php echo lang('login_forgot_password'); ?></a>
        </div>

        <div class="well center-block" style="max-width:400px">
            <?= form_submit('login', 'Se connecter', ['class' => 'btn btn-primary btn-block']); ?>
            <a href="<?= site_url(); ?>" class="btn btn-default btn-block">Retour à l'accueil</a>
        </div>

        <?= form_close(); ?>
    </section>
</section>