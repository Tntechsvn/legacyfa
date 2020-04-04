@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Balance Sheet:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="balance_form" id='balance_form' class="" method="post" action="{{route('single_fact.balance.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <div class="form-group">
                <label class="radio-inline">Would you like your assets and liabilities to be taken into consideration for the Needs Analysis and Recommendation(s)
                    <input type="radio" name="state" value="0" checked>Yes (Please fill in the details below)
                </label>
                <label class="radio-inline">
                    <input type="radio" name="state" value="1">No (Please state reason):
                </label>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="reason" name="reason" placeholder="Please state reason:" value="" ></textarea>
            </div>
            <h3>ASSETS</h3>
            <table id="blance-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td rowspan="2">Property</td>
                        <td>Residence</td>
                        <td><input type="number" class="form-control" id="residence_property" name="residence_property" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Investment</td>
                        <td><input type="number" class="form-control" id="investment_property" name="residence_property" placeholder="$" value="" ></td>
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
                    <tr>
                        <td>Others</td>
                        <td><input type="number" class="form-control" id="other_investments" name="other_investments" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td rowspan="2">Savings</td>
                        <td>Bank Savings Account</td>
                        <td><input type="number" class="form-control" id="bank_savings" name="bank_savings" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Fixed Deposits</td>
                        <td><input type="number" class="form-control" id="deposits_savings" name="deposits_savings" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td rowspan="4">CPF</td>
                        <td>Ordinary Account</td>
                        <td><input type="number" class="form-control" id="ordinary_cpf" name="ordinary_cpf" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Special Account</td>
                        <td><input type="number" class="form-control" id="special_cpf" name="special_cpf" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Medisave</td>
                        <td><input type="number" class="form-control" id="medisave_cpf" name="medisave_cpf" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Retirement Account</td>
                        <td><input type="number" class="form-control" id="retirement_cpf" name="retirement_cpf" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Insurance</td>
                        <td>Cash Value</td>
                        <td><input type="number" class="form-control" id="cash_insurance" name="cash_insurance" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>SRS</td>
                        <td>Account Balance</td>
                        <td><input type="number" class="form-control" id="account_balance" name="account_balance" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td colspan="2">Others, Please specify:</td>
                        <td><input type="number" class="form-control" id="others_value" name="others_value" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h4>Total Assets:</h4></td>
                        <td><input type="number" class="form-control" id="total_assets" name="total_assets" placeholder="Total" value="" readonly=""></td>
                    </tr>
                </tbody>
            </table>
            <h3>Liabilities</h3>
            <table id="blance-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td rowspan="7">Loans</td>
                        <td>Housing</td>
                        <td><input type="number" class="form-control" id="housing_loans" name="housing_loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Vehicle</td>
                        <td><input type="number" class="form-control" id="vehicle_loans" name="vehicle_loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Renovation</td>
                        <td><input type="number" class="form-control" id="renovation_loans" name="renovation_loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Education</td>
                        <td><input type="number" class="form-control" id="education_loans" name="education_loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Credit Card</td>
                        <td><input type="number" class="form-control" id="credit_loans" name="credit_loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Personal Loans</td>
                        <td><input type="number" class="form-control" id="personal_loans" name="personal_loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Overdrafts</td>
                        <td><input type="number" class="form-control" id="overdrafts_loans" name="overdrafts_loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td colspan="2">Others, Please specify:</td>
                        <td><input type="number" class="form-control" id="others_loans" name="others_loans" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td colspan="2"><h4>Total Liabilities:</h4></td>
                        <td><input type="number" class="form-control" id="total_liabilities" name="total_liabilities" placeholder="Total" value="" readonly=""></td>
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

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#balance_form').on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function(res){
                    console.log(res);
                    if(res['error']){
                        alert(res['message']);
                    }else{
                        alert(res['message']);
                    }
                }
            });
        });

        $('#residence_property, #investment_property, #bonds_investments, #unit_investments, #stockshares_investments, #other_investments, #bank_savings, #deposits_savings, #ordinary_cpf, #special_cpf, #medisave_cpf, #retirement_cpf, #cash_insurance, #account_balance, #others_value').on('change', function(){
            var residence_property = getValue($('#residence_property').val());
            var investment_property = getValue($('#investment_property').val());
            var bonds_investments = getValue($('#bonds_investments').val());
            var unit_investments = getValue($('#unit_investments').val());
            var stockshares_investments = getValue($('#stockshares_investments').val());
            var other_investments = getValue($('#other_investments').val());
            var bank_savings = getValue($('#bank_savings').val());
            var deposits_savings = getValue($('#deposits_savings').val());
            var ordinary_cpf = getValue($('#ordinary_cpf').val());
            var special_cpf = getValue($('#special_cpf').val());
            var medisave_cpf = getValue($('#medisave_cpf').val());
            var retirement_cpf = getValue($('#retirement_cpf').val());
            var cash_insurance = getValue($('#cash_insurance').val());
            var account_balance = getValue($('#account_balance').val());
            var others_value = getValue($('#others_value').val());

            var total = residence_property + investment_property + bonds_investments + unit_investments + stockshares_investments + other_investments + bank_savings + deposits_savings + ordinary_cpf + special_cpf + medisave_cpf + retirement_cpf + cash_insurance + account_balance + others_value;
            $('#total_assets').val(total);
        });

        $('#housing_loans, #vehicle_loans, #renovation_loans, #education_loans, #credit_loans, #personal_loans, #overdrafts_loans, #others_loans').on('change', function(){
            var housing_loans = getValue($('#housing_loans').val());
            var vehicle_loans = getValue($('#vehicle_loans').val());
            var renovation_loans = getValue($('#renovation_loans').val());
            var education_loans = getValue($('#education_loans').val());
            var credit_loans = getValue($('#credit_loans').val());
            var personal_loans = getValue($('#personal_loans').val());
            var overdrafts_loans = getValue($('#overdrafts_loans').val());
            var others_loans = getValue($('#others_loans').val());

            var total = housing_loans + vehicle_loans + renovation_loans + education_loans + credit_loans + personal_loans + overdrafts_loans + others_loans;

            $('#total_liabilities').val(total);
        });

        function getValue(data){
            return data != "" ? parseFloat(data) : 0;
        }
    });
</script>
@endsection