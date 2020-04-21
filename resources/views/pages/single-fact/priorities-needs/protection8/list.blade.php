@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 7 - Priorities & Needs Rating</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">7.8 - Fund Long Term Care</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection8-1" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
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
                        <td colspan="2"><textarea class="form-control" id="additional_group1" name="additional_group1"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <table id="protection8-2" class="table table-content table-bordered table-style2 protection-st2" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Long Term Care</th>
                        <th>Dependent 2</th>
                        <th>Dependent 3</th>
                        <th>Dependent 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Desired Monthly Cash Payout ($)</td>
                        <td><input type="number" class="form-control" id="desired_monthly_dependent2" name="desired_monthly_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="desired_monthly_dependent3" name="desired_monthly_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="desired_monthly_dependent4" name="desired_monthly_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Name of Existing Long Term Care Insurance (if any)</td>
                        <td><input type="text" class="form-control" id="existing_long_dependent2" name="existing_long_dependent2" placeholder="Name of Existing Long Term Care Insurance" value="" ></td>
                        <td><input type="text" class="form-control" id="existing_long_dependent3" name="existing_long_dependent3" placeholder="Name of Existing Long Term Care Insurance" value="" ></td>
                        <td><input type="text" class="form-control" id="existing_long_dependent4" name="existing_long_dependent4" placeholder="Name of Existing Long Term Care Insurance" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Insurance Benefit Payout ($)</td>
                        <td><input type="number" class="form-control" id="existing_insurance_dependent2" name="existing_insurance_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing_insurance_dependent3" name="existing_insurance_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing_insurance_dependent4" name="existing_insurance_dependent4" placeholder="$" value="" ></td>
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
            <div class="nav-step">
                <a href="javascript:;" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
@include('pages.navigation', ['id' => $infoPfr->id])
@endsection

