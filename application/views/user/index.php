<div class="container">

    <div class="row">
        <div class="col-sm-3">
            <h2><?= htmlspecialchars($pageName); ?></h2>
        </div>
        <div class="col-sm-offset-6 col-sm-3">
            <a href="<?= site_url('users/create'); ?>" class="btn btn-primary pull-right h2">Ajouter un utilisateur</a>
        </div>
    </div>

    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Username</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>User type</th>
            <th>User department</th>
            <th>User state</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user->user_id ?></td>
                <td><?= isset($user->username) ? $user->username : 'undefined'; ?></td>
                <td><?= isset($user->first_name) ? $user->first_name : 'undefined'; ?></td>
                <td><?= isset($user->last_name) ? $user->last_name : 'undefined'; ?></td>
                <td><?= isset($user->user_type->name) ? $user->user_type->name : 'undefined'; ?></td>
                <td><?= isset($user->department->name) ? $user->department->name : 'undefined'; ?></td>
                <td><?= isset($user->user_state->name) ? $user->user_state->name : 'undefined'; ?></td>
                <td class="actions">
                    <div class="btn-group" role="group" aria-label="...">
                        <?= anchor(site_url('users/show/' . $user->user_id), 'Voir', ['class' => 'btn btn-default btn-xs']); ?>
                        <?= anchor(site_url('users/edit/' . $user->user_id), 'Editer', ['class' => 'btn btn-primary btn-xs']); ?>
                        <?= anchor(site_url('users/destroy/' . $user->user_id), 'Supprimer', ['class' => 'btn btn-danger btn-xs']); ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination">

    </div>
</div>