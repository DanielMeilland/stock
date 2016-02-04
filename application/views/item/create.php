<div class="container">

    <div class="page-header">
        <h2><?= isset($pageName) ? htmlspecialchars($pageName) : 'undefined'; ?></h2>
    </div>


    <?php $error = form_error("description", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Description :', 'description', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Description :</div>
            <?= form_textarea('description', '', ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("supplier_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Fournisseur :', 'supplier_id', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Fournisseur :</div>
            <?= form_dropdown('supplier_id', $suppliers, '', ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("serial_number", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Numéro de série :', 'serial_number', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Numéro de série :</div>
            <?= form_input('serial_number', '', ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <a href="<?= site_url('items'); ?>" class="btn btn-default">Cancel</a>

    <?= form_close(); ?>
</div>

<div class="clearfix"></div><br/>

<div class="container">

    <?= form_open('items/create'); ?>

    <table class='table'>

        <tr>
            <?php $error = form_error("name", "<p class='text-danger'>", '</p>'); ?>
            <td><?= form_label('Nom du produit :', 'name', ['class' => 'control-label']); ?></td>
            <td><?= form_input('name', '', ['class' => 'form-control']); ?><?= $error; ?></td>
        </tr>

        <tr>
            <?php $error = form_error("stocking_place_id", "<p class='text-danger'>", '</p>'); ?>
            <td><?= form_label('Lieu de stockage :', 'stocking_place_id', ['class' => 'control-label']); ?></td>
            <td><?= form_dropdown('stocking_place_id', $stocking_places, '', ['class' => 'form-control']); ?></td>
        </tr>

        <tr>
            <?php $error = form_error("description", "<p class='text-danger'>", '</p>'); ?>
            <td><?= form_label('Description :', 'description', ['class' => 'control-label']); ?></td>
            <td><?= form_textarea('description', '', ['class' => 'form-control']); ?></td>
        </tr>

        <tr>

        </tr>

        <tr>

        </tr>

        <tr>
            <?php $error = form_error("remarks", "<p class='text-danger'>", '</p>'); ?>
            <td><?= form_label('Notes :', 'remarks', ['class' => 'control-label']); ?></td>
            <td><?= form_textarea('remarks', '', ['class' => 'form-control']); ?></td>
        </tr>

        <tr>
            <td colspan="2">
                <?= form_submit('submit', 'Save', ['class' => 'btn btn-primary']); ?>
                <a href="<?= site_url('items'); ?>" class="btn btn-default">Cancel</a>
            </td>
        </tr>

    </table>
    <?= form_close(); ?>
</div>
