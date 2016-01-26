<section class="container">
    <h1><?= lang('create_group_heading'); ?></h1>
    <p><?= lang('create_group_subheading'); ?></p>

    <div id="infoMessage"><?= $message; ?></div>

    <?= form_open("auth/create_group"); ?>

    <div class="form-group">
        <?= lang('create_group_name_label', 'group_name'); ?> <br/>
        <?= form_input($group_name); ?>
    </div>

    <div class="form-group">
        <?= lang('create_group_desc_label', 'description'); ?> <br/>
        <?= form_textarea($description); ?>
    </div>

    <p><?= form_submit('submit', lang('create_group_submit_btn'), ['class' => 'btn btn-primary']); ?></p>

    <?= form_close(); ?>
</section>