@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>PROTECTION - Fund Disability Income / Expenses</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                        <td><input type="number" class="form-control" id="annual-amount-client1" name="annual-amount-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="annual-amount-dependent1" name="annual-amount-dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Number of Years Needed</td>
                        <td><input type="number" class="form-control" id="years-needed-client1" name="years-needed-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years-needed-dependent1" name="years-needed-dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Rate of Return (adjusted for inflation)</td>
                        <td><input type="number" class="form-control" id="net-rate-client1" name="net-rate-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-rate-dependent1" name="net-rate-dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>A. CAPITAL SUM REQUIRED ($)</td>
                        <td><input type="number" class="form-control" id="capital-sum-client1" name="capital-sum-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="capital-sum-dependent1" name="acapital-sum-dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Medical Expenses ($)</td>
                        <td><input type="number" class="form-control" id="medical-expenses-client1" name="medical-expenses-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="medical-expenses-dependent1" name="medical-expenses-dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Mortgage ($)</td>
                        <td><input type="number" class="form-control" id="mortgage-client1" name="mortgage-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="mortgage-dependent1" name="mortgage-dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Loans/Others ($)</td>
                        <td><input type="number" class="form-control" id="loan-others-client1" name="loan-others-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="loan-others-dependent1" name="loan-others-dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>B. TOTAL CASH OUTFLOW ($)</td>
                        <td><input type="number" class="form-control" id="total-cash-client1" name="total-cash-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="total-cash-dependent1" name="total-cash-dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>TOTAL ( A + B ) ($)</td>
                        <td><input type="number" class="form-control" id="total-ab-client1" name="total-ab-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="total-ab-dependent1" name="total-ab-dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Insurance Coverage on Disability ($)</td>
                        <td><input type="number" class="form-control" id="insurance-coverage-client1" name="insurance-coverage-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="insurance-coverage-dependent1" name="insurance-coverage-dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Resources ($) (if any)</td>
                        <td><input type="number" class="form-control" id="existing-resources-client1" name="existing-resources-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing-resources-dependent1" name="existing-resources-dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net-amount-client1" name="net-amount-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-amount-dependent1" name="net-amount-dependent1" placeholder="$" value="" ></td>
                    </tr>
                     <tr>
                        <td>Additional Notes</td>
                        <td colspan="2"><textarea class="form-control" id="additional-client1" name="additional-client1"></textarea></td>
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
                        <td><input type="number" class="form-control" id="annual-amount-dependent2" name="annual-amount-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="annual-amount-dependent3" name="annual-amount-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="annual-amount-dependent4" name="annual-amount-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Number of Years Needed</td>
                        <td><input type="number" class="form-control" id="years-needed-dependent2" name="years-needed-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years-needed-dependent3" name="years-needed-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years-needed-dependent4" name="years-needed-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Rate of Return (adjusted for inflation)</td>
                        <td><input type="number" class="form-control" id="net-rate-dependent2" name="net-rate-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-rate-dependent3" name="net-rate-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-rate-dependent4" name="net-rate-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>A. CAPITAL SUM REQUIRED ($)</td>
                        <td><input type="number" class="form-control" id="capital-sum-dependent2" name="capital-sum-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="capital-sum-dependent3" name="acapital-sum-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="capital-sum-dependent4" name="acapital-sum-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Medical Expenses ($)</td>
                        <td><input type="number" class="form-control" id="medical-expenses-dependent2" name="medical-expenses-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="medical-expenses-dependent3" name="medical-expenses-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="medical-expenses-dependent4" name="medical-expenses-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Mortgage ($)</td>
                        <td><input type="number" class="form-control" id="mortgage-dependent2" name="mortgage-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="mortgage-dependent3" name="mortgage-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="mortgage-dependent4" name="mortgage-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Loans/Others ($)</td>
                        <td><input type="number" class="form-control" id="loan-others-dependent2" name="loan-others-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="loan-others-dependent3" name="loan-others-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="loan-others-dependent4" name="loan-others-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>B. TOTAL CASH OUTFLOW ($)</td>
                        <td><input type="number" class="form-control" id="total-cash-dependent2" name="total-cash-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="total-cash-dependent3" name="total-cash-dependent3" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-cash-dependent4" name="total-cash-dependent4" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>TOTAL ( A + B ) ($)</td>
                        <td><input type="number" class="form-control" id="total-ab-dependent2" name="total-ab-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="total-ab-dependent3" name="total-ab-dependent3" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-ab-dependent4" name="total-ab-dependent4" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Insurance Coverage on Disability ($)</td>
                        <td><input type="number" class="form-control" id="insurance-coverage-dependent2" name="insurance-coverage-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="insurance-coverage-dependent3" name="insurance-coverage-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="insurance-coverage-dependent4" name="insurance-coverage-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Resources ($) (if any)</td>
                        <td><input type="number" class="form-control" id="existing-resources-dependent2" name="existing-resources-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing-resources-dependent3" name="existing-resources-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing-resources-dependent4" name="existing-resources-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net-amount-dependent2" name="net-amount-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-amount-dependent3" name="net-amount-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-amount-dependent4" name="net-amount-dependent4" placeholder="$" value="" ></td>
                    </tr>
                     <tr>
                        <td>Additional Notes</td>
                        <td colspan="3"><textarea class="form-control" id="additional-dependent2" name="additional-dependent2"></textarea></td>
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
