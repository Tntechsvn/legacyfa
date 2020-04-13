@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Dependants Information:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <button type="button" class="btn btn-primary" id="add_dependants" data-toggle="modal" data-target="#modal_add_new"><i class="fas fa-plus-circle"></i>Add Dependants</button>
            <a class="link-trash textright" href="{{route('singlefact.dependant.list_trash', $infoPfr->id)}}"><i class="fas fa-trash"></i></a>
            <div class="search-fn search-innerpage">
                <form class="pull-right" method="get" action="">
                    <input type="text" name="keyword" placeholder="Keyword.." value="{{$_GET['keyword'] ?? ""}}">
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
                @foreach($listDependant as $dependant)
                <tr>
                    <td>{{$dependant->id}}</td>
                    <td>{{$dependant->title}}</td>
                    <td>{{$dependant->name}}</td>
                    <td>{{$dependant->relationship}}</td>
                    <td>{{$dependant->dob}}</td>
                    <td>{{$dependant->age}}</td>
                    <td>{{$dependant->genderDependant}}</td>
                    <td>{{$dependant->year_to_support}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit" data-id="{{$dependant->id}}" data-title="{{$dependant->title}}" data-name="{{$dependant->name}}" data-relationship="{{$dependant->relationship}}" data-dob="{{$dependant->dob}}" data-gender="{{$dependant->gender}}" data-age="{{$dependant->age}}" data-year="{{$dependant->year_to_support}}" data-url="{{route('singlefact.dependant.edit', [$infoPfr->id, $dependant->id])}}"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete" data-url="{{route('singlefact.dependant.move_to_trash', [$infoPfr->id, $dependant->id])}}"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>{{$listDependant->links()}}</div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
      <ul>
          @if(!$infoPfr)
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
                <h5 class="modal-title">Add Dependants</h5>  
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
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Ms">Ms</option>
                                <option value="Dr">Dr</option>
                                <option value="Mdm">Mdm</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="name">Name<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="relationship">Relationship<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Name" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="birthday">Date of Birth<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Date of Birth" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="age">Age<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="number" class="form-control" id="age" name="age" placeholder="Age" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="age">Gender<span>*</span></label>
                        <div class="custom-input-modal">
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="fas fa-check-circle"></i>
                                    <input type="radio" name="sex" id="male" value="0">
                                </div>
                                Male
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="far fa-circle"></i>
                                    <input type="radio" name="sex" id="female" value="1"> 
                                </div>
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="year_sp">Years to Support<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="number" class="form-control" id="year_sp"  name="year_sp" placeholder="Years to Support" value="" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal EDIT DEPENDANTS -->
<div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="modal_edit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Dependants</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_edit" id='form_edit' class="form-control-popup parsley-form" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal" id="form_title">
                        <label for="title_edit">Title<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="title_edit" id="title_edit" class="form-control">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Ms">Ms</option>
                                <option value="Dr">Dr</option>
                                <option value="Mdm">Mdm</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="name_edit">Name<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="name_edit" name="name_edit" placeholder="Name" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="relationship_edit">Relationship<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="relationship_edit" name="relationship_edit" placeholder="Name" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="birthday_edit">Date of Birth<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="date" class="form-control" id="birthday_edit" name="birthday_edit" placeholder="Date of Birth" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="age_edit">Age<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="number" class="form-control" id="age_edit" name="age_edit" placeholder="Age" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="age">Gender<span>*</span></label>
                        <div class="custom-input-modal">
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="fas fa-check-circle"></i>
                                   <input type="radio" name="sex_edit" id="male_edit" value="0">
                                </div>
                                Male
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="far fa-circle"></i>
                                    <input type="radio" name="sex_edit" id="female_edit" value="1"> 
                                </div>
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="year_sp_edit">Years to Support<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="number" class="form-control" id="year_sp_edit"  name="year_sp_edit" placeholder="Years to Support" value="" >
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

        $('#title_edit').change(function(){
            var title_edit = $(this).val();
            if(title_edit == "Mrs" || title_edit == "Ms" || title_edit == "Mdm"){
                $('#female_edit').prop('checked', true);
                $('#male_edit').prop('checked', false);
            }else{
                $('#female_edit').prop('checked', false);
                $('#male_edit').prop('checked', true);
            }
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

        $('.edit').on('click', function(){
            var id = $(this).data('id');
            var title = $(this).data('title');
            var name = $(this).data('name');
            var relationship = $(this).data('relationship');
            var birthday = $(this).data('dob');
            var age = $(this).data('age');
            var sex = $(this).data('gender');
            var year = $(this).data('year');
            var url = $(this).data('url');

            $('#modal_edit').modal('show');
            $("div#form_title select").val(title);
            $('#name_edit').val(name);
            $('#relationship_edit').val(relationship);
            $('#birthday_edit').val(birthday);
            $('#age_edit').val(age);
            $("div#form_sex select").val(sex);
            if(sex == 0){
                $('#male_edit').attr('checked', true);
            }else{
                $('#female_edit').attr('checked', true);
            }
            $('#year_sp_edit').val(year);
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
