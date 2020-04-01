@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Balance Sheet:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="blance-table" class="table table-content table-style1" style="width:100%">
            <tbody>
                <tr>
                    <td>Total Assets:</td>
                    <td>$0</td>
                </tr>
                <tr>
                    <td>Total Liabilities:</td>
                    <td>$0</td>
                </tr>
                <tr>
                    <td>Net Worth:</td>
                    <td>$0</td>
                </tr>
            </tbody>
        </table>
        <div class="title-balance-style">
            <h3>ASSETS</h3>
            <h4>Amount ($)</h4>
        </div>
        <table id="assets-table" class="table table-content table-style1" style="width:100%">
            <tbody>
                <tr>
                    <td>Property<br/>
                        <i>(Residence, Investment, Others)</i>
                    </td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Investments<br/>
                        <i>(Bonds, Unit Trusts, Stocks & Shares)</i>
                    </td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Savings<br/>
                        <i>(Bank Savings Account, Fixed Deposits)</i>
                    </td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>CPF<br/>
                        <i>(Ordinary Account, Special Account, Medisave)</i>
                    </td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Insurance Cash Value</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>SRS (Account Balance)</td>
                    <td><input type="number" class="form-control" id="srs-number" name="others-input" placeholder="Please specity:" value=""></td>
                </tr>
                <tr>
                    <td>Others <input type="tel" class="form-control" id="others-input" name="others-input" placeholder="Please specity:" value=""></td>
                    <td><input type="number" class="form-control" id="others-number" name="others-input" placeholder="Please specity:" value=""></td>
                </tr>
            </tbody>
        </table>
        <div class="title-balance-style">
            <h3>LIABILITIES</h3>
            <h4>Amount ($)</h4>
        </div>
        <table id="liabilities-table" class="table table-content table-style1" style="width:100%">
            <tbody>
                <tr>
                    <td>Housing</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Vehicle</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Renovation</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Education</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Credit Card</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Personal Loans</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Overdrafts</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Others</td>
                    <td>0</td>
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
