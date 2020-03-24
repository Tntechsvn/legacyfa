@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List PFR:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm">
            <a class="link-trash textright" href="{{route('plan.list-trash')}}">Trash</a>
        </div>
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Add By</th>
                    <th>Create Date</th>
                    <th>Application Date</th>
                    <th>Download PDF</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>17</td>
                    <td>Covid 17</td>
                    <td>VTNO1</td>
                    <td>March 15, 2020</td>
                    <td>single</td>
                    <td>Download as PDF</td>
                    <td><a href="javascript:;" class="deletestyle1"><i class="fas fa-trash"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection


