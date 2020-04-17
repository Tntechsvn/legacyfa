@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 1 - Personal Information:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">1.4 - Trusted Individual Questionnaire :</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="form_question" id='form_question' class="parsley-form form-style2" method="post" action="{{route('single-fact.add_new_question', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <div class="form-group form-layout-row">
                <label for="name">Name of Client's Trusted Individual<span>*</span></label>
                <div class="custom-input-layout-row">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" data-parsley-trigger="change" required="">
                </div>
            </div>
            <div class="form-group form-layout-row">
                <label for="nric">NRIC of Client's Trusted Individual <span>*</span></label>
                <div class="custom-input-layout-row">
                    <input type="text" class="form-control" id="nric" name="nric" placeholder="Name" value="" data-parsley-trigger="change" required="">
                </div>
            </div>
            <div class="form-group form-layout-row">
                <label for="relationship">Relationship to Client <span>*</span></label>
                <div class="custom-input-layout-row">
                    <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Name" value="" data-parsley-trigger="change" required="">
                </div>
            </div>
            <div class="form-group form-layout-row">
                <label for="eng">Language Used *</label>
                <div class="custom-input-layout-row">
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked style-radio-custom">
                                <input class="form-check-input" type="radio" name="language" id="eng" value="ENG" checked>
                                <span class="checkmark-radio"></span>
                            </div>
                            <label class="form-check-label" for="eng">English</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked style-radio-custom">
                                <input class="form-check-input" type="radio" name="language" id="man" value="MAN">
                                <span class="checkmark-radio"></span>
                            </div>
                            <label class="form-check-label" for="mal">Malay</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked style-radio-custom">
                                <input class="form-check-input" type="radio" name="language" id="mal" value="MAL">
                                <span class="checkmark-radio"></span>
                            </div>
                            <label class="form-check-label" for="tam">Tamil</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked style-radio-custom">
                                <input class="form-check-input" type="radio" name="language" id="tam" value="TAM">
                                <span class="checkmark-radio"></span>
                            </div>
                            <label class="form-check-label" for="man">Mandarin</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked style-radio-custom">
                                <input class="form-check-label" type="radio" name="language" id="Ot" value="Ot">
                                <span class="checkmark-radio"></span>
                            </div>
                            <label class="form-check-label" for="other_language">Others (Please specify):</label>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group form-layout-row">
                <label for="other_language"></label>
                <div class="custom-input-layout-row">
                    <input type="text" class="form-control" id="other_language" name="other_language" placeholder="Others (Please specify)" value="" >
                </div>
            </div>
            <div class="form-group form-layout-row">
                <label for="contact_number">Contact Number<span>*</span></label>
                <div class="custom-input-layout-row">
                    <input type="tel" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" value="" data-parsley-trigger="change" required="">
                </div>
            </div>
            <div class="nav-step">
                <button type="button" class="btn btn-primary mb-2 style-button1">Back</button>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
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
        $('#form_question').on('submit', function(e){
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
