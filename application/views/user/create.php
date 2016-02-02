<div class="container">

    <div class="panel panel-default">

        <div class="panel-heading">
            <h3>Ajouter un utilisateur</h3>
        </div>

        <div class="panel-body">
            <?= form_open_multipart('users/create', ['classe' => 'form-horizontal']); ?>

            <div class="form-group">
                <?= form_label('Username :', 'username', ['class' => 'control-label col-md-3']); ?>
                <div class="col-md-8">
                    <?= form_input('username', '', ['class' => 'form-control']); ?>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('First name :', 'first_name', ['class' => 'control-label col-md-3']); ?>
                <div class="col-md-8">
                    <?= form_input('first_name', '', ['class' => 'form-control']); ?>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('Last name :', 'last_name', ['class' => 'control-label col-md-3']); ?>
                <div class="col-md-8">
                    <?= form_input('last_name', '', ['class' => 'form-control']); ?>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('Lieu :', 'department_id', ['class' => 'control-label col-md-3']); ?>
                <div class="col-md-8">
                    <?= form_dropdown('department_id', $departments, '', ['class' => 'form-control']); ?>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('User type :', 'user_type_id', ['class' => 'control-label col-md-3']); ?>
                <div class="col-md-8">
                    <?= form_dropdown('user_type_id', $user_types, '', ['class' => 'form-control']); ?>
                </div>
            </div>

            <div class="form-group">
                <?= form_label('Statut :', 'user_state_id', ['class' => 'control-label col-md-3']); ?>
                <div class="col-md-8">
                    <?= form_dropdown('user_state_id', $user_states, '', ['class' => 'form-control']); ?>
                </div>
            </div>

        </div>

        <div class="panel-footer">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">
                            <?= form_submit('submit', 'Save', ['class' => 'btn btn-primary']); ?>
                            <a href="<?= site_url('users'); ?>" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?= form_close(); ?>
    </div>
</div>