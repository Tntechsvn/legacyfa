@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Risk Profile:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="{{route('single_fact.risk_profile.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            @php $questions = json_decode(json_encode(config('constants.Risk_Profile_Questionnaire')));

            $dataRiskProfile = json_decode($infoPfr->dataRiskProfile, true);
            @endphp
            <table id="annual-income-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    @foreach($questions as $key_question=>$q)
                    <tr>
                        <td>Q{{$key_question+1}}) {{$q->name}}</td>
                        <td>
                            @foreach($q->answers as $key_answer=>$a)
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q_{{$key_question+1}}" value="{{$key_answer}}" <?php
                                if(isset($infoPfr) && $dataRiskProfile){
                                    foreach($dataRiskProfile[0] as $key=>$val){
                                        if($key == "q_".($key_question+1) && $val == $key_answer){
                                            echo "checked";
                                        }
                                    }
                                }?> >
                                <label class="form-check-label" for="gridRadios2">
                                    {{$a}}
                                </label>
                            </div>
                            @endforeach
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="custom-bg-text">
                Risk Profile Assessment Outcome:<br/>
                Capital Preservation.
            </div>
            <div class="form-group form-layout-row">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="state" id="state" value="1" @if($dataRiskProfile[0]['reason'] != ""){{'checked'}}@endif>
                    <label class="form-check-label" for="state">N/A</label>
                </div>
             </div>
            <div class="form-group form-layout-row">
                <label for="details_home">Reason</label>
                <div class="custom-input-layout-row">
                    <input type="text" class="form-control" id="reason" name="reason" placeholder="" value="{{$dataRiskProfile[0]['reason']}}">
                </div>
            </div>
            <div class="nav-step">
                <button class="btn btn-primary mb-2">Back</button>
                <button type="submit" class="btn btn-primary mb-2">Next</button>
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

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
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
                        location.reload();
                        alert(res['message']);
                    }
                }
            });
        });
    });
</script>
@endsection
