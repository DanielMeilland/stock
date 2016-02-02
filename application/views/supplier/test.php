<section class="mainbar" data-ng-controller="admin as vm">
    <section class="matter">
        <div class="container">
            <div class="row">
                <div class="widget wviolet col-lg-8">
                    <div data-cc-widget-header title="{{vm.title}}"  allow-collapse="true"></div>
                    <div class="widget-content user">
                        <p><a data-ng-click="showadd()" href="javascript:;" class="btn btn-primary">Add New User</a></p>
                        <div class="modal fade" id="userModel" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close bgreen" data-dismiss="modal"  aria-hidden="true">X</button>
                                        <h4 class="modal-title bblue" id="myModalLabel" ng-hide="editMode">Add </h4>
                                        <h4 class="modal-title bblue" id="myModalLabel" ng-show="editMode">Edit</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form" name="adduserform">


                                            <div class="form-group left">

                                                <label for="title" class="col-sm-5 control-label">First Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" data-ng-model="user.firstname" class="form-control" id="title" placeholder="Your First Name" required title="Enter your name" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-10 control-label">Last Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" data-ng-model="user.lastname" class="form-control" id="title" placeholder="Your Last Name" required title="Enter your last name" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-10 control-label">Age</label>
                                                <div class="col-sm-10">
                                                    <input type="text" data-ng-model="user.age" class="form-control" id="title" placeholder="Age" required title="Enter your Age" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-sm-10 control-label">Location</label>
                                                <div class="col-sm-10">
                                                    <input type="text" data-ng-model="user.location" class="form-control" id="title" placeholder="Your Location" required title="Enter your location" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <span data-ng-hide="editMode">
                                                        <input type="submit" value="Add" data-ng-click="add()" class="btn btn-primary" />
                                                    </span>
                                                    <span data-ng-show="editMode">
                                                        <input type="submit" value="Update" data-ng-click="update(user)" class="btn btn-primary" />
                                                    </span>
                                                    <input type="button" value="Cancel" data-ng-click="cancel()" class="btn btn-primary" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <strong class="success center-block green">{{message}}</strong>
                        <table class="table table-hover">
                            <thead>
                            <tr>

                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Location</th>
                                <th>Edit/Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr data-ng-repeat="p in vm.people | filter:name">
                                <td><strong>{{p.firstname}}</strong> </td>
                                <td><strong>{{p.lastname}} </strong></td>
                                <td><strong>{{p.age}}</strong> </td>
                                <td><strong>{{p.location}} </strong> </td>
                                <td>
                                    <input type="button" ng-click="showedit(p)" class="btn btn-primary" value="Edit" />
                                    <input type="button" ng-click="delete($index)" class="btn btn-primary" value="Delete" />
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="widget-foot">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>