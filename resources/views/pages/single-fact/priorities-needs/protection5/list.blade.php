@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>SAVINGS & INVESTMENT - Fund Medium to Long Term Savings / Investment Needs / Other Goals</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection5-1" class="table table-content table-style1 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Medium to Long Term Savings</th>
                        <th>Client 1</th>
                        <th>Dependent 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Objective of Goal ($)</td>
                        <td><input type="number" class="form-control" id="objective_client1" name="objective_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="objective_dependent1" name="objective_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Goal Description</td>
                        <td><input type="text" class="form-control" id="description_client1" name="description_client1" placeholder="" value="" ></td>
                        <td><input type="text" class="form-control" id="description_dependent1" name="description_dependent1" placeholder="" value="" ></td>
                    </tr>
                    <tr>
                        <td>Years to Reach Goal</td>
                        <td><input type="number" class="form-control" id="years_client1" name="years_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_dependent1" name="years_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Future Value of Existing Resources for Goal ($)</td>
                        <td><input type="number" class="form-control" id="future_client1" name="future_client1" placeholder="$" value="" ></td>3333
                        <td><input type="number" class="form-control" id="future_dependent1" name="future_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net_amount_client1" name="net_amount_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net_amount_dependent1" name="net_amount_dependent1" placeholder="$" value="" ></td>
                    </tr>
                     <tr>
                        <td>Additional Notes</td>
                        <td colspan="2"><textarea class="form-control" id="additional_group1" name="additional_group2"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <table id="protection5-1" class="table table-content table-style1 protection-st protection-st2" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Medium to Long Term Savings</th>
                        <th>Dependent 2</th>
                        <th>Dependent 3</th>
                        <th>Dependent 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Objective of Goal ($)</td>
                        <td><input type="number" class="form-control" id="objective_dependent2" name="objective_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="objective_dependent3" name="objective_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="objective_dependent4" name="objective_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Goal Description</td>
                        <td><input type="text" class="form-control" id="description_dependent2" name="description_dependent2" placeholder="" value="" ></td>
                        <td><input type="text" class="form-control" id="description_dependent3" name="description_dependent3" placeholder="" value="" ></td>
                        <td><input type="text" class="form-control" id="description_dependent4" name="description_dependent4" placeholder="" value="" ></td>
                    </tr>
                    <tr>
                        <td>Years to Reach Goal</td>
                        <td><input type="number" class="form-control" id="years_dependent2" name="years_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_dependent3" name="years_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_dependent4" name="years_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Future Value of Existing Resources for Goal ($)</td>
                        <td><input type="number" class="form-control" id="future_dependent2" name="future_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future_dependent3" name="future_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future_dependent4" name="future_dependent4" placeholder="$" value="" ></td>
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

