<!-- content -->
<div class="container">

    <div class="page-header">
        <strong>Edite : <?= htmlspecialchars($user->username); ?></strong>
    </div>

    <?= form_open_multipart('users/edit/' . $user->user_id, ['classe' => '']); ?>

    <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Username :', 'username', ['class' => 'control-label ']); ?>
        <?= form_input('username', set_value('username', $user->username), ['class' => 'form-control']); ?>
        <?= $error; ?>
    </div>

    <?php $error = form_error("first_name", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('First name :', 'first_name', ['class' => 'control-label ']); ?>
        <?= form_input('first_name', set_value('first_name', $user->first_name), ['class' => 'form-control']); ?>
        <?= $error; ?>
    </div>

    <?php $error = form_error("last_name", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Last name :', 'last_name', ['class' => 'control-label ']); ?>
        <?= form_input('last_name', set_value('last_name', $user->last_name), ['class' => 'form-control']); ?>
        <?= $error; ?>
    </div>

    <?php $error = form_error("department_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Lieu :', 'department_id', ['class' => 'control-label ']); ?>
        <?php if (!isset($user->department->department_id)): ?>
            <?= form_dropdown('department_id', $departments, '', ['class' => 'form-control']); ?>
        <?php else: ?>
            <?= form_dropdown('department_id', $departments, $user->department->department_id, ['class' => 'form-control']); ?>
        <?php endif; ?>
        <?= $error; ?>
    </div>

    <?php $error = form_error("user_type_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('User type :', 'user_type_id', ['class' => 'control-label ']); ?>
        <?php if (!isset($user->user_type->user_type_id)): ?>
            <?= form_dropdown('user_type_id', $user_types, '', ['class' => 'form-control']); ?>
        <?php else: ?>
            <?= form_dropdown('user_type_id', $user_types, $user->user_type->user_type_id, ['class' => 'form-control']); ?>
        <?php endif; ?>
        <?= $error; ?>
    </div>

    <?php $error = form_error("user_state_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Statut :', 'user_state_id', ['class' => 'control-label ', 'role' => 'form']); ?>
        <?php if (!isset($user->user_state->user_state_id)): ?>
            <?= form_dropdown('user_state_id', $user_states, '', ['class' => 'form-control']); ?>
        <?php else: ?>
            <?= form_dropdown('user_state_id', $user_states, $user->user_state->user_state_id, ['class' => 'form-control']); ?>
        <?php endif; ?>
        <?= $error; ?>
    </div>

    <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('password', 'password', ['class' => 'control-label ']); ?>
        <?= form_password('password', '', ['class' => 'form-control']); ?>
        <?= $error; ?>
    </div>

    <?php $error = form_error("password_confirm", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('password_confirm', 'password', ['class' => 'control-label ']); ?>
        <?= form_password('password_confirm', '', ['class' => 'form-control']); ?>
        <?= $error; ?>
    </div>

    <?= form_submit('submit', 'Save', ['class' => 'btn btn-primary']); ?>
    <a href="<?= site_url('users'); ?>" class="btn btn-default">Cancel</a>

    <?= form_close(); ?>
</div>