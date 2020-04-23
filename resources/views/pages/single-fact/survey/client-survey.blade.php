@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 15 - Client Call-back Survey (by supervisor)</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">

        <form name="survey_form" id='survey_form' class="" method="post" action="{{route('single_fact.client_survey.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            @php
                if($infoPfr->survey){
                    $callback = $infoPfr->survey->callback;
                }
            @endphp
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-survey1">
                    <h4>Details of Representative</h4>
                </div>
            </div>
            <div class="row custom-survey1">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p><strong>Name of Representative: (as per NRIC/FIN/Passport)</strong></p>
                    <input type="text" name="user_add" readonly value="{{$infoPfr->nameUserAdd}}"> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p><strong>LFA Code:</strong></p>
                    <input type="text" name="lfa" value="{{isset($callback) ? $callback['lfa'] : ''}}"> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p><strong>MAS Representative No:</strong></p>
                    <input type="text" name="mas_representative" value="{{isset($callback) ? $callback['mas_representative'] : ''}}"> 
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-survey1">
                    <h4>Type of Client Call-Back</h4>
                </div>
            </div>
            <div class="row custom-survey1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 lcb1-step15">
                    <label>
                        <input  class="form-check-input" value="0" name="type_client[]" type="checkbox" @if(isset($callback)) @foreach($callback['type_client'] as $type) @if($type == 0){{'checked'}}@endif @endforeach @endif>
                        Client who is not Proficient in English
                    </label>
                    <label>
                        <input  class="form-check-input" value="1" name="type_client[]" type="checkbox" @if(isset($callback)) @foreach($callback['type_client'] as $type) @if($type == 1){{'checked'}}@endif @endforeach @endif>
                        Selected Client
                    </label>
                    <label>
                        <input  class="form-check-input" value="2" name="type_client[]" type="checkbox" @if(isset($callback)) @foreach($callback['type_client'] as $type) @if($type == 2){{'checked'}}@endif @endforeach @endif>
                        Selected Representative's Client
                    </label>
                    <label>
                        <input  class="form-check-input" value="3" name="type_client[]" type="checkbox" @if(isset($callback)) @foreach($callback['type_client'] as $type) @if($type == 3){{'checked'}}@endif @endforeach @endif>
                        Roadshow Sales
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-survey1">
                    <h4>Details of Client Call-Back</h4>
                </div>
            </div>
            <div class="row custom-survey1">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                    <p><strong>Name of Client: (please underline surname)</strong></p>
                    <input type="text" name="name_client" value="{{isset($callback) ? $callback['name_client'] : ''}}">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <p><strong>NRIC / Passport No:</strong></p>
                    <input type="text" name="nric_passport" value="{{isset($callback) ? $callback['nric_passport'] : ''}}">
                </div>
            </div>
            <div class="row custom-survey2">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <p><strong>Mode of Contact:</strong></p>
                    <label>
                        <input class="form-check-input" value="FTF" name="mode_contact[]" type="checkbox" @if(isset($callback)) @foreach($callback['mode_contact'] as $mode) @if($mode == 'FTF'){{'checked'}}@endif @endforeach @endif>
                       Face-to-face
                    </label>
                    <label>
                        <input class="form-check-input" value="VC" name="mode_contact[]" type="checkbox"@if(isset($callback)) @foreach($callback['mode_contact'] as $mode) @if($mode == 'VC'){{'checked'}}@endif @endforeach @endif>
                        Voice Call
                    </label>
                    <p>Please specify contact no: <input type="text" name="specify_contact" value="{{isset($callback) ? $callback['specify_contact'] : ''}}"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <p><strong>Language used during the client call-back:</strong></p>
                    <label>
                        <input  class="form-check-input" value="ENG" name="used_lang[]" type="checkbox"  @if(isset($callback)) @foreach($callback['used_lang'] as $lang) @if($lang == 'ENG'){{'checked'}}@endif @endforeach @endif>
                       English
                    </label>
                    <label>
                        <input  class="form-check-input" value="MAL" name="used_lang[]" type="checkbox"  @if(isset($callback)) @foreach($callback['used_lang'] as $lang) @if($lang == 'MAL'){{'checked'}}@endif @endforeach @endif>
                       Malay
                    </label>
                    <label>
                        <input  class="form-check-input" value="MAN" name="used_lang[]" type="checkbox"  @if(isset($callback)) @foreach($callback['used_lang'] as $lang) @if($lang == 'MAN'){{'checked'}}@endif @endforeach @endif>
                        Mandarin
                    </label>
                    <label>
                        <input  class="form-check-input" value="TAM" name="used_lang[]" type="checkbox"  @if(isset($callback)) @foreach($callback['used_lang'] as $lang) @if($lang == 'TAM'){{'checked'}}@endif @endforeach @endif>
                        Tamil
                    </label>
                    <label>
                        <input  class="form-check-input" value="Ot" name="used_lang[]" type="checkbox"  @if(isset($callback)) @foreach($callback['used_lang'] as $lang) @if($lang == 'Ot'){{'checked'}}@endif @endforeach @endif>
                       Others, please specify:
                    </label>
                    <label>
                       <input type="text" name="lang" value="{{isset($callback) ? $callback['lang'] : ''}}">
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
                                        <input class="form-check-input" value="1" name="a_one" type="checkbox" @if(isset($callback)) @if($callback['log_of_call'][0]['surveyed'] == 1){{'checked'}}@endif @endif>
                                       Client contactable and surveyed
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input class="form-check-input" value="1" name="a_two" type="checkbox" @if(isset($callback)) @if($callback['log_of_call'][1]['surveyed'] == 1){{'checked'}}@endif @endif>
                                       Client contactable and surveyed
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input class="form-check-input" value="1" name="a_three" type="checkbox" @if(isset($callback)) @if($callback['log_of_call'][2]['surveyed'] == 1){{'checked'}}@endif @endif>
                                       Client contactable and surveyed
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input class="form-check-input" value="1" name="b_one" type="checkbox" @if(isset($callback)) @if($callback['log_of_call'][0]['not_surveyed'] == 1){{'checked'}}@endif @endif>
                                        Client contactable but did not agree to be surveyed
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input class="form-check-input" value="1" name="b_two" type="checkbox" @if(isset($callback)) @if($callback['log_of_call'][1]['not_surveyed'] == 1){{'checked'}}@endif @endif>
                                        Client contactable but did not agree to be surveyed
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input class="form-check-input" value="1" name="b_three" type="checkbox" @if(isset($callback)) @if($callback['log_of_call'][2]['not_surveyed'] == 1){{'checked'}}@endif @endif>
                                        Client contactable but did not agree to be surveyed
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>
                                        <input class="form-check-input" value="1" name="a_three" type="checkbox" @if(isset($callback)) @if($callback['log_of_call'][0]['uncontactable'] == 1){{'checked'}}@endif @endif>
                                        Client uncontactable, reason:
                                        <textarea name="reason1">{{isset($callback) ? $callback['log_of_call'][0]['reason'] : ''}}</textarea>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input class="form-check-input" value="1" name="c_two" type="checkbox" @if(isset($callback)) @if($callback['log_of_call'][1]['uncontactable'] == 1){{'checked'}}@endif @endif>
                                        Client uncontactable, reason:
                                        <textarea name="reason2">{{isset($callback) ? $callback['log_of_call'][1]['reason'] : ''}}</textarea>
                                    </label>
                                </td>
                                <td>
                                    <label>
                                        <input class="form-check-input" value="1" name="c_three" type="checkbox" @if(isset($callback)) @if($callback['log_of_call'][2]['uncontactable'] == 1){{'checked'}}@endif @endif>
                                        Client uncontactable, reason:
                                        <textarea name="reason3">{{isset($callback) ? $callback['log_of_call'][2]['reason'] : ''}}</textarea>
                                    </label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @php $questions = json_decode(json_encode(config('constants.response_questions')));
            @endphp
            <div class="list-q-step15">
	            @foreach($questions as $key_question=>$q)
	                <h4><strong>{{$q->name}}</strong></h4> 
	                    @foreach($q->answers as $key => $value )
	                    	<div class="content-survey-radio">
	                    		<p><strong>{{$key}}. {{$value}}</strong></p>
	                    		<div class="right-q">
			                        <div class="survey-radio">
			                            <input type="radio" name="rq{{$key}}" value="1" @if(isset($callback)) @if($callback['question'][$key - 1] == 1){{'checked'}}@endif @endif>
			                            Yes
			                        </div>
			                        <div class="survey-radio">
			                            <input type="radio" name="rq{{$key}}" value="0" @if(isset($callback)) @if($callback['question'][$key - 1] == 0){{'checked'}}@endif @endif>
			                            No
			                        </div>
		                        </div>
		                    </div>
	                    @endforeach
	             @endforeach 
	        </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	 <p><strong>Comments (if any):</strong></p>
                    <textarea name="comment">{{isset($callback) ? $callback['comment'] : ''}}</textarea>
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
