@extends('master')

@section('content')

<div class="maincontent">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
    <h4>Joint Personal Information:</h4>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form name="addjoinfact_form" id='addjoinfact_form' class="form-control-popup" method="post" action="{{route('joint-fact.add_new')}}" data-parsley-validate>
      @csrf
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="title1">Title<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="title1" id="title1" class="form-control">
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
            <option value="Dr">Dr</option>
            <option value="Mdm">Mdm</option>
          </select>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="title2" id="title2" class="form-control">
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Ms">Ms</option>
            <option value="Dr">Dr</option>
            <option value="Mdm">Mdm</option>
          </select> 
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="join_name1">Name<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="join_name1" name="join_name1" placeholder="Name" value="" >
          <span class="noti-alert">(as in NRIC / Passport)</span>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="join_name2" name="join_name2" placeholder="Name" value="" >
          <span class="noti-alert">(as in NRIC / Passport)</span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="relationship">Relationship to Client 1<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">

        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 pull-right">
          <label class="radio-inline">
            <input type="radio" name="relationship" value="1" checked>Spouse
          </label>
          <label class="radio-inline">
            <input type="radio" name="relationship" value="2">Child 
          </label>
          <label class="radio-inline">
            <input type="radio" name="relationship" value="3">Parent 
          </label>
          <label class="radio-inline">
            <input type="radio" name="relationship" value="4">Others
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="single-name">Gender <span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <label class="radio-inline">
            <input type="radio" name="sex1" id="male1" value="0" checked>Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="sex1" id="female1" value="1">Female 
          </label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <label class="radio-inline">
            <input type="radio" name="sex2" id="male2" value="0" checked>Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="sex2" id="female2" value="1">Female 
          </label>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="passport_no1">NRIC/Passport No<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="passport_no1"  name="passport_no1" placeholder="NRIC/Passport No" value="" >
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="passport_no2"  name="passport_no2" placeholder="NRIC/Passport No" value="" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="select_nationality1">Nationality<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select id="select_nationality1" name="select_nationality1">
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
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select id="select_nationality2" name="select_nationality2">
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
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="select_residency1">Residency Status<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="select_residency1" id="select_residency1" class="form-control">
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
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="select_residency2" id="select_residency2" class="form-control">
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
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="birthday1">Date of Birth<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="date" class="form-control" id="birthday1" name="birthday1" placeholder="Date of Birth" value="" >
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="date" class="form-control" id="birthday2" name="birthday2" placeholder="Date of Birth" value="" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="select_marital1">Marital Status<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="select_marital1" id="select_marital1" class="form-control">
            <option value="S">Single</option>
            <option value="M">Married</option>
            <option value="W">Widowed</option>
            <option value="D">Divorced</option>
          </select>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="select_marital2" id="select_marital2" class="form-control">
            <option value="S">Single</option>
            <option value="M">Married</option>
            <option value="W">Widowed</option>
            <option value="D">Divorced</option>
          </select>
        </div> 
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="smoker1">Smoker<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <label class="radio-inline">
            <input type="radio" name="smoker1" value="0" checked>Yes
          </label>
          <label class="radio-inline">
            <input type="radio" name="smoker1" value="1">No 
          </label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <label class="radio-inline">
            <input type="radio" name="smoker2" value="0" checked>Yes
          </label>
          <label class="radio-inline">
            <input type="radio" name="smoker2" value="1">No 
          </label>
        </div>
      </div>
      <hr  class="hr-fullcontent"/>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="select_employment1">Employment Status<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="select_employment1" id="select_employment1" class="form-control">
            <option value="FT">Full Time</option>
            <option value="PT">Part Time</option>
            <option value="SE">Self-Employed</option>
            <option value="UN">Unemployed</option>
            <option value="RT">Retired</option>
            <option value="Ot">Others</option>
          </select>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="select_employment2" id="select_employment2" class="form-control">
            <option value="FT">Full Time</option>
            <option value="PT">Part Time</option>
            <option value="SE">Self-Employed</option>
            <option value="UN">Unemployed</option>
            <option value="RT">Retired</option>
            <option value="Ot">Others</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="occupation1">Occupation<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="occupation1" name="occupation1" placeholder="Occupation" value="" >
          <span class="noti-alert">(If Retired, please indicate previous occupation)</span>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="occupation2" name="occupation2" placeholder="Occupation" value="" >
          <span class="noti-alert">(If Retired, please indicate previous occupation)</span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="company_name1">Company Name<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="company_name1" name="company_name1" placeholder="Company Name" value="" required>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="company_name2" name="company_name2" placeholder="Company Name" value="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="business_nature1">Business Nature<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="business_nature1" name="business_nature1" placeholder="Business Nature" value="" required>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="business_nature2" name="business_nature2" placeholder="Business Nature" value="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="select_annual_income1">Annual Income Range ($)<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="select_annual_income1" id="select_annual_income1" class="form-control" required>
            <option value="0">0-29,999</option>
            <option value="30">30,000-49,999</option>
            <option value="50">50,000-99,999</option>
            <option value="100">100,000-149,999</option>
            <option value="150">150,000-299,999</option>
            <option value="300">300,000 & above</option>
          </select>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <select name="select_annual_income2" id="select_annual_income2" class="form-control" required>
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
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="details_home1">Contact Details - Home</label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="details_home1" name="details_home1" placeholder="Contact Details" value="">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="details_home2" name="details_home2" placeholder="Contact Details" value="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="details_mobile1">Contact Details - Mobile<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="tel" class="form-control" id="details_mobile1" name="details_mobile1" placeholder="Contact Details" value="" required>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="tel" class="form-control" id="details_mobile2" name="details_mobile2" placeholder="Contact Details" value="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="details_office1">Contact Details - Office</label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="details_office1" name="details_office1" placeholder="Contact Details" value="">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="text" class="form-control" id="details_office2" name="details_office2" placeholder="Contact Details" value="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="details_fax1">Contact Details - Fax</label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="tel" class="form-control" id="details_fax1" name="details_fax1" placeholder="Contact Details" value="">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="tel" class="form-control" id="details_fax2" name="details_fax2" placeholder="Contact Details" value="">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="email_address1">E-mail Address</label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="email" class="form-control" id="email_address1" name="email_address1" placeholder="E-mail Address" value="">
          <span class="noti-alert">(Compulsory for Investment Products)</span>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="email" class="form-control" id="email_address2" name="email_address2" placeholder="E-mail Address" value="">
          <span class="noti-alert">(Compulsory for Investment Products)</span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="residential_address1">Residential Address<span>*</span></label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="tel" class="form-control" id="residential_address1" name="residential_address1" placeholder="Residential Address" value="" required>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="tel" class="form-control" id="residential_address2" name="residential_address2" placeholder="Residential Address" value="" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <label for="mailing_address1">Mailing Address</label>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="tel" class="form-control" id="mailing_address1" name="mailing_address1" placeholder="Mailing Address" value="">
          <span class="noti-alert">(if different from Residential Address)</span>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <input type="tel" class="form-control" id="mailing_address2" name="mailing_address2" placeholder="Mailing Address" value="">
          <span class="noti-alert">(if different from Residential Address)</span>
        </div>
      </div>
      <button class="btn btn-primary mb-2">Back</button>
      <button type="submit" class="btn btn-primary mb-2">Next</button>
    </form>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function(){
    $('#title1').change(function(){
      var title1 = $(this).val();
      if(title1 == "Mrs" || title1 == "Ms" || title1 == "Mdm"){
        $('#female1').prop('checked', true);
        $('#male1').prop('checked', false);
      }else{
        $('#female1').prop('checked', false);
        $('#male1').prop('checked', true);
      }
    });

    $('#title2').change(function(){
      var title2 = $(this).val();
      if(title2 == "Mrs" || title2 == "Ms" || title2 == "Mdm"){
        $('#female2').prop('checked', true);
        $('#male2').prop('checked', false);
      }else{
        $('#female2').prop('checked', false);
        $('#male2').prop('checked', true);
      }
    });

    $('#addjoinfact_form').on('submit', function(e){
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
            alert(res['message']);
          }
        }
      });
    });
  });
</script>
@endsection
