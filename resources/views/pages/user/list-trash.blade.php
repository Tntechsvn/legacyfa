@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header-table-style2">
            <div class="title-table-style2">
                <h3><i class="fas fa-list-alt"></i><span>List Trash User<span></h3>
            </div>
        </div>
        <table id="list-trash-user" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listUserTrash as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->full_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->nameRole}}</td>
                    <td>
                        <button class="restore" data-url="{{route('user.restore', $user->id)}}">Restore</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bottom-table">
            <div class="viewall-table">
                <p>Number of rows {{ $listUserTrash->total() }} </p>
            </div>
            <div class="paginate-style">{{$listUserTrash->links()}}</div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.restore').on('click', function(){
            var url = $(this).data('url');
            var tr = $(this).closest('tr');
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'json',
                success: function(res){
                    if(res['error']){
                        swal(res['message']);
                    }else{
                        tr.remove();
                        swal(res['message']);
                    }
                }
            });
        });
    });
</script>
@endsection
