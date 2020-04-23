@extends('master')

@section('content')
<div class="maincontent">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
    <h4>Joint Personal Information:</h4>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form name="addsinglefact_form" id='addsinglefact_form' class="form-horizontal parsley-form" method="post" action="{{!isset($infoPfr) ? route('joint-fact.add_new') : route('join-fact.postedit', $infoPfr->id)}}" data-parsley-validate1>
      @csrf
      @php 
        if(isset($infoPfr)){
          $client1 = $infoPfr->client_first();
          $client2 = $infoPfr->client_second();
        }
      @endphp
      <div class="form-group">
        <label class="col-sm-2"></label>
        <div class="col-sm-4 text-center">
          Client 1
        </div>
        <div class="col-sm-4 text-center">
          Client 2
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Name<span>*</span></label>
        <div class="col-sm-4">
          <select name="title1" id="title1" class="form-control" data-parsley-trigger="change">
            @foreach($array_title_name as $title)
              <option value="{{$title}}" {{isset($client1->title) && $client1->title == $title ? 'selected' : ''}}>{{$title}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-sm-4">
          <select name="title2" id="title2" class="form-control" data-parsley-trigger="change">
            @foreach($array_title_name as $title)
              <option value="{{$title}}" {{isset($client2->title) && $client2->title == $title ? 'selected' : ''}}>{{$title}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Title<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="join_name1" placeholder="Name" value="{{$client1->name ?? ''}}" data-parsley-trigger="change">
          <span class="noti-alert">(as in NRIC / Passport)</span>
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="join_name2" placeholder="Name" value="{{$client2->name ?? ''}}" data-parsley-trigger="change">
          <span class="noti-alert">(as in NRIC / Passport)</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Relationship to Client 1<span>*</span></label>
        @php 
          $arr_re = [
            'Spouse', 'Child', 'Parent', 'Others'
          ];
        @endphp
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
          @foreach($arr_re as $key=>$re)
              <label class="radio-inline" for="re_{{$key}}"><input id="re_{{$key}}" type="radio" name="relationship" value="{{$key + 1}}" {{isset($client2->relationship) && $client2->relationship == $key + 1 ? 'checked' : ''}}>{{$re}}</option></label>
          @endforeach
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Gender<span>*</span></label>
        <div class="col-sm-4">
          <label class="radio-inline">
            <div class="style-checked1">
                <input type="radio" name="sex1" id="male" value="0" @if(isset($client1)){{isset($client1->gender) && $client1->gender == 0 ? 'checked' : ''}}@else{{'checked'}}@endif>
                <span class="checkmark-radio1"></span>
            </div>
            Male
          </label>
          <label class="radio-inline">
            <div class="style-checked1">
              <input type="radio" name="sex1" id="female" value="1" {{isset($client1->gender) && $client1->gender == 1 ? 'checked' : ''}}>
              <span class="checkmark-radio1"></span>
            </div>
            Female
          </label>
        </div>
        <div class="col-sm-4">
          <label class="radio-inline">
            <div class="style-checked1">
                <input type="radio" name="sex2" id="male2" value="0" @if(isset($client2)){{isset($client2->gender) && $client2->gender == 1 ? 'checked' : ''}}@else{{'checked'}}@endif>
                <span class="checkmark-radio1"></span>
            </div>
            Male
          </label>
          <label class="radio-inline">
            <div class="style-checked1">
              <input type="radio" name="sex2" id="female2" value="1" {{isset($client2->gender) && $client2->gender == 1 ? 'checked' : ''}}>
              <span class="checkmark-radio1"></span>
            </div>
            Female
          </label>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">NRIC/Passport No<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="passport_no1" name="passport_no1" placeholder="NRIC/Passport No" value="{{$infoPfr->client1->nric_passport ?? ''}}" data-parsley-trigger="change" required="">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="passport_no2" name="passport_no2" placeholder="NRIC/Passport No" value="{{$infoPfr->client1->nric_passport ?? ''}}" data-parsley-trigger="change" required="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Nationality<span>*</span></label>
        <div class="col-sm-4">
          <select id="select_nationality_1" name="select_nationality1" data-parsley-trigger="change">
            <option value="">-- select one --</option>
            @foreach($nationalities as $key=>$n)
              <option value="{{$key}}" {{isset($client1->nationality) && $client1->nationality == $key ? 'selected' : ''}}>{{$n}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-sm-4">
          <select id="select_nationality_2" name="select_nationality2" data-parsley-trigger="change">
            <option value="">-- select one --</option>
            @foreach($nationalities as $key=>$n)
              <option value="{{$key}}" {{isset($client2->nationality) && $client2->nationality == $key ? 'selected' : ''}}>{{$n}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Residency Status<span>*</span></label>
          @php 
            $residency = [
                'singapore-pr' => 'Singapore PR',
                'employment-pass' => 'Employment Pass',
                's-pass' => 'S-Pass',
                'work-permit' => 'Word Permit',
                'dependants-pass' => 'Dependant\'s Pass',
                'student-pass' => 'Student Pass',
                'others' => 'Others'
            ];
          @endphp
        <div class="col-sm-4">
          <select name="select_residency1" class="form-control" data-parsley-trigger="change">
            @foreach($residency as $key=>$value)
                <option value="{{$key}}" {{isset($client1->residency) && $client1->residency == $key ? 'selected' : ''}}>{{$value}}</option>
            @endforeach
          </select> 
          <span class="noti-alert">(To fill up if nationality is not Singaporean)</span>
        </div>
        <div class="col-sm-4">
          <select name="select_residency2" class="form-control" data-parsley-trigger="change">
            @foreach($residency as $key=>$value)
                <option value="{{$key}}" {{isset($client2->residency) && $client2->residency == $key ? 'selected' : ''}}>{{$value}}</option>
            @endforeach
          </select> 
          <span class="noti-alert">(To fill up if nationality is not Singaporean)</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Date of Birth<span>*</span></label>
        <div class="col-sm-4">
          <input type="date" class="form-control" name="birthday1" placeholder="Date of Birth" value="{{$client1->dob ?? ''}}" data-parsley-trigger="change">
        </div>
        <div class="col-sm-4">
          <input type="date" class="form-control" name="birthday2" placeholder="Date of Birth" value="{{$client2->dob ?? ''}}" data-parsley-trigger="change">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Marital Status<span>*</span></label>
            @php 
                $maritals = [
                    'S' => 'Single',
                    'M' => 'Married',
                    'W' => 'Widowed',
                    'D' => 'Divorced'
                ];
            @endphp
        <div class="col-sm-4">
          <select name="select_marital1" class="form-control" data-parsley-trigger="change">
            @foreach($maritals as $key=>$value)
                <option value="{{$key}}" {{isset($client1->marital_status) && $client1->marital_status == $key ? 'selected' : ''}}>{{$value}}</option>
            @endforeach
          </select> 
        </div>
        <div class="col-sm-4">
          <select name="select_marital2" class="form-control" data-parsley-trigger="change">
            @foreach($maritals as $key=>$value)
                <option value="{{$key}}" {{isset($client2->marital_status) && $client2->marital_status == $key ? 'selected' : ''}}>{{$value}}</option>
            @endforeach
          </select> 
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Smoker<span>*</span></label>
        <div class="col-sm-4">
            <label class="radio-inline">
                <div class="style-checked1">
                    <input type="radio" name="smoker1" value="0" @if(isset($client1->smoker)) @if($client1->smoker == 0) {{'checked'}}@endif @else {{'checked'}} @endif>
                </div>
                Yes
            </label>
            <label class="radio-inline">
                <div class="style-checked1">
                    <input type="radio" name="smoker1" value="1" {{isset($client1->smoker) && $client1->smoker == 1 ? 'checked' : ''}}>
                </div>
                No 
            </label>
        </div>
        <div class="col-sm-4">
            <label class="radio-inline">
                <div class="style-checked1">
                    <input type="radio" name="smoker2" value="0" @if(isset($client2->smoker)) @if($client2->smoker == 0) {{'checked'}}@endif @else {{'checked'}} @endif>
                </div>
                Yes
            </label>
            <label class="radio-inline">
                <div class="style-checked1">
                    <input type="radio" name="smoker2" value="1" {{isset($client2->smoker) && $client2->smoker == 1 ? 'checked' : ''}}>
                </div>
                No 
            </label>
        </div>
      </div>

      <hr  class="hr-fullcontent"/>

      <div class="form-group">
        <label class="col-sm-2">Employment Status<span>*</span></label>
            @php 
                $employments_status = [
                    'FT' => 'Full time',
                    'PT' => 'Part time',
                    'SE' => 'Self-Employed',
                    'UN' => 'Unemployed',
                    'RT' => 'Retired',
                    'Ot' => 'Others',
                ];
            @endphp
        <div class="col-sm-4">
          <select name="select_employment1" class="form-control" data-parsley-trigger="change">
            @foreach($employments_status as $key=>$e)
                <option value="{{$key}}" {{isset($client1->employment_status) && $client1->employment_status == $key ? 'selected' : ''}}>{{$e}}</option>
            @endforeach
          </select> 
        </div>
        <div class="col-sm-4">
          <select name="select_employment2" class="form-control" data-parsley-trigger="change">
            @foreach($employments_status as $key=>$e)
                <option value="{{$key}}" {{isset($client2->employment_status) && $client2->employment_status == $key ? 'selected' : ''}}>{{$e}}</option>
            @endforeach
          </select> 
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Occupation<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="occupation1" placeholder="Occupation" value="{{$client1->occupation ?? ''}}" data-parsley-trigger="change">
          <span class="noti-alert">(If Retired, please indicate previous occupation)</span>
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="occupation2" placeholder="Occupation" value="{{$client2->occupation ?? ''}}" data-parsley-trigger="change">
          <span class="noti-alert">(If Retired, please indicate previous occupation)</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Company Name<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="company_name1" placeholder="Company Name" value="{{$client1->company ?? ''}}" data-parsley-trigger="change">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="company_name2" placeholder="Company Name" value="{{$client2->company ?? ''}}" data-parsley-trigger="change">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Business Nature<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="business_nature1" placeholder="Business Nature" value="{{$client1->business_nature ?? ''}}" data-parsley-trigger="change">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="business_nature2" placeholder="Business Nature" value="{{$client2->business_nature ?? ''}}" data-parsley-trigger="change">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Annual Income Range ($)<span>*</span></label>
            @php 
                $annual_income = [
                    '0' => '0-29,999',
                    '30' => '30,000-49,999',
                    '50' => '50,000-99,999',
                    '100' => '100,000-149,999',
                    '150' => '150,000-299,999',
                    '300' => '300,000 & above',
                ];
            @endphp
        <div class="col-sm-4">
          <select name="select_annual_income1" class="form-control" data-parsley-trigger="change">
            @foreach($annual_income as $key=>$value)
                <option value="{{$key}}" {{isset($client1->income_range) && $client1->income_range == $key ? 'selected' : ''}}>{{$value}}</option>
            @endforeach
          </select> 
        </div>
        <div class="col-sm-4">
          <select name="select_annual_income2" class="form-control" data-parsley-trigger="change">
            @foreach($annual_income as $key=>$value)
                <option value="{{$key}}" {{isset($client2->income_range) && $client2->income_range == $key ? 'selected' : ''}}>{{$value}}</option>
            @endforeach
          </select> 
        </div>
      </div>
      <hr  class="hr-fullcontent"/>

      <div class="form-group">
        <label class="col-sm-2">Contact Details - Home<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="details_home1" placeholder="Contact Details" value="{{$client1->contact_home ?? ''}}">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="details_home2" placeholder="Contact Details" value="{{$client2->contact_home ?? ''}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Contact Details - Mobile<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="details_mobile1" placeholder="Contact Details" value="{{$client1->contact_mobile ?? ''}}">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="details_mobile2" placeholder="Contact Details" value="{{$client2->contact_mobile ?? ''}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Contact Details - Office<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="details_office1" placeholder="Contact Details" value="{{$client1->contact_office ?? ''}}">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="details_office2" placeholder="Contact Details" value="{{$client2->contact_office ?? ''}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Contact Details - Fax<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="details_fax1" placeholder="Contact Details" value="{{$client1->contact_fax ?? ''}}">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="details_fax2" placeholder="Contact Details" value="{{$client2->contact_fax?? ''}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">E-mail Address<span>*</span></label>
        <div class="col-sm-4">
          <input type="email" class="form-control" name="email_address1" placeholder="E-mail Address" value="{{$client1->email ?? ''}}">
          <span class="noti-alert">(Compulsory for Investment Products)</span>
        </div>
        <div class="col-sm-4">
          <input type="email" class="form-control" name="email_address2" placeholder="E-mail Address" value="{{$client2->email?? ''}}">
          <span class="noti-alert">(Compulsory for Investment Products)</span>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Residential Address<span>*</span></label>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="residential_address1" placeholder="E-mail Address" value="{{$client1->residential_address ?? ''}}">
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" name="residential_address2" placeholder="E-mail Address" value="{{$client2->residential_address?? ''}}">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2">Mailing Address<span>*</span></label>
        <div class="col-sm-4">
          <input type="email" class="form-control" name="mailing_address1" placeholder="Mailing Address" value="{{$client1->mailing_address ?? ''}}">
          <span class="noti-alert">(Compulsory for Investment Products)</span>
        </div>
        <div class="col-sm-4">
          <input type="email" class="form-control" name="mailing_address2" placeholder="Mailing Address" value="{{$client2->mailing_address?? ''}}">
          <span class="noti-alert">(if different from Residential Address)</span>
        </div>
      </div>

      <div class="action-form">
          <button type="submit" class="btn btn-primary mb-2 radius_2 style-button1">Next</button>
      </div>
    </form>
  </div>
</div>
<div class="bottom-step">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
        <ul>
            @if(!isset($infoPfr))
            @else
                @include('pages.navigation', ['id' => $infoPfr->id])
            @endif
        </ul>
    </div>
</div>
<style type="text/css">
 label {text-align: right;}
</style>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#title1').change(function(){
      var title = $(this).val();
      if(title == "Mrs" || title == "Ms" || title == "Mdm"){
        $('#female').prop('checked', true).siblings('i').addClass('fas fa-check-circle').removeClass('far fa-circle');
        $('#male').prop('checked', false).siblings('i').addClass('far fa-circle').removeClass('fas fa-check-circle');
      }else{
        $('#female').prop('checked', false).siblings('i').addClass('far fa-circle').removeClass('fas fa-check-circle');
        $('#male').prop('checked', true).siblings('i').addClass('fas fa-check-circle').removeClass('far fa-circle');
      }
    });

    $('#title2').change(function(){
      var title = $(this).val();
      if(title == "Mrs" || title == "Ms" || title == "Mdm"){
        $('#female2').prop('checked', true).siblings('i').addClass('fas fa-check-circle').removeClass('far fa-circle');
        $('#male2').prop('checked', false).siblings('i').addClass('far fa-circle').removeClass('fas fa-check-circle');
      }else{
        $('#female2').prop('checked', false).siblings('i').addClass('far fa-circle').removeClass('fas fa-check-circle');
        $('#male2').prop('checked', true).siblings('i').addClass('fas fa-check-circle').removeClass('far fa-circle');
      }
    });

    $('#addsinglefact_form').on('submit', function(e){
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
            window.location.href = res['url'];
            alert(res['message']);
          }
        }
      });
    });
  });
</script>
@endsection
