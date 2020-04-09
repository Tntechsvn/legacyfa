@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Please select your desired application:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borderfullwidth link-action-addnew">
        <a class="textcenter radius_4" href=""><i class="fas fa-user"></i>Single Fact Find</a>
        <a class="textcenter radius_4" href=""><i class="fas fa-users"></i>Joint Fact Find</a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header-table-style1">
            <div class="title-table-home">
                <a class="link-innerpage" href="{{route('pfr.list')}}">
                    <i class="fas fa-list-alt"></i>   
                    <span class="name-table">List PRF</span>
                    <span class="total-row">100 Record</span>
                </a>
            </div>
            <div class="search-table-home search-fn">
                <form class="pull-right" method="get" action="{{route('pfr.list')}}">
                    <input type="text" name="keyword" placeholder="Search.." value="{{$_GET['keyword'] ?? ""}}">
                    <i class="fa fa-search radius_2"></i>
                </form>
            </div>
        </div>
        <table id="table-pfr-home" class="table  table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Added By</th>
                    <th>Create Date</th>
                    <th>Application</th>
                    <th>Download PDF</th>
                    <th></th>
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
                        <td><a class="pdflink" href="{{route('downloadpdf',$pfr->id)}}">Download as PDF</a></td>
                        <td>
                            <a href="javascript:;" class="deletestyle1 delete" data-id="{{$pfr->id}}" data-url="{{route('pfr.move_to_trash', $pfr->id)}}"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="bottom-table">
            <div class="viewall-table">
                <a href="{{route('pfr.list')}}" title="View All">View All</a>
            </div>
            <div class="paginate-style">{{$listPfr->links()}}</div>
        </div>
    </div>
    <div class="section second-section">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="header-table-style1">
                <div class="title-table-home">
                    <a class="link-innerpage" href="{{route('user.list')}}">
                        <i class="fas fa-list-alt"></i>   
                        <span class="name-table">Plans</span>
                        <span class="total-row">1B Plans</span>
                    </a>
                </div>
                <div class="search-table-home search-fn">
                    <form class="pull-right" method="get" action="{{route('user.list')}}">
                        <input type="text" name="keyword" placeholder="Search.." value="{{$_GET['keyword'] ?? ""}}">
                        <i class="fa fa-search radius_2"></i>
                    </form>
                </div>
            </div>
            <table id="user-list" class="table  table-content table-style1" style="width:100%">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listUser as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->full_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->status}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="bottom-table">
                <div class="viewall-table">
                    <a href="{{route('user.list')}}" title="View All">View All</a>
                </div>
                <div class="paginate-style">{{$listUser->links()}}</div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
             <div class="header-table-style1">
                <div class="title-table-home">
                     <a class="link-innerpage" href="{{route('plan.list')}}">
                        <i class="fas fa-list-alt"></i>   
                        <span class="name-table">List User</span>
                        <span class="total-row">1M User</span>
                    </a>
                </div>
                <div class="search-table-home search-fn">
                    <form class="pull-right" method="get" action="{{route('company.list')}}">
                        <input type="text" name="keyword" placeholder="Search.." value="{{$_GET['keyword'] ?? ""}}">
                        <i class="fa fa-search radius_2"></i>
                    </form>
                </div>
            </div>
            <table id="user-list" class="table  table-content table-style1" style="width:100%">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Company</th>
                        <th>Plan Name</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($listPlan as $plan)
                        <tr>
                            <td>{{$plan->id}}</td>
                            <td>{{$plan->nameCompany}}</td>
                            <td>{{$plan->name}}</td>
                            <td>{{$plan->nameCategoryPlan}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="bottom-table">
                <div class="viewall-table">
                    <a href="{{route('plan.list')}}" title="View All">View All</a>
                </div>
                <div class="paginate-style">{{$listPlan->links()}}</div>
            </div>
        </div>
    </div>

</div>
@endsection
