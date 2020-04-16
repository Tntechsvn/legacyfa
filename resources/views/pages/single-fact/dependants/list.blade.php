@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 1 - Personal Information:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">1.2 - Dependants Information:</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary add_new" id="add_dependants" data-url="{{route('singlefact.dependant.add_new', $infoPfr->id)}}"><i class="fas fa-plus-circle"></i>Add Dependants</button>
            <a class="link-trash textright" href="{{route('singlefact.dependant.list_trash', $infoPfr->id)}}"><i class="fas fa-trash"></i></a>
            <div class="search-fn search-innerpage">
                <form class="pull-right" method="get" action="">
                    <input type="text" name="keyword" placeholder="Keyword.." value="{{$_GET['keyword'] ?? ''}}">
                    <i class="fa fa-search radius_2"></i>
                </form>
            </div>
        </div>
        <table id="dependants-list" class="table  table-content table-style1" style="width:100%">
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
                @foreach($listDependant as $key=>$dependant)
                    @include('content.dependant', [$key, $dependant])
                @endforeach
            </tbody>
        </table>
        <div class="paginate-style">{{$listDependant->links()}}</div>
        <div class="nav-step">
<!--             <button class="btn btn-primary mb-2 style-button1">Back</button>
            <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button> -->
            <a href="{{route('single_fact.edit', $infoPfr->id)}}" class="style-button1">Back</a>
            <a href="{{route('single-fact.show_form_add_new_assessment', $infoPfr->id)}}" class="style-button1">Next</a>
        </div> 
    </div>
</div>
<div class="bottom-step">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
        <ul>
            @if(!isset($infoPfr))
            @else
                @include('pages.navigation', ['id' => $infoPfr->id])
            @endif
        </ul>
    </div>
</div>
<!-- modal ADD NEW DEPENDANTS -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="modal_add_new" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title add">Add Dependants</h5>
                <h5 class="modal-title edit hidden">Edit Dependants</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new" id='form_add_new' class="form-control-popup parsley-form" method="post" action="{{route('singlefact.dependant.add_new', $infoPfr->id)}}" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal">
                        <label for="title">Title<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="title" id="title" class="form-control">
                                @foreach($array_title_name as $title)
                                  <option value="{{$title}}">{{$title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="name">Name<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" required>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="relationship">Relationship<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Name" value="" required>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="birthday">Date of Birth<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Date of Birth" value="" required>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="age">Age<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="number" class="form-control" id="age" name="age" placeholder="Age" value="" required>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="age">Gender<span>*</span></label>
                        <div class="custom-input-modal">
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input type="radio" name="sex" id="male" value="0" checked>
                                    <span class="checkmark-radio"></span>
                                </div>
                                Male
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input type="radio" name="sex" id="female" value="1">
                                    <span class="checkmark-radio"></span>
                                </div>
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="year_sp">Years to Support<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="number" class="form-control" id="year_sp"  name="year_sp" placeholder="Years to Support" value="" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#title').change(function(){
            var title = $(this).val();
            if(title == "Mrs" || title == "Ms" || title == "Mdm"){
                $('#female').prop('checked', true);
                $('#male').prop('checked', false);
            }else{
                $('#female').prop('checked', false);
                $('#male').prop('checked', true);
            }
        });

        $('.add_new').on('click', function(e){
            var modal = $('#modal_add_new');
            var url = $(this).data('url');
            $('#form_add_new').attr('action', url);
            $('#form_add_new').trigger("reset");
            modal.find('h5.modal-title.add').removeClass('hidden');
            modal.find('h5.modal-title.edit').addClass('hidden');
            modal.modal('show');
        });

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
                            alert(res.message);
                        }else{
                            $.each(res.message, function(key,value){
                                alert(value[0]);
                                return false;
                            });
                        }
                    }else{
                        location.reload();
                        alert(res['message']);
                    }
                }
            });
        });
        
        $(document).on('click', '.edit', function(e){
            var modal = $('#modal_add_new');
            var url = $(this).data('url');
            $('#form_add_new').attr('action', url);
            modal.find('h5.modal-title.edit').removeClass('hidden');
            modal.find('h5.modal-title.add').addClass('hidden');

            var title = $(this).data('title1');
            var name = $(this).data('name');
            var relationship = $(this).data('relationship');
            var birthday = $(this).data('dob');
            var age = $(this).data('age');
            var sex = $(this).data('gender');
            var year = $(this).data('year');
            var url = $(this).data('url');

            var id = $(this).closest('tr').attr('id');
            modal.find("select#title").val(title);
            modal.find('#name').val(name);
            modal.find('#relationship').val(relationship);
            modal.find('#birthday').val(birthday);
            modal.find('#age').val(age);
            modal.find("div#form_sex select").val(sex);
            if(sex == 0){
                $('#male').attr('checked', true);
            }else{
                $('#female').attr('checked', true);
            }
            modal.find('#year_sp').val(year);
            modal.find('#form').attr('action', url);
            modal.find("#row").val(id);

            modal.modal('show');
        });

        $('.delete').on('click', function(){
            if(confirm('Do you want delete this dependant??')){
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: 'json',
                    success: function(res){
                        if(res['error']){
                            if(!$.isPlainObject(res.message)){
                                alert(res.message);
                            }else{
                                $.each(res.message, function(key,value){
                                    alert(value[0]);
                                    return false;
                                });
                            }
                        }else{
                            location.reload();
                            alert(res['message']);
                        }
                    }
                });
            }
        });
    });
</script>
@endsection
