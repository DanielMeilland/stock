<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= isset($pageName) ? htmlspecialchars($pageName) : 'undefined'; ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <div id="dataTables-example_wrapper"
                                     class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="dataTables-example_length">
                                                <a class="btn btn-primary" href="<?= site_url('items/create'); ?>">
                                                    <i class="glyphicon glyphicon-file"></i>
                                                    Ajouter un item</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table
                                                class="table table-striped table-bordered table-hover dataTable no-footer"
                                                id="dataTables-example" role="grid"
                                                aria-describedby="dataTables-example_info">
                                                <thead>
                                                <tr role="row">
                                                    <th>Nom</th>
                                                    <th>Description</th>
                                                    <th>Fournisseur</th>
                                                    <th>Lieu</th>
                                                    <th>State</th>
                                                    <th>Date</th>
                                                    <th class="actions">Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($items as $item): ?>
                                                    <tr class="gradeA odd" role="row">
                                                        <td><?= isset($item->name) ? $item->name : 'undefined'; ?></td>
                                                        <td><?= isset($item->description) ? substr($item->description, 0, 150) : 'undefined'; ?></td>
                                                        <td><?= isset($item->supplier->name) ? $item->supplier->name : 'undefined'; ?></td>
                                                        <td><?= isset($item->stocking_place->name) ? $item->stocking_place->name : 'undefined'; ?></td>
                                                        <td><?= isset($item->item_state->name) ? $item->item_state->name : 'undefined'; ?></td>
                                                        <td><?= isset($item->created_date) ? nice_date($item->created_date, 'd m Y') : 'undefined'; ?></td>
                                                        <td class="actions">
                                                            <div class="btn-group" role="group" aria-label="...">
                                                                <?= anchor(site_url('items/show/' . $item->item_id), 'Voir', ['class' => 'btn btn-default btn-xs']); ?>
                                                                <?= anchor(site_url('items/edit/' . $item->item_id), 'Editer', ['class' => 'btn btn-primary btn-xs']); ?>
                                                                <?= anchor(site_url('items/destroy/' . $item->item_id), 'Supprimer', ['class' => 'btn btn-danger btn-xs']); ?>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6"><!-- TODO compteur d'items --></div>
                                        <div class="col-sm-6">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                 id="dataTables-example_paginate">
                                                <?= isset($links) ? $links : ''; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->