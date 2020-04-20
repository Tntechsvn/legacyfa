@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 12 - Client's Acknowledgement:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="" data-parsley-validate>
            @csrf
            <p><strong>Please tick " " and acknowledge as appropriate.</strong></p>
            @php $questions = json_decode(json_encode(config('constants.Clients_Acknowledgement')));
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
                                            <div class="style-checked-table2">
                                                <input  class="form-check-input" value="1" name="" type="checkbox">
                                                 <span class="checkmark"></span>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="list-child1">
                                        <label>{{  $value }}</label>
                                        <div class="style-checked-table2 check-step12">
                                            <input  class="form-check-input" value="1" name="" type="checkbox">
                                            <span class="checkmark"></span>
                                        </div>
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
                                <div class="style-checked-table2 check-step12">
                                    <input  class="form-check-input" value="1" name="" type="checkbox">
                                    <span class="checkmark"></span>
                                </div>
                            </div>
                            <div class="list-child1">
                                <label>the recommendation(s) and wish to purchase my/our own choice of product(s). Do not accept</label>
                                <div class="style-checked-table2 check-step12">
                                    <input  class="form-check-input" value="1" name="" type="checkbox">
                                    <span class="checkmark"></span>
                                </div>
                            </div>
                            <div class="list-child1">
                                <p>Remarks: <input type="text" name=""></p>
                            </div>
                        </div>
                    </div>

                    <div class="question-setp12">
                        <p><strong>7, Introducer Disclosure Acknowledgement</strong></p>
                        <div class="content-check-step12">
                            <div class="list-child1">
                                <p>I/we hereby confirm that I/we am/are referred by Introducer
                                    <input type="text" name="">
                                    am/are informed of the following:
                                </p>
                                <div class="style-checked-table2 check-step12">
                                    <input  class="form-check-input" value="1" name="" type="checkbox">
                                    <span class="checkmark"></span>
                                </div>
                            </div>
                            <div class="list-child1">
                                <p>a, That the Introducer is not permitted to give advice or provide recommendations on any investment product to me/us, market any collective investment scheme, or arrange any contract of insurance in respect of life policies; and</p>
                                <p>b, The amount of remuneration that the introducer may be entitled to receive/pass on for carrying out this introduction.</p>
                            </div>
                        </div>
                    </div>
            <div class="nav-step">
                <a href="" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
@endsection
