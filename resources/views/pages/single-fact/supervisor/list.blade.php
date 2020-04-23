@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 14 - Supervisor's Review</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="supervisor_form" id='supervisor_form' class="" method="post" action="{{route('single_fact.supervisors_review.add_new', $infoPfr->id)}}" data-parsley-validate>
            <table id="protection6-1" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
            @csrf
            @php
                $questions = json_decode(json_encode(config('constants.Supervisory_Checklist')));
                if($infoPfr->survey){
                    $review = $infoPfr->survey->review;
                }
            @endphp
                    @foreach($questions as $key_question=>$q)
                        <thead>
                            <tr>
                                <th colspan="2">{{$q->name}}</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @php
                            $i = 0;
                            @endphp
                            @foreach($q->answers as $key => $value )
                                <tr>
                                    <td><label>{{  $value }}</label></td>
                                    <td>
                                        <label class="radio-inline custom-style-radio1">
                                            <div class="style-checked style-radio-custom">
                                                <input class="" type="radio" name="name{{$i}}" value="0" @if(isset($review) && $review['check_list'][$i]['name'] == 0){{'checked'}}@endif>
                                                <span class="checkmark-radio"></span>
                                            </div>
                                            Satisfactory
                                        </label>
                                        <label class="radio-inline custom-style-radio1">
                                            <div class="style-checked style-radio-custom">
                                                <input class="" type="radio" name="name{{$i}}" value="1" @if(isset($review) && $review['check_list'][$i]['name'] == 1){{'checked'}}@endif>
                                                <span class="checkmark-radio"></span>
                                            </div>
                                            Unsatisfactory
                                        </label>
                                        <input type="type" name="remark{{$i}}" value="@if(isset($review)){{$review['check_list'][$i]['remark']}}@endif">
                                    </td>
                                </tr>
                                @php
                                $i++;
                                @endphp
                            @endforeach
                        </tbody>
                    @endforeach
                </table>
                <div class="">
                    I have reviewed the information disclosed in this 'Personal Financial Record' which relates to the client's priorities and objectives, investment risk profile, cash flow and budget, assets and liabilities, investment/insurance portfolio, Customer Knowledge Assessment outcome and the client's acknowledgment.                   
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked style-radio-custom">
                                <input class="" type="radio" name="recommendation" value="0" @if(isset($review) && $review['recommendation'] == 0){{'checked'}}@endif>
                                <span class="checkmark-radio"></span>
                            </div>
                            I agree with the Representative's recommendation(s)
                        </label>
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked style-radio-custom">
                                <input class="" type="radio" name="recommendation" value="1" @if(isset($review) && $review['recommendation'] == 1){{'checked'}}@endif>
                                <span class="checkmark-radio"></span>
                            </div>
                            I disagree with the Representative's recommendation(s). (If you disagree, please state the reasons below and advise on the follow-up action to be taken, where applicable)
                        </label>
                        <textarea name="reason" id="" cols="30" rows="10">{{isset($review) ? $review['reason'] : ''}}</textarea>
                        <div class="list-check-step14">
                            <div class="style-checked-table2">
                                <input class="form-check-input" value="1" name="carried_out" type="checkbox" @if(isset($review) && $review['carried_out'] == 1){{'checked'}}@endif>
                                <span class="checkmark"></span>
                            </div>
                            <label>I carried out joint field work with the Representative</label>
                        </div>
                        <div class="list-check-step14">
                            <div class="style-checked-table2">
                                <input class="form-check-input" value="1" name="call_back" type="checkbox" @if(isset($review) && $review['call_back'] == 1){{'checked'}}@endif>
                                <span class="checkmark"></span>
                            </div>
                            <label>Where Selected Client or client who is not proficient in English is concerned, I have performed the client call-back and documented it in the Client Call-back Survey.</label>
                        </div>
                </div>
                    
            <div class="nav-step">
                <a href="{{route('single_fact.representatives_declaration', $infoPfr->id)}}" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
@endsection