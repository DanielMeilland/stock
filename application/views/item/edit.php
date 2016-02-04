<div class="container">

    <div class="panel-heading">
        <strong>Edite : <?= htmlspecialchars($item->name); ?></strong>
    </div>

    <?= form_open_multipart('items/edit/' . $item->item_id, ['classe' => 'form-horizontal']); ?>

    <?php $error = form_error("name", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Nom du produit :', 'name', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Nom du produit :</div>
            <?= form_input('name', set_value('name', $item->name, true), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("stocking_place_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Lieu de stockage :', 'stocking_place_id', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Lieu de stockage :</div>
            <?php if (!isset($item->stocking_place->stocking_place_id)): ?>
                <?= form_dropdown('stocking_place_id', $stocking_places, '', ['class' => 'form-control']); ?>
            <?php else: ?>
                <?= form_dropdown('stocking_place_id', $stocking_places, $item->stocking_place->stocking_place_id, ['class' => 'form-control']); ?>
            <?php endif; ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("description", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Description :', 'description', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Description :</div>
            <?= form_textarea('description', set_value('description', $item->description, true), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("supplier_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Fournisseur :', 'supplier', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Fournisseur :</div>
            <?php if (!isset($item->supplier->supplier_id)): ?>
                <?= form_dropdown('supplier_id', $suppliers, '', ['class' => 'form-control']); ?>
            <?php else: ?>
                <?= form_dropdown('supplier_id', $suppliers, $item->supplier->supplier_id, ['class' => 'form-control']); ?>
            <?php endif; ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("serial_number", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Numéro de série :', 'serial_number', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Numéro de série :</div>
            <?= form_input('serial_number', set_value('serial_number', $item->serial_number, true), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("remarks", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Notes :', 'remarks', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Notes :</div>
            <?= form_textarea('remarks', '', ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?= form_submit('submit', 'Save', ['class' => 'btn btn-primary']); ?>
    <a href="<?= site_url('items/suppliers'); ?>" class="btn btn-default">Cancel</a>
    <?= form_close(); ?>
</div>

