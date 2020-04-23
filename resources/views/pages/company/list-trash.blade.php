@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header-table-style2">
            <div class="title-table-style2">
                <h3><i class="fas fa-list-alt"></i><span>List Trash Companies<span></h3>
            </div>
        </div>
        <table id="list-trash-company" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Company</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($listCompanyTrash as $company)
                <tr>
                    <td>{{$company->id}}</td>
                    <td>{{$company->name}}</td>
                    <td>
                        <button class="restore" data-url="{{route('company.restore', $company->id)}}">Restore</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bottom-table">
            <div class="viewall-table">
                <p>Number of rows {{ $listCompanyTrash->total() }} </p>
            </div>
            <div class="paginate-style">{{$listCompanyTrash->links()}}</div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.restore').on('click', function(){
            var url = $(this).data('url');
            $.ajax({
                type: "GET",
                url: url,
                dataType: 'json',
                success: function(res){
                    if(res['error']){
                        swal(res['message']);
                    }else{
                        location.reload();
                        swal(res['message']);
                    }
                }
            });
        });
    });
</script>
@endsection
