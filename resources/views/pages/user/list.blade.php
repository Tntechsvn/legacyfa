@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List User:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addusermodal">Add User</button>
            <a class="link-trash textright" href="{{route('user.list-trash')}}">Trash</a>
        </div>
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Preferred Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>full name</td>
                    <td>Preferred Name</td>
                    <td>Email</td>
                    <td>Admin</td>
                    <td>Active</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-id="company->id" data-toggle="modal" data-target="#editcompanyid">Edit</button>
                        <button type="button" class="btn btn-primary">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<!-- modal ADD NEW COMPANY -->
<div class="modal fade" id="addusermodal" tabindex="-1" role="dialog" aria-labelledby="addusermodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="adduser_form" id='adduser_form' class="form-control-popup" method="post" action="" data-parsley-validate>
                    <div class="form-group">
                        <label for="user-role">User Role<span>*</span></label>
                        <select name="user-role" id="user-role" class="form-control">
                            <option value="">Admin</option>
                            <option value="">Supper Admin</option>
                            <option value="">Suppest Admin</option>
                        </select>
                        <span class="error">{{$errors->first('category')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="full-name">Full Name<span>*</span></label>
                        <input type="text" class="form-control" id="full-name" name="full-name" placeholder="Full Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="preferred-name">Preferred Name<span>*</span></label>
                        <input type="text" class="form-control" id="preferred-name" name="preferred-name" placeholder="Preferred Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="email-user">Email<span>*</span></label>
                        <input type="email" class="form-control" id="email-user" name="email-user" placeholder="Email" value="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password<span>*</span></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="******" value="">
                    </div>
                    <div class="form-group">
                        <label for="repassword">Re-Type Password<span>*</span></label>
                        <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Password" value="">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
