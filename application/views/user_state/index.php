<div class="container">

    <div class="btn-toolbar">
        <button class="btn btn-primary">New User</button>
        <button class="btn">Import</button>
        <button class="btn">Export</button>
    </div>
    <div class="well">
        <table class="table table-responsive table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user->user_id ?></td>
                    <td><?= isset($user->first_name) ? $user->first_name : 'undefined'; ?></td>
                    <td><?= isset($user->last_name) ? $user->last_name : 'undefined'; ?></td>
                    <td><?= isset($user->username) ? $user->username : 'undefined'; ?></td>
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
    </div>
    <div class="pagination">

    </div>
    <div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Delete Confirmation</h3>
        </div>
        <div class="modal-body">
            <p class="error-text">Are you sure you want to delete the user?</p>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
            <button class="btn btn-danger" data-dismiss="modal">Delete</button>
        </div>
    </div>


</div>