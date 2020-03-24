@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Of Category:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new">Add Category</button>
            <a class="link-trash textright" href="{{route('category.list-trash')}}">Trash</a>
        </div>
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Categoty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listCategoryPlan as $categoryPlan)
                <tr>
                    <td>{{$categoryPlan->id}}</td>
                    <td>{{$categoryPlan->name}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit" data-toggle="modal" data-id="{{$categoryPlan->id}}" data-name="{{$categoryPlan->name}}" data-url="{{route('category_plan.edit', $categoryPlan->id)}}"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete" data-id="{{$categoryPlan->id}}" data-url="{{route('category_plan.move_to_trash', $categoryPlan->id)}}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>{{$listCategoryPlan->links()}}</div>
</div>

<!-- modal ADD NEW COMPANY -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="modal_add_new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new" id='form_add_new' class="form-control-popup" method="post" action="{{route('category_plan.add_new')}}" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="name">Category<span>*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="">
                        <span class="error">{{$errors->first('name')}}</span>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal EDIT COMPANY -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Category</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_edit" id='form_edit' class="form-control-popup" method="post" action="{{route('category_plan.add_new')}}" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="name_category">Category<span>*</span></label>
                        <input type="text" class="form-control" id="name_category" name="name_category" placeholder="Category Name" value="">
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
        var url = $(this).data('url');

        $('#modal_edit').modal('show');
        $('#name_category').val(name);
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
                    alert(res['message']);
                }else{
                    alert(res['message']);
                }
            }
        });
    });

    $('.delete').on('click', function(){
        if(confirm("Do you want delete this category plan??")){
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
