@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 1 - Personal Information:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">1.3 - Client Accompaniment Assessment:</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="form_assessment" id='form_assessment' class="parsley-form form-style2" method="post" action="{{route('single-fact.add_new_assessment', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <h3>Client 1</h3>
            <div class="form-group  form-layout-row">
                <label for="below_62">Age</label>
                <div class="custom-input-layout-row">
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="fas fa-check-circle"></i>
                            <input class="option_step_14" type="radio" name="age" id="below_62" value="0" checked>
                        </div>
                        Below 62
                    </label>
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="far fa-circle"></i>
                            <input class="option_step_14" type="radio" name="age" id="above_62" value="1">
                        </div>
                        62 or above 
                    </label>
                </div>
            </div>
            <div class="form-group  form-layout-row">
                <label for="pro_spoken">English Language Proficiency (Spoken)</label>
                <div class="custom-input-layout-row">
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="fas fa-check-circle"></i>
                            <input class="option_step_14" type="radio" name="spoken_en" id="pro_spoken" value="0" checked>
                        </div>
                        Proficient
                    </label>
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="far fa-circle"></i>
                            <input class="option_step_14" type="radio" name="spoken_en" id="not_pro_spoken" value="1">
                        </div>
                        NOT Proficient
                    </label>
                </div>
            </div>
            <div class="form-group  form-layout-row">
                <label for="pro_written">English Language Proficiency (Written)</label>
                <div class="custom-input-layout-row">
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="fas fa-check-circle"></i>
                            <input class="option_step_14" type="radio" name="written_en" id="pro_written" value="0" checked>
                        </div>
                        Proficient
                    </label>
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="far fa-circle"></i>
                            <input class="option_step_14" type="radio" name="written_en" id="not_pro_written" value="1">
                        </div>
                        NOT Proficient 
                    </label>
                </div>
            </div>
            <div class="form-group  form-layout-row">
                <label for="primary">Education Level</label>
                <div class="custom-input-layout-row">
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked">
                                <i class="fas fa-check-circle"></i>
                                <input class="form-check-input" type="radio" name="education" id="primary" value="0" checked>
                            </div>
                            <label class="form-check-label" for="primary">Primary</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked">
                                <i class="far fa-circle"></i>
                                <input class="form-check-input" type="radio" name="education" id="secondary" value="1" checked>
                            </div>
                            <label class="form-check-label" for="secondary">Secondary</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked">
                                <i class="far fa-circle"></i>
                                <input class="form-check-input" type="radio" name="education" id="n&o" value="2" checked>
                            </div>
                            <label class="form-check-label" for="n&o"> GCE 'N' or "O" Level Certificate or Equivalent</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked">
                                <i class="far fa-circle"></i>
                                <input class="form-check-input" type="radio" name="education" id="pre" value="3" checked>
                            </div>
                            <label class="form-check-label" for="pre">Pre-Tertiary</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked">
                                <i class="far fa-circle"></i>
                                <input class="form-check-input" type="radio" name="education" id="tertiary" value="4" checked>
                            </div>
                            <label class="form-check-label" for="tertiary">Tertiary and above</label>
                        </label>
                    </div>
                </div>
            </div>
            <div class="option-show-next-step">            
                RESULT:<br>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> origin/vtn
                <p class="alert-text-step1 no_has_14">You do not need to be accompanied by a TRUSTED INDIVIDUAL</p>
                <p class="alert-text-step1 has_14">It is compulsory for you to be accompanied by a TRUSTED INDIVIDUAL</p>
=======
                <span id="result">You do not need to be accompanied by a TRUSTED INDIVIDUAL</span>
>>>>>>> origin/manhtu
<<<<<<< HEAD
=======
                <p class="alert-text-step1" id="result">You do not need to be accompanied by a TRUSTED INDIVIDUAL</p>
>>>>>>> origin/manhtu
=======
>>>>>>> origin/vtn
            </div>
            <div class="nav-step">
                <a href="{{route('singlefact.dependant.list', $infoPfr->id)}}" class="style-button1">Back</a>
                <button type="submit" class="style-button1">Next</button>
            </div>
            <div class="clear"></div>
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
        $('#form_assessment').on('submit', function(e){
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

        $("[name='age'], [name='spoken_en'], [name='written_en'], [name='education']").on('change', function(){
            var age = $("input[name=age]:checked").val();
            var spoken_en = $("input[name=spoken_en]:checked").val();
            var written_en = $("input[name=written_en]:checked").val();
            var education = $("input[name=education]:checked").val();
            var result = "You do not need to be accompanied by a TRUSTED INDIVIDUAL";
            if ( ( age == 1 && (spoken_en == 1 || written_en == 1 ) ) || ( age == 1 && ( education == 0 || education == 1) ) || ( ( spoken_en == 1 || written_en == 1 ) && ( education == 0 || education == 1 ) ) || ( spoken_en == 1 || written_en == 1 ) ) {
                result = "It is compulsory for you to be accompanied by a TRUSTED INDIVIDUAL";
            }
            $('#result').text(result);
        });
    });
</script>
@endsection
