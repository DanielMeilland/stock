<!-- content -->
<div class="container">

    <div class="page-header">
        <h2>Edite : <?= $user->username ? htmlspecialchars($user->username) : 'undefined'; ?></h2>
    </div>

    <?= form_open('users/edit/' . $user->user_id, ['classe' => 'form-horizontal']); ?>

    <?php $error = form_error("username", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Identifiant :', 'username', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Identifiant :</div>
            <?= form_input('username', set_value('username', $user->username), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("first_name", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Prénom :', 'first_name', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Prénom :</div>
            <?= form_input('first_name', set_value('first_name', $user->first_name), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("last_name", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Nom :', 'last_name', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Nom :</div>
            <?= form_input('last_name', set_value('last_name', $user->last_name), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("initials", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('initials :', 'initials', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">initials :</div>
            <?= form_input('initials', set_value('initials', $user->initials), ['class' => 'form-control']); ?>
            <?= $error; ?>
        </div>
    </div>

    <?php $error = form_error("email", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Adresse email :', 'email', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Adresse email :</div>
            <?= form_input('email', set_value('email', $user->email), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("phone", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('N° de téléphone :', 'phone', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">N° de téléphone :</div>
            <?= form_input('phone', set_value('phone', $user->phone), ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>


    <?php $error = form_error("user_type_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('User type :', 'user_type_id', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">User type :</div>
            <?php if (!isset($user->user_type->user_type_id)): ?>
                <?= form_dropdown('user_type_id', $user_types, '', ['class' => 'form-control']); ?>
            <?php else: ?>
                <?= form_dropdown('user_type_id', $user_types, $user->user_type->user_type_id, ['class' => 'form-control']); ?>
            <?php endif; ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("department_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('User department :', 'department_id', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">User department :</div>
            <?php if (!isset($user->department->department_id)): ?>
                <?= form_dropdown('department_id', $departments, '', ['class' => 'form-control']); ?>
            <?php else: ?>
                <?= form_dropdown('department_id', $departments, $user->department->department_id, ['class' => 'form-control']); ?>
            <?php endif; ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("user_state_id", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('User state :', 'user_state_id', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">User state :</div>
            <?php if (!isset($user->user_state->user_state_id)): ?>
                <?= form_dropdown('user_state_id', $user_states, '', ['class' => 'form-control']); ?>
            <?php else: ?>
                <?= form_dropdown('user_state_id', $user_states, $user->user_state->user_state_id, ['class' => 'form-control']); ?>
            <?php endif; ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("password", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Mot de passe :', 'password', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Mot de passe :</div>
            <?= form_password('password', '', ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?php $error = form_error("password_confirm", "<p class='text-danger'>", '</p>'); ?>
    <div class="form-group <?= $error ? 'has-error' : '' ?>">
        <?= form_label('Confirmer le mot de passe :', 'password_confirm', ['class' => 'control-label sr-only']); ?>
        <div class="input-group">
            <div class="input-group-addon">Confirmer le mot de passe :</div>
            <?= form_password('password_confirm', '', ['class' => 'form-control']); ?>
        </div>
        <?= $error; ?>
    </div>

    <?= form_submit('submit', 'Save', ['class' => 'btn btn-primary']); ?>
    <a href="<?= site_url('users'); ?>" class="btn btn-default">Cancel</a>

    <?= form_close(); ?>
</div>