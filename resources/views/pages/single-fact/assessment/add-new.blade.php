@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Client Accompaniment Assessment:</h4>
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
                            <input type="radio" name="age" id="below_62" value="0" checked>
                        </div>
                        Below 62
                    </label>
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="far fa-circle"></i>
                            <input type="radio" name="age" value="above_62">
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
                            <input type="radio" name="spoken_en" id="pro_spoken" value="0" checked>
                        </div>
                        Proficient
                    </label>
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="far fa-circle"></i>
                            <input type="radio" name="spoken_en" id="not_pro_spoken" value="1">
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
                            <input type="radio" name="written_en" id="pro_written" value="0" checked>
                        </div>
                        Proficient
                    </label>
                    <label class="radio-inline custom-style-radio1">
                        <div class="style-checked">
                            <i class="far fa-circle"></i>
                            <input type="radio" name="written_en" id="not_pro_written" value="1">
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
                            <label class="form-check-label" for="n&o">Primary</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked">
                                <i class="far fa-circle"></i>
                                <input class="form-check-input" type="radio" name="education" id="secondary" value="1" checked>
                            </div>
                            <label class="form-check-label" for="n&o">Secondary</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked">
                                <i class="far fa-circle"></i>
                                <input class="form-check-input" type="radio" name="education" id="n&o" value="1" checked>
                            </div>
                           <label class="form-check-label" for="n&o"> GCE 'N' or "O" Level Certificate or Equivalent</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked">
                                <i class="far fa-circle"></i>
                                <input class="form-check-input" type="radio" name="education" id="pre" value="1" checked>
                            </div>
                           <label class="form-check-label" for="n&o">Pre-Tertiary</label>
                        </label>
                    </div>
                    <div class="radio-hoz">
                        <label class="radio-inline custom-style-radio1">
                            <div class="style-checked">
                                <i class="far fa-circle"></i>
                                <input class="form-check-input" type="radio" name="education" id="tertiary" value="1" checked>
                            </div>
                           <label class="form-check-label" for="n&o">Tertiary and above</label>
                        </label>
                    </div>
                </div>
            </div>
            <div class="option-show-next-step">            
                RESULT:<br>
                You do not need to be accompanied by a TRUSTED INDIVIDUAL
            </div>
            <div class="nav-step">
                <button type="button" class="btn btn-primary mb-2 style-button1">Back</button>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
            <div class="clear"></div>
        </form>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
      <ul>
          <li><a href="javascript:;">1</a></li>
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
                        location.reload();
                        alert(res['message']);
                    }
                }
            });
        });
    });
</script>
@endsection
