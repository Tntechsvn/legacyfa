@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Client Accompaniment Assessment:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="accompaniment-assessment" id='accompaniment-assessment' class="form-control" method="post" action="" data-parsley-validate>
            <h3>Client 1</h3>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <label class="radio-inline">
                          <input type="radio" name="age" checked>Below 62
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="age">62 or above 
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="spoken-en">English Language Proficiency (Spoken)</label>
                        <label class="radio-inline">
                          <input type="radio" name="spoken-en" checked>Proficient
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="spoken-en">NOT Proficient 
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="written-en">English Language Proficiency (Written)</label>
                        <label class="radio-inline">
                          <input type="radio" name="written-en" checked>Proficient
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="written-en">NOT Proficient 
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="education">Education Level</label>
                        <div class="radio-hoz">
                            <input class="form-check-input" type="radio" name="education" value="option1" checked>
                            <label class="form-check-label" for="education">
                            Primary
                            </label>
                        </div>
                        <div class="radio-hoz">
                            <input class="form-check-input" type="radio" name="education"  value="option2" checked>
                            <label class="form-check-label" for="exampleRadios1">
                             Secondary
                            </label>
                        </div>
                        <div class="radio-hoz">
                            <input class="form-check-input" type="radio" name="education"  value="option3" checked>
                            <label class="form-check-label" for="exampleRadios1">
                            GCE 'N' or "O" Level Certificate or Equivalent
                            </label>
                        </div>
                        <div class="radio-hoz">
                            <input class="form-check-input" type="radio" name="education"  value="option4" checked>
                            <label class="form-check-label" for="exampleRadios1">
                            Pre-Tertiary
                            </label>
                         </div>
                         <div class="radio-hoz">
                            <input class="form-check-input" type="radio" name="education"  value="option5" checked>
                            <label class="form-check-label" for="exampleRadios1">
                            Tertiary and above 
                            </label>
                        </div>
                    </div>
                    <div class="option-show-next-step">            
                        RESULT:<br>
                        You do not need to be accompanied by a TRUSTED INDIVIDUAL
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Next</button>
                    <button type="button" class="btn btn-primary mb-2">Back</button>
                </form>
    </div>
</div>
@endsection
