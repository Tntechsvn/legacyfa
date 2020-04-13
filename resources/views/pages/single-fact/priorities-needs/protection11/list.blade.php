@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Estate Planning</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection10-1" class="table table-content table-style1 protection-st" style="width:100%">
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
                           <input type="text" class="form-control" id="frequency-client1" name="frequency-client1" placeholder="Frequency of Travel" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td>Type of Travel Insurance Covered</td>
                        <td>
                            <select name="title" id="title" class="form-control" data-parsley-trigger="change" required="">
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
                            <input type="text" class="form-control" id="company-client1" name="company-client1" placeholder="Frequency of Travel" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td>Renewal Date</td>
                        <td>
                            <div class="select-td50">
                                <span class="title-select-td">Year</span>
                                <select name="year-client" id="year-client" class="form-control" data-parsley-trigger="change" required="">
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
                                <select name="month-client" id="month-client" class="form-control" data-parsley-trigger="change" required="">
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
                            <select name="mortgage-insurance-client" id="mortgage-insurance-client" class="form-control" data-parsley-trigger="change" required="">
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
                            <select name="group-insurance-client" id="group-insurance-client" class="form-control" data-parsley-trigger="change" required="">
                                <option value="">Select</option>
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="nav-step">
                <button class="btn btn-primary mb-2 style-button1">Back</button>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
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

