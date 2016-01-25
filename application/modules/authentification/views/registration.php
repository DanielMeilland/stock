<section class="container">
    <section class="row">
        <?= form_open('', ['class' => 'form-horizontal']); ?>
        <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : ''; ?>">
            <?= form_label('Username', 'username', ['class' => 'label-control']); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <?= form_input('username', set_value('username'),
                    ["id" => 'username', "class" => "form-control input-sm", "placeholder" => "Enter your username"]); ?>
            </div>
            <?= $error; ?>
        </div>
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
        <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : ''; ?>">
            <?= form_label('Password', 'password', ['class' => 'label-control']); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <?= form_password('password', set_value('password'),
                    ["class" => "form-control input-sm", "placeholder" => "Enter password"]); ?>
            </div>
            <?= $error; ?>
        </div>
        <?php $error = form_error("password_confirm", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : ''; ?>">
            <?= form_label('Confirm password', 'password_confirm', ['class' => 'label-control']); ?>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <?= form_password('password_confirm', set_value('password_confirm'),
                    ["class" => "form-control input-sm", "placeholder" => "Confirm your password"]); ?>
            </div>
            <?= $error; ?>
        </div>
        <div class="well center-block" style="max-width:400px">
            <?= form_submit('register', 'S\'inscrire', ['class' => 'btn btn-primary btn-block']); ?>
            <a href="<?= site_url(); ?>" class="btn btn-default btn-block">Retour à l'accueil</a>
        </div>
        <?= form_close(); ?>
    </section><!-- .row -->
</section><!-- .container -->

<style>
    p {
        padding: 0 0 0 0;
    }
</style>