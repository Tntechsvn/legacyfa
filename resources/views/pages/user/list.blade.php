@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List User:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary add_new" data-url="{{route('user.add_new')}}"><i class="fas fa-plus-circle"></i> Add User</button>
            <a class="pull-right link-trash textright" href="{{route('user.list_trash')}}"><i class="fas fa-trash"></i></a>
            <div class="search-fn search-innerpage">
                <form class="pull-right" method="get" action="">
                    <input type="text" name="keyword" placeholder="Keyword.." value="{{$_GET['keyword'] ?? ""}}">
                    <i class="fa fa-search adius_2"></i>
                </form>
            </div>
        </div>
        <div class="header-table-style1">
            <div class="title-table-home">
                <a class="link-innerpage" href="{{route('pfr.list')}}">
                    <span class="name-table">List User:</span>
                </a>
            </div>
            <div class="action-table-style">
                <button type="button" class="btn btn-primary add_new" data-url="{{route('user.add_new')}}"><i class="fas fa-plus-circle"></i> Add User</button>
                <div class="search-table-home search-fn">
                    <form class="pull-right" method="get" action="{{route('pfr.list')}}">
                        <input type="text" name="keyword" placeholder="Search.." value="{{$_GET['keyword'] ?? ""}}">
                        <i class="fa fa-search radius_2"></i>
                    </form>
                </div>
                <a class="pull-right link-trash textright" href="{{route('user.list_trash')}}"><i class="fas fa-trash"></i></a>
            </div>
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
                <p>Number of rows {{ $listUser->total() ?? "N/A" }} </p>
            </div>
            <div class="paginate-style">{{$listUser->appends($_GET)->links()}}</div>
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
                <form name="form_add_new" id='form_add_new' class="form-control-popup parsley-form1" method="post" action="{{route('user.add_new')}}" data-parsley-validate="">
                    @csrf
                    <div class="form-group form-group-modal" id="form_role">
                        <label for="role">User Role<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="role" id="role" class="form-control" required>
                                <option value="">Select</option>
                                @foreach($listRole as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="full_name">Full Name<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Full Name" value="" required>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="preferred_name">Preferred Name<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="preferred_name" name="preferred_name" placeholder="Preferred Name" value="" required>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="email">Email<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" data-parsley-trigger="change" required>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="password">Password<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="password" class="form-control" id="password" name="password" value="">
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="password_confirmation">Re-Type Password<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
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

        $('.delete').on('click', function(){
            var tr = $(this).closest('tr');
            var url = $(this).data('url');
            swal({
              title: "Are you sure?",
              text: "Do you want delete this user?",
              icon: "warning",
              buttons: [
                'No, cancel it!',
                'Yes, I am sure!'
              ],
              dangerMode: true,
            }).then(function(isConfirm) {
              if (isConfirm) {
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: 'json',
                    success: function(res){
                        if(res['error']){
                            if(!$.isPlainObject(res.message)){
                                swal(res.message);
                            }else{
                                $.each(res.message, function(key,value){
                                    swal(value[0]);
                                    return false;
                                });
                            }
                        }else{
                            tr.remove();
                            swal(res['message']);
                        }
                    }
                });
              } else {
                swal("Cancelled", "error");
              }
            })
        });
    });
</script>
@endsection
