@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header-table-style2">
            <div class="title-table-style2">
                <h3><i class="fas fa-list-alt"></i><span>List Companies<span></h3>
            </div>
            <div class="action-table-style">
                <a class="pull-right link-trash iconlinktrash radius_4" href="{{route('company.list_trash')}}"><i class="fas fa-trash"></i></a>
                <div class="search-table search-fn">
                    <form class="radius_4" method="get" action="{{route('pfr.list')}}">
                        <input class="radius_4" type="text" name="keyword" placeholder="Search.." value="{{$_GET['keyword'] ?? ""}}">
                        <i class="fa fa-search radius_2"></i>
                    </form>
                </div>
                <button type="button" class="btn btn-primary add_new radius_4" id="add_company" data-toggle="modal" data-target="#modal_add_new"><i class="fas fa-plus"></i></button>
            </div>
        </div>
        <table id="list-company-page" class="table  table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Company</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listCompany as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->name}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit" data-id="{{$company->id}}" data-name="{{$company->name}}" data-url="{{route('company.edit', $company->id)}}"><i class="fas fa-edit" data-title="Edit"></i></a>
                        <a href="javascript:;"  class="deletestyle1 delete" data-url="{{route('company.move_to_trash', $company->id)}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bottom-table">
            <div class="viewall-table">
                <p>Number of rows {{ $listCompany->total() }} </p>
            </div>
            <div class="paginate-style">{{$listCompany->links()}}</div>
        </div>
    </div>
</div>
<!-- modal ADD NEW COMPANY -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="modal_add_new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Company</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new" id='form_add_new' class="form-control-popup parsley-form" method="post" action="{{route('company.add_new')}}" data-parsley-validate="">
                    @csrf
                    <div class="form-group form-group-modal">
                        <label for="name">Company<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Company Name" value="" data-parsley-trigger="change" required="">
                            <span class="error">{{$errors->first('name')}}</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<!-- modal EDIT  COMPANY -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Company</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_edit" id='form_edit' class="form-control-popup parsley-form" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal">
                        <label for="name_company">Company<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="name_company" name="name_company" placeholder="Company Name" value="" data-parsley-trigger="change" required="">
                            <span class="error">{{$errors->first('name_company')}}</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                </form>
                <div class="clear"></div>
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
                        location.reload();
                        swal(res['message']);
                    }
                }
            });
        });

        $('.edit').on('click', function(){
            var id = $(this).data('id');
            var name = $(this).data('name');
            var url = $(this).data('url');

            $('#modal_edit').modal('show');
            $('#name_company').val(name);
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
                        location.reload();
                        swal(res['message']);
                    }
                }
            });
        });

        $('.delete').on('click', function(){
            var tr = $(this).closest('tr');
            var url = $(this).data('url');
            swal({
              title: "Are you sure?",
              text: "Do you want delete this company?",
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
