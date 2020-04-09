@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List PFR:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <a class="link-trash textright" href="{{route('pfr.list_trash')}}"><i class="fas fa-trash"></i></a>
            <div class="search-fn search-innerpage">
                <form class="pull-left" method="get" action="">
                    <input type="text" name="keyword" placeholder="Keyword.." value="{{$_GET['keyword'] ?? ""}}">
                    <i class="fa fa-search radius_2"></i>
                </form>
            </div>
        </div>
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
                    <td>{{$pfr->nameClient}}</td>
                    <td>{{$pfr->nameUserAdd}}</td>
                    <td>{{$pfr->createDate}}</td>
                    <td>{{$pfr->typePfr}}</td>
                    <td><a href="{{route('downloadpdf',$pfr->id)}}">Download as PDF</a></td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete" data-url="{{route('pfr.move_to_trash', $pfr->id)}}"><i class="fas fa-trash"></i></a>
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
