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
                    <th>Categoty</th>
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
                <form name="addphone_Form" id='addphone_form' class="form-control-user" method="post" action="" data-parsley-validate>
                   <div class="form-group">
                        <label for="select-company">Company<span>*</span></label>
                        <select name="select-company" id="select-company" class="form-control">
                            <option value="Company 1">Company 1</option>
                            <option value="Company 1">Company 2</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="name-plan">Plan Name<span>*</span></label>
                        <input type="text" class="form-control" id="name-plan"  name="name-plan" placeholder="Plan Name" value="" >
                    </div>
                    <div class="form-group">
                        <label for="select-category">Company<span>*</span></label>
                        <select name="select-category" id="select-category" class="form-control">
                            <option value="Category 1">Category 1</option>
                            <option value="Category 1">Category 2</option>
                        </select> 
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
