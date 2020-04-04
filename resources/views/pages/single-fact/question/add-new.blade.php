@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Trusted Individual Questionnaire :</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <form name="form_question" id='form_question' class="form-control" method="post" action="{{route('single-fact.add_new_question', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <div class="form-group">
                <label for="name">Name of Client's Trusted Individual<span>*</span></label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" >
            </div>
            <div class="form-group">
                <label for="nric">NRIC of Client's Trusted Individual <span>*</span></label>
                <input type="text" class="form-control" id="nric" name="nric" placeholder="Name" value="" >
            </div>
            <div class="form-group">
                <label for="relationship">Relationship to Client <span>*</span></label>
                <input type="text" class="form-control" id="relationship" name="relationship" placeholder="Name" value="" >
            </div>
            <div class="form-group">
                <label for="eng">Language Used *</label>
                <input class="form-check-input" type="radio" name="language" id="eng" value="ENG" checked>
                <label class="form-check-label" for="eng">English</label>
                <input class="form-check-input" type="radio" name="language" id="man" value="MAN">
                <label class="form-check-label" for="mal">Malay</label>
                <input class="form-check-input" type="radio" name="language" id="mal" value="MAL">
                <label class="form-check-label" for="tam">Tamil</label>
                <input class="form-check-input" type="radio" name="language" id="tam" value="TAM">
                <label class="form-check-label" for="man">Mandarin</label>
                <input class="form-check-label" type="radio" name="language" id="Ot" value="Ot">
                <label class="form-check-label" for="other_language">Others (Please specify):</label>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="other_language" name="other_language" placeholder="Others (Please specify)" value="" >
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number<span>*</span></label>
                <input type="tel" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" value="" required>
            </div>
            <button type="button" class="btn btn-primary mb-2">Back</button>
            <button type="submit" class="btn btn-primary mb-2">Next</button>
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
                        alert(res['message']);
                    }
                }
            });
        });
    });
</script>
@endsection
