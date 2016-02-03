<div class="container">
    <div class="page-header">
        <h2><?= isset($pageName) ? htmlspecialchars($pageName) : 'undefined'; ?></h2>
    </div>

    <?= form_open('', ['class' => 'form-horizontal', 'role' => 'form']); ?>

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Nom :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Departement">
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-sm-2 control-label">Adresse :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="address" name="address" placeholder="address">
        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">Téléphone :</label>
        <div class="col-sm-10">
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="phone">
        </div>
    </div>
    <div class="form-group">
        <label for="city" class="col-sm-2 control-label">City</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="city" name="city" placeholder="City">
        </div>
    </div>
    <div class="form-group">
        <label for="zipcode" class="col-sm-2 control-label">Code postal :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="ZIP Code">
        </div>
    </div>
    <div class="form-group">
        <label for="country" class="col-sm-2 control-label">Country</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="country" name="country" placeholder="Country">
        </div>
    </div>

    <?= form_close(); ?>
</div>