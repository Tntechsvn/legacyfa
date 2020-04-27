@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 12 - Representative's Declaration:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="{{route('single_fact.representatives_declaration.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            @php
                $questions = json_decode(json_encode(config('constants.Representatives_Declaration')));
            @endphp
                    @foreach($questions as $key_question=>$q)
                    <div class="question-setp12">
                        <div class="content-check-step12">
                            @foreach($q->answers as $key => $value )
                                @if(is_object($value))
                                    @foreach( $value as $childvl )
                                        <div class="list-child2">
                                            <label>{{ $childvl }}</label>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="list-child1">
                                        <label>{{  $value }}</label>
                                        @if($key == 'b')
                                        <textarea name="declaration">{{isset($infoPfr->survey->declaration) ? $infoPfr->survey->declaration : ''}}</textarea>
                                        @endif
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
            <div class="nav-step">
                <a href="{{route('single_fact.client_acknowledgement', $infoPfr->id)}}" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
@include('pages.navigation', ['id' => $infoPfr->id])
@endsection
