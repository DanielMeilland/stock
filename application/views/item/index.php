<div class="container">

    <div class="row">
        <div class="col-sm-3">
            <h2><?= isset($pageName) ? htmlspecialchars($pageName) : 'undefined'; ?></h2>
        </div>
        <div class="col-sm-offset-6 col-sm-3">
            <a href="<?= site_url('items/create'); ?>" class="btn btn-primary pull-right h2">Ajouter un item</a>
        </div>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Fournisseur</th>
            <th>Lieu</th>
            <th>State</th>
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
                <td><?= isset($item->item_state->name) ? $item->item_state->name : 'undefined'; ?></td>
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

    <div class="pagination">
        <p><?= isset($links) ? $links : ''; ?></p>
    </div>

</div>