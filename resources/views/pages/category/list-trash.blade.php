@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>List Trash Of Category:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Categoty</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>categoryPlan id </td>
                    <td>categoryPlan name</td>
                    <td>Restore</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>


@endsection
