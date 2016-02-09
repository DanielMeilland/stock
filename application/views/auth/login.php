<section class="container">
    <section class="row">
        <?= form_open(); ?>

        <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : '' ?>">
            <label for="username">Username</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
            </div>
            <?= $error; ?>
        </div>

        <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
        <div class="form-group <?= $error ? 'has-error' : '' ?>">
            <label for="password">Password</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
            </div>
            <?= $error; ?>
        </div>

        <div class="well center-block" style="max-width:400px">
            <?= form_submit('login', 'Se connecter', ['class' => 'btn btn-primary btn-block']); ?>
            <a href="<?= site_url(); ?>" class="btn btn-default btn-block">Retour à l'accueil</a>
        </div>
        <?= form_close(); ?>
    </section>
</section>