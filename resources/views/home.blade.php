@extends('master')

@section('content')
<div class="site">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3 sidebar">
                    <nav>
                        <ul>
                            <li class="active"><a href=""><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                            <li class="has-child"><a href=""><i class="fas fa-plus-circle"></i>ADD PFR</a>
                                <ul class="sub-menu">
                                    <li><a href=""><i class="fas fa-user"></i>Single Fact - Find</a></li>
                                    <li><a href=""><i class="fas fa-users"></i>Joint Fact - Find</a></li>
                                </ul>
                            </li>
                            <li><a href=""><i class="fas fa-list-alt"></i>View List PFR</a></li>
                            <li><a href=""><i class="fas fa-user-circle"></i>User</a></li>
                            <li><a href=""><i class="fas fa-clipboard-list"></i>Plans & Ridders</a></li>        
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-9 col-xs-9 main">
                    <div class="header">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 logo-header">
                            <div class="menu-header">
                                <a href="javascript:;"><i class="fas fa-bars"></i></a>
                            </div>
                            <div class="logo">
                                <a href="javascript:;"><img src="images/logo.png" alt="" title=""/></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 profile-header">
                            <div class="noti-bell">
                                <a href="javascript:;"><i class="far fa-bell"></i></a>
                            </div>
                            <div class="user-header">
                                <a href="javascript:;"><i class="fas fa-user-circle"></i>Cô Vi 19</a>
                            </div>
                            <div class="logout-user">
                                <a href="javascript:;"><img src="images/logout.png" alt="" title=""/></a>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="maincontent">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
                            <h4>Please select your desired application:</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 borderfullwidth link-action-addnew">
                                <a class="textcenter radius_4" href="">Single Fact Find</a>
                                <a class="textcenter radius_4" href="">Joint Fact Find</a>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
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
                                    <tr>
                                        <td>1</td>
                                        <td>VTNO1</td>
                                        <td>gtn2vt</td>
                                        <td>March 17,2020</td>
                                        <td>joint</td>
                                        <td>Download PDF</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>VTNO1</td>
                                        <td>gtn2vt</td>
                                        <td>March 17,2020</td>
                                        <td>joint</td>
                                        <td>Download PDF</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>VTNO1</td>
                                        <td>gtn2vt</td>
                                        <td>March 17,2020</td>
                                        <td>single</td>
                                        <td>Download PDF</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>VTNO1</td>
                                        <td>gtn2vt</td>
                                        <td>March 17,2020</td>
                                        <td>single</td>
                                        <td>Download PDF</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>VTNO1</td>
                                        <td>gtn2vt</td>
                                        <td>March 17,2020</td>
                                        <td>single</td>
                                        <td>Download PDF</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>VTNO1</td>
                                        <td>gtn2vt</td>
                                        <td>March 17,2020</td>
                                        <td>single</td>
                                        <td>Download PDF</td>
                                        <td>Delete</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="section second-section">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <table id="user-list" class="table table-striped table-bordered table-content" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>VTNO2</td>
                                            <td>gtn2vt@gmail.com</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>VTNO2</td>
                                            <td>gtn2vt@gmail.com</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>VTNO2</td>
                                            <td>gtn2vt@gmail.com</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>VTNO2</td>
                                            <td>gtn2vt@gmail.com</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>VTNO2</td>
                                            <td>gtn2vt@gmail.com</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>VTNO2</td>
                                            <td>gtn2vt@gmail.com</td>
                                            <td>active</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>VTNO2</td>
                                            <td>gtn2vt@gmail.com</td>
                                            <td>active</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <table id="user-list" class="table table-striped table-bordered table-content" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Company</th>
                                            <th>Plan Name</th>
                                            <th>Category</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Aviva</td>
                                            <td>MyLifeChose</td>
                                            <td>Whole Life</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Aviva</td>
                                            <td>MyLifeChose</td>
                                            <td>Whole Life</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Aviva</td>
                                            <td>MyLifeChose</td>
                                            <td>Whole Life</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Aviva</td>
                                            <td>MyLifeChose</td>
                                            <td>Whole Life</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Aviva</td>
                                            <td>MyLifeChose</td>
                                            <td>Whole Life</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Aviva</td>
                                            <td>MyLifeChose</td>
                                            <td>Whole Life</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Aviva</td>
                                            <td>MyLifeChose</td>
                                            <td>Whole Life</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
