@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Of Plans:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addplanmodal">Add Plan</button>
        </div>
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Company</th>
                    <th>Play Name</th>
                    <th>Category</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($listPlan as $plan)
                <tr>
                    <td>{{$plan->id}}</td>
                    <td>{{$plan->nameCompany}}</td>
                    <td>{{$plan->name}}</td>
                    <td>{{$plan->nameCategoryPlan}}</td>
                    <td>Delete</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>{{$listPlan->links()}}</div>
</div>

<!-- modal ADD NEW Plan  -->
<div class="modal fade" id="addplanmodal" tabindex="-1" role="dialog" aria-labelledby="addplanmodal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Plan</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="addphone_Form" id='addphone_form' class="form-control-user" method="post" action="{{route('plan.add_new')}}" data-parsley-validate>
                    @csrf
                   <div class="form-group">
                        <label for="company">Company<span>*</span></label>
                        <select name="company" id="company" class="form-control">
                            <option value="0">Selected</option>
                            @foreach($listCompany as $company)
                            <option value="{{$company->id}}" @if(old('company') == $company->id){{'selected'}}@endif>{{$company->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('company')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="name">Plan Name<span>*</span></label>
                        <input type="text" class="form-control" id="name"  name="name" placeholder="Plan Name" value="{{old('name')}}">
                        <span class="error">{{$errors->first('name')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="category">Category Plan<span>*</span></label>
                        <select name="category" id="category" class="form-control">
                            <option value="0">Selected</option>
                            @foreach($listCategoryPlan as $categoryPlan)
                            <option value="{{$categoryPlan->id}}" @if(old('category') == $categoryPlan->id){{'selected'}}@endif>{{$categoryPlan->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('category')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="featured">Plan Featured<span>*</span></label>
                        <textarea class="featured" rows="5" name="featured" id="featured" placeholder="Plan Featured">{{old('featured')}}</textarea>
                        <span class="error">{{$errors->first('featured')}}</span>
                    </div>
                    <div class="section-input">
                        <button type="submit" class="btn btn-primary submit-menuhasbooking">Submit</button>
                    </div>
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
            $('#addplanmodal').modal('show');
        }
    });
</script>
@endsection
