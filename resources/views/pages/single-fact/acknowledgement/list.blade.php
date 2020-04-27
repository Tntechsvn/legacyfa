@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 12 - Client's Acknowledgement:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="{{route('single_fact.client_acknowledgement.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <p><strong>Please tick " " and acknowledge as appropriate.</strong></p>
            @php
                $questions = json_decode(json_encode(config('constants.Clients_Acknowledgement')));
                if(isset($infoPfr->clientAcknowledgement)){
                    $infoCA = $infoPfr->clientAcknowledgement;
                    $client1 = $infoCA->data[0];
                    $client2 = $infoCA->data[1];
                }
            @endphp
                    @foreach($questions as $key_question=>$q)
                    <div class="question-setp12">
                        <p><strong>{{$key_question+1}}) {{$q->name}}</strong></p>
                        <div class="content-check-step12">
                            @foreach($q->answers as $key => $value )
                                @if(is_object($value))
                                    @foreach( $value as $key_child => $childvl )
                                        <div class="list-child2">
                                            <label>{{ $childvl }}</label>
                                                <input  class="form-check-input" value="1" name="1_{{$key_question + 1}}_{{$key_child}}" type="checkbox" @if(isset($client1)) @if($client1[3]['c'][$key_child] == 1) {{'checked'}} @endif @endif>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="list-child1">
                                        <label>{{  $value }}</label>
                                        <input  class="form-check-input" value="1" name="1_{{$key_question + 1}}_{{$key}}" type="checkbox" @if(isset($client1)) @if($client1[$key_question][$key] == 1){{'checked'}}@endif @endif>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                    <div class="question-setp12">
                        <p><strong>7, My/our Legacy FA Representative has explained in detail the recommendation(s) made and I/we:</strong></p>
                        <div class="content-check-step12">
                            <div class="list-child1">
                                <label>the recommendation(s). Accept</label>
                                <input class="form-check-input" value="1" name="1_7_accept" type="checkbox" @if(isset($client1)) @if($client1[6]['accept'] == 1) {{'checked'}} @endif @endif>
                                    
                            </div>
                            <div class="list-child1">
                                <label>the recommendation(s) and wish to purchase my/our own choice of product(s). Do not accept</label>
                                
                                <input  class="form-check-input" value="1" name="1_7_notaccept" type="checkbox" @if(isset($client1)) @if($client1[6]['notaccept'] == 1) {{'checked'}} @endif @endif>                            
                            </div>
                            <div class="list-child1">
                                <p>Remarks: <input type="text" name="remark" value="{{isset($infoCA) ? $infoCA->data['remark'] : ''}}"></p>
                            </div>
                        </div>
                    </div>

                    <div class="question-setp12">
                        <p><strong>8, Introducer Disclosure Acknowledgement</strong></p>
                        <div class="content-check-step12">
                            <div class="list-child1">
                                <p>I/we hereby confirm that I/we am/are referred by Introducer
                                    <input type="text" name="name" value="{{isset($infoCA) ? $infoCA->data['name'] : ''}}">
                                    am/are informed of the following:
                                </p>
                                
                                <input  class="form-check-input" value="1" name="1_8_check" type="checkbox" @if(isset($client1)) @if($client1[7]['check'] == 1) {{'checked'}} @endif @endif>
                                 
                            </div>
                            <div class="list-child1">
                                <p>a, That the Introducer is not permitted to give advice or provide recommendations on any investment product to me/us, market any collective investment scheme, or arrange any contract of insurance in respect of life policies; and</p>
                                <p>b, The amount of remuneration that the introducer may be entitled to receive/pass on for carrying out this introduction.</p>
                            </div>
                        </div>
                    </div>
            <div class="nav-step">
                <a href="{{route('single_fact.switching_replacement', $infoPfr->id)}}" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>
    </div>
</div>
@include('pages.navigation', ['id' => $infoPfr->id])
@endsection
