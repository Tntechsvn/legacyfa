@extends('master')

@section('content')
<div class="maincontent">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
    <h4>Step 1 - Personal Information:</h4>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form name="addsinglefact_form" id='addsinglefact_form' class="parsley-form" method="post" action="{{!isset($infoPfr) ? route('single-fact.add_new') : route('single_fact.postedit', $infoPfr->id)}}" data-parsley-validate>
      @csrf
      <div class="single-fact-colum">
        <div class="form-group form-layout-row">
          <label for="title">Title<span>*</span></label>
          <div class="custom-input-layout-row">
            <select name="title" id="title" class="form-control" data-parsley-trigger="change" required="">
              @foreach($array_title_name as $title)
                <option value="{{$title}}" {{isset($infoPfr->client1->title) && $infoPfr->client1->title == $title ? 'selected' : ''}}>{{$title}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="single_name">Name<span>*</span></label>
          <div class="custom-input-layout-row">
            <input type="text" class="form-control" id="single_name" name="single_name" placeholder="Name" value="{{$infoPfr->client1->name ?? ''}}" data-parsley-trigger="change" required="">
            <span class="noti-alert">(as in NRIC / Passport)</span>
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="single_name">Gender<span>*</span></label>
          <div class="custom-input-layout-row">
            <label class="radio-inline custom-style-radio1">
              <div class="style-checked style-radio-custom">
                  <input type="radio" name="sex" id="male" value="0" checked>
                  <span class="checkmark-radio"></span>
              </div>
              Male
            </label>
            <label class="radio-inline custom-style-radio1">
              <div class="style-checked style-radio-custom">
                <input type="radio" name="sex" id="female" value="1">
                <span class="checkmark-radio"></span>
              </div>
              Female
            </label>
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="passport_no">NRIC/Passport No<span>*</span></label>
          <div class="custom-input-layout-row">
            <input type="text" class="form-control" id="passport_no" name="passport_no" placeholder="NRIC/Passport No" value="{{$infoPfr->client1->nric_passport ?? ''}}" data-parsley-trigger="change" required="">
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="select-country">Nationality<span>*</span></label>
          <div class="custom-input-layout-row">
            <select id="select_nationality" name="select_nationality" data-parsley-trigger="change" required="">
              <option value="">Select</option>
              @foreach($nationalities as $key=>$n)
                <option value="{{$key}}" {{isset($infoPfr->client1->nationality) && $infoPfr->client1->nationality == $key ? 'selected' : ''}}>{{$n}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="select_residency">Residency Status<span>*</span></label>
          <div class="custom-input-layout-row">
            <select name="select_residency" id="select_residency" class="form-control" data-parsley-trigger="change" required="">
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
              @foreach($residency as $key=>$value)
                  <option value="{{$key}}" {{isset($infoPfr->client1->residency) && $infoPfr->client1->residency == $key ? 'selected' : ''}}>{{$value}}</option>
              @endforeach
            </select> 
            <span class="noti-alert">(To fill up if nationality is not Singaporean)</span>
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="birthday">Date of Birth<span>*</span></label>
          <div class="custom-input-layout-row">
            <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Date of Birth" value="{{$infoPfr->client1->dob ?? ''}}" data-parsley-trigger="change" required="">
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="select_marital">Marital Status<span>*</span></label>
          <div class="custom-input-layout-row">
            <select name="select_marital" id="select_marital" class="form-control" data-parsley-trigger="change" required="">
              @php 
                  $maritals = [
                      'S' => 'Single',
                      'M' => 'Married',
                      'W' => 'Widowed',
                      'D' => 'Divorced'
                  ];
              @endphp
              @foreach($maritals as $key=>$value)
                  <option value="{{$key}}" {{isset($infoPfr->client1->marital_status) && $infoPfr->client1->marital_status == $key ? 'selected' : ''}}>{{$value}}</option>
              @endforeach
            </select> 
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="smoker1">Smoker<span>*</span></label>
          <div class="custom-input-layout-row">
              <label class="radio-inline custom-style-radio1">
                  <div class="style-checked">
                      <i class="fas fa-check-circle"></i>
                      <input type="radio" name="smoker" value="0" @if(isset($infoPfr->client1->smoker)) @if($infoPfr->client1->smoker == 0) {{'checked'}}@endif @else {{'checked'}} @endif>
                  </div>
                  Yes
              </label>
              <label class="radio-inline custom-style-radio1">
                  <div class="style-checked">
                      <i class="far fa-circle"></i>
                      <input type="radio" name="smoker" value="1" {{isset($infoPfr->client1->smoker) && $infoPfr->client1->smoker == 1 ? 'checked' : ''}}>
                  </div>
                  No 
              </label>
          </div>
        </div>
        <hr  class="hr-fullcontent"/>
        <div class="form-group form-layout-row">
          <label for="select_employment">Employment Status<span>*</span></label>
          <div class="custom-input-layout-row">
            <select name="select_employment" id="select_employment" class="form-control" data-parsley-trigger="change" required="">
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
              @foreach($employments_status as $key=>$e)
                  <option value="{{$key}}" {{isset($infoPfr->client1->employment_status) && $infoPfr->client1->employment_status == $key ? 'selected' : ''}}>{{$e}}</option>
              @endforeach
            </select> 
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="occupation">Occupation<span>*</span></label>
          <div class="custom-input-layout-row">
            <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" value="{{$infoPfr->client1->occupation ?? ''}}" data-parsley-trigger="change" required="">
            <span class="noti-alert">(If Retired, please indicate previous occupation)</span>
          </div>
        </div>
      </div>
      <div class="single-fact-colum">
        <div class="form-group form-layout-row">
          <label for="company_name">Company Name<span>*</span></label>
          <div class="custom-input-layout-row">
            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" value="{{$infoPfr->client1->company ?? ''}}" data-parsley-trigger="change" required="">
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="business_nature">Business Nature<span>*</span></label>
          <div class="custom-input-layout-row">
            <input type="text" class="form-control" id="business_nature" name="business_nature" placeholder="Business Nature" value="{{$infoPfr->client1->business_nature ?? ''}}" data-parsley-trigger="change" required="">
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="select_annual_income">Annual Income Range ($)<span>*</span></label>
          <div class="custom-input-layout-row">
            <select name="select_annual_income" id="select_annual_income" class="form-control" data-parsley-trigger="change" required="">
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
              @foreach($annual_income as $key=>$value)
                  <option value="{{$key}}" {{isset($infoPfr->client1->income_range) && $infoPfr->client1->income_range == $key ? 'selected' : ''}}>{{$value}}</option>
              @endforeach
            </select> 
          </div>
        </div>
        <hr  class="hr-fullcontent"/>
        <div class="form-group form-layout-row">
          <label for="details_home">Contact Details - Home</label>
          <div class="custom-input-layout-row">
            <input type="text" class="form-control" id="details_home" name="details_home" placeholder="Contact Details" value="{{$infoPfr->client1->contact_home ?? ''}}">
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="details_mobile">Contact Details - Mobile<span>*</span></label>
          <div class="custom-input-layout-row">
            <input type="tel" class="form-control" id="details_mobile" name="details_mobile" placeholder="Contact Details" value="{{$infoPfr->client1->contact_mobile ?? ''}}" data-parsley-trigger="change" required="">
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="details_office">Contact Details - Office</label>
          <div class="custom-input-layout-row">
            <input type="text" class="form-control" id="details_office" name="details_office" placeholder="Contact Details" value="{{$infoPfr->client1->contact_office ?? ''}}">
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="details_fax">Contact Details - Fax</label>
          <div class="custom-input-layout-row">
            <input type="tel" class="form-control" id="details_fax" name="details_fax" placeholder="Contact Details" value="{{$infoPfr->client1->contact_fax ?? ''}}">
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="email_address">E-mail Address</label>
          <div class="custom-input-layout-row">
            <input type="email" class="form-control" id="email_address"  name="email_address" placeholder="E-mail Address" value="{{$infoPfr->client1->email ?? ''}}">
            <span class="noti-alert">(Compulsory for Investment Products)</span>
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="residential_address">Residential Address<span>*</span></label>
          <div class="custom-input-layout-row">
            <input type="text" class="form-control" id="residential_address" name="residential_address" placeholder="Residential Address" value="{{$infoPfr->client1->residential_address ?? ''}}" data-parsley-trigger="change" required="">
          </div>
        </div>
        <div class="form-group form-layout-row">
          <label for="mailing_address">Mailing Address</label>
          <div class="custom-input-layout-row">
            <input type="email" class="form-control" id="mailing_address" name="mailing_address" placeholder="Mailing Address" value="{{$infoPfr->client1->mailing_address ?? ''}}" data-parsley-trigger="change">
            <span class="noti-alert">(if different from Residential Address)</span>
          </div>
        </div>
      </div>
      <div class="nav-step">
          <button type="submit" class="btn btn-primary mb-2 radius_2 style-button1">Next</button>
      </div>
    </form>
  </div>
</div>
@include('pages.navigation', ['id' => $infoPfr->id])
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#title').change(function(){
      var title = $(this).val();
      if(title == "Mrs" || title == "Ms" || title == "Mdm"){
        $('#female').prop('checked', true).siblings('i').addClass('fas fa-check-circle').removeClass('far fa-circle');
        $('#male').prop('checked', false).siblings('i').addClass('far fa-circle').removeClass('fas fa-check-circle');
      }else{
        $('#female').prop('checked', false).siblings('i').addClass('far fa-circle').removeClass('fas fa-check-circle');
        $('#male').prop('checked', true).siblings('i').addClass('fas fa-check-circle').removeClass('far fa-circle');
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
