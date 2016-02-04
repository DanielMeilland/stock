<div class="container">

    <div class="page-header">
        <h2><?= isset($pageName) ? htmlspecialchars($pageName) : 'undefined'; ?></h2>
    </div>

    <?= form_open('items/create'); ?>

    <?php $error = form_error("name", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Nom du produit :', 'name', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Nom du produit :</div>
            <?= form_input('name', '', ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("stocking_place_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Lieu de stockage :', 'stocking_place_id', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Lieu de stockage :</div>
            <?= form_dropdown('stocking_place_id', $stocking_places, '', ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
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
    <a href="<?= site_url('items'); ?>" class="btn btn-default">Cancel</a>

    <?= form_close(); ?>
</div>

<div class="clearfix"></div><br/>

<div class="container">

    <form method='post'>

        <table class='table table-bordered'>

            <tr>
                <?php $error = form_error("name", "<p class='text-danger'>", '</p>'); ?>
                <td><?= form_label('Nom du produit :', 'name', ['class' => 'control-label']); ?></td>
                <td><?= form_input('name', '', ['class' => 'form-control']); ?><?= $error; ?></td>
            </tr>

            <tr>
                <td>Last Name</td>
                <td><input type='text' name='last_name' class='form-control' value="" required>
                </td>
            </tr>

            <tr>
                <td>Your E-mail ID</td>
                <td><input type='text' name='email_id' class='form-control' value="" required>
                </td>
            </tr>

            <tr>
                <td>Contact No</td>
                <td><input type='text' name='contact_no' class='form-control' value=""
                           required></td>
            </tr>

            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" name="btn-update">
                        <span class="glyphicon glyphicon-edit"></span> Update this Record
                    </button>
                    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i>
                        &nbsp; CANCEL</a>
                </td>
            </tr>

        </table>
    </form>
</div>
