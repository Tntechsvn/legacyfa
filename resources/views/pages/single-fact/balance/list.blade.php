@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 2 - Balance Sheet:</h4>
    </div>

        @php
        if($infoPfr->type == config('constants.TYPE_FACT_JOIN')){
            $nd = 1;
        }
        @endphp
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="balance_form" id='balance_form' class="form-table2" method="post" action="{{route('single_fact.balance.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <div class="directional-action @if(isset($nd)){{'cnd'}}@endif">
                <div class="title-dir">
                    Would you like your assets and liabilities to be taken into consideration for the Needs Analysis and Recommendation(s)
                </div>
                <div class="directional-radio">
                    <div class="custom-input-layout-row">
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input  class="balance-radio" type="radio" name="state" id="rd_yes" value="0" @if(isset($infoBalance)) @if($infoBalance->reason[0] == ""){{'checked'}}@endif @else {{'checked'}} @endif>
                                <span class="checkmark-radio"></span>
                            </div>
                            Yes (Please fill in the details below)
                        </label>
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input class="balance-radio" type="radio" name="state" id="rd_no" value="1" @if(isset($infoBalance)) @if($infoBalance->reason[0] != ""){{'checked'}}@endif @endif> 
                                <span class="checkmark-radio"></span>
                            </div>
                            No(Please state reason):
                        </label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control reason reason_1st" name="reason" id="reason" placeholder="Please state reason:" readonly="readonly">@if(isset($infoBalance)){{$infoBalance->reason[0]}}@endif</textarea>
                    </div>
                </div> 
                @if(isset($nd))
                <div class="directional-radio cnd">
                    <div class="custom-input-layout-row">
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input  class="balance-radio" type="radio" name="state_2nd" id="rd_yes_2nd" value="0" @if(isset($infoBalance)) @if($infoBalance->reason[1] == ""){{'checked'}}@endif @else {{'checked'}} @endif>
                                <span class="checkmark-radio"></span>
                            </div>
                            Yes (Please fill in the details below)
                        </label>
                        <label class="radio-inline custom-style-radio1 pdl0">
                            <div class="style-checked style-radio-custom">
                                <input class="balance-radio" type="radio" name="state_2nd" id="rd_no_2nd" value="1" @if(isset($infoBalance)) @if($infoBalance->reason[1] != ""){{'checked'}}@endif @endif> 
                                <span class="checkmark-radio"></span>
                            </div>
                            No(Please state reason):
                        </label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control reason reason_2nd" name="reason_2nd" id="reason_2nd" placeholder="Please state reason:" readonly="readonly">@if(isset($infoBalance)){{$infoBalance->reason[1]}}@endif</textarea>
                    </div>
                </div> 
                @endif
            </div>
            <h3>ASSETS</h3>
            <table id="blance-table" class="table table-bordered table-content table-style2 td50 @if(isset($nd)){{'cnd'}}@endif" style="width:100%">
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
                        <td rowspan="2">Property</td>
                        <td>Residence</td>
                        <td><input type="number" class="form-control" id="residence_property" name="residence_property" placeholder="$" value="{{$assetsClient1['residence_property'] ?? ''}}" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="residence_property_2nd" name="residence_property_2nd" placeholder="$" value="{{$assetsClient2['residence_property'] ?? ''}}" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Investment</td>
                        <td><input type="number" class="form-control" id="investment_property" name="investment_property" placeholder="$" value="{{$assetsClient1['investment_property'] ?? ''}}" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="investment_property_2nd" name="investment_property_2nd" placeholder="$" value="{{$assetsClient2['investment_property'] ?? ''}}" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td rowspan="4">Investments</td>
                        <td>Bonds</td>
                        <td><input type="number" class="form-control" id="bonds_investments" name="bonds_investments" placeholder="$" value="{{$assetsClient1['bonds_investments'] ?? ''}}" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="bonds_investments_2nd" name="bonds_investments_2nd" placeholder="$" value="{{$assetsClient2['bonds_investments'] ?? ''}}" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Unit Trusts</td>
                        <td><input type="number" class="form-control" id="unit_investments" name="unit_investments" placeholder="$" value="{{$assetsClient1['unit_investments'] ?? ''}}" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="unit_investments_2nd" name="unit_investments_2nd" placeholder="$" value="{{$assetsClient2['unit_investments'] ?? ''}}" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Stock & Shares</td>
                        <td><input type="number" class="form-control" id="stockshares_investments" name="stockshares_investments" placeholder="$" value="{{$assetsClient1['stockshares_investments'] ?? ''}}" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="stockshares_investments_2nd" name="stockshares_investments_2nd" placeholder="$" value="{{$assetsClient2['stockshares_investments'] ?? ''}}" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Others</td>
                        <td><input type="number" class="form-control" id="other_investments" name="other_investments" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['other_investments'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="other_investments_2nd" name="other_investments_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['other_investments'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td rowspan="2">Savings</td>
                        <td>Bank Savings Account</td>
                        <td><input type="number" class="form-control" id="bank_savings" name="bank_savings" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['bank_savings'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="bank_savings_2nd" name="bank_savings_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['bank_savings'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Fixed Deposits</td>
                        <td><input type="number" class="form-control" id="deposits_savings" name="deposits_savings" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['deposits_savings'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="deposits_savings_2nd" name="deposits_savings_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['deposits_savings'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td rowspan="4">CPF</td>
                        <td>Ordinary Account</td>
                        <td><input type="number" class="form-control" id="ordinary_cpf" name="ordinary_cpf" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['ordinary_cpf'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="ordinary_cpf_2nd" name="ordinary_cpf_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['ordinary_cpf'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Special Account</td>
                        <td><input type="number" class="form-control" id="special_cpf" name="special_cpf" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['special_cpf'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="special_cpf_2nd" name="special_cpf_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['special_cpf'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Medisave</td>
                        <td><input type="number" class="form-control" id="medisave_cpf" name="medisave_cpf" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['medisave_cpf'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="medisave_cpf_2nd" name="medisave_cpf_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['medisave_cpf'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Retirement Account</td>
                        <td><input type="number" class="form-control" id="retirement_cpf" name="retirement_cpf" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['retirement_cpf'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="retirement_cpf_2nd" name="retirement_cpf_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['retirement_cpf'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Insurance</td>
                        <td>Cash Value</td>
                        <td><input type="number" class="form-control" id="cash_insurance" name="cash_insurance" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['cash_insurance'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="cash_insurance_2nd" name="cash_insurance_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['cash_insurance'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>SRS</td>
                        <td>Account Balance</td>
                        <td><input type="number" class="form-control" id="account_balance" name="account_balance" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['account_balance'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="account_balance_2nd" name="account_balance_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['account_balance'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan="2">Others, Please specify:</td>
                        <td><input type="number" class="form-control" id="others_value" name="others_value" placeholder="$" value="@if(isset($assetsClient1)){{$assetsClient1['others_value'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="others_value_2nd" name="others_value_2nd" placeholder="$" value="@if(isset($assetsClient2)){{$assetsClient2['others_value'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan="2"><h4>Total Assets:</h4></td>
                        <td><input type="number" class="form-control" id="total_assets" name="total_assets" placeholder="Total" value="{{$totalAssetsClient1}}" readonly=""></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="total_assets_2nd" name="total_assets_2nd" placeholder="Total" value="{{$totalAssetsClient2}}" readonly="">
                        </td>
                        @endif
                    </tr>
                </tbody>
            </table>
            <h3>Liabilities</h3>
            <table id="blance-table" class="table table-bordered table-content table-style2 td50 @if(isset($nd)){{'cnd'}}@endif" style="width:100%">
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
                        <td rowspan="7">Loans</td>
                        <td>Housing</td>
                        <td><input type="number" class="form-control" id="housing_loans" name="housing_loans" placeholder="$" value="@if(isset($liabilitiesClient1)){{$liabilitiesClient1['housing_loans'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="housing_loans_2nd" name="housing_loans_2nd" placeholder="$" value="@if(isset($liabilitiesClient2)){{$liabilitiesClient2['housing_loans'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Vehicle</td>
                        <td><input type="number" class="form-control" id="vehicle_loans" name="vehicle_loans" placeholder="$" value="@if(isset($liabilitiesClient1)){{$liabilitiesClient1['vehicle_loans'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="vehicle_loans_2nd" name="vehicle_loans_2nd" placeholder="$" value="@if(isset($liabilitiesClient2)){{$liabilitiesClient2['vehicle_loans'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Renovation</td>
                        <td><input type="number" class="form-control" id="renovation_loans" name="renovation_loans" placeholder="$" value="@if(isset($liabilitiesClient1)){{$liabilitiesClient1['renovation_loans'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="renovation_loans_2nd" name="renovation_loans_2nd" placeholder="$" value="@if(isset($liabilitiesClient2)){{$liabilitiesClient2['renovation_loans'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Education</td>
                        <td><input type="number" class="form-control" id="education_loans" name="education_loans" placeholder="$" value="@if(isset($liabilitiesClient1)){{$liabilitiesClient1['education_loans'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="education_loans_2nd" name="education_loans_2nd" placeholder="$" value="@if(isset($liabilitiesClient2)){{$liabilitiesClient2['education_loans'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Credit Card</td>
                        <td><input type="number" class="form-control" id="credit_loans" name="credit_loans" placeholder="$" value="@if(isset($liabilitiesClient1)){{$liabilitiesClient1['credit_loans'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="credit_loans_2nd" name="credit_loans_2nd" placeholder="$" value="@if(isset($liabilitiesClient2)){{$liabilitiesClient2['credit_loans'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Personal Loans</td>
                        <td><input type="number" class="form-control" id="personal_loans" name="personal_loans" placeholder="$" value="@if(isset($liabilitiesClient1)){{$liabilitiesClient1['personal_loans'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="personal_loans_2nd" name="personal_loans_2nd" placeholder="$" value="@if(isset($liabilitiesClient2)){{$liabilitiesClient2['personal_loans'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td>Overdrafts</td>
                        <td><input type="number" class="form-control" id="overdrafts_loans" name="overdrafts_loans" placeholder="$" value="@if(isset($liabilitiesClient1)){{$liabilitiesClient1['overdrafts_loans'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="overdrafts_loans_2nd" name="overdrafts_loans_2nd" placeholder="$" value="@if(isset($liabilitiesClient2)){{$liabilitiesClient2['overdrafts_loans'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan="2">Others, Please specify:</td>
                        <td><input type="number" class="form-control" id="others_loans" name="others_loans" placeholder="$" value="@if(isset($liabilitiesClient1)){{$liabilitiesClient1['others_loans'] ?? ''}}@endif" ></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="others_loans_2nd" name="others_loans_2nd" placeholder="$" value="@if(isset($liabilitiesClient2)){{$liabilitiesClient2['others_loans'] ?? ''}}@endif" >
                        </td>
                        @endif
                    </tr>
                    <tr>
                        <td colspan="2"><h4>Total Liabilities:</h4></td>
                        <td><input type="number" class="form-control" id="total_liabilities" name="total_liabilities" placeholder="Total" value="{{$totalLiabilitiesClient1}}" readonly=""></td>
                        @if(isset($nd))
                        <td class="cnd">
                            <input type="number" class="form-control" id="total_liabilities_2nd" name="total_liabilities_2nd" placeholder="Total" value="{{$totalLiabilitiesClient2}}" readonly="">
                        </td>
                        @endif
                    </tr>
                </tbody>
            </table>
            <div class="nav-step">
                <a href="{{$backUrl}}" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>  
        </form>      
    </div>
</div>
@include('pages.navigation', ['id' => $infoPfr->id])
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.balance-radio').click(function(){
            var rBtnVal = $(this).val();
            if(rBtnVal == "1"){
                $(this).closest('.directional-radio').find('.reason').attr("readonly", false); 
                $("input[type=number]").val("");
            }else{ 
                $(this).closest('.directional-radio').find('.reason').attr("readonly", true);
                $('#reason').val('');
            }
        });

        $('#balance_form').on('submit', function(e){
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

        $('#residence_property_2nd, #investment_property_2nd, #bonds_investments_2nd, #unit_investments_2nd, #stockshares_investments_2nd, #other_investments_2nd, #bank_savings_2nd, #deposits_savings_2nd, #ordinary_cpf_2nd, #special_cpf_2nd, #medisave_cpf_2nd, #retirement_cpf_2nd, #cash_insurance_2nd, #account_balance_2nd, #others_value_2nd').on('change', function(){
            var residence_property = getValue($('#residence_property_2nd').val());
            var investment_property = getValue($('#investment_property_2nd').val());
            var bonds_investments = getValue($('#bonds_investments_2nd').val());
            var unit_investments = getValue($('#unit_investments_2nd').val());
            var stockshares_investments = getValue($('#stockshares_investments_2nd').val());
            var other_investments = getValue($('#other_investments_2nd').val());
            var bank_savings = getValue($('#bank_savings_2nd').val());
            var deposits_savings = getValue($('#deposits_savings_2nd').val());
            var ordinary_cpf = getValue($('#ordinary_cpf_2nd').val());
            var special_cpf = getValue($('#special_cpf_2nd').val());
            var medisave_cpf = getValue($('#medisave_cpf_2nd').val());
            var retirement_cpf = getValue($('#retirement_cpf_2nd').val());
            var cash_insurance = getValue($('#cash_insurance_2nd').val());
            var account_balance = getValue($('#account_balance_2nd').val());
            var others_value = getValue($('#others_value_2nd').val());

            var total = residence_property + investment_property + bonds_investments + unit_investments + stockshares_investments + other_investments + bank_savings + deposits_savings + ordinary_cpf + special_cpf + medisave_cpf + retirement_cpf + cash_insurance + account_balance + others_value;
            $('#total_assets_2nd').val(total);
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

        $('#housing_loans_2nd, #vehicle_loans_2nd, #renovation_loans_2nd, #education_loans_2nd, #credit_loans_2nd, #personal_loans_2nd, #overdrafts_loans_2nd, #others_loans_2nd').on('change', function(){
            var housing_loans = getValue($('#housing_loans_2nd').val());
            var vehicle_loans = getValue($('#vehicle_loans_2nd').val());
            var renovation_loans = getValue($('#renovation_loans_2nd').val());
            var education_loans = getValue($('#education_loans_2nd').val());
            var credit_loans = getValue($('#credit_loans_2nd').val());
            var personal_loans = getValue($('#personal_loans_2nd').val());
            var overdrafts_loans = getValue($('#overdrafts_loans_2nd').val());
            var others_loans = getValue($('#others_loans_2nd').val());

            var total = housing_loans + vehicle_loans + renovation_loans + education_loans + credit_loans + personal_loans + overdrafts_loans + others_loans;

            $('#total_liabilities_2nd').val(total);
        });

        function getValue(data){
            return data != "" ? parseFloat(data) : 0;
        }
    });
</script>
@endsection
