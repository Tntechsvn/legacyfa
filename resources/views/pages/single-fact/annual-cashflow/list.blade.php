@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 3 - Cash Flow:</h4>
    </div>
    @php
        if($infoPfr->type == config('constants.TYPE_FACT_JOIN')){
            $nd=1;
        }
    @endphp
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="cashflow_form" id='cashflow_form' class="form-table2" method="post" action="{{route('single_fact.cash_flow.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <div class="directional-action">
                <div class="title-dir">
                    Would you like your cash flow to be taken into consideration for the Needs Analysis and Recommendation(s)?
                </div>
                <div class="directional-radio">
                    <div class="custom-input-layout-row">
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input class="state_cash_flow" type="radio" name="state_cash_flow" value="0" @if(isset($infoCashFlow)) @if($infoCashFlow->reason_cash_flow == null){{'checked'}} @endif @else {{'checked'}} @endif >
                                <span class="checkmark-radio"></span>
                            </div>
                            Yes (Please fill in the details below)
                        </label>
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input class="state_cash_flow" type="radio" name="state_cash_flow" value="1" @if(isset($infoCashFlow)) @if($infoCashFlow->reason_cash_flow != null){{'checked'}} @endif @endif>
                                <span class="checkmark-radio"></span>
                            </div>
                            No (Please state reason):
                        </label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control reason reason_1st" id="reason_cash_flow" name="reason_cash_flow" placeholder="Please state reason:" readonly="readonly">@if(isset($infoCashFlow)){{$infoCashFlow->reason_cash_flow}}@endif</textarea>
                    </div>
                </div> 
                @if(isset($nd))
                <div class="directional-radio cnd">
                    <div class="custom-input-layout-row">
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input class="state_cash_flow" type="radio" name="state_cash_flow_2nd" value="0" @if(isset($infoCashFlow)) @if($infoCashFlow->reason_cash_flow == null){{'checked'}} @endif @else {{'checked'}} @endif >
                                <span class="checkmark-radio"></span>
                            </div>
                            Yes (Please fill in the details below)
                        </label>
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input class="state_cash_flow" type="radio" name="state_cash_flow_2nd" value="1" @if(isset($infoCashFlow)) @if($infoCashFlow->reason_cash_flow != null){{'checked'}} @endif @endif>
                                <span class="checkmark-radio"></span>
                            </div>
                            No (Please state reason):
                        </label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control reason reason_2nd" id="reason_cash_flow_2nd" name="reason_cash_flow_2nd" placeholder="Please state reason:" readonly="readonly">@if(isset($infoCashFlow)){{$infoCashFlow->reason_cash_flow}}@endif</textarea>
                    </div>
                </div> 
                @endif 
            </div>
            <h3> Annual Income</h3>
            <table id="annual-income-table" class="table table-bordered table-content table-style2 td50 @if(isset($nd)){{'cnd'}}@endif" style="width:100%">
                <thead>
                    <tr>
                        <th colspan="2"></th>
                        <th>Client1</th>
                        @if(isset($nd))
                        <th>Client2</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Annual Gross Income</td>
                        <td><input type="number" class="form-control" id="gross_income" name="gross_income" placeholder="$" value="@if(isset($income)){{$income['gross_income'] ?? ''}}@endif"></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="gross_income_2nd" name="gross_income_2nd" placeholder="$" value="@if(isset($income)){{$income['gross_income'] ?? ''}}@endif">
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Additional Wages<br/>
                            <i>(eg. Bonus, Leave Pay)</i>
                        </td>
                        <td><input type="number" class="form-control" id="wages_income" name="wages_income" placeholder="$" value="@if(isset($income)){{$income['wages_income'] ?? ''}}@endif"></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="wages_income_2nd" name="wages_income_2nd" placeholder="$" value="@if(isset($income)){{$income['wages_income'] ?? ''}}@endif">
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Less: Employee's CPF Contribution</td>
                        <td><input type="number" class="form-control" id="employee_income" name="employee_income" placeholder="$" value="@if(isset($income)){{$income['employee_income'] ?? ''}}@endif"></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="employee_income_2nd" name="employee_income_2nd" placeholder="$" value="@if(isset($income)){{$income['employee_income'] ?? ''}}@endif">
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Others, Please specify:Rental<br/>
                            <i>(eg. Rent, Dividend, Interest, Profits)</i>
                        </td>
                        <td><input type="number" class="form-control" id="orther_income" name="orther_income" placeholder="$" value="@if(isset($income)){{$income['orther_income'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="orther_income_2nd" name="orther_income_2nd" placeholder="$" value="@if(isset($income)){{$income['orther_income'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td><h4>Total Annual Income:</h4></td>
                        <td><input type="number" class="form-control" id="total_income" name="total_income" placeholder="Total" value="{{$totalIncome}}" readonly=""></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="total_income_2nd" name="total_income_2nd" placeholder="Total" value="{{$totalIncome}}" readonly="">
                        </td>
                        @endif
                    </tr>
                </tbody>
            </table>
            <h3>Annual Expenses</h3>
            <table id="annual-expenses-table" class="table table-content table-bordered table-style2 td50 @if(isset($nd)){{'cnd'}}@endif" style="width:100%">
                <tbody>
                    <tr>
                        <td>Household</td>
                        <td><input type="number" class="form-control" id="household_expenses" name="household_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['household_expenses'] ?? ''}}@endif"></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="household_expenses_2nd" name="household_expenses_2nd" placeholder="$" value="@if(isset($expenses)){{$expenses['household_expenses'] ?? ''}}@endif">
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Transportation</i>
                        </td>
                        <td><input type="number" class="form-control" id="transportation_expenses" name="transportation_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['transportation_expenses'] ?? ''}}@endif"></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="transportation_expenses_2nd" name="transportation_expenses_2nd" placeholder="$" value="@if(isset($expenses)){{$expenses['transportation_expenses'] ?? ''}}@endif">
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Telco</td>
                        <td><input type="number" class="form-control" id="telco_expenses" name="telco_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['telco_expenses'] ?? ''}}@endif"></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="telco_expenses_2nd" name="telco_expenses_2nd" placeholder="$" value="@if(isset($expenses)){{$expenses['telco_expenses'] ?? ''}}@endif">
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Dependants</td>
                        <td><input type="number" class="form-control" id="dependants_expenses" name="dependants_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['dependants_expenses'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="dependants_expenses_2nd" name="dependants_expenses_2nd" placeholder="$" value="@if(isset($expenses)){{$expenses['dependants_expenses'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Personal</td>
                        <td><input type="number" class="form-control" id="personal_expenses" name="personal_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['personal_expenses'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="personal_expenses_2nd" name="personal_expenses_2nd" placeholder="$" value="@if(isset($expenses)){{$expenses['personal_expenses'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Luxury</td>
                        <td><input type="number" class="form-control" id="luxury_expenses" name="luxury_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['luxury_expenses'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="luxury_expenses_2nd" name="luxury_expenses_2nd" placeholder="$" value="@if(isset($expenses)){{$expenses['luxury_expenses'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Insurance Premiums</td>
                        <td><input type="number" class="form-control" id="premiums_expenses" name="premiums_expenses" placeholder="$" value="" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="premiums_expenses_2nd" name="premiums_expenses_2nd" placeholder="$" value="" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Loan Repayments</td>
                        <td><input type="number" class="form-control" id="repayments_expenses" name="repayments_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['repayments_expenses'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="repayments_expenses_2nd" name="repayments_expenses_2nd" placeholder="$" value="@if(isset($expenses)){{$expenses['repayments_expenses'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Others, Please specify:</td>
                        <td><input type="number" class="form-control" id="orther_expenses" name="orther_expenses" placeholder="$" value="@if(isset($expenses)){{$expenses['orther_expenses'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="orther_expenses_2nd" name="orther_expenses_2nd" placeholder="$" value="@if(isset($expenses)){{$expenses['orther_expenses'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td><h4>Total Annual Expenses:</h4></td>
                        <td><input type="number" class="form-control" id="total_expenses" name="total_expenses" placeholder="Total" value="{{$totalExpenses}}" readonly=""></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="total_expenses_2nd" name="total_expenses_2nd" placeholder="Total" value="{{$totalExpenses}}" readonly="">
                        </td>
                        @endif
                    </tr>
                </tbody>
            </table>
            <h3>Annual Net Cashflow</h3>
            <table id="annual-expenses-table" class="table table-content table-bordered table-style2 td50 @if(isset($nd)){{'cnd'}}@endif" style="width:100%">
                 <thead>
                    <tr>
                        <th></th>
                        <th>Client1</th>
                        @if(isset($nd))
                        <th>Client2</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h4>Annual Surplus/Shortfall:</h4></td>
                        <td><input type="number" class="form-control" id="total_annual" name="total_annual" placeholder="Total" value="{{$totalAnnual}}" readonly=""></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="total_annual_2nd" name="total_annual_2nd" placeholder="Total" value="{{$totalAnnual}}" readonly="">
                        </td>
                        @endif
                    </tr>
                </tbody>
            </table>
            <div class="directional-action">
                <div class="title-dir">
                    Do you have any plans or are there any factors within the next 12 months which may significantly increase or decrease your current income and expenditure position (eg. Receiving an inheritance or borrowing money for investment or purchase of a holiday home, etc.)?
                </div>
                <div class="directional-radio">
                    <div class="custom-input-layout-row">
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input class="state-plan" type="radio" name="state_plan" value="0" @if(isset($infoCashFlow))@if($infoCashFlow->reason_plan == null){{'checked'}}@endif@else{{'checked'}}@endif>
                                <span class="checkmark-radio"></span>
                            </div>
                            No
                        </label>
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input class="state-plan" type="radio" name="state_plan" value="1"@if(isset($infoCashFlow)) @if($infoCashFlow->reason_plan != null){{'checked'}}@endif @endif>
                                <span class="checkmark-radio"></span>
                            </div>
                            Yes (Please state details)
                        </label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="reason_plan" name="reason_plan" placeholder="Please state details" readonly="readonly">@if(isset($infoCashFlow)){{$infoCashFlow->reason_plan}}@endif</textarea>
                    </div>
                </div>
                @if(isset($nd))
                    <div class="directional-radio cnd">
                        <div class="custom-input-layout-row">
                            <label class="radio-inline custom-style-radio1 pdl0">
                                <div class="style-checked style-radio-custom">
                                    <input class="state-plan" type="radio" name="state_plan_2nd" value="0" @if(isset($infoCashFlow))@if($infoCashFlow->reason_plan == null){{'checked'}}@endif@else{{'checked'}}@endif>
                                    <span class="checkmark-radio"></span>
                                </div>
                                No
                            </label>
                            <label class="radio-inline custom-style-radio1 pdl0">
                                <div class="style-checked style-radio-custom">
                                    <input class="state-plan" type="radio" name="state_plan_2nd" value="1"@if(isset($infoCashFlow)) @if($infoCashFlow->reason_plan != null){{'checked'}}@endif @endif>
                                    <span class="checkmark-radio"></span>
                                </div>
                                Yes (Please state details)
                            </label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="reason_plan_2nd" name="reason_plan_2nd" placeholder="Please state details" readonly="readonly">@if(isset($infoCashFlow)){{$infoCashFlow->reason_plan}}@endif</textarea>
                        </div>
                    </div>
                @endif
            </div>

            <div class="nav-step">
                <a href="@if($infoPfr->type == config('constants.TYPE_FACT_SINGLE')) {{route('single_fact.balance.list', $infoPfr->id)}} @else {{route('jointfact.balance.list', $infoPfr->id)}} @endif" class="style-button1">Back</a>
                <button type="submit" class="style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
@include('pages.navigation', ['id' => $infoPfr->id])
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.state_cash_flow').click(function(){
            var rBtnVal = $(this).val();
            if(rBtnVal == "1"){
                $(this).closest('.directional-radio').find(".reason").attr("readonly", false); 
                $("input[type=number]").val("");
            }
            else{ 
                 $(this).closest('.directional-radio').find(".reason").attr("readonly", true); 
            }
        });

        $('.state-plan').click(function(){
            var stateVal = $(this).val();
            if(stateVal == "1"){
                $("#reason_plan").attr("readonly", false); 
            }
            else{ 
             $("#reason_plan").attr("readonly", true); 
             $("#reason_plan").val("");
         }
     });        

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
                        window.location.href = res['url'];
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
