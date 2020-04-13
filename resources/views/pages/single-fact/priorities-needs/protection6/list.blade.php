@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>SAVINGS & INVESTMENT - Retirement Lifestyle</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="{{route('single_fact.priorities-needs.priotection_1', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <table id="protection6-1" class="table table-content table-style1 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Retirement Lifestyle</th>
                        <th>Client 1</th>
                        <th>Dependent(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Expected Retirement Age</td>
                        <td><input type="number" class="form-control" id="retirement_client1" name="retirement_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="retirement_dependent1" name="retirement_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>No. of Years to Retirement</td>
                        <td><input type="number" class="form-control" id="years_retirement_client1" name="years_retirement_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_retirement_dependent1" name="years_retirement_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Select Method of Calculation</td>
                        <td>
                            <select name="method_calculation_client1" id="method_calculation_client1" class="form-control" data-parsley-trigger="change" required="">
                                <option value="">Select</option>
                                <option value="IM">Income Method</option>
                                <option value="EM">Expense Method</option>
                            </select>
                        </td>
                        <td>
                            <select name="method_calculation_dependent1" id="method_calculation_dependent1" class="form-control" data-parsley-trigger="change" required="">
                                <option value="">Select</option>
                                <option value="IM">Income Method</option>
                                <option value="EM">Expense Method</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Annual Income ($)</td>
                        <td><input type="number" class="form-control" id="annual-income-client1" name="annual-income-client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="annual_income_dependent1" name="annual-income-dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Rate of Income Increment (%)</td>
                        <td><input type="number" class="form-control" id="increment_income_client1" name="increment_income_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="increment_income_dependent1" name="increment_income_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Income at Retirement Age ($)</td>
                        <td><input type="number" class="form-control" id="retirement_income_client1" name="retirement_income_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="retirement_income_dependent1" name="retirement_income_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>(%) Income Required at Retirement Age</td>
                        <td><input type="number" class="form-control" id="retirement_age_client1" name="retirement_age_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="retirement_age_dependent1" name="retirement_age_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Retirement Expenses (in today's) ($)</td>
                        <td><input type="number" class="form-control" id="retirement_expenses_client1" name="retirement_expenses_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="retirement_expenses_dependent1" name="retirement_expenses_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Inflation Rate (%)</td>
                        <td><input type="number" class="form-control" id="inflation_rate_client1" name="inflation_rate_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="inflation_rate_dependent1" name="inflation_rate_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Expenses AT Retirement ($)</td>
                        <td><input type="number" class="form-control" id="expenses_at_client1" name="expenses_at_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="expenses_at_dependent1" name="expenses_at_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Years to Receive Retirement Income</td>
                        <td><input type="number" class="form-control" id="receive_retirement_client1" name="receive_retirement_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="receive_retirement_dependent1" name="receive_retirement_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Net Rate of Return (adjusted for inflation)</td>
                        <td><input type="number" class="form-control" id="rate_return_client1" name="rate_return_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="rate_return_dependent1" name="rate_return_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Amount Needed at Retirement Age ($)</td>
                        <td><input type="number" class="form-control" id="amount_retirement_client1" name="amount_retirement_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="amount_retirement_dependent1" name="amount_retirement_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Future Value of Existing Resources for retirement($)</td>
                        <td><input type="number" class="form-control" id="future_existing_client1" name="future_existing_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future_existing_dependent1" name="future_existing_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="amount_required_client1" name="amount_required_client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="amount_required_dependent1" name="amount_required_dependent1" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="2"><textarea class="form-control" id="additional_group1" name="additional_group1"></textarea></td>
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

