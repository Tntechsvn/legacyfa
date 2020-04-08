@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Cash Flow:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="" data-parsley-validate>
            @csrf
            @php $questions = json_decode(json_encode(config('constants.CKA_Questionnaire'))); @endphp 
            <table id="annual-income-table" class="table table-content table-style1" style="width:100%">
                <tbody>
                    @foreach($questions as $key=>$q)
                    <tr>
                        <td>{{$key+1}}. {{$q->name}}</td>
                        <td>
                            <div class="radio">
                                <label><input type="radio" name="name{{$key}}" checked>Yes</label>
                            </div>
                            @foreach($q->answers as $key=>$a)
                                <div class="checkbox">
                                    <label><input type="checkbox" value="">{{$a}}</label>
                                </div>
                            @endforeach
                            <div class="radio">
                                <label><input type="radio" name="name{{$key}}">No</label>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="custom-bg-text">
                 h4>RESULT:</h4>   
                YOU HAVE MET the Customer Knowledge Assessment criteria and am deemed to posses the knowledge or experience for transactions In a Collective Investment Scheme or an Investment Linked Policy.
            <div class="form-group form-layout-row">
                <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                      <label class="form-check-label" for="inlineCheckbox1">N/A</label>
                 </div>
             </div>
            <div class="form-group form-layout-row">
                <label for="details_home">Reason</label>
                <div class="custom-input-layout-row">
                    <input type="text" class="form-control" id="reason" name="reason" placeholder="" value="">
                </div>
            </div>
            <button class="btn btn-primary mb-2">Back</button>
            <button type="submit" class="btn btn-primary mb-2">Next</button>
        </form>      
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
        <ul>
            <li><a href="javascript:;">1</a></li>
            <li><a href="javascript:;">2</a></li>
            <li><a href="javascript:;">3</a></li>
            <li><a href="javascript:;">4</a></li>
            <li><a href="javascript:;">5</a></li>
            <li><a href="javascript:;">6</a></li>
            <li><a href="javascript:;">7</a></li>
            <li><a href="javascript:;">8</a></li>
            <li><a href="javascript:;">9</a></li>
            <li><a href="javascript:;">10</a></li>
        </ul>
    </div>
</div>
@endsection