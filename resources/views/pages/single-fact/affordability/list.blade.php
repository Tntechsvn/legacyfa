@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 8 - Affordability</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='affordability' class="" method="post" action="" data-parsley-validate>
            @csrf
            <p class="note-alert-step7">Please rate all categories according to your priority:</p>
            <table id="affordability-1" class="table table-content table-bordered table-style2 protection-st affordability50">
                <tbody>
                    <tr>
                        <td><strong>Total Annual Income ($):</strong></td>
                        <td>
                            <input type="number" class="form-control" id="total_annual_income" name="total_annual_income" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Total Annual Expenses ($):</strong></td>
                        <td>
                            <input type="number" class="form-control" id="total_annual_expenses" name="total_annual_expenses" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Annual Surplus / Shortfall ($): </strong></td>
                        <td>
                            <input type="number" class="form-control" id="annual_surplus_shortfall" name="annual_surplus_shortfall" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                </tbody>
            </table>
            <table id="affordability-2" class="table table-content table-bordered table-style2 protection-st affordability50">
                <tbody>
                    <tr>
                        <td><strong>Total Assets ($):</strong></td>
                        <td>
                            <input type="number" class="form-control" id="total_assets" name="total_assets" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Total Liabilities ($):</strong></td>
                        <td>
                            <input type="number" class="form-control" id="total_liabilities" name="total_liabilities" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Net Worth ($): </strong></td>
                        <td>
                            <input type="number" class="form-control" id="net_worth" name="net_worth" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="note-alert-step7">Payor Details</p>
            <table id="affordability-3" class="table table-content table-bordered table-style2 protection-st affordability50 custom-step8">
                <tbody>
                    <tr>
                        <td><strong>Payor for client 1:</strong><span>*</span></td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input class="payor_for_client" type="radio" name="payor_for_client" value="0" >
                                    </div>
                                    Self
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input class="payor_for_client" type="radio" name="payor_for_client" value="1" >
                                    </div>
                                    Others
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Payor Name:</strong></td>
                        <td>
                            <input type="text" class="form-control" id="payor_name" name="payor_name" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Payor Occupation:</strong></td>
                        <td>
                            <input type="text" class="form-control" id="payor_occupation" name="payor_occupation" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                </tbody>
            </table>
            <table id="affordability-4" class="table table-content table-bordered table-style2 protection-st affordability50 custom-step8">
                <tbody>
                    <tr>
                        <td><strong>Payor Relationship to Client 1:</strong><span>*</span></td>
                        <td>
                            <input type="text" class="form-control" id="payor_relationship" name="payor_relationship" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Payor NRIC / Passport No:</strong></td>
                        <td>
                            <input type="text" class="form-control" id="payor_nric" name="payor_nric" placeholder="$" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Payor Annual Income Range (S$):</strong></td>
                        <td>
                            <select disabled="disabled" name="income_range" id="income_range" class="form-control">
                                <option value="">Select Payor Annual Income Range</option>
                                <option value="0">0-29,999</option>
                                <option value="30">30,000-49,999</option>
                                <option value="50">50,000-99,999</option>
                                <option value="100">100,000-149,999</option>
                                <option value="150">150,000-299,999</option>
                                <option value="300">300,000 &amp; above</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <p class="note-alert-step7">Payor Details</p>
            <table id="affordability-5" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <td></td>
                        <td>Annual Amount ($)</td>
                        <td>Single Amount ($)</td>
                        <td>Source of Funds</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $arr = array(
                            'Cash',
                            'SRS',
                            'CPF OA',
                            'CPF Medisave',
                            'CPF SA'
                        );
                        $key_data = ['cash', 'srs', 'cpf_oa', 'cpf_medisave', 'cpf_sa'];
                    @endphp
                    @foreach( $arr as $key=>$name )
                        <tr>
                            <td><strong>{{ $name }}</strong></td>
                            <td>
                                <input type="number" class="form-control" id="annual_cash" name="annual_cash" placeholder="$" value="">
                            </td>
                            <td>
                                <input type="number" class="form-control" id="single_cash" name="single_cash" placeholder="$" value="">
                            </td>
                            <td>
                                <input type="text" class="form-control" id="source_of_funds_cash" name="source_of_funds_cash" placeholder="" value="">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="">
                Is the budget set aside a substantial portion of the Payor's assets or surplus? If the answer is "Yes", a potential risk of not being able to continue paying premiums in the future may occur. Budget is considered substantial if it is more than 50% of assets or surplus.* 
                <div class="custom-input-layout-row">
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="fas fa-check-circle"></i>
                            <input class="action-reasons" type="radio" name="action-reasons" value="0" >
                        </div>
                        No
                    </label>
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="far fa-circle"></i>
                            <input class="action-reasons" type="radio" name="action-reasons" value="1" >
                        </div>
                        Yes (Please provide reasons for setting aside a substantial budget :) 
                    </label>
                </div>
                <div class="">
                    <textarea name="reasons" id="reasons" readonly=""></textarea>
                </div>
            </div>     
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
            @if(!isset($infoPfr))
            @else
                @include('pages.navigation', ['id' => $infoPfr->id])
            @endif
        </ul>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.action-reasons').click(function(){
         var showreasons = $(this).val();
         if(showreasons == "1"){
            $("#reasons").attr("readonly", false);
         }
        else{ 
            $("#reasons").attr("readonly", true);
         }
       });
        $('.payor_for_client').click(function(){
         var showsl = $(this).val();
         if(showsl == "1"){
            $(".custom-step8 input[type=text]").attr("readonly", false);
            $('.custom-step8 select').prop("disabled", false);
         }
        else{ 
            $(".custom-step8 input[type=text]").attr("readonly", true);
            $('.custom-step8 select').prop("disabled", true);
         }
       });
    });
</script>
@endsection

