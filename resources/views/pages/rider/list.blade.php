@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Of Ridders:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new">Add Rider</button>
            <a class="link-trash textright" href="{{route('riders.list_trash')}}">Trash</a>
        </div>
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Ridder Name</th>
                    <th>Ridder Featured</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listRider as $rider)
                <tr>
                    <td>{{$rider->id}}</td>
                    <td>{{$rider->name}}</td>
                    <td>{{$rider->feature}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1" data-toggle="modal" data-target="#editplanid"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>{{$listRider->links()}}</div>
</div>

<!-- modal ADD NEW RIDER -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="modal_add_new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Rider</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new" id='form_add_new' class="form-control-popup" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="associated-plans">Associated Plans<span>*</span></label>
                        <select name="associated-plans" id="associated-plans" class="form-control">
                            <option value="0">Select</option>
                            @foreach($listPlan as $plan)
                            <option value="{{$plan->id}}">{{$plan->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rider-name">Rider Name<span>*</span></label>
                        <input type="text" class="form-control" id="rider-name" name="rider-name" placeholder="Rider Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="rider-featured">Rider Featured<span>*</span></label>
                        <textarea class="rider-featured" rows="5" id="rider-featured" placeholder="Rider Featured"> </textarea>
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
    });
</script>
@endsection
