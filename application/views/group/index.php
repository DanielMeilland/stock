<div class="container">

    <div class="row">
        <div class="col-sm-3">
            <h2><?= htmlspecialchars($pageName); ?></h2>
        </div>
        <div class="col-sm-offset-6 col-sm-3">
            <a href="<?= site_url('groups/create'); ?>" class="btn btn-primary pull-right h2">Ajouter un group</a>
        </div>
    </div>

    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Group Name</th>
            <th>Description</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($groups as $group) : ?>
            <tr>
                <td><?= $group->id ?></td>
                <td><?= isset($group->name) ? $group->name : 'undefined'; ?></td>
                <td><?= isset($group->description) ? $group->description : 'undefined'; ?></td>
                <td class="actions">
                    <div class="btn-group" role="group" aria-label="...">
                        <?= anchor(site_url('groups/show/' . $group->id), 'Voir', ['class' => 'btn btn-default btn-xs']); ?>
                        <?= anchor(site_url('groups/edit/' . $group->id), 'Editer', ['class' => 'btn btn-primary btn-xs']); ?>
                        <?= anchor(site_url('groups/destroy/' . $group->id), 'Supprimer', ['class' => 'btn btn-danger btn-xs']); ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination">

    </div>
</div>