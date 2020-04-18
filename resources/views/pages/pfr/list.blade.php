@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header-table-style2">
            <div class="title-table-style2">
                <h3>List Trash User</h3>
            </div>
            <div class="action-table-style">
                <a class="pull-right link-trash iconlinktrash radius_4" href="{{route('pfr.list_trash')}}"><i class="fas fa-trash"></i></a>
                <div class="search-table search-fn">
                    <form class="radius_4" method="get" action="">
                        <input class="radius_4" type="text" name="keyword" placeholder="Search.." value="{{$_GET['keyword'] ?? ""}}">
                        <i class="fa fa-search radius_2"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 link-action-addnew">
        <a class="textcenter radius_4" href="{{route('single-fact.show_form_add_new')}}"><i class="fas fa-user"></i>Single Fact Find</a>
        <a class="textcenter radius_4" href="{{route('joint-fact.show_form_add_new')}}"><i class="fas fa-users"></i>Joint Fact Find</a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="list-pfr-page" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Add By</th>
                    <th>Create Date</th>
                    <th>Application Type</th>
                    <th>Download PDF</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listPfr as $pfr)
                <tr>
                    <td>{{$pfr->id}}</td>
                    <td><a href="{{$pfr->permalink()}}">{{$pfr->nameClient}}</a></td>
                    <td>{{$pfr->nameUserAdd}}</td>
                    <td>{{$pfr->createDate}}</td>
                    <td>{{$pfr->typePfr}}</td>
                    <td><a href="{{route('downloadpdf',$pfr->id)}}">Download as PDF</a></td>
                    <td>
                        <a href="{{$pfr->permalink()}}" class="editstyle1 edit" data-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete" data-url="{{route('pfr.move_to_trash', $pfr->id)}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bottom-table">
            <div class="viewall-table">
                <p>Number of rows {{ $listPfr->total() }} </p>
            </div>
            <div class="paginate-style">{{$listPfr->links()}}</div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('.delete').on('click', function(){
        if(confirm("Do you want delete this pfr??")){
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
</script>
@endsection
