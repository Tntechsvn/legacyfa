@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header-table-style2">
            <div class="title-table-style2">
                <h3><i class="fas fa-list-alt"></i><span>List Of Riders<span></h3>
            </div>
            <div class="action-table-style">
                <a class="pull-right link-trash iconlinktrash radius_4" href="{{route('rider.list_trash')}}"><i class="fas fa-trash"></i></a>
                <div class="search-table search-fn">
                    <form class="radius_4" method="get" action="{{route('pfr.list')}}">
                        <input class="radius_4" type="text" name="keyword" placeholder="Search.." value="{{$_GET['keyword'] ?? ""}}">
                        <i class="fa fa-search radius_2"></i>
                    </form>
                </div>
                <button type="button" class="btn btn-primary add_new radius_4" data-toggle="modal" data-target="#modal_add_new"><i class="fas fa-plus"></i></button> 
            </div>
        </div>
        <table id="list-rider-page" class="table table-content table-style1" style="width:100%">
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
                    <td>{{$rider->featured}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit" data-toggle="modal" data-target="#editrider" data-id="{{$rider->id}}" data-name="{{$rider->name}}" data-featured="{{$rider->featured}}" data-plan="{{$rider->planRider}}" data-url="{{route('rider.edit', $rider->id)}}" data-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete" data-url="{{route('rider.move_to_trash', $rider->id)}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bottom-table">
            <div class="viewall-table">
                <p>Number of rows {{ $listRider->total() }} </p>
            </div>
            <div class="paginate-style">{{$listRider->links()}}</div>
        </div>
    </div>
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
                <form name="form_add_new" id='form_add_new' class="form-control-popup parsley-form" method="post" action="{{route('rider.add_new')}}" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal">
                        <label for="plan">Associated Plans<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="plan[]" id="plan" class="form-control" multiple data-parsley-trigger="change" required="">
                                @foreach($listPlan as $plan)
                                <option value="{{$plan->id}}">{{$plan->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="name">Rider Name<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Rider Name" value="" data-parsley-trigger="change" required="">
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="featured">Rider Featured<span>*</span></label>
                        <div class="custom-input-modal">
                            <textarea class="featured" rows="5" name="featured" id="featured" placeholder="Rider Featured" data-parsley-trigger="change" required=""> </textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                </form>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>

<!-- modal EDIT RIDER -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Rider</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_edit" id='form_edit' class="form-control-popup parsley-form" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal" id="form_plan">
                        <label for="plan_edit">Associated Plans<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="plan_edit[]" id="plan_edit" class="form-control" multiple data-parsley-trigger="change" required="">
                                @foreach($listPlan as $plan)
                                <option value="{{$plan->id}}">{{$plan->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="name_edit">Rider Name<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="name_edit" name="name_edit" placeholder="Rider Name" value="" data-parsley-trigger="change" required="">
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="featured_edit">Rider Featured<span>*</span></label>
                        <div class="custom-input-modal">
                            <textarea class="featured_edit" rows="5" name="featured_edit" id="featured_edit" placeholder="Rider Featured" data-parsley-trigger="change" required=""> </textarea>
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
            var featured = $(this).data('featured');
            var plan = $(this).data('plan');
            var url = $(this).data('url');

            $('#modal_edit').modal('show');
            $('#name_edit').val(name);
            $('#featured_edit').val(featured);
            $('#plan_edit').val(plan);
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
              text: "Do you want delete this rider?",
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
            });
        });
    });
</script>
@endsection
