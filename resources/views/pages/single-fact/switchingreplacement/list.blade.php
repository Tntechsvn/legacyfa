@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 10 - Switching / Replacement</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection10" id='protection10' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="step10" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th colspan="2">Client 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="width: 50%">
                            <strong>1a. Have you withdrawn / surrendered / terminated, in part or or in full any existing insurance policy or investment product within the last 12 months? </strong>
                        </td>
                        <td>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input class="" type="radio" name="name-1a"  value="0" checked >
                                    <span class="checkmark-radio"></span>
                                </div>
                                No
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input class="" type="radio" name="name-1a"  value="1">
                                    <span class="checkmark-radio"></span>
                                </div>
                                Yes
                            </label>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="text-1a" name="text-1a" placeholder="" value="" >
                        </td>
                    </tr>
                    <tr>
                         <td>
                            <strong>1b. Are you switching / replacing in part or in full any existing insurance policy or investment product purchased from Legacy FA Pte Ltd or any other Financial Institution(s)? </strong>
                        </td>
                        <td>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input class="" type="radio" name="name-1b"  value="0" checked >
                                    <span class="checkmark-radio"></span>
                                </div>
                                No
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input class="" type="radio" name="name-1b"  value="1">
                                    <span class="checkmark-radio"></span>
                                </div>
                                Yes
                            </label>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                         <td>
                            <strong>2. Is the switch / replacement of insurance policy and/or investment product advised by the Representative? </strong>
                        </td>
                        <td>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input class="" type="radio" name="name-2"  value="0" checked >
                                    <span class="checkmark-radio"></span>
                                </div>
                                No
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input class="" type="radio" name="name-2"  value="1">
                                    <span class="checkmark-radio"></span>
                                </div>
                                Yes
                            </label>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                         <td>
                            <strong>3. What are the reason(s) for switching / replacing your insurance policy and/or investment product? </strong>
                        </td>
                        <td>
                            <input type="text" class="form-control" id="name-3" name="name-3" placeholder="" value="" >
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>4. Details of Original Product</strong></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            Company Name:
                        </td>
                        <td colspan="2">
                            <input type="text" class="form-control" id="name-41" name="name-41" placeholder="" value="" >
                        </td>
                    </tr>
                     <tr>
                        <td>
                            Type of Product:
                        </td>
                        <td colspan="2">
                            <input type="text" class="form-control" id="name-42" name="name-42" placeholder="" value="" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Premium / Investment Amount ($):
                        </td>
                        <td colspan="2">
                            <input type="text" class="form-control" id="name-43" name="name-43" placeholder="" value="" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Benefits Provided:
                        </td>
                        <td colspan="2">
                            <input type="text" class="form-control" id="name-43" name="name-43" placeholder="" value="" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Inception Date:
                        </td>
                        <td colspan="2">
                            <input type="date" class="form-control" id="name-43" name="name-43" placeholder="" value="" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Maturity Date:
                        </td>
                        <td colspan="2">
                            <input type="date" class="form-control" id="name-43" name="name-43" placeholder="" value="" >
                        </td>
                    </tr>
                    @php 
                        $listtext = array(
                            '5. Has the Representative explained to you that you may incur transaction costs without gaining any real benefit from the replacement?',
                            '6. Has the Representative explained to you that you may incur penalties for terminating any of your existing policies?',
                            '7. Has the Representative explained to you that the replacement plan may offer a lower level of benefit at a higher cost or same cost, or offer the same level of benefit at a higher cost? ',
                            'Has the Representative explained to you that the replacement plan may be less suitable and the terms and conditions may differ?',
                            '9.Has the Representative explained to you that you may not be insurable at standard terms?',
                            '10. Has the Representative explained to you that there may be other options available besides policy replacement (eg. Free switching facilities for investment policy)? ',
                            'I/we hereby give my/our consent to Legacy FA Pte Ltd to collect, use, and/or disclose my/our personal data for the purpose of performing financial needs analysis and planning, including providing financial advice, product recommendation and reviews of my/our financial plans. ',
                            'I/we hereby give my/our consent to Legacy FA Pte Ltd to contact me/us regarding any marketing and promotional materials on financial products and services.'
                        );
                    @endphp
                    @foreach( $listtext as $key=>$name )
                    <tr>
                        <td><strong>{{ $name }}</strong></td>
                        <td>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input class="" type="radio" name="name-php{{$key}}"  value="0" checked >
                                    <span class="checkmark-radio"></span>
                                </div>
                                No
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked style-radio-custom">
                                    <input class="" type="radio" name="name-php{{$key}}"  value="1">
                                    <span class="checkmark-radio"></span>
                                </div>
                                Yes
                            </label>
                        </td>
                        <td>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="2">
                            <textarea class="step10area" name="notestep10" placeholder="Additional Notes"></textarea>
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
        $('.time_updated').click(function(){
            var showtime = $(this).val();
            if(showtime == "1"){
                $(".time_updated_text").attr("readonly", true);
            }
            else{ 
                $(".time_updated_text").attr("readonly", false);
            }
        });
        $('.beneficiaries-opsl').click(function(){
            var showsl = $(this).val();
            if(showsl == "1"){
                $(".beneficiaries_select").hide();
            }else{ 
                $(".beneficiaries_select").show();
            }
        });
    });
</script>
@endsection
