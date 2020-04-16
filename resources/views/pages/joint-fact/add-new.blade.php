@extends('master')

@section('content')
<div class="maincontent">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
    <h4>Joint Personal Information:</h4>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form name="addsinglefact_form" id='addsinglefact_form' class="parsley-form" method="post" action="{{!isset($infoPfr) ? route('joint-fact.add_new') : route('join-fact.postedit', $infoPfr->id)}}" data-parsley-validate1>
      @csrf
    @for($i=1;$i<=2;$i++)
      @php 
        if(isset($infoPfr))
            if($i == 1){
                $client = $infoPfr->client_first();
            }else {
                $client = $infoPfr->client_second();
            } 
      @endphp
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      {{-- @dump($i,$client) --}}
        <h4 class="text-center">Client {{$i}}</h4>
      <div class="form-group form-layout-row">
        <label for="title">Title<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="title{{$i}}" id="title" class="form-control" data-parsley-trigger="change">
            @foreach($array_title_name as $title)
              <option value="{{$title}}" {{isset($client->title) && $client->title == $title ? 'selected' : ''}}>{{$title}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="single_name">Name<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="single_name" name="join_name{{$i}}" placeholder="Name" value="{{$client->name ?? ""}}" data-parsley-trigger="change">
          <span class="noti-alert">(as in NRIC / Passport)</span>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="single_name">Gender<span>*</span></label>
        <div class="custom-input-layout-row">
          <label class="radio-inline custom-style-radio1">
            <div class="style-checked style-radio-custom">
                <input type="radio" name="sex{{$i}}" id="male" value="0" checked>
                <span class="checkmark-radio"></span>
            </div>
            Male
          </label>
          <label class="radio-inline custom-style-radio1">
            <div class="style-checked style-radio-custom">
              <input type="radio" name="sex{{$i}}" id="female" value="1">
              <span class="checkmark-radio"></span>
            </div>
            Female
          </label>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="passport_no">NRIC/Passport No<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="passport_no" name="passport_no{{$i}}" placeholder="NRIC/Passport No" value="{{$client->nric_passport ?? ""}}" data-parsley-trigger="change">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="select-country">Nationality<span>*</span></label>
        <div class="custom-input-layout-row">
          <select id="select_nationality" name="select_nationality{{$i}}" data-parsley-trigger="change">
            <option value="">-- select one --</option>
            @foreach($nationalities as $key=>$n)
              <option value="{{$key}}" {{isset($client->nationality) && $client->nationality == $key ? 'selected' : ''}}>{{$n}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="select_residency">Residency Status<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="select_residency{{$i}}" id="select_residency" class="form-control" data-parsley-trigger="change">
            @php 
                $residency = [
                    'singapore-pr' => 'Singapore PR',
                    'employment-pass' => 'Employment Pass',
                    's-pass' => 'S-Pass',
                    'work-permit' => 'Word Permit',
                    'dependants-pass' => 'Dependant\'s Pass<',
                    'student-pass' => 'Student Pass<',
                    'others' => 'Others'
                ];
            @endphp
            @foreach($residency as $key=>$value)
                <option value="{{$key}}" {{isset($client->select_residency) && $client->select_residency == $key ? 'selected' : ''}}>{{$value}}</option>
            @endforeach
          </select> 
          <span class="noti-alert">(To fill up if nationality is not Singaporean)</span>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="birthday">Date of Birth<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="date" class="form-control" id="birthday" name="birthday{{$i}}" placeholder="Date of Birth" value="{{$client->dob ?? ""}}" data-parsley-trigger="change">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="select_marital">Marital Status<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="select_marital" id="select_marital" class="form-control" data-parsley-trigger="change">
            @php 
                $maritals = [
                    'S' => 'Single',
                    'M' => 'Married',
                    'W' => 'Widowed',
                    'D' => 'Divorced'
                ];
            @endphp
            @foreach($maritals as $key=>$value)
                <option value="{{$key}}" {{isset($client->marital_status) && $client->marital_status == $key ? 'selected' : ''}}>{{$value}}</option>
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
                    <input type="radio" name="smoker{{$i}}" value="0" checked>
                </div>
                Yes
            </label>
            <label class="radio-inline custom-style-radio1">
                <div class="style-checked">
                    <i class="far fa-circle"></i>
                    <input type="radio" name="smoker{{$i}}" value="1">
                </div>
                No 
            </label>
        </div>
      </div>
      <hr  class="hr-fullcontent"/>
      <div class="form-group form-layout-row">
        <label for="select_employment">Employment Status<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="select_employment{{$i}}" id="select_employment" class="form-control" data-parsley-trigger="change">
            @php 
                $employments_status = [
                    'FT' => 'Full time',
                    'pT' => 'Part time',
                    'SE' => 'Self-Employed',
                    'UN' => 'Unemployed',
                    'RT' => 'Retired',
                    'Ot' => 'Others',
                ];
            @endphp
            @foreach($employments_status as $key=>$e)
                <option value="{{$key}}" {{isset($client->employment_status) && $client->employment_status == $key ? 'selected' : ''}}>{{$e}}</option>
            @endforeach
          </select> 
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="occupation">Occupation<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="occupation" name="occupation{{$i}}" placeholder="Occupation" value="{{$client->occupation ?? ""}}" data-parsley-trigger="change">
          <span class="noti-alert">(If Retired, please indicate previous occupation)</span>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="company_name">Company Name<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="company_name" name="company_name{{$i}}" placeholder="Company Name" value="{{$client->company ?? ""}}" data-parsley-trigger="change">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="business_nature">Business Nature<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="business_nature" name="business_nature{{$i}}" placeholder="Business Nature" value="{{$client->business_nature ?? ""}}" data-parsley-trigger="change">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="select_annual_income">Annual Income Range ($)<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="select_annual_income{{$i}}" id="select_annual_income" class="form-control" data-parsley-trigger="change">
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
                <option value="{{$key}}" {{isset($client->income_range) && $client->income_range == $key ? 'selected' : ''}}>{{$value}}</option>
            @endforeach
          </select> 
        </div>
      </div>
      <hr  class="hr-fullcontent"/>
      <div class="form-group form-layout-row">
        <label for="details_home">Contact Details - Home</label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="details_home" name="details_home{{$i}}" placeholder="Contact Details" value="{{$client->contact_home ?? ""}}">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="details_mobile">Contact Details - Mobile<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="tel" class="form-control" id="details_mobile" name="details_mobile{{$i}}" placeholder="Contact Details" value="{{$client->contact_mobile ?? ""}}" data-parsley-trigger="change">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="details_office">Contact Details - Office</label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="details_office" name="details_office{{$i}}" placeholder="Contact Details" value="{{$client->contact_office ?? ""}}">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="details_fax">Contact Details - Fax</label>
        <div class="custom-input-layout-row">
          <input type="tel" class="form-control" id="details_fax" name="details_fax{{$i}}" placeholder="Contact Details" value="{{$client->contact_fax ?? ""}}">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="email_address">E-mail Address</label>
        <div class="custom-input-layout-row">
          <input type="email" class="form-control" id="email_address"  name="email_address{{$i}}" placeholder="E-mail Address" value="{{$client->email ?? ""}}">
          <span class="noti-alert">(Compulsory for Investment Products)</span>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="residential_address">Residential Address<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="residential_address" name="residential_address{{$i}}" placeholder="Residential Address" value="{{$client->residential_address ?? ""}}" data-parsley-trigger="change">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="mailing_address">Mailing Address</label>
        <div class="custom-input-layout-row">
          <input type="email" class="form-control" id="mailing_address" name="mailing_address{{$i}}" placeholder="Mailing Address" value="{{$client->mailing_address ?? ""}}" data-parsley-trigger="change">
          <span class="noti-alert">(if different from Residential Address)</span>
        </div>
      </div>
    </div>
    @endfor
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
