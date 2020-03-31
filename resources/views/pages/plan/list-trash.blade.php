@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Trash Of Plans:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="list-trash-plan" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Company</th>
                    <th>Play Name</th>
                    <th>Category</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($listPlanTrash as $plan)
                <tr>
                    <td>{{$plan->id}}</td>
                    <td>{{$plan->nameCompany}}</td>
                    <td>{{$plan->name}}</td>
                    <td>{{$plan->nameCategoryPlan}}</td>
                    <td><button class="restore" data-id="{{$plan->id}}" data-url="{{route('plan.restore', $plan->id)}}">Restore</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bottom-table">
            <div class="viewall-table">
                <p>Number of rows {{ $listPlanTrash->total() }} </p>
            </div>
            <div class="paginate-style">{{$listPlanTrash->links()}}</div>
        </div>
    </div>
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
