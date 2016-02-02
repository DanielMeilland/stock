<div class="container">

    <div class="page-header">
        <h4>Liste des fournisseurs</h4>
        <?= anchor(site_url('items/suppliers/create'), 'Ajouter un fournisseur'); ?>
    </div>

    <table class="table table-striped table-bordered" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>Nom du fournisseur</th>
            <th>Addresse 1</th>
            <th>Addresse 2</th>
            <th>Code postal</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>N° de téléphone</th>
            <th>Email</th>
            <th class="actions">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($suppliers as $supplier): ?>
            <tr>
                <td><?= isset($supplier->name) ? htmlspecialchars($supplier->name) : 'undefined'; ?></td>
                <td><?= isset($supplier->address_line1) ? htmlspecialchars($supplier->address_line1) : 'undefined'; ?></td>
                <td><?= isset($supplier->address_line2) ? htmlspecialchars($supplier->address_line2) : 'undefined'; ?></td>
                <td><?= isset($supplier->zip) ? htmlspecialchars($supplier->zip) : 'undefined'; ?></td>
                <td><?= isset($supplier->city) ? htmlspecialchars($supplier->city) : 'undefined'; ?></td>
                <td><?= isset($supplier->country->name) ? htmlspecialchars($supplier->country->name) : 'undefined'; ?></td>
                <td><?= isset($supplier->tel) ? htmlspecialchars($supplier->tel) : 'undefined'; ?></td>
                <td><?= isset($supplier->email) ? htmlspecialchars($supplier->email) : 'undefined'; ?></td>
                <td class="actions">
                    <div class="btn-group" role="group" aria-label="...">
                        <?= anchor(site_url('items/suppliers/show/' . $supplier->supplier_id), 'Voir', ['class' => 'btn btn-default btn-xs']); ?>
                        <?= anchor(site_url('items/suppliers/edit/' . $supplier->supplier_id), 'Editer', ['class' => 'btn btn-primary btn-xs']); ?>
                        <?= anchor(site_url('items/suppliers/destroy/' . $supplier->supplier_id), 'Supprimer', ['class' => 'btn btn-danger btn-xs']); ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>