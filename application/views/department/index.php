<div class="container">
    <table class="table table-responsive table-bordered">
        <thead>
        <tr>
            <th>Department Name</th>
            <th>actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($departments as $department) : ?>
            <tr>
                <td><?= isset($department->name) ? $department->name : 'undefined'; ?></td>
                <td class="actions">
                    <div class="btn-group" role="group" aria-label="...">
                        <?= anchor(site_url('departments/show/' . $department->department_id), 'Voir', ['class' => 'btn btn-default btn-xs']); ?>
                        <?= anchor(site_url('departments/edit/' . $department->department_id), 'Editer', ['class' => 'btn btn-primary btn-xs']); ?>
                        <?= anchor(site_url('departments/destroy/' . $department->department_id), 'Supprimer', ['class' => 'btn btn-danger btn-xs']); ?>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination">

    </div>
</div>