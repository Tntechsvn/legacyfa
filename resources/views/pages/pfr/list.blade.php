@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header-table-style2">
            <div class="title-table-style2">
                <h3>List PFR</h3>
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
                    @if(!Auth::user()->is_agency)
                    <th>Add By</th>
                    @endif
                    <th>Create Date</th>
                    <th>Application Type</th>
                    <th>Approved By</th>
                    <th>Time Approved</th>
                    <th>Download PDF</th>
                    <th>Tracking Log</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @each('content.pfr-item', $listPfr, 'pfr')
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
@include('modal.modal-tracking-log')
@endsection

@section('script')
    <script type="text/javascript" src="{{asset('js/pfr_list.js')}}"></script>
@endsection
