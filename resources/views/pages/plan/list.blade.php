@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Of Plans:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new">Add Plan</button>
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
                    <a href="javascript:;" class="editstyle1 edit" data-toggle="modal" data-id="{{$plan->id}}" data-name="{{$plan->name}}" data-company="{{$plan->company_id}}" data-category="{{$plan->category_plan_id}}" data-featured="{{$plan->featured}}" data-url="{{route('plan.edit', $plan->id)}}"><i class="fas fa-edit"></i></a>
                    <a href="javascript:;" class="deletestyle1 delete" data-id="{{$plan->id}}" data-url="{{route('plan.move_to_trash', $plan->id)}}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>{{$listPlan->links()}}</div>
</div>

<!-- modal ADD NEW Plan  -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="modal_add_new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Plan</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new" id='form_add_new' class="form-control-user" method="post" action="{{route('plan.add_new')}}" data-parsley-validate>
                    @csrf
                   <div class="form-group">
                        <label for="company">Company<span>*</span></label>
                        <select name="company" id="company" class="form-control">
                            <option value="0">Select</option>
                            @foreach($listCompany as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('company')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="name-plan">Plan Name<span>*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Plan Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="category">Category Plan<span>*</span></label>
                        <select name="category" id="category" class="form-control">
                            <option value="0">Select</option>
                            @foreach($listCategoryPlan as $categoryPlan)
                            <option value="{{$categoryPlan->id}}">{{$categoryPlan->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('category')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="featured">Plan Featured<span>*</span></label>
                        <textarea class="featured" rows="5" name="featured" id="featured" placeholder="Plan Featured"></textarea>
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
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Plan</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_edit" id='form_edit' class="form-control-user" method="post" action="" data-parsley-validate>
                    @csrf
                   <div class="form-group" id="form_company">
                        <label for="company_edit">Company<span>*</span></label>
                        <select name="company_edit" id="company_edit" class="form-control">
                            @foreach($listCompany as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('company')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="name_plan">Plan Name<span>*</span></label>
                        <input type="text" class="form-control" id="name_plan"  name="name_plan" placeholder="Plan Name" value="">
                    </div>
                    <div class="form-group" id="form_category">
                        <label for="category_edit">Category Plan<span>*</span></label>
                        <select name="category_edit" id="category_edit" class="form-control">
                            @foreach($listCategoryPlan as $categoryPlan)
                            <option value="{{$categoryPlan->id}}">{{$categoryPlan->name}}</option>
                            @endforeach
                        </select>
                        <span class="error">{{$errors->first('category')}}</span>
                    </div>
                    <div class="form-group">
                        <label for="featured_edit">Plan Featured<span>*</span></label>
                        <textarea class="plan-featured" rows="5" name="featured_edit" id="featured_edit" placeholder="Plan Featured"> </textarea>
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
        var company = $(this).data('company');
        var category = $(this).data('category');
        var featured = $(this).data('featured');
        var url = $(this).data('url');

        $('#modal_edit').modal('show');
        $('#name_plan').val(name);
        $("div#form_company select").val(company);
        $("div#form_category select").val(category);
        $("#featured_edit").val(featured);
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
        if(confirm("Do you want delete this plan??")){
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
</script>
@endsection