<?php include "assets/include/header.php"; ?>

<div id="main">
    <?php include "assets/include/nav.php"; ?>
        <!-- contenu de la page -->
            <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Users</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                        <div class="card mb-3">

                            <div class="card-header">
                                <span class="pull-right"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user"><i class="fa fa-user-plus" aria-hidden="true"></i> Add new user</button></span>
                                <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <form action="#" method="post" enctype="multipart/form-data">


                                                <div class="modal-header">
                                                    <h5 class="modal-title">Add new user</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label>Full name (required)</label>
                                                                <input class="form-control" name="name" type="text" required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Valid Email (required)</label>
                                                                <input class="form-control" name="email" type="email" required />
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Password (required)</label>
                                                                <input class="form-control" name="password" type="text" required />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Role</label>
                                                                <select name="role_id" class="form-control" required>
                                                                    <option value="">- select -</option>
                                                                    <optgroup label="Staff member">
                                                                        <option value="1">Administrator</option>
                                                                        <option value="2">Manager</option>
                                                                        <option value="3">Author</option>
                                                                    </optgroup>

                                                                    <optgroup label="Registered member">
                                                                        <option value="4">User</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Skype (optional)</label>
                                                                <input class="form-control" name="skype" type="text" />
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Email verified</label>
                                                                <select name="email_verified" class="form-control">
                                                                    <option value="1">YES</option>
                                                                    <option value="0">NO</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Active</label>
                                                                <select name="active" class="form-control">
                                                                    <option value="1">YES</option>
                                                                    <option value="0">NO</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="form-group">
                                                        <label>Avatar image (optional):</label> <br />
                                                        <input type="file" name="image">
                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary">Add user</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <h3><i class="fa fa-user"></i> All users (4 users)</h3>
                            </div>
                            <!-- end card-header -->

                            <div class="card-body">


                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="width:50px">ID</th>
                                            <th>User details</th>
                                            <th style="width:130px">Role</th>
                                            <th style="width:150px">Articles</th>
                                            <th style="width:120px">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr >
                                            <th>
                                                5							</th>

                                            <td>
                                                <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="assets/images/avatars/avatar1.png" /></span>
                                                <strong>Gabriel Gaby</strong>							<br />
                                                <small>webmaster@website.com</small>
                                            </td>

                                            <td>Author</td>


                                            <td>0</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_5"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_user_5">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <form action="#" method="post" enctype="multipart/form-data">


                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit user</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label>Full name (required)</label>
                                                                                <input class="form-control" name="name" type="text" required value="Gabriel Gaby" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Valid Email (required)</label>
                                                                                <input class="form-control" name="email" type="email" required value="webmaster@website.com" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Password (empty not to change)</label>
                                                                                <input class="form-control" name="password" type="text" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Role</label>
                                                                                <select name="role_id" class="form-control" required>
                                                                                    <option value="">- select -</option>
                                                                                    <optgroup label="Staff member">
                                                                                        <option  value="1">Administrator</option>
                                                                                        <option  value="2">Manager</option>
                                                                                        <option selected="selected" value="3">Author</option>
                                                                                    </optgroup>

                                                                                    <optgroup label="Registered member">
                                                                                        <option  value="4">User</option>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Skype (optional)</label>
                                                                                <input class="form-control" name="skype" type="text" value="pppp" />
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Email verified</label>
                                                                                <select name="email_verified" class="form-control">
                                                                                    <option selected="selected" value="1">YES</option>
                                                                                    <option  value="0">NO</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Active</label>
                                                                                <select name="active" class="form-control">
                                                                                    <option selected="selected" value="1">YES</option>
                                                                                    <option  value="0">NO</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Change avatar (optional):</label> <br />
                                                                        <input type="file" name="image">
                                                                    </div>

                                                                </div>

                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="user_id" value="5" />
                                                                    <button type="button" class="btn btn-primary">Edit user</button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="javascript:deleteRecord_5('5');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <script>
                                                    function deleteRecord_5(RecordId)
                                                    {
                                                        if (confirm('Confirm delete')) {
                                                            window.location.href = '#';
                                                        }
                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                        <tr >
                                            <th>
                                                4							</th>

                                            <td>
                                                <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="assets/images/avatars/avatar2.png" /></span>
                                                <strong>Test Author</strong>							<br />
                                                <small>user@website.com</small>
                                            </td>

                                            <td>Author</td>


                                            <td>0</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_4"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_user_4">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <form action="#" method="post" enctype="multipart/form-data">


                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit user</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label>Full name (required)</label>
                                                                                <input class="form-control" name="name" type="text" required value="Test Author" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Valid Email (required)</label>
                                                                                <input class="form-control" name="email" type="email" required value="user@website.com" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Password (empty not to change)</label>
                                                                                <input class="form-control" name="password" type="text" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Role</label>
                                                                                <select name="role_id" class="form-control" required>
                                                                                    <option value="">- select -</option>
                                                                                    <optgroup label="Staff member">
                                                                                        <option  value="1">Administrator</option>
                                                                                        <option  value="2">Manager</option>
                                                                                        <option selected="selected" value="3">Author</option>
                                                                                    </optgroup>

                                                                                    <optgroup label="Registered member">
                                                                                        <option  value="4">User</option>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Skype (optional)</label>
                                                                                <input class="form-control" name="skype" type="text" value="skype_author" />
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Email verified</label>
                                                                                <select name="email_verified" class="form-control">
                                                                                    <option selected="selected" value="1">YES</option>
                                                                                    <option  value="0">NO</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Active</label>
                                                                                <select name="active" class="form-control">
                                                                                    <option selected="selected" value="1">YES</option>
                                                                                    <option  value="0">NO</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Change avatar (optional):</label> <br />
                                                                        <input type="file" name="image">
                                                                    </div>

                                                                </div>

                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="user_id" value="4" />
                                                                    <button type="button" class="btn btn-primary">Edit user</button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="javascript:deleteRecord_4('4');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <script>
                                                    function deleteRecord_4(RecordId)
                                                    {
                                                        if (confirm('Confirm delete')) {
                                                            window.location.href = '#';
                                                        }
                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                        <tr >
                                            <th>
                                                2							</th>

                                            <td>
                                                <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="assets/images/avatars/avatar3.png" /></span>
                                                <strong>Test Manager</strong>							<br />
                                                <small>manager@website.com</small>
                                            </td>

                                            <td>Manager</td>


                                            <td>0</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_2"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_user_2">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <form action="#" method="post" enctype="multipart/form-data">


                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit user</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label>Full name (required)</label>
                                                                                <input class="form-control" name="name" type="text" required value="Test Manager" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Valid Email (required)</label>
                                                                                <input class="form-control" name="email" type="email" required value="manager@website.com" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Password (empty not to change)</label>
                                                                                <input class="form-control" name="password" type="text" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Role</label>
                                                                                <select name="role_id" class="form-control" required>
                                                                                    <option value="">- select -</option>
                                                                                    <optgroup label="Staff member">
                                                                                        <option  value="1">Administrator</option>
                                                                                        <option selected="selected" value="2">Manager</option>
                                                                                        <option  value="3">Author</option>
                                                                                    </optgroup>

                                                                                    <optgroup label="Registered member">
                                                                                        <option  value="4">User</option>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Skype (optional)</label>
                                                                                <input class="form-control" name="skype" type="text" value="skype_manager" />
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Email verified</label>
                                                                                <select name="email_verified" class="form-control">
                                                                                    <option selected="selected" value="1">YES</option>
                                                                                    <option  value="0">NO</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Active</label>
                                                                                <select name="active" class="form-control">
                                                                                    <option selected="selected" value="1">YES</option>
                                                                                    <option  value="0">NO</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Change avatar (optional):</label> <br />
                                                                        <input type="file" name="image">
                                                                    </div>

                                                                </div>

                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="user_id" value="2" />
                                                                    <button type="button" class="btn btn-primary">Edit user</button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="javascript:deleteRecord_2('2');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <script>
                                                    function deleteRecord_2(RecordId)
                                                    {
                                                        if (confirm('Confirm delete')) {
                                                            window.location.href = '#';
                                                        }
                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                        <tr >
                                            <th>
                                                1							</th>

                                            <td>
                                                <span style="float: left; margin-right:10px;"><img alt="image" style="max-width:40px; height:auto;" src="assets/images/avatars/avatar4.png" /></span>
                                                <strong>Pike Admin</strong>							<br />
                                                <small>demo@pikephp.com</small>
                                            </td>

                                            <td>Administrator</td>


                                            <td>8</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-hidden="true" id="modal_edit_user_1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <form action="#" method="post" enctype="multipart/form-data">


                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Edit user</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                </div>

                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="form-group">
                                                                                <label>Full name (required)</label>
                                                                                <input class="form-control" name="name" type="text" required value="Pike Admin" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Valid Email (required)</label>
                                                                                <input class="form-control" name="email" type="email" required value="demo@pikephp.com" />
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Password (empty not to change)</label>
                                                                                <input class="form-control" name="password" type="text" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Role</label>
                                                                                <select name="role_id" class="form-control" required>
                                                                                    <option value="">- select -</option>
                                                                                    <optgroup label="Staff member">
                                                                                        <option selected="selected" value="1">Administrator</option>
                                                                                        <option  value="2">Manager</option>
                                                                                        <option  value="3">Author</option>
                                                                                    </optgroup>

                                                                                    <optgroup label="Registered member">
                                                                                        <option  value="4">User</option>
                                                                                    </optgroup>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Skype (optional)</label>
                                                                                <input class="form-control" name="skype" type="text" value="pikephp" />
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Email verified</label>
                                                                                <select name="email_verified" class="form-control">
                                                                                    <option selected="selected" value="1">YES</option>
                                                                                    <option  value="0">NO</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6">
                                                                            <div class="form-group">
                                                                                <label>Active</label>
                                                                                <select name="active" class="form-control">
                                                                                    <option selected="selected" value="1">YES</option>
                                                                                    <option  value="0">NO</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>Change avatar (optional):</label> <br />
                                                                        <input type="file" name="image">
                                                                    </div>

                                                                </div>

                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="user_id" value="1" />
                                                                    <button type="button" class="btn btn-primary">Edit user</button>
                                                                </div>

                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="javascript:deleteRecord_1('1');" class="btn btn-danger btn-sm" data-placement="top" data-toggle="tooltip" data-title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                <script>
                                                    function deleteRecord_1(RecordId)
                                                    {
                                                        if (confirm('Confirm delete')) {
                                                            window.location.href = '';
                                                        }
                                                    }
                                                </script>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            <!-- end card-body -->

                        </div>
                        <!-- end card -->

                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
        <!-- fin contenu de la page -->

    <?php include "assets/include/footer.php"; ?>

</div>
<!-- END main -->
<?php include "assets/include/script.php"; ?>