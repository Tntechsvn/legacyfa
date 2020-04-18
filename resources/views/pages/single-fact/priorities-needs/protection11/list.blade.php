@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 7 - Priorities & Needs Rating</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">7.11 - OTHER INSURANCE(S)</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection10-1" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Client 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2"><strong>Travel Insurance</strong></td>
                    </tr>
                    <tr>
                        <td>Frequency of Travel</td>
                        <td>
                           <input type="text" class="form-control" id="frequency_client1" name="frequency_client1" placeholder="Frequency of Travel" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td>Type of Travel Insurance Covered</td>
                        <td>
                            <select name="type_travel_client1" id="type_travel_client1" class="form-control" data-parsley-trigger="change" required="">
                                <option value="">Select</option>
                                <option value="single">Single Trip</option>
                                <option value="plan">Annual Plan</option>
                                <option value="moment">None at the moment</option>
                            </select>
                        </td>    
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Motor Insurance</strong></td>
                    </tr>
                    <tr>
                        <td>Company Name</td>
                        <td>
                            <input type="text" class="form-control" id="company_client1" name="company_client1" placeholder="Frequency of Travel" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td>Renewal Date</td>
                        <td>
                            <div class="select-td50">
                                <span class="title-select-td">Year</span>
                                <select name="year_client1" id="year_client1" class="form-control" data-parsley-trigger="change" required="">
                                    <option value="">Select</option>
                                    @php
                                        for ($i = 1990; $i <= 2050; $i++) {
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                    @endphp
                                </select>
                            </div>
                            <div class="select-td50">
                                <span class="title-select-td">Month</span>
                                <select name="month_client1" id="month_client1" class="form-control" data-parsley-trigger="change" required="">
                                    <option value="">Select</option>
                                    @php
                                        for ($i = 1; $i <= 12; $i++) {
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                    @endphp
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Would you be interested in knowing more and/or receiving quotes on the following range of insurance(s)?</td>
                    </tr>
                    <tr>
                        <td><strong>Mortgage Insurance</strong></td>
                        <td>
                            <select name="mortgage_insurance_client1" id="mortgage_insurance_client1" class="form-control" data-parsley-trigger="change" required="">
                                <option value="">Select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Group Insurance</strong><br/>
                            <i>(Company Employee Benefits)</i>
                        </td>
                        <td>
                            <select name="group_insurance_client1" id="group_insurance_client1" class="form-control" data-parsley-trigger="change" required="">
                                <option value="">Select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </td>
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
<div class="bottom-step">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
        <ul>
            @if(!isset($infoPfr))
            @else
                @include('pages.navigation', ['id' => $infoPfr->id])
            @endif
        </ul>
    </div>
</div>
@endsection
