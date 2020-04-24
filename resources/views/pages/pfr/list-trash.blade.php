@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header-table-style2">
            <div class="title-table-style2">
                <h3><i class="fas fa-list-alt"></i><span>List Trash PFR<span></h3>
            </div>
        </div>
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
                @foreach($listPfr as $pfr)
                    @include('content.pfr-item')
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

