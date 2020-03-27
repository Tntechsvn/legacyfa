@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List User:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new">Add User</button>
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
                    <th>Download</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listUser as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->full_name}}</td>
                    <td>{{$user->preferred_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->nameRole}}</td>
                    <td>{{$user->status}}</td>
                    <td><a href="{{route('downloadpdf',$user->id)}}">PDF</a></td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit" data-id="{{$user->id}}" data-email="{{$user->email}}" data-full-name="{{$user->full_name}}" data-preferred-name="{{$user->preferred_name}}" data-role="{{$user->role_id}}" data-url="{{route('user.edit', $user->id)}}" data-toggle="modal"><i class="fas fa-edit"></i></a>
                        {{--@if(Auth::user()->levelUser < $user->levelUser && Auth::id() != $user->id)--}}
                        <a href="javascript:;" class="deletestyle1 delete" data-id="{{$user->id}}" data-url="{{route('user.move_to_trash', $user->id)}}"><i class="fas fa-trash"></i></a>
                        {{-- @endif --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>{{$listUser->links()}}</div>
    </div>
</div>
<!-- modal ADD NEW USER -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="modal_add_new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new" id='form_add_new' class="form-control-popup" method="post" action="{{route('user.add_new')}}" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="role">User Role<span>*</span></label>
                        <select name="role" id="role" class="form-control">
                            <option value="0">Select</option>
                            @foreach($listRole as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="full_name">Full Name<span>*</span></label>
                        <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="preferred_name">Preferred Name<span>*</span></label>
                        <input type="text" class="form-control" id="preferred_name" name="preferred_name" placeholder="Preferred Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="email">Email<span>*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password<span>*</span></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="******" value="">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Re-Type Password<span>*</span></label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password" value="">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal EDIT USER -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_edit" id='form_edit' class="form-control-popup" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group" id="form_role">
                        <label for="role_edit">User Role<span>*</span></label>
                        <select name="role_edit" id="role_edit" class="form-control">
                            <option value="0">Select</option>
                            @foreach($listRole as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="full_name_edit">Full Name<span>*</span></label>
                        <input type="text" class="form-control" id="full_name_edit" name="full_name_edit" placeholder="Full Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="preferred_name_edit">Preferred Name<span>*</span></label>
                        <input type="text" class="form-control" id="preferred_name_edit" name="preferred_name_edit" placeholder="Preferred Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="email_edit">Email<span>*</span></label>
                        <input type="email" class="form-control" id="email_edit" name="email_edit" placeholder="Email" readonly value="">
                    </div>
                    <div class="form-group">
                        <label for="password_edit">Password<span>*</span></label>
                        <input type="password" class="form-control" id="password_edit" name="password_edit" placeholder="******" value="">
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

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#form_add_new').on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function(res){
                    console.log(res);
                    if(res['error']){
                        alert(res['message']);
                    }else{
                        alert(res['message']);
                    }
                }
            });
        });

        $('.edit').on('click', function(){
            var id = $(this).data('id');
            var full_name = $(this).data('full-name');
            var preferred_name = $(this).data('preferred-name');
            var email = $(this).data('email');
            var role = $(this).data('role');
            var url = $(this).data('url');

            $('#modal_edit').modal('show');
            $('#email_edit').val(email);
            $('#full_name_edit').val(full_name);
            $('#preferred_name_edit').val(preferred_name);
            $("div#form_role select").val(role);
            $('#form_edit').attr('action', url);
        });

        $('#form_edit').on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function(res){
                    console.log(res);
                    if(res['error']){
                        alert(res['message']);
                    }else{
                        alert(res['message']);
                    }
                }
            });
        });

        $('.delete').on('click', function(){
            if(confirm('Do you want delete this user??')){
                var id = $(this).data('id');
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: 'json',
                    success: function(res){
                        if(res['error']){
                            alert(res['message']);
                        }else{
                            alert(res['message']);
                        }
                    }
                });
            }
        });
    });
</script>
@endsection
