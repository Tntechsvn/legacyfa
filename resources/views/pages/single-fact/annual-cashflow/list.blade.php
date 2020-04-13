@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Cash Flow:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="{{route('single_fact.cash_flow.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <div class="form-group form-layout-row">
                <label class="radio-inline">Would you like your cash flow to be taken into consideration for the Needs Analysis and Recommendation(s)?</label>
                <div class="custom-input-layout-row">
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="fas fa-check-circle"></i>
                            <input type="radio" name="state_cash_flow" value="0" @if(isset($infoCashFlow)) @if($infoCashFlow->reason_cash_flow != null){{'checked'}} @endif @else {{'checked'}} @endif >
                        </div>
                        Yes (Please fill in the details below)
                    </label>
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="far fa-circle"></i>
                            <input type="radio" name="state_cash_flow" value="1" @if(isset($infoCashFlow)) @if($infoCashFlow->reason_cash_flow == null){{'checked'}} @endif @endif>
                        </div>
                        No (Please state reason):
                    </label>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="reason_cash_flow" name="reason_cash_flow" placeholder="Please state reason:" >@if(isset($infoCashFlow)){{$infoCashFlow->reason_cash_flow}}@endif</textarea>
            </div>
            <h3> Annual Income</h3>
            <table id="annual-income-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Annual Gross Income</td>
                        <td><input type="number" class="form-control" id="gross_income" name="gross_income" placeholder="$" value="@if(isset($income)){{$income['gross_income'] ?? ""}}@endif"></td>
                    </tr>
                    <tr>
                        <td>Additional Wages<br/>
                            <i>(eg. Bonus, Leave Pay)</i>
                        </td>
                        <td><input type="number" class="form-control" id="wages_income" name="wages_income" placeholder="$" value="@if(isset($income)){{$income['wages_income'] ?? ""}}@endif"></td>
                    </tr>
                    <tr>
                        <td>Less: Employee's CPF Contribution</td>
                        <td><input type="number" class="form-control" id="employee_income" name="employee_income" placeholder="$" value="@if(isset($income)){{$income['employee_income'] ?? ""}}@endif"></td>
                    </tr>
                    <tr>
                        <td>Others, Please specify:Rental<br/>
                            <i>(eg. Rent, Dividend, Interest, Profits)</i>
                        </td>
                        <td><input type="number" class="form-control" id="orther_income" name="orther_income" placeholder="$" value="@if(isset($income)){{$income['orther_income'] ?? ""}}@endif" ></td>
                    </tr>
                    <tr>
                        <td><h4>Total Annual Income:</h4></td>
                        <td><input type="number" class="form-control" id="total_income" name="total_income" placeholder="Total" value="{{$totalIncome}}" readonly=""></td>
                    </tr>
                </tbody>
            </table>
            <h3>Annual Expenses</h3>
            <table id="annual-expenses-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Household</td>
                        <td><input type="number" class="form-control" id="household_expenses" name="household_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['household_expenses'] ?? ""}}@endif"></td>
                    </tr>
                    <tr>
                        <td>Transportation</i>
                        </td>
                        <td><input type="number" class="form-control" id="transportation_expenses" name="transportation_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['transportation_expenses'] ?? ""}}@endif"></td>
                    </tr>
                    <tr>
                        <td>Telco</td>
                        <td><input type="number" class="form-control" id="telco_expenses" name="telco_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['telco_expenses'] ?? ""}}@endif"></td>
                    </tr>
                    <tr>
                        <td>Dependants</td>
                        <td><input type="number" class="form-control" id="dependants_expenses" name="dependants_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['dependants_expenses'] ?? ""}}@endif" ></td>
                    </tr>
                    <tr>
                        <td>Personal</td>
                        <td><input type="number" class="form-control" id="personal_expenses" name="personal_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['personal_expenses'] ?? ""}}@endif" ></td>
                    </tr>
                    <tr>
                        <td>Luxury</td>
                        <td><input type="number" class="form-control" id="luxury_expenses" name="luxury_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['luxury_expenses'] ?? ""}}@endif" ></td>
                    </tr>
                    <tr>
                        <td>Insurance Premiums</td>
                        <td><input type="number" class="form-control" id="premiums_expenses" name="premiums_expenses" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Loan Repayments</td>
                        <td><input type="number" class="form-control" id="repayments_expenses" name="repayments_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['repayments_expenses'] ?? ""}}@endif" ></td>
                    </tr>
                    <tr>
                        <td>Others, Please specify:</td>
                        <td><input type="number" class="form-control" id="orther_expenses" name="orther_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['orther_expenses'] ?? ""}}@endif" ></td>
                    </tr>
                    <tr>
                        <td><h4>Total Annual Expenses:</h4></td>
                        <td><input type="number" class="form-control" id="total_expenses" name="total_expenses" placeholder="Total" value="{{$totalExpenses}}" readonly=""></td>
                    </tr>
                </tbody>
            </table>
            <h3>Annual Net Cashflow</h3>
            <table id="annual-expenses-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td><h4>Annual Surplus/Shortfall:</h4></td>
                        <td><input type="number" class="form-control" id="total_annual" name="total_annual" placeholder="Total" value="{{$totalAnnual}}" readonly=""></td>
                    </tr>
                </tbody>
            </table>
            <table id="annual-expenses-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Do you have any plans or are there any factors within the next 12 months which may significantly increase or decrease your current income and expenditure position (eg. Receiving an inheritance or borrowing money for investment or purchase of a holiday home, etc.)?</td>
                        <td>
                            <label class="radio-hoz">
                               <input type="radio" name="state_plan" value="0" checked>No 
                           </label>
                           <label class="radio-hoz">
                            <input type="radio" name="state_plan" value="1">Yes (Please state details)
                        </label>
                        <textarea class="form-control" id="reason_plan" name="reason_plan"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="nav-step">
            <button class="btn btn-primary mb-2">Back</button>
            <button type="submit" class="btn btn-primary mb-2">Next</button>
        </div>
    </form>      
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
    <ul>
        @if(!$infoPfr)
        @else
            @include('pages.navigation', ['id' => $infoPfr->id])
        @endif
    </ul>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#cashflow_form').on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function(res){
                    if(res['error']){
                        if(!$.isPlainObject(res.message)){
                            alert(res.message);
                        }else{
                            $.each(res.message, function(key,value){
                                alert(value[0]);
                                return false;
                            });
                        }
                    }else{
                        location.reload();
                        alert(res['message']);
                    }
                }
            });
        });

        $('#gross_income, #wages_income, #employee_income, #orther_income').on('change', function(){
            var gross_income = getValue($('#gross_income').val());
            var wages_income = getValue($('#wages_income').val());
            var employee_income = getValue($('#employee_income').val());
            var orther_income = getValue($('#orther_income').val());

            var total = gross_income + wages_income + employee_income + orther_income;
            $('#total_income').val(total);
            calculatorTotalAnnual();
        });

        $('#household_expenses, #transportation_expenses, #telco_expenses, #dependants_expenses, #personal_expenses, #luxury_expenses, #premiums_expenses, #repayments_expenses, #orther_expenses').on('change', function(){
            var household_expenses = getValue($('#household_expenses').val());
            var transportation_expenses = getValue($('#transportation_expenses').val());
            var telco_expenses = getValue($('#telco_expenses').val());
            var dependants_expenses = getValue($('#dependants_expenses').val());
            var personal_expenses = getValue($('#personal_expenses').val());
            var luxury_expenses = getValue($('#luxury_expenses').val());
            var premiums_expenses = getValue($('#premiums_expenses').val());
            var repayments_expenses = getValue($('#repayments_expenses').val());
            var orther_expenses = getValue($('#orther_expenses').val());

            var total = household_expenses + transportation_expenses + telco_expenses + dependants_expenses + personal_expenses + luxury_expenses + premiums_expenses + repayments_expenses + orther_expenses;

            $('#total_expenses').val(total);
            calculatorTotalAnnual();
        });

        function getValue(data){
            return data != "" ? parseFloat(data) : 0;
        }

        function calculatorTotalAnnual(){
            var total_income = getValue($('#total_income').val());
            var total_expenses = getValue($('#total_expenses').val());
            var total = total_income + total_expenses;
            $('#total_annual').val(total);
        }
    });
</script>
@endsection
