@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Of Plans:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addplanmodal">Add Plan</button>
            <a class="link-trash textright" href="{{route('plan.list-trash')}}">Trash</a>
        </div>
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Company</th>
                    <th>Play Name</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listPlan as $plan)
                <tr>
                    <td>{{$plan->id}}</td>
                    <td>{{$plan->nameCompany}}</td>
                    <td>{{$plan->name}}</td>
                    <td>{{$plan->nameCategoryPlan}}</td>
                    <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editplanid">Edit</button>
                    <button type="button" class="btn btn-primary">Delete</button></td>
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
                            @foreach($listCompany as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('company')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="name-plan">Plan Name<span>*</span></label>
                        <input type="text" class="form-control" id="name"  name="name" placeholder="Plan Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="category">Category Plan<span>*</span></label>
                        <select name="category" id="category" class="form-control">
                            @foreach($listCategoryPlan as $categoryPlan)
                            <option value="{{$categoryPlan->id}}">{{$categoryPlan->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('category')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="plan-featured">Plan Featured<span>*</span></label>
                        <textarea class="plan-featured" rows="5" id="plan-featured" placeholder="Plan Featured"> </textarea>
                    </div>
                    <div class="section-input">
                        <button type="submit" class="btn btn-primary submit-menuhasbooking">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal Edit  Plan  -->
<div class="modal fade" id="editplanid" tabindex="-1" role="dialog" aria-labelledby="editplanid" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Plan</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="editplan_Form" id='editplan_form' class="form-control-user" method="post" action="" data-parsley-validate>
                    @csrf
                   <div class="form-group">
                        <label for="company">Company<span>*</span></label>
                        <select name="company" id="company" class="form-control">
                            @foreach($listCompany as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('company')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="name-plan">Plan Name<span>*</span></label>
                        <input type="text" class="form-control" id="name"  name="name" placeholder="Plan Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="category">Category Plan<span>*</span></label>
                        <select name="category" id="category" class="form-control">
                            @foreach($listCategoryPlan as $categoryPlan)
                            <option value="{{$categoryPlan->id}}">{{$categoryPlan->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('category')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="plan-featured">Plan Featured<span>*</span></label>
                        <textarea class="plan-featured" rows="5" id="plan-featured" placeholder="Plan Featured"> </textarea>
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
