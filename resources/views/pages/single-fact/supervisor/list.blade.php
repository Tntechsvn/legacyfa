@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 14 - Supervisor's Review</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="" data-parsley-validate>
            <table id="protection6-1" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
            @csrf
            @php $questions = json_decode(json_encode(config('constants.Supervisory_Checklist')));
            @endphp
                    @foreach($questions as $key_question=>$q)
                        <thead>
                            <tr>
                                <th colspan="2">{{$q->name}}</th>
                            </tr>
                        </thead>
                        <tbody> 
                            @foreach($q->answers as $key => $value )
                                <tr>
                                    <td><label>{{  $value }}</label></td>
                                    <td>
                                        <input type="type" name="">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endforeach
                </table>
                    
            <div class="nav-step">
                <a href="" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
@endsection
