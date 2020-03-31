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
                        <button class="restore" data-id="{{$dependant->id}}" data-url="{{route('singlefact.dependant.restore', [$infoPfr->id, $dependant->id])}}">Restore</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>{{$listDependant->links()}}</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.restore').on('click', function(){
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
        });
    });
</script>
@endsection
