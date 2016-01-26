<section class="container">
    <h1 class="text-center"><?= lang('change_password_heading'); ?></h1>

    <div id="infoMessage"><?= $message; ?></div>

    <?= form_open("auth/change_password"); ?>

    <div class="form-group">
        <?= lang('change_password_old_password_label', 'old_password'); ?>
        <?= form_input($old_password); ?>
    </div>

    <div class="form-group">
        <label for="new_password">
            <?= sprintf(lang('change_password_new_password_label'), $min_password_length); ?>
        </label>
        <?= form_input($new_password); ?>
    </div class="container">

    <div class="form-group">
        <?= lang('change_password_new_password_confirm_label', 'new_password_confirm'); ?>
        <?= form_input($new_password_confirm); ?>
    </div>

    <?= form_input($user_id); ?>
    <p><?= form_submit('submit', lang('change_password_submit_btn'), ['class' => 'btn btn-primary']); ?></p>

    <?= form_close(); ?>
</section>