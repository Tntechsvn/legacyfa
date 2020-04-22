@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 15 - Client Call-back Survey (by supervisor)</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="" data-parsley-validate>
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Details of Representative</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p><strong>Details of Representative</strong></p>
                    <input type="text" name="" readonly value="Ninh Freelancer"> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p><strong>LFA Code:</strong></p>
                    <input type="text" name=""  value=""> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p><strong>MAS Representative No:</strong></p>
                    <input type="text" name=""  value=""> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Type of Client Call-Back</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <label>
                        <input  class="form-check-input" value="" name="type-client" type="checkbox">
                        Client who is not Proficient in English
                    </label>
                    <label>
                        <input  class="form-check-input" value="" name="type-client" type="checkbox">
                        Selected Client
                    </label>
                    <label>
                        <input  class="form-check-input" value="" name="type-client" type="checkbox">
                        Selected Representative's Client
                    </label>
                    <label>
                        <input  class="form-check-input" value="" name="type-client" type="checkbox">
                        Roadshow Sales
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Details of Client Call-Back</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <p><strong>Name of Client: (please underline surname)</strong></p>
                    <input type="text" name="">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p><strong>NRIC / Passport No:</strong></p>
                    <input type="text" name="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <p><strong>Mode of Contact:</strong></p>
                    <label>
                        <input  class="form-check-input" value="" name="type-client" type="checkbox">
                       Face-to-face
                    </label>
                    <label>
                        <input  class="form-check-input" value="" name="type-client" type="checkbox">
                        Voice Call
                    </label>
                    <p>Please specify contact no: <input type="text" name=""></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <p><strong>Language used during the client call-back:</strong></p>
                    <label>
                        <input  class="form-check-input" value="" name="used-lang" type="checkbox">
                       English
                    </label>
                    <label>
                        <input  class="form-check-input" value="" name="used-lang" type="checkbox">
                       Malay
                    </label>
                    <label>
                        <input  class="form-check-input" value="" name="used-lang" type="checkbox">
                        Mandarin
                    </label>
                    <label>
                        <input  class="form-check-input" value="" name="used-lang" type="checkbox">
                        Tamil
                    </label>
                    <label>
                        <input  class="form-check-input" value="" name="used-lang" type="checkbox">
                       Others, please specify:
                    </label>
                    <label>
                       <input type="text" name="">
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p><strong>Log of Calls Attempt:</strong></p>
                    <table>
                        <thead>
                            <tr>
                                <th></th>
                                <th>1st Attempt</th>
                                <th>2nd Attempt</th>
                                <th>3rd Attempt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Date:</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><strong>Time:</strong></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td rowspan="3"><strong>OutCome:</strong></td>
                                <td>
                                    <label>
                                        <input  class="form-check-input" value="" name="namec1" type="checkbox">
                                       Client contactable and surveyed
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input  class="form-check-input" value="" name="namec2" type="checkbox">
                                       Client contactable and surveyed
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input  class="form-check-input" value="" name="namec3" type="checkbox">
                                       Client contactable and surveyed
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input  class="form-check-input" value="" name="namec1" type="checkbox">
                                        Client contactable but did not agree to be surveyed
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input  class="form-check-input" value="" name="namec2" type="checkbox">
                                        Client contactable but did not agree to be surveyed
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input  class="form-check-input" value="" name="namec3" type="checkbox">
                                        Client contactable but did not agree to be surveyed
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input  class="form-check-input" value="" name="namec1" type="checkbox">
                                        Client uncontactable, reason:
                                        <textarea></textarea>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input  class="form-check-input" value="" name="namec2" type="checkbox">
                                        Client uncontactable, reason:
                                        <textarea></textarea>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input  class="form-check-input" value="" name="namec3" type="checkbox">
                                        Client uncontactable, reason:
                                        <textarea></textarea>
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @php $questions = json_decode(json_encode(config('constants.response_questions')));
            @endphp
            @foreach($questions as $key_question=>$q)
                <h4><strong>{{$q->name}}</h4> 
                <div class="content-survey-radio">
                    @foreach($q->answers as $key => $value )
                        {{$key+1}}. {{$value}}
                        <div class="survey-radio">
                            <input type="radio" name="rq1" value="">
                            Yes
                        </div>
                        <div class="survey-radio">
                            <input type="radio" name="rq1" value="">
                            No
                        </div>
                    @endforeach
                </div>
             @endforeach 
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <p><strong>Comments (if any):</strong></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea>
                    </textarea>
                </div>
            </div>
            <div class="nav-step">
                <a href="{{route('single_fact.supervisors_review', $infoPfr->id)}}" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
@endsection
