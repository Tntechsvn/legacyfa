@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>single Annual Cashflow:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="title-balance-style">
            <h3>INCOME</h3>
            <h4>Amount ($)</h4>
        </div>
        <table id="blance-table" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Monthly ($)</th>
                    <th>Annual ($)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Gross Income</td>
                    <td><input type="number" class="form-control" id="gross-income-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="gross-income-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Additional Wages (eg. Bonus, Leave Pay)</td>
                    <td></td>
                    <td><input type="number" class="form-control" id="additional-wages" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Less: Employee's CPF Contribution</td>
                    <td><input type="number" class="form-control" id="employee-cpf-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="employee-cpf-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Others <input type="tel" class="form-control" id="others-input" name="others-input" placeholder="Please specity:" value=""><br/>
                    <i>(eg. Rent, Dividend, Interest, Profits)</i>
                    </td>
                    <td><input type="number" class="form-control" id="others-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="others-a" name="others-input" placeholder="0" value=""></td>
                </tr>
            </tbody>
        </table>
        <div class="title-balance-style">
            <h3>EXPENSE</h3>
            <h4>Amount ($)</h4>
        </div>
        <table id="assets-table" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th></th>
                    <th>Monthly ($)</th>
                    <th>Annual ($)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Household<br/>
                        <i>(Food, Utilities, Maid)</i>
                    </td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Transportation</td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Telco<br/>
                        <i>(Mobile, Broadband/Internet)</i>
                    </td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Dependant<br/>
                        <i>(School Fees, Child Care, Allowance)</i>
                    </td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Personal<br/>
                        <i>(Entertainment, Clothing)</i>
                    </td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Luxury<br/>
                        <i>(Holidays, Club Memberships)</i>
                    </td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Insurance Premiums</td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Loan Repayments<br/>
                        <i>(Housing, Vehicle, Renovation, Education,Credit Card, Personal Loans, Overdrafts)</i>
                    </td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Others <input type="tel" class="form-control" id="others-input" name="others-input" placeholder="Please specity:" value=""><br/>
                    <i>(eg. Rent, Dividend, Interest, Profits)</i>
                    </td>
                    <td><input type="number" class="form-control" id="others-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="others-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Total Income</td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Total Expense</td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Surplus / Shortfall</td>
                    <td><input type="number" class="form-control" id="household-m" name="others-input" placeholder="0" value=""></td>
                    <td><input type="number" class="form-control" id="household-a" name="others-input" placeholder="0" value=""></td>
                </tr>
                <tr>
                    <td>Do you have any plans or are there any factors within the next 12 months which may significantly increase or decrease your current income and expenditure position (eg, Receiving an inheritance or borrowing money for investment or purchase of a holiday home, etc.)?</td>
                    <td><input type="radio" name="" value="0" checked>Yes</td>
                    <td><input type="radio" name="" value="1">No </td>
                </tr>

            </tbody>
        </table>
        <button class="btn btn-primary mb-2">Back</button>
        <button type="submit" class="btn btn-primary mb-2">Next</button>
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
