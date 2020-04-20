@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 13 - Representative's Declaration:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="" data-parsley-validate>
            @csrf
            <p><strong>Please tick " " and acknowledge as appropriate.</strong></p>
            @php $questions = json_decode(json_encode(config('constants.Representatives_Declaration')));
            @endphp
                    @foreach($questions as $key_question=>$q)
                    <div class="question-setp12">
                        <p><strong>{{$key_question+1}}) {{$q->name}}</strong></p>
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
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                    
            <div class="nav-step">
                <a href="" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
@endsection
