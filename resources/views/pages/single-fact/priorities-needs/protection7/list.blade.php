@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Cover for Personal Accident</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection7-1" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
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
                        <td colspan="2"><textarea class="form-control" id="additional_group1" name="additional_group1"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <table id="protection7-2" class="table table-content table-bordered table-style2 protection-st protection-st2" style="width:100%">
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
                        <td><input type="number" class="form-control" id="amount_needed_dependent2" name="amount_needed_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="amount_needed_dependent3" name="amount_needed_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="amount_needed_dependent4" name="amount_needed_dependent4" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Less: Existing Personal Accident Benefits ($)</td>
                        <td><input type="number" class="form-control" id="existing_personal_dependent2" name="existing_personal_dependent2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing_personal_dependent3" name="existing_personal_dependent3" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="existing_personal_dependent4" name="existing_personal_dependent4" placeholder="$" value="" ></td>
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
                <button class="btn btn-primary mb-2 style-button1">Back</button>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
<div class="bottom-step">
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

