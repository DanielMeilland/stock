<div class="container">

    <div class="row">
        <div class="col-sm-3">
            <h2><?= isset($pageName) ? htmlspecialchars($pageName) : 'undefined'; ?></h2>
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
                    <div class="" role="group" aria-label="...">
                        <?= anchor(site_url('users/show/' . $user->user_id), 'Voir', ['class' => 'btn btn-default btn-xs']); ?>

                        <a href="<?= site_url('users/edit/' . $user->user_id); ?>" class="btn btn-primary btn-xs">
                            <i class="glyphicon glyphicon-edit"></i>
                        </a>

                        <button class="btn btn-danger btn-xs"
                                data-href="<?= site_url('users/destroy/' . $user->user_id); ?>"
                                data-toggle="modal" data-target="#confirm-delete">
                            <li class="glyphicon glyphicon-trash"></li>
                        </button>

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

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                test
            </div>
            <div class="modal-body">
                test
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

