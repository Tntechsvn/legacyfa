@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Cash Flow:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="" data-parsley-validate>
            @csrf
            <div class="form-group">
                <p>Would you like your cash flow to be taken into consideration for the Needs Analysis and Recommendation(s)?</p>
                <label class="radio-hoz">
                    <input type="radio" name="state" value="0">Yes (Please fill in the details below)
                </label>
                <label class="radio-hoz">
                    <input type="radio" name="state" value="1">No (Please state reason):
                </label>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="reason" name="reason" placeholder="Please state reason:" ></textarea>
            </div>
            <h3> Annual Income</h3>
            <table id="annual-income-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Annual Gross Income</td>
                        <td><input type="number" class="form-control" id="gross-income" name="gross-income" placeholder="$" value=""></td>
                    </tr>
                    <tr>
                        <td>Additional Wages<br/>
                            <i>(eg. Bonus, Leave Pay)</i>
                        </td>
                        <td><input type="number" class="form-control" id="wages-income" name="awages-income" placeholder="$" value=""></td>
                    </tr>
                    <tr>
                        <td>Less: Employee's CPF Contribution</td>
                        <td><input type="number" class="form-control" id="employee-income" name="employee-income" placeholder="$" value=""></td>
                    </tr>
                    <tr>
                        <td>Others, Please specify:Rental<br/>
                            <i>(eg. Rent, Dividend, Interest, Profits)</i>
                        </td>
                        <td><input type="number" class="form-control" id="orther-income" name="employee-income" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td><h4>Total Annual Income:</h4></td>
                        <td><input type="number" class="form-control" id="total-income" name="total-income" placeholder="Total" value="" readonly=""></td>
                    </tr>
                </tbody>
            </table>
            <h3>Annual Expenses</h3>
            <table id="annual-expenses-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Household</td>
                        <td><input type="number" class="form-control" id="household-expenses" name="household-expenses" placeholder="$" value=""></td>
                    </tr>
                    <tr>
                        <td>Transportation</i>
                        </td>
                        <td><input type="number" class="form-control" id="transportation-expenses" name="transportation-expenses" placeholder="$" value=""></td>
                    </tr>
                    <tr>
                        <td>Telco</td>
                        <td><input type="number" class="form-control" id="telco-expenses" name="telco-expenses" placeholder="$" value=""></td>
                    </tr>
                    <tr>
                        <td>Dependants</td>
                        <td><input type="number" class="form-control" id="dependants-expenses" name="dependants-expenses" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Personal</td>
                        <td><input type="number" class="form-control" id="personal-expenses" name="personal-expenses" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Luxury</td>
                        <td><input type="number" class="form-control" id="luxury-expenses" name="luxury-expenses" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Insurance Premiums</td>
                        <td><input type="number" class="form-control" id="premiums-expenses" name="premiums-expenses" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Loan Repayments</td>
                        <td><input type="number" class="form-control" id="repayments-expenses" name="repayments-expenses" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Others, Please specify:</td>
                        <td><input type="number" class="form-control" id="orther-expenses" name="orther-expenses" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td><h4>Total Annual Expenses:</h4></td>
                        <td><input type="number" class="form-control" id="total-expenses" name="total-expenses" placeholder="Total" value="" readonly=""></td>
                    </tr>
                </tbody>
            </table>
            <h3>Annual Net Cashflow</h3>
            <table id="annual-expenses-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td><h4>Annual Surplus/Shortfall:</h4></td>
                        <td><input type="number" class="form-control" id="total-annual" name="total-annual" placeholder="Total" value="" readonly=""></td>
                    </tr>
                </tbody>
            </table>
            <table id="annual-expenses-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    <tr>
                        <td>Do you have any plans or are there any factors within the next 12 months which may significantly increase or decrease your current income and expenditure position (eg. Receiving an inheritance or borrowing money for investment or purchase of a holiday home, etc.)?</td>
                        <td>
                            <label class="radio-hoz">
                                 <input type="radio" name="state" value="0">No 
                            </label>
                            <label class="radio-hoz">
                                <input type="radio" name="state" value="1">Yes (Please state details)
                            </label>
                            <textarea class="form-control" id="details" name="details"></textarea>
                        </td>
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