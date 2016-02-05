<div class="container">

    <div class="panel-heading">
        <strong>Edite : <?= htmlspecialchars($item->name); ?></strong>
    </div>

    <?= form_open('items/edit/' . $item->item_id, ['classe' => 'form-horizontal']); ?>

    <?php $error = form_error("name", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Nom du produit :', 'name', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?= form_input('name', set_value('name', $item->name, true), ['class' => 'form-control']); ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("stocking_place_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Lieu de stockage :', 'stocking_place_id', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?php if (!isset($item->stocking_place->stocking_place_id)): ?>
                <?= form_dropdown('stocking_place_id', $stocking_places, '', ['class' => 'form-control']); ?>
            <?php else: ?>
                <?= form_dropdown('stocking_place_id', $stocking_places, $item->stocking_place->stocking_place_id, ['class' => 'form-control']); ?>
            <?php endif; ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("description", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Description :', 'description', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?= form_textarea('description', set_value('description', $item->description, true), ['class' => 'form-control']); ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("supplier_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Fournisseur :', 'supplier', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?php if (!isset($item->supplier->supplier_id)): ?>
                <?= form_dropdown('supplier_id', $suppliers, '', ['class' => 'form-control']); ?>
            <?php else: ?>
                <?= form_dropdown('supplier_id', $suppliers, $item->supplier->supplier_id, ['class' => 'form-control']); ?>
            <?php endif; ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("serial_number", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Numéro de série :', 'serial_number', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?= form_input('serial_number', set_value('serial_number', $item->serial_number, true), ['class' => 'form-control']); ?>
            <span class="input-group-addon"></span>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("remarks", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Notes :', 'remarks', ['class' => 'control-label']); ?>
        <div class="input-group">
            <span class="input-group-addon"></span>
            <?= form_textarea('remarks', '', ['class' => 'form-control']); ?>
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
