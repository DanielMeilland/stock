<section class="container">
    <section class="row">
        <?= form_open('auth/login'); ?>

        <?php $error = form_error("identity", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : '' ?>">
            <?= form_label('login_identity_label', 'identity'); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <?= form_input('identity', set_value('identity'), ['class' => 'form-control']); ?>
            </div>
            <?= $error; ?>
        </div>

        <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : '' ?>">
            <?= form_label('login_password_label', 'password'); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <?= form_password('password', set_value('password'), ['class' => 'form-control']); ?>
            </div>
            <?= $error; ?>
        </div>

        <div class="form-group">
            <?= form_label('login_remember_label', 'remember'); ?>
            <?= form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
            <a href="forgot_password" class="pull-right"><?php echo form_label('login_forgot_password'); ?></a>
        </div>

        <div class="well center-block" style="max-width:400px">
            <?= form_submit('login', 'Se connecter', ['class' => 'btn btn-primary btn-block']); ?>
            <a href="<?= site_url(); ?>" class="btn btn-default btn-block">Retour à l'accueil</a>
        </div>
        <?= form_close(); ?>
    </section>
</section>