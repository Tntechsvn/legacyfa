@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>PROTECTION - Income Protection Upon Death</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="protection1" id='protection1' class="" method="post" action="{{route('single_fact.priorities-needs.priotection_1', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <table id="blance-table" class="table table-content table-style1" style="width:100%">
                <thead>
                    <tr>
                        <th>Income Protection Upon Death</th>
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
                        <td>Final Expenses ($)</td>
                        <td><input type="number" class="form-control" id="final_expenses_client1" name="final_expenses_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="final_expenses_dependent1" name="final_expenses_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Emergency Fund ($)</td>
                        <td><input type="number" class="form-control" id="emergency_client1" name="emergency_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="emergency_dependent1" name="emergency_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Mortgage ($)</td>
                        <td><input type="number" class="form-control" id="mortgage_client1" name="mortgage_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="mortgage_dependent1" name="mortgage_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Personal Debts ($)</td>
                        <td><input type="number" class="form-control" id="personal_debts_client1" name="personal_debts_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="personal_debts_dependent1" name="personal_debts_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Others ($)</td>
                        <td><input type="number" class="form-control" id="others_client1" name="others_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="others_dependent1" name="others_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>B. TOTAL CASH OUTFLOW ($)</td>
                        <td><input type="number" class="form-control" id="total_cash_client1" name="total_cash_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-cash_dependent1" name="total_cash_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>TOTAL ( A + B ) ($)</td>
                        <td><input type="number" class="form-control" id="total_ab_client1" name="total_ab_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_ab_dependent1" name="total_ab_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Insurance Coverage on Deaths ($)</td>
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
                        <td><textarea class="form-control" id="additional-client1" name="additional-client1"></textarea></td>
                         <td><textarea class="form-control" id="additional-dependent1" name="additional-dependent1"></textarea></td>
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
            <li><a href="{{route('single_fact.balance.list', $infoPfr->id)}}">2</a></li>
            <li><a href="{{route('single_fact.cash_flow.list', $infoPfr->id)}}">3</a></li>
            <li><a href="{{route('portfolio.list', $infoPfr->id)}}">4</a></li>
            <li><a href="{{route('single_fact.risk_profile.list', $infoPfr->id)}}">5</a></li>
            <li><a href="javascript:;">6</a></li>
            <li><a href="javascript:;">7</a></li>
            <li><a href="javascript:;">8</a></li>
            <li><a href="javascript:;">9</a></li>
            <li><a href="javascript:;">10</a></li>
        </ul>
    </div>
</div>
@endsection

