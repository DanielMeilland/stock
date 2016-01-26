<section class="container">
    <h1><?= lang('edit_user_heading'); ?></h1>
    <p><?= lang('edit_user_subheading'); ?></p>

    <div id="infoMessage"><?= $message; ?></div>

    <?= form_open(uri_string()); ?>

    <div class="form-group">
        <?= lang('edit_user_fname_label', 'first_name'); ?> <br/>
        <?= form_input($first_name); ?>
    </div>

    <div class="form-group">
        <?= lang('edit_user_lname_label', 'last_name'); ?> <br/>
        <?= form_input($last_name); ?>
    </div>

    <div class="form-group">
        <?= lang('edit_user_company_label', 'company'); ?> <br/>
        <?= form_input($company); ?>
    </div>

    <div class="form-group">
        <?= lang('edit_user_phone_label', 'phone'); ?> <br/>
        <?= form_input($phone); ?>
    </div>

    <div class="form-group">
        <?= lang('edit_user_password_label', 'password'); ?> <br/>
        <?= form_password($password); ?>
    </div>

    <div class="form-group">
        <?= lang('edit_user_password_confirm_label', 'password_confirm'); ?><br/>
        <?= form_password($password_confirm); ?>
    </div>

    <?php if ($this->ion_auth->is_admin()): ?>

        <h3><?= lang('edit_user_groups_heading'); ?></h3>
        <?php foreach ($groups as $group): ?>
            <label class="checkbox">
                <?php
                $gID = $group['id'];
                $checked = null;
                $item = null;
                foreach ($currentGroups as $grp) {
                    if ($gID == $grp->id) {
                        $checked = ' checked="checked"';
                        break;
                    }
                }
                ?>
                <input type="checkbox" name="groups[]" value="<?= $group['id']; ?>"<?= $checked; ?>>
                <?= htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
            </label>
        <?php endforeach ?>

    <?php endif ?>

    <?= form_hidden('id', $user->id); ?>
    <?= form_hidden($csrf); ?>

    <p><?= form_submit('submit', lang('edit_user_submit_btn'), ['class' => 'btn btn-primary']); ?></p>

    <?= form_close(); ?>

</section>