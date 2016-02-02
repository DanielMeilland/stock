<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="page-header">Ajouter un Fournisseur</h3>
                </div>
                <div class="panel-body">
                    <?= form_open('', ['classe' => 'form-horizontal']); ?>
                    <div class="row">
                        <div class="col-md-8">

                            <?php $error = form_error("name", "<p class='text-danger'>", '</p>'); ?>
                            <div class="form-group <?= $error ? 'has-error' : '' ?>">
                                <?= form_label('Nom du fournisseur :', 'name', ['class' => 'control-label col-md-3']); ?>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <?= form_input('name', set_value('name'), ['class' => 'form-control col-md-8']); ?>
                                    <span class="input-group-addon"></span>
                                </div>
                                <?= $error; ?>
                            </div>

                            <?php $error = form_error("address_line1", "<p class='text-danger'>", '</p>'); ?>
                            <div class="form-group <?= $error ? 'has-error' : '' ?>">
                                <?= form_label('Addresse 1 :', 'address_line1', ['class' => 'control-label col-md-3']); ?>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <?= form_input('address_line1', set_value('address_line1'), ['class' => 'form-control col-md-8']); ?>
                                    <span class="input-group-addon"></span>
                                </div>
                                <?= $error; ?>
                            </div>

                            <?php $error = form_error("address_line2", "<p class='text-danger'>", '</p>'); ?>
                            <div class="form-group <?= $error ? 'has-error' : '' ?>">
                                <?= form_label('Addresse 2 :', 'address_line2', ['class' => 'control-label col-md-3']); ?>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <?= form_input('address_line2', set_value('address_line2'), ['class' => 'form-control col-md-8']); ?>
                                    <span class="input-group-addon"></span>
                                </div>
                                <?= $error; ?>
                            </div>

                            <?php $error = form_error("zip", "<p class='text-danger'>", '</p>'); ?>
                            <div class="form-group <?= $error ? 'has-error' : '' ?>">
                                <?= form_label('Code postal :', 'zip', ['class' => 'control-label col-md-3']); ?>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <?= form_input('zip', set_value('zip'), ['class' => 'form-control col-md-8']); ?>
                                    <span class="input-group-addon"></span>
                                </div>
                                <?= $error; ?>
                            </div>

                            <?php $error = form_error("city", "<p class='text-danger'>", '</p>'); ?>
                            <div class="form-group <?= $error ? 'has-error' : '' ?>">
                                <?= form_label('Ville :', 'city', ['class' => 'control-label col-md-3']); ?>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <?= form_input('city', set_value('city'), ['class' => 'form-control col-md-8']); ?>
                                    <span class="input-group-addon"></span>
                                </div>
                                <?= $error; ?>
                            </div>

                            <?php $error = form_error("country_id", "<p class='text-danger'>", '</p>'); ?>
                            <div class="form-group <?= $error ? 'has-error' : '' ?>">
                                <?= form_label('Pays :', 'country_id', ['class' => 'control-label col-md-3']); ?>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <?= form_dropdown('country_id', $country, '', ['class' => 'form-control']); ?>
                                    <span class="input-group-addon"></span>
                                </div>
                                <?= $error; ?>
                            </div>

                            <?php $error = form_error("tel", "<p class='text-danger'>", '</p>'); ?>
                            <div class="form-group <?= $error ? 'has-error' : '' ?>">
                                <?= form_label('N° de téléphone :', 'tel', ['class' => 'control-label col-md-3']); ?>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <?= form_input('email', set_value('email'), ['class' => 'form-control col-md-8']); ?>
                                    <span class="input-group-addon"></span>
                                </div>
                                <?= $error; ?>
                            </div>

                            <?php $error = form_error("email", "<p class='text-danger'>", '</p>'); ?>
                            <div class="form-group <?= $error ? 'has-error' : '' ?>">
                                <?= form_label('Email :', 'email', ['class' => 'control-label col-md-3']); ?>
                                <div class="input-group">
                                    <span class="input-group-addon"></span>
                                    <?= form_input('email', set_value('email'), ['class' => 'form-control col-md-8']); ?>
                                    <span class="input-group-addon"></span>
                                </div>
                                <?= $error; ?>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-6">
                                    <?= form_submit('submit', 'Save', ['class' => 'btn btn-primary']); ?>
                                    <a href="<?= site_url('items/suppliers'); ?>" class="btn btn-default">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
