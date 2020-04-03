@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List User:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary add_new" data-url="{{route('user.add_new')}}"{{--  data-toggle="modal" data-target="#modal_add_new" --}}>Add User</button>
            <a class="link-trash textright" href="{{route('user.list_trash')}}">Trash</a>
        </div>
        <table id="list-user" class="table table-content table-style1" style="width:100%">
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
                @foreach($listUser as $user)
                @include('pages.user.content-user', [$user])
                @endforeach
            </tbody>
        </table>
        <div class="bottom-table">
            <div class="viewall-table">
                <p>Number of rows {{ $listUser->total() }} </p>
            </div>
            <div class="paginate-style">{{$listUser->links()}}</div>
        </div>
    </div>
</div>
<!-- modal ADD NEW USER -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="modal_add_new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title add">Add User</h5>
                <h5 class="modal-title edit hidden">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new" id='form_add_new' class="form-control-popup" method="post" action="{{route('user.add_new')}}" data-parsley-validate>
                    @csrf
                    <div class="form-group" id="form_role">
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
                    <input type="hidden" id="row" name="row" value="">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.add_new').on('click', function(e){
            var modal = $('#modal_add_new');
            var url = $(this).data('url');
            $('#form_add_new').attr('action', url);
            modal.find('h5.modal-title.add').removeClass('hidden');
            modal.find('h5.modal-title.edit').addClass('hidden');
            modal.modal('show');
        });
        
        $(document).on('click', '.edit', function(e){
            var modal = $('#modal_add_new');
            var url = $(this).data('url');
            $('#form_add_new').attr('action', url);
            modal.find('h5.modal-title.edit').removeClass('hidden');
            modal.find('h5.modal-title.add').addClass('hidden');

            var full_name = $(this).data('full-name');
            var preferred_name = $(this).data('preferred-name');
            var email = $(this).data('email');
            var role = $(this).data('role');

            var id = $(this).closest('tr').attr('id');
            modal.find('#modal').modal('show');
            modal.find('#email').val(email);
            modal.find('#full_name').val(full_name);
            modal.find('#preferred_name').val(preferred_name);
            modal.find("div#form_role select").val(role);
            modal.find("#row").val(id);

            modal.modal('show');
        });

        $('#form_add_new').on('submit', function(e){
            e.preventDefault();
            var _this = $(this);
            var data = $(this).serialize();
            var modal = $(this).closest('.modal');
            tbody = $('#list-user').find('tbody');
            //check edit
            row = modal.find('#row').val();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function(res){
                    console.log(res);
                    if(res['error']){
                        if(!$.isPlainObject(res.message)){
                            alert(res.message);
                        }else{
                            $.each(res.message, function(key,value){
                                alert(value[0]);
                                return false;
                            });
                        }
                    }else{
                        _this.trigger("reset");
                        alert(res['message']);
                        modal.modal('hide');
                        if(row == ''){
                            tbody.append(res.data);
                        }else {
                            $('#'+row).after(res.data);
                            $('#'+row)[0].remove();
                        }
                    }
                }
            });
        });

        $('.edit1').on('click', function(){
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

        $('.delete').on('click', function(){
            var tr = $(this).closest('tr');
            if(confirm('Do you want delete this user??')){
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: 'json',
                    success: function(res){
                        if(res['error']){
                            if(!$.isPlainObject(res.message)){
                                alert(res.message);
                            }else{
                              $.each(res.message, function(key,value){
                                alert(value[0]);
                                return false;
                            });
                          }
                      }else{
                        tr.remove();
                        alert(res['message']);
                    }
                }
            });
            }
        });
    });
</script>
@endsection
