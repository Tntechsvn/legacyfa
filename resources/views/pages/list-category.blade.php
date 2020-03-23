@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Of Category:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcategorymodal">Add Company</button>
        </div>
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Categoty</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($listCategoryPlan as $categoryPlan)
                <tr>
                    <td>{{$categoryPlan->id}}</td>
                    <td>{{$categoryPlan->name}}</td>
                    <td>Delete</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>{{$listCategoryPlan->links()}}</div>
</div>

<!-- modal ADD NEW COMPANY -->
<div class="modal fade" id="addcategorymodal" tabindex="-1" role="dialog" aria-labelledby="addcategorymodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="addcategory_form" id='addcategory_form' class="form-control-popup" method="post" action="{{route('category_plan.add_new')}}" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="name">Category<span>*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{old('name')}}">
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
            $('#addcategorymodal').modal('show');
        }
    });
</script>
@endsection
