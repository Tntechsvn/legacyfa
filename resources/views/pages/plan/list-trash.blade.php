@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Trash Of Plans:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Company</th>
                    <th>Play Name</th>
                    <th>Categoty</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>plan->id</td>
                    <td>plan->nameCompany</td>
                    <td>plan->name</td>
                    <td>plan->nameCategoryPlan</td>
                    <td>Restore</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
