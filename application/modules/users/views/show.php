<div class="container">

    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>User : <?= htmlspecialchars($user->username); ?></strong>
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name" class="control-label col-md-3">Username</label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><?= htmlspecialchars($user->username); ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="control-label col-md-3">First name</label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><?= htmlspecialchars($user->firstname); ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="control-label col-md-3">Last name</label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><?= htmlspecialchars($user->lastname); ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="company" class="control-label col-md-3">Company</label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><?= htmlspecialchars($user->company); ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="control-label col-md-3">Email</label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><?= htmlspecialchars($user->email); ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="control-label col-md-3">Phone</label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><?= htmlspecialchars($user->phone); ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="control-label col-md-3">Address</label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><?= htmlspecialchars($user->address); ?></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="control-label col-md-3">Group</label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><?= htmlspecialchars($user->group); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 150px; height: 150px;">
                                    <img src="<?= $user->thumbnail ? base_url('assets/img/'.$user->thumbnail) : 'http://placehold.it/150x150'; ?>" alt="Photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>