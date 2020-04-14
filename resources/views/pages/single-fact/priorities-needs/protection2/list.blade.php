@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>PROTECTION - Fund Disability Income / Expenses</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection2-1" class="table table-content table-style1 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Disability Income/Expense</th>
                        <th>Client 1</th>
                        <th>Dependent 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Annual Amount Needed ($)</td>
                        <td><input type="number" class="form-control" id="annual_amount_client1" name="annual_amount_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="annual_amount_dependent1" name="annual_amount_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Number of Years Needed</td>
                        <td><input type="number" class="form-control" id="years_needed_client1" name="years_needed_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_needed_dependent1" name="years_needed_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Rate of Return (adjusted for inflation)</td>
                        <td><input type="number" class="form-control" id="net_rate_client1" name="net_rate_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net_rate_dependent1" name="net_rate_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>A. CAPITAL SUM REQUIRED ($)</td>
                        <td><input type="number" class="form-control" id="capital_sum_client1" name="capital_sum_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="capital_sum_dependent1" name="acapital_sum_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Medical Expenses ($)</td>
                        <td><input type="number" class="form-control" id="medical_expenses_client1" name="medical_expenses_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="medical_expenses_dependent1" name="medical_expenses_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Mortgage ($)</td>
                        <td><input type="number" class="form-control" id="mortgage_client1" name="mortgage_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="mortgage_dependent1" name="mortgage_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Loans/Others ($)</td>
                        <td><input type="number" class="form-control" id="loan_others_client1" name="loan_others_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="loan_others_dependent1" name="loan_others_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>B. TOTAL CASH OUTFLOW ($)</td>
                        <td><input type="number" class="form-control" id="total_cash_client1" name="total_cash_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_cash_dependent1" name="total_cash_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>TOTAL ( A + B ) ($)</td>
                        <td><input type="number" class="form-control" id="total_ab_client1" name="total_ab_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_ab_dependent1" name="total_ab_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Insurance Coverage on Disability ($)</td>
                        <td><input type="number" class="form-control" id="insurance_coverage_client1" name="insurance_coverage_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="insurance_coverage_dependent1" name="insurance_coverage_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Resources ($) (if any)</td>
                        <td><input type="number" class="form-control" id="existing_resources_client1" name="existing_resources_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing_resources_dependent1" name="existing_resources_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net_amount_client1" name="net_amount_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net_amount_dependent1" name="net_amount_dependent1" placeholder="$" value="" ></td>
                    </tr>
                     <tr>
                        <td>Additional Notes</td>
                        <td colspan="2"><textarea class="form-control" id="additional_group1" name="additional_group1"></textarea></td>
                    </tr>
                </tbody>
            </table>
             <table id="protection2-2" class="table table-content table-style1 protection-st protection-st2" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Disability Income/Expense</th>
                        <th>Dependent 2</th>
                        <th>Dependent 3</th>
                        <th>Dependent 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Annual Amount Needed ($)</td>
                        <td><input type="number" class="form-control" id="annual_amount_dependent2" name="annual_amount_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="annual_amount_dependent3" name="annual_amount_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="annual_amount_dependent4" name="annual_amount_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Number of Years Needed</td>
                        <td><input type="number" class="form-control" id="years_needed_dependent2" name="years_needed_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_needed_dependent3" name="years_needed_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_needed_dependent4" name="years_needed_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Rate of Return (adjusted for inflation)</td>
                        <td><input type="number" class="form-control" id="net_rate_dependent2" name="net_rate_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net_rate_dependent3" name="net_rate_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net_rate_dependent4" name="net_rate_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>A. CAPITAL SUM REQUIRED ($)</td>
                        <td><input type="number" class="form-control" id="capital_sum_dependent2" name="capital_sum_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="capital_sum_dependent3" name="acapital_sum_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="capital_sum_dependent4" name="acapital_sum_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Medical Expenses ($)</td>
                        <td><input type="number" class="form-control" id="medical_expenses_dependent2" name="medical_expenses_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="medical_expenses_dependent3" name="medical_expenses_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="medical_expenses_dependent4" name="medical_expenses_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Mortgage ($)</td>
                        <td><input type="number" class="form-control" id="mortgage_dependent2" name="mortgage_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="mortgage_dependent3" name="mortgage_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="mortgage_dependent4" name="mortgage_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Loans/Others ($)</td>
                        <td><input type="number" class="form-control" id="loan_others_dependent2" name="loan_others_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="loan_others_dependent3" name="loan_others_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="loan_others_dependent4" name="loan_others_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>B. TOTAL CASH OUTFLOW ($)</td>
                        <td><input type="number" class="form-control" id="total_cash_dependent2" name="total_cash_dependent2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_cash_dependent3" name="total_cash_dependent3" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_cash_dependent4" name="total_cash_dependent4" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>TOTAL ( A + B ) ($)</td>
                        <td><input type="number" class="form-control" id="total_ab_dependent2" name="total_ab_dependent2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_ab_dependent3" name="total_ab_dependent3" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_ab_dependent4" name="total_ab_dependent4" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Insurance Coverage on Disability ($)</td>
                        <td><input type="number" class="form-control" id="insurance_coverage_dependent2" name="insurance_coverage_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="insurance_coverage_dependent3" name="insurance_coverage_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="insurance_coverage_dependent4" name="insurance_coverage_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Resources ($) (if any)</td>
                        <td><input type="number" class="form-control" id="existing_resources_dependent2" name="existing_resources_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing_resources_dependent3" name="existing_resources_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing_resources_dependent4" name="existing_resources_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net_amount_dependent2" name="net_amount_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net_amount_dependent3" name="net_amount_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net_amount_dependent4" name="net_amount_dependent4" placeholder="$" value="" ></td>
                    </tr>
                     <tr>
                        <td>Additional Notes</td>
                        <td colspan="3"><textarea class="form-control" id="additional_group2" name="additional_group2"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <div class="nav-step">
                <button class="btn btn-primary mb-2">Back</button>
                <button type="submit" class="btn btn-primary mb-2">Next</button>
            </div>
        </form>      
    </div>
</div>
<div class="bottom-step">
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
