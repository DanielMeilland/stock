<div class="container">

    <div class="page-header">
        <h2><?= isset($pageName) ? htmlspecialchars($pageName) : 'undefined'; ?></h2>
    </div>

    <?= form_open(); ?>

    <?php $error = form_error("name", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Nom du group :', 'name', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Nom du group :</div>
            <?= form_input('name', set_value('name'), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("description", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Description :', 'description', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Description :</div>
            <?= form_textarea('description', set_value('description'), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?= form_submit('submit', 'Save', ['class' => 'btn btn-primary']); ?>
    <a href="<?= site_url('groups'); ?>" class="btn btn-default">Cancel</a>

    <?= form_close(); ?>

</div>
