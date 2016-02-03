<div class="container">

    <div class="panel-heading">
        <strong>Edite : <?= htmlspecialchars($item->name); ?></strong>
    </div>

    <?= form_open_multipart('items/edit/' . $item->item_id, ['classe' => 'form-horizontal']); ?>


    <div class="form-group">
        <?= form_label('Nom du produit :', 'name', ['class' => 'control-label col-md-3']); ?>
        <div class="col-md-8">
            <?= form_input('name', set_value('name', $item->name, true), ['class' => 'form-control']); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Lieu de stockage :', 'stocking_place_id', ['class' => 'control-label col-md-3']); ?>
        <div class="col-md-8">
            <?php if (!isset($item->stocking_place->stocking_place_id)): ?>
                <?= form_dropdown('stocking_place_id', $stocking_places, '', ['class' => 'form-control']); ?>
            <?php else: ?>
                <?= form_dropdown('stocking_place_id', $stocking_places, $item->stocking_place->stocking_place_id, ['class' => 'form-control']); ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Description :', 'description', ['class' => 'control-label col-md-3']); ?>
        <div class="col-md-8">
            <?= form_textarea('description', set_value('description', $item->description, true), ['class' => 'form-control']); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Fournisseur :', 'supplier', ['class' => 'control-label col-md-3']); ?>
        <div class="col-md-8">
            <?php if (!isset($item->supplier->supplier_id)): ?>
                <?= form_dropdown('supplier_id', $suppliers, '', ['class' => 'form-control']); ?>
            <?php else: ?>
                <?= form_dropdown('supplier_id', $suppliers, $item->supplier->supplier_id, ['class' => 'form-control']); ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Numéro de série :', 'serial_number', ['class' => 'control-label col-md-3']); ?>
        <div class="col-md-8">
            <?= form_input('serial_number', set_value('serial_number', $item->serial_number, true), ['class' => 'form-control']); ?>
        </div>
    </div>

    <div class="form-group">
        <?= form_label('Notes :', 'remarks', ['class' => 'control-label col-md-3']); ?>
        <div class="col-md-8">
            <?= form_textarea('remarks', set_value('remarks', $item->remarks, true), ['class' => 'form-control']); ?>
        </div>
    </div>

</div>


<?= form_close(); ?>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <?php var_dump($item); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>