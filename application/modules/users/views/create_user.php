<section class="container">
    <h1><?= lang('create_user_heading'); ?></h1>
    <p><?= lang('create_user_subheading'); ?></p>

    <div id="infoMessage"><?= $message; ?></div>

    <?= form_open("users/create_user"); ?>

    <div class="form-group">
        <?= lang('create_user_fname_label', 'first_name'); ?> <br/>
        <?= form_input($first_name); ?>
    </div>

    <div class="form-group">
        <?= lang('create_user_lname_label', 'last_name'); ?> <br/>
        <?= form_input($last_name); ?>
    </div>

    <?php if ($identity_column !== 'email'): ?>
        <div class="form-group">
            <?= lang('create_user_identity_label', 'identity'); ?>
            <?= form_error('identity'); ?>
            <?= form_input($identity); ?>
        </div>
    <?php endif; ?>

    <div class="form-group">
        <?= lang('create_user_company_label', 'company'); ?> <br/>
        <?= form_input($company); ?>
    </div>

    <div class="form-group">
        <?= lang('create_user_email_label', 'email'); ?> <br/>
        <?= form_input($email); ?>
    </div>

    <div class="form-group">
        <?= lang('create_user_phone_label', 'phone'); ?> <br/>
        <?= form_input($phone); ?>
    </div>

    <div class="form-group">
        <?= lang('create_user_password_label', 'password'); ?> <br/>
        <?= form_password($password); ?>
    </div>

    <div class="form-group">
        <?= lang('create_user_password_confirm_label', 'password_confirm'); ?> <br/>
        <?= form_password($password_confirm); ?>
    </div>


    <p><?= form_submit('submit', lang('create_user_submit_btn'), ['class' => 'btn btn-primary']); ?></p>

    <?= form_close(); ?>

</section>