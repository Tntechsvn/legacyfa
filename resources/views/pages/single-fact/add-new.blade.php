@extends('master')

@section('content')
<div class="maincontent">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
    <h4>Personal Information:</h4>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form name="addsinglefact_form" id='addsinglefact_form' class="parsley-form" method="post" action="{{route('single-fact.add_new')}}" data-parsley-validate>
      @csrf
      <div class="form-group form-layout-row">
        <label for="title">Title<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="title" id="title" class="form-control" data-parsley-trigger="change" required="">
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
            <option value="Dr">Dr</option>
            <option value="Mdm">Mdm</option>
          </select>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="single_name">Name<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="single_name" name="single_name" placeholder="Name" value="" data-parsley-trigger="change" required="">
          <span class="noti-alert">(as in NRIC / Passport)</span>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <div class="custom-input-layout-row">
          <label class="radio-inline">
            <input type="radio" name="sex" id="male" value="0" checked>Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="sex" id="female" value="1">Female 
          </label>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="passport_no">NRIC/Passport No<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="passport_no" name="passport_no" placeholder="NRIC/Passport No" value="" data-parsley-trigger="change" required="">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="select-country">Nationality<span>*</span></label>
        <div class="custom-input-layout-row">
          <select id="select_nationality" name="select_nationality" data-parsley-trigger="change" required="">
            <option value="">-- select one --</option>
            <option value="afghan">Afghan</option>
            <option value="albanian">Albanian</option>
            <option value="algerian">Algerian</option>
            <option value="american">American</option>
            <option value="andorran">Andorran</option>
            <option value="angolan">Angolan</option>
            <option value="antiguans">Antiguans</option>
            <option value="argentinean">Argentinean</option>
            <option value="armenian">Armenian</option>
            <option value="australian">Australian</option>
            <option value="austrian">Austrian</option>
            <option value="azerbaijani">Azerbaijani</option>
            <option value="bahamian">Bahamian</option>
            <option value="bahraini">Bahraini</option>
            <option value="bangladeshi">Bangladeshi</option>
            <option value="barbadian">Barbadian</option>
            <option value="barbudans">Barbudans</option>
            <option value="batswana">Batswana</option>
            <option value="belarusian">Belarusian</option>
            <option value="belgian">Belgian</option>
            <option value="belizean">Belizean</option>
            <option value="beninese">Beninese</option>
            <option value="bhutanese">Bhutanese</option>
            <option value="bolivian">Bolivian</option>
            <option value="bosnian">Bosnian</option>
            <option value="brazilian">Brazilian</option>
            <option value="british">British</option>
            <option value="bruneian">Bruneian</option>
            <option value="bulgarian">Bulgarian</option>
            <option value="burkinabe">Burkinabe</option>
            <option value="burmese">Burmese</option>
            <option value="burundian">Burundian</option>
            <option value="cambodian">Cambodian</option>
            <option value="cameroonian">Cameroonian</option>
            <option value="canadian">Canadian</option>
            <option value="cape verdean">Cape Verdean</option>
            <option value="central african">Central African</option>
            <option value="chadian">Chadian</option>
            <option value="chilean">Chilean</option>
            <option value="chinese">Chinese</option>
            <option value="colombian">Colombian</option>
            <option value="comoran">Comoran</option>
            <option value="congolese">Congolese</option>
            <option value="costa rican">Costa Rican</option>
            <option value="croatian">Croatian</option>
            <option value="cuban">Cuban</option>
            <option value="cypriot">Cypriot</option>
            <option value="czech">Czech</option>
            <option value="danish">Danish</option>
            <option value="djibouti">Djibouti</option>
            <option value="dominican">Dominican</option>
            <option value="dutch">Dutch</option>
            <option value="east timorese">East Timorese</option>
            <option value="ecuadorean">Ecuadorean</option>
            <option value="egyptian">Egyptian</option>
            <option value="emirian">Emirian</option>
            <option value="equatorial guinean">Equatorial Guinean</option>
            <option value="eritrean">Eritrean</option>
            <option value="estonian">Estonian</option>
            <option value="ethiopian">Ethiopian</option>
            <option value="fijian">Fijian</option>
            <option value="filipino">Filipino</option>
            <option value="finnish">Finnish</option>
            <option value="french">French</option>
            <option value="gabonese">Gabonese</option>
            <option value="gambian">Gambian</option>
            <option value="georgian">Georgian</option>
            <option value="german">German</option>
            <option value="ghanaian">Ghanaian</option>
            <option value="greek">Greek</option>
            <option value="grenadian">Grenadian</option>
            <option value="guatemalan">Guatemalan</option>
            <option value="guinea-bissauan">Guinea-Bissauan</option>
            <option value="guinean">Guinean</option>
            <option value="guyanese">Guyanese</option>
            <option value="haitian">Haitian</option>
            <option value="herzegovinian">Herzegovinian</option>
            <option value="honduran">Honduran</option>
            <option value="hungarian">Hungarian</option>
            <option value="icelander">Icelander</option>
            <option value="indian">Indian</option>
            <option value="indonesian">Indonesian</option>
            <option value="iranian">Iranian</option>
            <option value="iraqi">Iraqi</option>
            <option value="irish">Irish</option>
            <option value="israeli">Israeli</option>
            <option value="italian">Italian</option>
            <option value="ivorian">Ivorian</option>
            <option value="jamaican">Jamaican</option>
            <option value="japanese">Japanese</option>
            <option value="jordanian">Jordanian</option>
            <option value="kazakhstani">Kazakhstani</option>
            <option value="kenyan">Kenyan</option>
            <option value="kittian and nevisian">Kittian and Nevisian</option>
            <option value="kuwaiti">Kuwaiti</option>
            <option value="kyrgyz">Kyrgyz</option>
            <option value="laotian">Laotian</option>
            <option value="latvian">Latvian</option>
            <option value="lebanese">Lebanese</option>
            <option value="liberian">Liberian</option>
            <option value="libyan">Libyan</option>
            <option value="liechtensteiner">Liechtensteiner</option>
            <option value="lithuanian">Lithuanian</option>
            <option value="luxembourger">Luxembourger</option>
            <option value="macedonian">Macedonian</option>
            <option value="malagasy">Malagasy</option>
            <option value="malawian">Malawian</option>
            <option value="malaysian">Malaysian</option>
            <option value="maldivan">Maldivan</option>
            <option value="malian">Malian</option>
            <option value="maltese">Maltese</option>
            <option value="marshallese">Marshallese</option>
            <option value="mauritanian">Mauritanian</option>
            <option value="mauritian">Mauritian</option>
            <option value="mexican">Mexican</option>
            <option value="micronesian">Micronesian</option>
            <option value="moldovan">Moldovan</option>
            <option value="monacan">Monacan</option>
            <option value="mongolian">Mongolian</option>
            <option value="moroccan">Moroccan</option>
            <option value="mosotho">Mosotho</option>
            <option value="motswana">Motswana</option>
            <option value="mozambican">Mozambican</option>
            <option value="namibian">Namibian</option>
            <option value="nauruan">Nauruan</option>
            <option value="nepalese">Nepalese</option>
            <option value="new zealander">New Zealander</option>
            <option value="ni-vanuatu">Ni-Vanuatu</option>
            <option value="nicaraguan">Nicaraguan</option>
            <option value="nigerien">Nigerien</option>
            <option value="north korean">North Korean</option>
            <option value="northern irish">Northern Irish</option>
            <option value="norwegian">Norwegian</option>
            <option value="omani">Omani</option>
            <option value="pakistani">Pakistani</option>
            <option value="palauan">Palauan</option>
            <option value="panamanian">Panamanian</option>
            <option value="papua new guinean">Papua New Guinean</option>
            <option value="paraguayan">Paraguayan</option>
            <option value="peruvian">Peruvian</option>
            <option value="polish">Polish</option>
            <option value="portuguese">Portuguese</option>
            <option value="qatari">Qatari</option>
            <option value="romanian">Romanian</option>
            <option value="russian">Russian</option>
            <option value="rwandan">Rwandan</option>
            <option value="saint lucian">Saint Lucian</option>
            <option value="salvadoran">Salvadoran</option>
            <option value="samoan">Samoan</option>
            <option value="san marinese">San Marinese</option>
            <option value="sao tomean">Sao Tomean</option>
            <option value="saudi">Saudi</option>
            <option value="scottish">Scottish</option>
            <option value="senegalese">Senegalese</option>
            <option value="serbian">Serbian</option>
            <option value="seychellois">Seychellois</option>
            <option value="sierra leonean">Sierra Leonean</option>
            <option value="singaporean">Singaporean</option>
            <option value="slovakian">Slovakian</option>
            <option value="slovenian">Slovenian</option>
            <option value="solomon islander">Solomon Islander</option>
            <option value="somali">Somali</option>
            <option value="south african">South African</option>
            <option value="south korean">South Korean</option>
            <option value="spanish">Spanish</option>
            <option value="sri lankan">Sri Lankan</option>
            <option value="sudanese">Sudanese</option>
            <option value="surinamer">Surinamer</option>
            <option value="swazi">Swazi</option>
            <option value="swedish">Swedish</option>
            <option value="swiss">Swiss</option>
            <option value="syrian">Syrian</option>
            <option value="taiwanese">Taiwanese</option>
            <option value="tajik">Tajik</option>
            <option value="tanzanian">Tanzanian</option>
            <option value="thai">Thai</option>
            <option value="togolese">Togolese</option>
            <option value="tongan">Tongan</option>
            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
            <option value="tunisian">Tunisian</option>
            <option value="turkish">Turkish</option>
            <option value="tuvaluan">Tuvaluan</option>
            <option value="ugandan">Ugandan</option>
            <option value="ukrainian">Ukrainian</option>
            <option value="uruguayan">Uruguayan</option>
            <option value="uzbekistani">Uzbekistani</option>
            <option value="venezuelan">Venezuelan</option>
            <option value="vietnamese">Vietnamese</option>
            <option value="welsh">Welsh</option>
            <option value="yemenite">Yemenite</option>
            <option value="zambian">Zambian</option>
            <option value="zimbabwean">Zimbabwean</option>
          </select>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="select_residency">Residency Status<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="select_residency" id="select_residency" class="form-control" data-parsley-trigger="change" required="">
            <option value="singapore-pr">Singapore PR</option>
            <option value="employment-pass">Employment Pass</option>
            <option value="s-pass">S-Pass</option>
            <option value="work-permit">Work Permit</option>
            <option value="dependants-pass">Dependant's Pass</option>
            <option value="student-pass">Student Pass</option>
            <option value="others">Others</option>
          </select> 
          <span class="noti-alert">(To fill up if nationality is not Singaporean)</span>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="birthday">Date of Birth<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Date of Birth" value="" data-parsley-trigger="change" required="">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="select_marital">Marital Status<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="select_marital" id="select_marital" class="form-control" data-parsley-trigger="change" required="">
            <option value="S">Single</option>
            <option value="M">Married</option>
            <option value="W">Widowed</option>
            <option value="D">Divorced</option>
          </select> 
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="smoker1">Smoker<span>*</span></label>
        <div class="custom-input-layout-row">
          <label class="radio-inline">
            <input type="radio" name="smoker" value="0" checked>Yes
          </label>
          <label class="radio-inline">
            <input type="radio" name="smoker" value="1">No 
          </label>
        </div>
      </div>
      <hr  class="hr-fullcontent"/>
      <div class="form-group form-layout-row">
        <label for="select_employment">Employment Status<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="select_employment" id="select_employment" class="form-control" data-parsley-trigger="change" required="">
            <option value="FT">Full Time</option>
            <option value="PT">Part Time</option>
            <option value="SE">Self-Employed</option>
            <option value="UN">Unemployed</option>
            <option value="RT">Retired</option>
            <option value="Ot">Others</option>
          </select> 
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="occupation">Occupation<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" value="" data-parsley-trigger="change" required="">
          <span class="noti-alert">(If Retired, please indicate previous occupation)</span>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="company_name">Company Name<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name" value="" data-parsley-trigger="change" required="">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="business_nature">Business Nature<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="business_nature" name="business_nature" placeholder="Business Nature" value="" data-parsley-trigger="change" required="">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="select_annual_income">Annual Income Range ($)<span>*</span></label>
        <div class="custom-input-layout-row">
          <select name="select_annual_income" id="select_annual_income" class="form-control" data-parsley-trigger="change" required="">
            <option value="0">0-29,999</option>
            <option value="30">30,000-49,999</option>
            <option value="50">50,000-99,999</option>
            <option value="100">100,000-149,999</option>
            <option value="150">150,000-299,999</option>
            <option value="300">300,000 & above</option>
          </select> 
        </div>
      </div>
      <hr  class="hr-fullcontent"/>
      <div class="form-group form-layout-row">
        <label for="details_home">Contact Details - Home</label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="details_home" name="details_home" placeholder="Contact Details" value="">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="details_mobile">Contact Details - Mobile<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="tel" class="form-control" id="details_mobile" name="details_mobile" placeholder="Contact Details" value="" data-parsley-trigger="change" required="">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="details_office">Contact Details - Office</label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="details_office" name="details_office" placeholder="Contact Details" value="">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="details_fax">Contact Details - Fax</label>
        <div class="custom-input-layout-row">
          <input type="tel" class="form-control" id="details_fax" name="details_fax" placeholder="Contact Details" value="">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="email_address">E-mail Address</label>
        <div class="custom-input-layout-row">
          <input type="email" class="form-control" id="email_address"  name="email_address" placeholder="E-mail Address" value="">
          <span class="noti-alert">(Compulsory for Investment Products)</span>
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="residential_address">Residential Address<span>*</span></label>
        <div class="custom-input-layout-row">
          <input type="text" class="form-control" id="residential_address" name="residential_address" placeholder="Residential Address" value="" data-parsley-trigger="change" required="">
        </div>
      </div>
      <div class="form-group form-layout-row">
        <label for="mailing_address">Mailing Address</label>
        <div class="custom-input-layout-row">
          <input type="email" class="form-control" id="mailing_address" name="mailing_address" placeholder="Mailing Address" value="" data-parsley-trigger="change">
          <span class="noti-alert">(if different from Residential Address)</span>
        </div>
      </div>
      <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
    </form>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
    <ul>
      <li class="active"><a href="javascript:;">1</a></li>
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

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#title').change(function(){
      var title = $(this).val();
      if(title == "Mrs" || title == "Ms" || title == "Mdm"){
        $('#female').prop('checked', true);
        $('#male').prop('checked', false);
      }else{
        $('#female').prop('checked', false);
        $('#male').prop('checked', true);
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
