@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 5 - Risk Profile:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="{{route('single_fact.risk_profile.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            @php $questions = json_decode(json_encode(config('constants.Risk_Profile_Questionnaire')));

            $dataRiskProfile = json_decode($infoPfr->dataRiskProfile, true);
            @endphp
            <table id="annual-income-table" class="table table-content table-bordered table-style2 td50" style="width:100%">
                <tbody>
                    @foreach($questions as $key_question=>$q)
                    <tr>
                        <td><strong>Q{{$key_question+1}}) {{$q->name}}</strong></td>
                        <td>
                            @foreach($q->answers as $key_answer=>$a)
                            <div class="form-check list-qa">
                                <div class="style-checked style-radio-custom">
                                    <input class="form-check-input" type="radio" name="q_{{$key_question+1}}" value="{{$key_answer}}" <?php
                                    if(isset($infoPfr) && $dataRiskProfile){
                                        foreach($dataRiskProfile[0] as $key=>$val){
                                            if($key == "q_".($key_question+1) && $val == $key_answer){
                                                echo "checked";
                                            }
                                        }
                                    }?> >
                                    <span class="checkmark-radio"></span>
                                </div>
                                <!-- <label class="form-check-label" for="gridRadios2"> -->
                                    {{$a}}
                                <!-- </label> -->
                            </div>
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="custom-bg-text">
                Risk Profile Assessment Outcome:<br/>
                <span class="text-custom-show">
                Capital Preservation.
                </span>
            </div>
            <div class="custom-bg-text">
                <div class="left-checkbox width50">
                    <input class="form-check-input form-check-checkbox" type="checkbox" name="state" id="state" value="1" @if($dataRiskProfile[0]['reason'] != ""){{'checked'}}@endif>
                    <label class="form-check-label" for="state">N/A</label>
                </div>
                <div class="right-checkbox width50 showinput">
                    <label for="details_home">Reason</label>
                    <div class="custom-input-layout-row">
                        <input type="text" class="form-control" id="reason" name="reason" placeholder="" value="{{$dataRiskProfile[0]['reason']}}">
                    </div>
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
        if($('.form-check-checkbox').is(':checked')){
                $('.showinput').show();
                $('.text-custom-show').hide();
                $('input[type=radio]').prop("disabled", true);

            }else{
                 $('.showinput').hide();
                 $('.text-custom-show').show();
                 $('input[type=radio]').prop("disabled", false);
            } 
        $('.form-check-checkbox').on('change', function(){
            if($('.form-check-input').is(':checked')){
                 $('.showinput').show();
                 $('.text-custom-show').hide();
                 $('input[type=radio]').prop("disabled", true);
            }else{
                 $('.showinput').hide();
                 $('.text-custom-show').show();
                 $('input[type=radio]').prop("disabled", false);
            }
        });


        $('#cashflow_form').on('submit', function(e){
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: $(this).attr('action'),
                data: data,
                dataType: 'json',
                success: function(res){
                    if(res['error']){
                        if(!$.isPlainObject(res.message)){
                            alert(res.message);
                        }else{
                            $.each(res.message, function(key,value){
                                alert(value[0]);
                                return false;
                            });
                        }
                    }else{
                        window.location.href = res['url'];
                        alert(res['message']);
                    }
                }
            });
        });
    });
</script>
@endsection
