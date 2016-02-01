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
                        <td><?= isset($item->name) ? $item->name : 'undefined'; ?></td>
                        <td><?= isset($item->description) ? substr($item->description, 0, 150) : 'undefined'; ?></td>
                        <td><?= isset($item->supplier->name) ? $item->supplier->name : 'undefined'; ?></td>
                        <td><?= isset($item->stocking_place->name) ? $item->stocking_place->name : 'undefined'; ?></td>
                        <td><?= isset($item->created_date) ? nice_date($item->created_date, 'd m Y') : 'undefined'; ?></td>
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
        <p><?= $links; ?></p>
    </div>

</div><!-- Main -->

<!-- Modal -->