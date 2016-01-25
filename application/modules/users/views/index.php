<div class="container">

    <div class="row">

        <table class="table table-responsive table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th class="actions">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user->id; ?></td>
                    <td><?= $user->username; ?></td>
                    <td><?= $user->first_name; ?></td>
                    <td><?= $user->last_name; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= nice_date($user->dob, 'd-m-Y'); ?></td>
                    <td class="actions">
                        <div class="btn-group" role="group" aria-label="...">
                            <?= anchor(site_url('users/show/' . $user->id), 'Voir', ['class' => 'btn btn-default btn-xs']); ?>
                            <?= anchor(site_url('users/edit/' . $user->id), 'Editer', ['class' => 'btn btn-primary btn-xs']); ?>
                            <?= anchor(null, 'Supprimer', ['class' => 'btn btn-danger btn-xs', 'data-toggle' => 'modal', 'data-target' => '#delete-modal']); ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>