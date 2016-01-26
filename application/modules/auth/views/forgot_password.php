<section class="container">
    <h1 class="text-center"><?= lang('forgot_password_heading'); ?></h1>
    <p class="text-center"><?= sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>

    <div id="infoMessage"><?= $message; ?></div>

    <?= form_open("auth/forgot_password"); ?>

    <div class="form-group">
        <label for="identity">
            <?= (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?>
        </label>
        <?= form_input($identity); ?>
    </div>

    <p><?= form_submit('submit', lang('forgot_password_submit_btn'), ['class' => 'btn btn-primary']); ?></p>

    <?= form_close(); ?>

</section>