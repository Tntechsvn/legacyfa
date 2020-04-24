@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 2 - Balance Sheet:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="balance_form" id='balance_form' class="form-table2" method="post" action="" data-parsley-validate>
            @csrf
            <h3>ASSETS</h3>
            <table id="blance-table" class="table table-bordered table-content table-style2 td50" style="width:100%">
                <tbody>
                    <tr>
                        <td rowspan="2">Property</td>
                        <td>Residence</td>
                        <td><input type="number" class="form-control" id="residence_property" name="residence_property" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Investment</td>
                        <td><input type="number" class="form-control" id="investment_property" name="investment_property" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td rowspan="4">Investments</td>
                        <td>Bonds</td>
                        <td><input type="number" class="form-control" id="bonds_investments" name="bonds_investments" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Unit Trusts</td>
                        <td><input type="number" class="form-control" id="unit_investments" name="unit_investments" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Stock & Shares</td>
                        <td><input type="number" class="form-control" id="stockshares_investments" name="stockshares_investments" placeholder="$" value="" ></td>
                    </tr>
                </tbody>
            </table>
        </form>      
    </div>
</div>
@endsection