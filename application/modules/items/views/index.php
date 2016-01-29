<style>
    .btn-glyphicon {
        padding: 8px;
        background: #ffffff;
        margin-right: 4px;
    }

    .icon-btn {
        padding: 1px 15px 3px 2px;
        border-radius: 50px;
    }
</style>
<div id="main" class="container-fluid" style="margin-top: 50px">

    <div id="top" class="row">
        <div class="col-sm-3">
            <h2>Items</h2>
        </div>
        <div class="col-sm-6">

            <div class="input-group h2">
                <input name="data[search]" class="form-control" id="search" type="text" placeholder="">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
				</span>
            </div>

        </div>
        <div class="col-sm-3">
            <a href="<?= site_url('items/create'); ?>" class="btn btn-primary pull-right h2">Ajouter un item</a>
        </div>
    </div> <!-- /#top -->


    <hr>
    <div id="list" class="row">

        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Fournisseur</th>
                    <th>Lieu</th>
                    <th>Date</th>
                    <th class="actions">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td><?= $item->name; ?></td>
                        <td><?= $item->description; ?></td>
                        <td><?= $item->supplier->name ? $item->supplier->name : ''; ?></td>
                        <td><?= $item->stocking_place->name ? $item->stocking_place->name : ''; ?></td>
                        <td><?= $item->created_date; ?></td>
                        <td class="actions">
                            <div class="btn-group" role="group" aria-label="...">
                                <?= anchor(site_url('items/show/' . $item->item_id), 'Voir', ['class' => 'btn btn-default btn-xs']); ?>
                                <?= anchor(site_url('items/edit/' . $item->item_id), 'Editer', ['class' => 'btn btn-primary btn-xs']); ?>
                                <?= anchor(site_url('items/destroy/' . $item->item_id), 'Supprimer', ['class' => 'btn btn-danger btn-xs']); ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div><!-- /#list -->

    <div id="body">
        <p><?php echo $links; ?></p>
    </div>

</div><!-- Main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                        aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="modalLabel">Supprimer l'item ?</h4>
            </div>
            <div class="modal-body"><?php var_dump($item); ?></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"
                        onClick="location.href='<?= site_url('item/delete/' . $item->item_id); ?>'">Oui
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
            </div>
        </div>
    </div>
</div>