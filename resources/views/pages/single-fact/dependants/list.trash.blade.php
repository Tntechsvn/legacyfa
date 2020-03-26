@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Trash Dependants:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Relationship</th>
                    <th>Date Of Birth</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Years to Support</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mrs</td>
                    <td>Vo Thang Test</td>
                    <td>Wife</td>
                    <td>23/09/2000</td>
                    <td>20</td>
                    <td>Female</td>
                    <td>99</td>
                    <td>
                        <button class="restore" data-id="" data-url="">Restore</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- modal ADD NEW COMPANY -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="modal_add_new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Dependants</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new" id='form_add_new' class="form-control-popup" method="post" action="" data-parsley-validate>
                    <div class="form-group">
                        <label for="select-title">Title<span>*</span></label>
                        <select name="select-title" id="select-title" class="form-control">
                            <option value="mr">Mr</option>
                            <option value="mrs">Mrs</option>
                            <option value="ms">Ms</option>
                            <option value="dr">Dr</option>
                            <option value="mdm">Mdm</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="name">Name<span>*</span></label>
                        <input type="text" class="form-control" id="dependants-name"  name="dependants-name" placeholder="Name" value="" >
                    </div>
                    <div class="form-group">
                        <label for="relationship">Relationship<span>*</span></label>
                        <input type="text" class="form-control" id="relationship"  name="relationship" placeholder="Name" value="" >
                    </div>
                    <div class="form-group">
                        <label for="birthday">Date of Birth<span>*</span></label>
                        <input type="date" class="form-control" id="birthday"  name="birthday" placeholder="Date of Birth" value="" >
                    </div>
                    <div class="form-group">
                         <label for="age">Age<span>*</span></label>
                         <input type="number" class="form-control" id="age"  name="age" placeholder="Age" value="" >
                    </div>
                    <div class="form-group">
                        <label class="radio-inline">
                          <input type="radio" name="sex" checked>Male
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="sex">Female 
                        </label>
                     </div>
                     <div class="form-group">
                         <label for="year-sp">Years to Support<span>*</span></label>
                         <input type="number" class="form-control" id="year-sp"  name="year-sp" placeholder="Years to Support" value="" >
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
                    console.log(res);
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
            $('#name_company').val(name);
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
            if(confirm('Do you want delete this company??')){
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
    });
</script>
@endsection
