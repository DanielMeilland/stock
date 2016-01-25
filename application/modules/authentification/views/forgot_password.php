<section class="container">
    <section class="row">
        <?= form_open('', ['class' => 'form-horizontal']); ?>
        <?php $error = form_error("email", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : ''; ?>">
            <?= form_label('Email', 'email', ['class' => 'label-control']); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <?= form_input('email', set_value('email'),
                    ["id" => 'email', "class" => "form-control input-sm", "placeholder" => "Enter your email address"]); ?>
            </div>
            <?= $error; ?>
        </div>
        <div class="well center-block" style="max-width:400px">
            <?= form_submit('forgot_password', 'Reset password', ['class' => 'btn btn-primary btn-block']); ?>
            <a href="<?= site_url(); ?>" class="btn btn-default btn-block">Retour à l'accueil</a>
        </div>
        <?= form_close(); ?>
    </section>
</section>
