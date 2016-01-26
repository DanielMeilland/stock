<section class="container">
    <h1><?= lang('edit_group_heading'); ?></h1>
    <p><?= lang('edit_group_subheading'); ?></p>

    <div id="infoMessage"><?= $message; ?></div>

    <?= form_open(current_url()); ?>

    <div class="form-group">
        <?= lang('edit_group_name_label', 'group_name'); ?> <br/>
        <?= form_input($group_name); ?>
    </div>

    <div class="form-group">
        <?= lang('edit_group_desc_label', 'description'); ?> <br/>
        <?= form_textarea($group_description); ?>
    </div>

    <p><?= form_submit('submit', lang('edit_group_submit_btn'), ['class' => 'btn btn-primary']); ?></p>

    <?= form_close(); ?>
</section>