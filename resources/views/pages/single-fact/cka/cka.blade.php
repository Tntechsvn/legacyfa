@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Customer Knowledge Assessment (CKA):</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="cka_form" id='cka_form' class="" method="post" action="{{route('single_fact.cka.add_new', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            @php $questions = json_decode(json_encode(config('constants.CKA_Questionnaire')));
            $dataCka = json_decode($infoPfr->dataCka, true);
            @endphp 
            <table id="annual-income-table" class="table table-content table-bordered table-style2 td50" style="width:100%">
                <tbody>
                    @foreach($questions as $key_question=>$q)
                    <tr>
                        <td>{{$key_question+1}}. {{$q->name}}</td>
                        <td class="action-checkbox">
                            <label class="radio-inline custom-style-radio1 pdl0">
                                <div class="style-checked style-radio-custom">
                                    <input class="showcheckbox" type="radio" name="name{{$key_question}}" value="0" checked>
                                    <span class="checkmark-radio"></span>
                                </div>
                                Yes
                            </label>
                            @foreach($q->answers as $key_answer=>$a)
                            <div class="checkbox">
                                <label><input  disabled="disabled" type="checkbox" name="q_{{$key_question+1}}[]" value="{{$key_answer}}" <?php
                                if(isset($infoPfr) && $dataCka){
                                    foreach($dataCka[0] as $key=>$value){
                                        if($key == "q_".($key_question+1)){
                                            foreach($value as $val){
                                                if($val == $key_answer){
                                                    echo "checked";
                                                }
                                            }
                                        }
                                    }
                                }?> >{{$a}}</label>
                            </div>
                            @endforeach
                            <label class="radio-inline custom-style-radio1 pdl0">
                                <div class="style-checked style-radio-custom">
                                    <input class="showcheckbox" type="radio" name="name{{$key_question}}" value="1">
                                    <span class="checkmark-radio"></span>
                                </div>
                                No
                            </label>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="custom-bg-text">
                <h4>RESULT:</h4>   
                YOU HAVE MET the Customer Knowledge Assessment criteria and am deemed to posses the knowledge or experience for transactions In a Collective Investment Scheme or an Investment Linked Policy.
                <div class="form-group form-layout-row">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" name="state" id="state" value="1" @if($infoPfr->reasonCka != null){{'checked'}}@endif>
                      <label class="form-check-label" for="state">N/A</label>
                  </div>
                </div>
                <div class="form-group form-layout-row">
                    <label for="details_home">Reason</label>
                    <div class="custom-input-layout-row">
                        <input type="text" class="form-control" id="reason" name="reason" placeholder="" value="{{$infoPfr->reasonCka}}">
                    </div>
                </div>
            </div>
            <div class="nav-step">
                    <button class="btn btn-primary mb-2 style-button1">Back</button>
                    <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
                </div>
        </form>      
    </div>
</div>
<div class="bottom-step">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
        <ul>
            @if(!$infoPfr)
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
        $('.showcheckbox').click(function(){
         var rBtnVal = $(this).val();
            if(rBtnVal == "1"){
                $(this).closest('.action-checkbox').find('input[type=checkbox]').prop("disabled", true);
            }else{ 
                $(this).closest('.action-checkbox').find('input[type=checkbox]').prop("disabled", false);
            }
       });



        $('#cka_form').on('submit', function(e){
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
