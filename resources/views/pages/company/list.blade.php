@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Companies:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" id="add_company" data-toggle="modal" data-target="#addcompanymodal">Add Company</button>
            <a class="link-trash textright" href="{{route('company.list-trash')}}">Trash</a>
        </div>
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
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
                        <button type="button" class="btn btn-primary edit" data-id="{{$company->id}}" data-name="{{$company->name}}" data-url="{{route('company.edit', $company->id)}}">Edit</button>
                        <button type="button" class="btn btn-primary delete" data-id="{{$company->id}}" data-url="{{route('company.move_to_trash', $company->id)}}">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>{{$listCompany->links()}}</div>
</div>
<!-- modal ADD NEW COMPANY -->
<div class="modal fade" id="addcompanymodal" tabindex="-1" role="dialog" aria-labelledby="addcompanymodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Company</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="addcompany_form" id='addcompany_form' class="form-control-popup" method="post" action="{{route('company.add_new')}}" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="name">Company<span>*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Company Name" value="">
                        <span class="error">{{$errors->first('name')}}</span>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal EDIT  COMPANY -->
<div class="modal fade" id="editcompanyid" tabindex="-1" role="dialog" aria-labelledby="editcompanyid" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Company</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="editcompany_form" id='editcompany_form' class="form-control-popup" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="name_company">Company<span>*</span></label>
                        <input type="text" class="form-control" id="name_company" name="name_company" placeholder="Company Name" value="">
                        <span class="error">{{$errors->first('name_company')}}</span>
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
        $('#addcompany_form').on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function(res){
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
            var name = $(this).data('name');
            var url = $(this).data('url');

            $('#editcompanyid').modal('show');
            $('#name_company').val(name);
            $('#editcompany_form').attr('action', url);
        });

        $('#editcompany_form').on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function(res){
                    if(res['error']){
                        alert(res['message']);
                    }else{
                        alert(res['message']);
                    }
                }
            });
        });

        $('.delete').on('click', function(){
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
        });
    });
</script>
@endsection
