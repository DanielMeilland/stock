<!-- content -->
<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>Edite : <?= htmlspecialchars($item->name); ?></strong>
                </div>
                <div class="panel-body">
                    <?= form_open_multipart('item/edit/' . $item->item_id, ['classe' => 'form-horizontal']); ?>
                    <div class="row">
                        <div class="col-md-8">

                            <div class="form-group">
                                <?= form_label('Nom du produit :', 'name', ['class' => 'control-label col-md-3']); ?>
                                <div class="col-md-8">
                                    <?= form_input('name', set_value('name', $item->name, true), ['class' => 'form-control']); ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <?= form_label('Lieu :', 'stocking_place', ['class' => 'control-label col-md-3']); ?>
                                <div class="col-md-8">
                                    <?= form_input('stocking_place', set_value('stocking_place', $item->item_state_id, true), ['class' => 'form-control']); ?>
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
                                    <?= form_input('supplier', set_value('supplier', $item->supplier_id, true), ['class' => 'form-control']); ?>

                                    <select name="suppliers">
                                        <?php foreach ($suppliers as $supplier): ?>
                                            <option value="<?= $supplier->name ?>"><?= $supplier->name ?></option>
                                        <?php endforeach; ?>
                                    </select>

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

                            <div class="form-group">
                                <label for="group" class="control-label col-md-3">Group</label>
                                <div class="col-md-5">
                                    <select name="group" id="group" class="form-control">
                                        <option value="">Select group</option>
                                        <option value="1">Family</option>
                                        <option value="2">Friend</option>
                                        <option value="3">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <a href="#" id="add-group-btn" class="btn btn-default btn-block">Add Group</a>
                                </div>
                            </div>
                            <div class="form-group" id="add-new-group">
                                <div class="col-md-offset-3 col-md-8">
                                    <div class="input-group">
                                        <input type="text" name="new_group" id="new_group" class="form-control">
                                          <span class="input-group-btn">
                                            <a href="#" class="btn btn-default">
                                                <i class="glyphicon glyphicon-ok"></i>
                                            </a>
                                          </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="<?= htmlspecialchars($item->image); ?>" alt="Photo">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"
                                     style="max-width: 200px; max-height: 150px;"></div>
                                <div class="text-center">
                                        <span class="btn btn-default btn-file">
                                            <span class="fileinput-new">Choose image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="..."></span>
                                    <a href="#" class="btn btn-default fileinput-exists"
                                       data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?= form_close(); ?>
                </div>

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-6">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="#" class="btn btn-default">Cancel</a>
                                    <!-- Button vard_dump modal -->
                                    <?= form_button('var_dump', 'var_dump', ['class' => 'btn btn-warning', 'data-toggle' => 'modal', 'data-target' => '#myModal']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

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
                <?php var_dump($supplier); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>