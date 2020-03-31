@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Trusted Individual Questionnaire :</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="individual-question" id='individual-question' class="form-control" method="post" action="" data-parsley-validate>
            <div class="form-group">
                <label for="client-name">Name of Client's Trusted Individual<span>*</span></label>
                <input type="text" class="form-control" id="client-name"  name="client-name" placeholder="Name" value="" >
            </div>
            <div class="form-group">
                <label for="nric-client">NRIC of Client's Trusted Individual *<span>*</span></label>
                <input type="text" class="form-control" id="nric-client"  name="nric-client" placeholder="Name" value="" >
            </div>
            <div class="form-group">
                <label for="relationship-client">Relationship to Client *<span>*</span></label>
                <input type="text" class="form-control" id="relationship-client"  name="relationship-client" placeholder="Name" value="" >
            </div>
            <div class="form-group">
                <label for="name">Language Used *</label>
                <input class="form-check-input" type="radio" name="language"  value="option1" checked>
                <label class="form-check-label" for="language">
                English
                </label>
                <input class="form-check-input" type="radio" name="exampleRadios"  value="option1" checked>
                <label class="form-check-label" for="language">
                 Mandarin
                </label>
                <input class="form-check-input" type="radio" name="exampleRadios"  value="option1" checked>
                <label class="form-check-label" for="language">
                Malay
                </label>
                <input class="form-check-input" type="radio" name="exampleRadios"  value="option1" checked>
                <label class="form-check-label" for="language">
                Tamil
                </label>
                <input class="form-check-input" type="radio" name="exampleRadios"  value="option1" checked>
                <label class="form-check-label" for="language">
                Others (Please specify): 
                </label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="others-language"  name="others-language" placeholder="Others (Please specify)" value="" >
            </div>
            <div class="form-group">
                <label for="contact-number">Contact Number<span>*</span></label>
                <input type="tel" class="form-control" id="contact-number"  name="contact-number" placeholder="Contact Number" value="" required>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Next</button>
            <button type="button" class="btn btn-primary mb-2">Back</button>
        </form>
    </div>
</div>
@endsection
