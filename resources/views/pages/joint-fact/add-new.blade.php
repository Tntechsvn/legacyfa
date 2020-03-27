@extends('master')

@section('content')

<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Joint Personal Information:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="addsinglefact_form" id='addsinglefact_form' class="form-control-popup" method="post" action="" data-parsley-validate>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="select-title">Title<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select-title" id="select-title" class="form-control">
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="ms">Ms</option>
                        <option value="dr">Dr</option>
                        <option value="mdm">Mdm</option>
                    </select>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select-title" id="select-title" class="form-control">
                        <option value="mr">Mr</option>
                        <option value="mrs">Mrs</option>
                        <option value="ms">Ms</option>
                        <option value="dr">Dr</option>
                        <option value="mdm">Mdm</option>
                    </select> 
                </div>
            </div>
             <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="single-name">Name<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="single-name"  name="single-name" placeholder="Name" value="" >
                    <span class="noti-alert">(as in NRIC / Passport)</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="single-name"  name="single-name" placeholder="Name" value="" >
                    <span class="noti-alert">(as in NRIC / Passport)</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="single-name">Gender <span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <label class="radio-inline">
                      <input type="radio" name="sex" checked>Male
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="sex">Female 
                    </label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <label class="radio-inline">
                      <input type="radio" name="sex" checked>Male
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="sex">Female 
                    </label>
                </div>
             </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="passport-no">NRIC/Passport No<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="passport-no"  name="passport-no" placeholder="NRIC/Passport No" value="" >
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="passport-no"  name="passport-no" placeholder="NRIC/Passport No" value="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="select-country">Nationality<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select class="form-control selectpicker countrypicker" name="select-country" id="select-country" ></select>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select class="form-control selectpicker countrypicker" name="select-country" id="select-country" ></select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="select-residency">Residency Status<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select-residency" id="select-residency" class="form-control">
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
                    <select name="select-residency" id="select-residency" class="form-control">
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
                    <label for="birthday">Date of Birth<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="date" class="form-control" id="birthday"  name="birthday" placeholder="Date of Birth" value="" >
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="date" class="form-control" id="birthday"  name="birthday" placeholder="Date of Birth" value="" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="select-marital">Marital Status<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select-marital" id="select-marital" class="form-control">
                        <option value="s">Single</option>
                        <option value="m">Married</option>
                        <option value="w">Widowed</option>
                        <option value="d">Divorced</option>
                    </select>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select-marital" id="select-marital" class="form-control">
                        <option value="s">Single</option>
                        <option value="m">Married</option>
                        <option value="w">Widowed</option>
                        <option value="d">Divorced</option>
                    </select>
                </div> 
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="select-marital">Smoker<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <label class="radio-inline">
                        <input type="radio" name="smoker" checked>Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="smoker">No 
                    </label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <label class="radio-inline">
                        <input type="radio" name="smoker" checked>Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="smoker">No 
                    </label>
                </div>
            </div>
            <hr  class="hr-fullcontent"/>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="select-employment">Employment Status<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select-employment" id="select-employment" class="form-control">
                        <option value="ft">Full Time</option>
                        <option value="pt">Part Time</option>
                        <option value="se">Self-Employed</option>
                        <option value="un">Unemployed</option>
                        <option value="rt">Retired</option>
                        <option value="ot">Others</option>
                    </select>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select-employment" id="select-employment" class="form-control">
                        <option value="ft">Full Time</option>
                        <option value="pt">Part Time</option>
                        <option value="se">Self-Employed</option>
                        <option value="un">Unemployed</option>
                        <option value="rt">Retired</option>
                        <option value="ot">Others</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="occupation">Occupation<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="occupation"  name="occupation" placeholder="Occupation" value="" >
                    <span class="noti-alert">(If Retired, please indicate previous occupation)</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="occupation"  name="occupation" placeholder="Occupation" value="" >
                    <span class="noti-alert">(If Retired, please indicate previous occupation)</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="company-name">Company Name<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="company-name"  name="company-name" placeholder="Company Name" value="" required>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="company-name"  name="company-name" placeholder="Company Name" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="business-nature">Business Nature<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="business-nature"  name="business-nature" placeholder="Business Nature" value="" required>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="business-nature"  name="business-nature" placeholder="Business Nature" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="select-annual-ncome">Annual Income Range ($)<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select-annual-ncome" id="select-annual-ncome" class="form-control" required>
                        <option value="0">0-29,999</option>
                        <option value="30">30,000-49,999</option>
                        <option value="50">50,000-99,999</option>
                        <option value="100">100,000-149,999</option>
                        <option value="150">150,000-299,999</option>
                        <option value="300">300,000 & above</option>
                    </select>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <select name="select-annual-ncome" id="select-annual-ncome" class="form-control" required>
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
                    <label for="details-home">Contact Details - Home</label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="details-home"  name="details-home" placeholder="Contact Details" value="">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="details-home"  name="details-home" placeholder="Contact Details" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="details-mobile">Contact Details - Mobile<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="tel" class="form-control" id="details-mobile"  name="details-mobile" placeholder="Contact Details" value="" required>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="tel" class="form-control" id="details-mobile"  name="details-mobile" placeholder="Contact Details" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="details-office">Contact Details - Office</label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="details-office"  name="details-office" placeholder="Contact Details" value="">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="text" class="form-control" id="details-office"  name="details-office" placeholder="Contact Details" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="details-fax">Contact Details - Fax</label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="tel" class="form-control" id="details-fax"  name="details-fax" placeholder="Contact Details" value="">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="tel" class="form-control" id="details-fax"  name="details-fax" placeholder="Contact Details" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="email-address">E-mail Address</label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="email" class="form-control" id="email-address"  name="email-address" placeholder="E-mail Address" value="">
                    <span class="noti-alert">(Compulsory for Investment Products)</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="email" class="form-control" id="email-address"  name="email-address" placeholder="E-mail Address" value="">
                    <span class="noti-alert">(Compulsory for Investment Products)</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="residential-address">Residential Address<span>*</span></label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="tel" class="form-control" id="residential-address"  name="residential-address" placeholder="Residential Address" value="" required>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="tel" class="form-control" id="residential-address"  name="residential-address" placeholder="Residential Address" value="" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <label for="mailing-address">Mailing Address</label>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="tel" class="form-control" id="mailing-address"  name="mailing-address" placeholder="Mailing Address" value="">
                    <span class="noti-alert">(if different from Residential Address)</span>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <input type="tel" class="form-control" id="mailing-address"  name="mailing-address" placeholder="Mailing Address" value="">
                    <span class="noti-alert">(if different from Residential Address)</span>
                </div>
            </div>
            <button class="btn btn-primary mb-2">Back</button>
            <button class="btn btn-primary mb-2">Next</button>
        </form>
        
    </div>
</div>
 
@endsection
