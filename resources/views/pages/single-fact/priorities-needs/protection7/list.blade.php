@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Cover for Personal Accident</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection7-1" class="table table-content table-style1 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th>Cover For Personal Accident</th>
                        <th>Client 1</th>
                        <th>Dependent 2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Amount Needed ($)</td>
                        <td><input type="number" class="form-control" id="amount_needed_client1" name="amount_needed_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="amount_needed_dependent1" name="amount_needed_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Personal Accident Benefits ($)</td>
                        <td><input type="number" class="form-control" id="existing_personal_client1" name="existing_personal_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing_personal_dependent1" name="existing_personal_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net_amount_client1" name="net_amount_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net_amount_dependent1" name="net_amount_dependent1" placeholder="$" value="" ></td>
                    </tr>
                     <tr>
                        <td>Additional Notes</td>
                        <td colspan="2"><textarea class="form-control" id="additional-dependent2" name="additional-dependent2"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <table id="protection7-2" class="table table-content table-style1 protection-st protection-st2" style="width:100%">
                <thead>
                    <tr>
                        <th>Cover For Personal Accident</th>
                        <th>Dependent 2</th>
                        <th>Dependent 3</th>
                        <th>Dependent 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Amount Needed ($)</td>
                        <td><input type="number" class="form-control" id="amount-needed-dependent2" name="amount-needed-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="amount-needed-dependent3" name="amount-needed-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="amount-needed-dependent4" name="amount-needed-dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Personal Accident Benefits ($)</td>
                        <td><input type="number" class="form-control" id="existing-personal-dependent2" name="existing-personal-dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing-personal-dependent3" name="existing-personal-dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing-personal-dependent4" name="existing-personal-dependent4" placeholder="$" value="" ></td>
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

