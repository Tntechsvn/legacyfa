@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Fund Long Term Care</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="blance-table" class="table table-content table-style1" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Long Term Care</th>
                        <th>Client 1</th>
                        <th>Dependent 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Desired Monthly Cash Payout ($)</td>
                        <td><input type="number" class="form-control" id="desired_monthly_client1" name="desired_monthly_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="desired_monthly_dependent1" name="desired_monthly_dependent1" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Name of Existing Long Term Care Insurance (if any)</td>
                        <td><input type="text" class="form-control" id="existing_long_client1" name="existing_long_client1" placeholder="Name of Existing Long Term Care Insurance" value="" ></td>
                        <td><input type="text" class="form-control" id="existing_long_dependent1" name="existing_long_dependent1" placeholder="Name of Existing Long Term Care Insurance" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Insurance Benefit Payout ($)</td>
                        <td><input type="number" class="form-control" id="existing_insurance_client1" name="existing_insurance_client1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing_insurance_dependent1" name="existing_insurance_dependent1" placeholder="$" value="" ></td>
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

