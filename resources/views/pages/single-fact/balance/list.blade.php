@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Balance Sheet:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="addsinglefact_form" id='addsinglefact_form' class="" method="post" action="{{route('single-fact.add_new')}}" data-parsley-validate>
            @csrf
            <div class="form-group">
                <label class="radio-inline">Would you like your assets and liabilities to be taken into consideration for the Needs Analysis and Recommendation(s)
                    <input type="radio" name="sex" value="0" checked>Yes (Please fill in the details below)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="sex" value="1">No (Please state reason):
                </label>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="state_reason" name="state_reason" placeholder="Please state reason:" value="" ></textarea>
            </div>
            <h3>ASSETS</h3>
            <table id="blance-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td rowspan="2">Property</td>
                        <td>Residence</td>
                        <td><input type="number" class="form-control" id="residence-property" name="residence-property" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Investment</td>
                        <td><input type="number" class="form-control" id="investment-property" name="residence-property" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td rowspan="4">Investments</td>
                        <td>Bonds</td>
                        <td><input type="number" class="form-control" id="bonds-investments" name="bonds-investments" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Unit Trusts</td>
                        <td><input type="number" class="form-control" id="unit-investments" name="unit-investments" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Stock & Shares</td>
                        <td><input type="number" class="form-control" id="stockshares-investments" name="stockshares-investments" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Others</td>
                        <td><input type="number" class="form-control" id="other-investments" name="other-investments" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td rowspan="2">Savings</td>
                        <td>Bank Savings Account</td>
                        <td><input type="number" class="form-control" id="bank-savings" name="bank-savings" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Fixed Deposits</td>
                        <td><input type="number" class="form-control" id="deposits-savings" name="deposits-savings" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td rowspan="4">CPF</td>
                        <td>Ordinary Account</td>
                        <td><input type="number" class="form-control" id="ordinary-cpf" name="ordinary-cpf" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Special Account</td>
                        <td><input type="number" class="form-control" id="special-cpf" name="special-cpf" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Medisave</td>
                        <td><input type="number" class="form-control" id="medisave-cpf" name="deposits-savings" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Retirement Account</td>
                        <td><input type="number" class="form-control" id="retirement-cpf" name="retirement-cpf" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Insurance</td>
                        <td>Cash Value</td>
                        <td><input type="number" class="form-control" id="cash-value" name="ordinary-cpf" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>SRS</td>
                        <td>Account Balance</td>
                        <td><input type="number" class="form-control" id="account-balance" name="account-balance" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td colspan="2">Others, Please specify:</td>
                        <td><input type="number" class="form-control" id="others-value" name="others-value" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h4>Total Assets:</h4></td>
                        <td><input type="number" class="form-control" id="total-assets" name="others-value" placeholder="Total" value="" readonly=""></td>
                    </tr>
                </tbody>
           </table>
           <h3>Liabilities</h3>
            <table id="blance-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td rowspan="7">Loans</td>
                        <td>Housing</td>
                        <td><input type="number" class="form-control" id="housing-loans" name="housing-loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Vehicle</td>
                        <td><input type="number" class="form-control" id="vehicle-loans" name="vehicle-loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Renovation</td>
                        <td><input type="number" class="form-control" id="renovation-loans" name="renovation-loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Education</td>
                        <td><input type="number" class="form-control" id="education-loans" name="education-loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Credit Card</td>
                        <td><input type="number" class="form-control" id="credit-loans" name="credit-loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Personal Loans</td>
                        <td><input type="number" class="form-control" id="personal-loans" name="personal-loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Overdrafts</td>
                        <td><input type="number" class="form-control" id="overdrafts-loans" name="overdrafts-loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td colspan="2">Others, Please specify:</td>
                        <td><input type="number" class="form-control" id="others-loans" name="others-loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h4>Total Liabilities:</h4></td>
                        <td><input type="number" class="form-control" id="total-liabilities" name="others-value" placeholder="Total" value="" readonly=""></td>
                    </tr>
                </tbody>
           </table>
            <button class="btn btn-primary mb-2">Back</button>
            <button type="submit" class="btn btn-primary mb-2">Next</button>
        </form>      
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
        <ul>
            <li><a href="javascript:;">1</a></li>
            <li><a href="javascript:;">2</a></li>
            <li><a href="javascript:;">3</a></li>
            <li><a href="javascript:;">4</a></li>
            <li><a href="javascript:;">5</a></li>
            <li><a href="javascript:;">6</a></li>
            <li><a href="javascript:;">7</a></li>
            <li><a href="javascript:;">8</a></li>
            <li><a href="javascript:;">9</a></li>
            <li><a href="javascript:;">10</a></li>
        </ul>
    </div>
</div>
@endsection
