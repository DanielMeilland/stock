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
                                                                <a href="<?= site_url('users/show/' . $user->user_id); ?>"
                                                                   class="btn btn-default btn-xs">
                                                                    <i class="glyphicon glyphicon-eye-open"></i>
                                                                </a>

                                                                <a href="<?= site_url('users/edit/' . $user->user_id); ?>"
                                                                   class="btn btn-primary btn-xs">
                                                                    <i class="glyphicon glyphicon-edit"></i>
                                                                </a>

                                                                <button class="btn btn-danger btn-xs"
                                                                        data-href="<?= site_url('users/destroy/' . $user->user_id); ?>"
                                                                        data-toggle="modal"
                                                                        data-target="#confirm-delete">
                                                                    <li class="glyphicon glyphicon-trash"></li>
                                                                </button>
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