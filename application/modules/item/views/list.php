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
            <a href="<?= site_url('item/add'); ?>" class="btn btn-primary pull-right h2">Ajouter un item</a>
        </div>
    </div> <!-- /#top -->


    <hr>
    <div id="list" class="row">

        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th class="actions">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($items as $item): ?>
                    <tr>
                        <td><?= $item->item_id; ?></td>
                        <td><?= $item->name; ?></td>
                        <td><?= $item->description; ?></td>
                        <td><?= $item->created_date; ?></td>
                        <td class="actions">
                            <a class="btn btn-success btn-xs" href="<?= site_url('item/read/' . $item->item_id); ?>">Voir</a>
                            <a class="btn btn-warning btn-xs" href="<?= site_url('item/edit/' . $item->item_id); ?>">Editer</a>
                            <a class="btn btn-danger btn-xs" href="#" data-toggle="modal" data-target="#delete-modal">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div><!-- /#list -->

</div><!-- Main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span
                        aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="modalLabel">Supprimer l'item</h4>
            </div>
            <div class="modal-body">Confirmation...</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary"
                        onclick="<?= site_url('item/delete/' . $item->item_id); ?>">Oui
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
            </div>
        </div>
    </div>
</div>