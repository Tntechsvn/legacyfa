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
                    <label for="select-title">Title<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select_title1" id="select_title1" class="form-control">
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                        <option value="Dr">Dr</option>
                        <option value="Mdm">Mdm</option>
                    </select>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select_title2" id="select_title2" class="form-control">
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
                    <label for="single-name">Gender <span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <label class="radio-inline">
                      <input type="radio" name="sex1" value="0" checked>Male
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="sex1" value="1">Female 
                    </label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <label class="radio-inline">
                      <input type="radio" name="sex2" value="0" checked>Male
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="sex2" value="1">Female 
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
                    <select class="form-control selectpicker countrypicker" name="select_nationality1" id="select_nationality1" ></select>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select class="form-control selectpicker countrypicker" name="select_nationality2" id="select_nationality2" ></select>
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
    $('#addjoinfact_form').on('submit', function(e){
      e.preventDefault();
      var data = $(this).serialize();
      $.ajax({
        type: "POST",
        url: $(this).attr('action'),
        data: data,
        dataType: 'json',
        success: function(res){
          console.log(res);
          if(res['error']){
            alert(res['message']);
          }else{
            alert(res['message']);
          }
        }
      });
    });
  });
</script>
@endsection
