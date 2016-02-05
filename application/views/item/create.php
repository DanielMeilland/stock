<div class="container">

    <div class="page-header">
        <h2><?= isset($pageName) ? htmlspecialchars($pageName) : 'undefined'; ?></h2>
    </div>

    <?= form_open('items/create/', ['classe' => 'form-horizontal']); ?>

    <?php $error = form_error("name", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Nom du produit :', 'name', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?= form_input('name', set_value('name'), ['class' => 'form-control']); ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("stocking_place_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Lieu de stockage :', 'stocking_place_id', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
                <?= form_dropdown('stocking_place_id', $stocking_places, set_value('stocking_place_id'), ['class' => 'form-control']); ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("description", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Description :', 'description', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?= form_textarea('description', set_value('description'), ['class' => 'form-control']); ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("supplier_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Fournisseur :', 'supplier', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
                <?= form_dropdown('supplier_id', $suppliers, set_value('supplier_id'), ['class' => 'form-control']); ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("serial_number", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Numéro de série :', 'serial_number', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?= form_input('serial_number', set_value('serial_number'), ['class' => 'form-control']); ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("remarks", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Notes :', 'remarks', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?= form_textarea('remarks', set_value('remarks'), ['class' => 'form-control']); ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <div class="form-actions">
        <?= form_submit('submit', 'Save changes', ['class' => 'btn btn-primary']); ?>
        <a href="<?= site_url('items'); ?>" class="btn">Cancel</a>
    </div>

    <?= form_close(); ?>
</div>


