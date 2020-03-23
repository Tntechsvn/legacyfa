@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Companies:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcompanymodal">Add Company</button>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editcompanyid">Edit</button>
                        <button type="button" class="btn btn-primary">Delete</button>
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
                        <label for="name-company">Company<span>*</span></label>
                        <input type="text" class="form-control" id="name-company" name="name-company" placeholder="Company Name" value="{{old('name')}}">
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
                <form name="addcompany_form" id='addcompany_form' class="form-control-popup" method="post" action="{{route('company.add_new')}}" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="name-company">Company<span>*</span></label>
                        <input type="text" class="form-control" id="name-company" name="name-company" placeholder="Company Name" value="{{old('name')}}">
                        <span class="error">{{$errors->first('name')}}</span>
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
        if({{$errors->count()}} > 0){
            $('#addcompanymodal').modal('show');
        }
    });
</script>
@endsection
