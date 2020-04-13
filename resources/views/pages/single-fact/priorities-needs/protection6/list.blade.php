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
                        <td><input type="number" class="form-control" id="retirement-client1" name="retirement-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="retirement-dependent" name="retirement-dependent" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>No. of Years to Retirement</td>
                        <td><input type="number" class="form-control" id="years-retirement-client1" name="years-retirement-client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years-retirement-dependent" name="years-retirement-dependent" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Select Method of Calculation</td>
                        <td>
                            <select name="method-calculation-client1" id="method-calculation-client1" class="form-control" data-parsley-trigger="change" required="">
                                <option value="">Select</option>
                                <option value="Mr">Income Method</option>
                                <option value="Mrs">Expense Method</option>
                            </select>
                        </td>
                        <td>
                            <select name="method-calculation-dependent" id="method-calculation-dependent" class="form-control" data-parsley-trigger="change" required="">
                                <option value="">Select</option>
                                <option value="Mr">Income Method</option>
                                <option value="Mrs">Expense Method</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Annual Income ($)</td>
                        <td><input type="number" class="form-control" id="annual-income-client1" name="annual-income-client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="annual-income-dependent" name="annual-income-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Rate of Income Increment (%)</td>
                        <td><input type="number" class="form-control" id="increment-income-client1" name="increment-income-client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="increment-income-dependent" name="increment-income-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Income at Retirement Age ($)</td>
                        <td><input type="number" class="form-control" id="retirement-income-client1" name="retirement-income-client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="retirement-income-dependent" name="retirement-income-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>(%) Income Required at Retirement Age</td>
                        <td><input type="number" class="form-control" id="retirement-income-client1" name="retirement-age-client1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="retirement-income-dependent" name="retirement-income-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Retirement Expenses (in today's) ($)</td>
                        <td><input type="number" class="form-control" id="retirement-expenses-client1" name="retirement-expenses-client1" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="retirement-expenses-dependent" name="retirement-expenses-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Inflation Rate (%)</td>
                        <td><input type="number" class="form-control" id="inflation-rate-client1" name="inflation-rate-client1" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="inflation-rate-dependent" name="inflation-rate-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Expenses AT Retirement ($)</td>
                        <td><input type="number" class="form-control" id="expenses-at-client1" name="expenses-at-client1" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="expenses-at-dependent" name="expenses-at-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Years to Receive Retirement Income</td>
                        <td><input type="number" class="form-control" id="receive-retirement-client1" name="expenses-at-client1" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="receive-retirement-dependent" name="receive-retirement-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Net Rate of Return (adjusted for inflation)</td>
                        <td><input type="number" class="form-control" id="rate-return-client1" name="rate-return-client1" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="rate-return-dependent" name="rate-return-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Amount Needed at Retirement Age ($)</td>
                        <td><input type="number" class="form-control" id="amount-retirement-client1" name="amount-retirement-client1" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="amount-retirement-dependent" name="amount-retirement-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Future Value of Existing Resources for retirement($)</td>
                        <td><input type="number" class="form-control" id="future-existing-client1" name="future-existing-client1" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="future-existing-dependent" name="future-existing-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="amount-required-client1" name="amount-required-client1" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="amount-required-dependent" name="amount-required-dependent" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="2"><textarea class="form-control" id="additional-client1" name="additional-client1"></textarea></td>
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

