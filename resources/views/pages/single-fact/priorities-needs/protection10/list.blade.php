@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 7 - Priorities & Needs Rating</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">7.10 - Estate Planning</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection10" id='protection10' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection10-1" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Client 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Do you have a Will written?</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input class="time_updated" type="radio" name="written_client1" id="yes_written" value="0">
                                    </div>
                                    Yes
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input class="time_updated" type="radio" name="written_client1" id="no_written" value="1" checked>
                                    </div>
                                    No
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>When was it last updated?</td>
                        <td>
                         <input class="time_updated_text" type="text" class="form-control" id="time_updated_client1" name="time_updated_client1" placeholder="N/A" value="" readonly="">
                     </td>
                 </tr>
                 <tr>
                    <td>Were there any provisions made for special needs dependant?</td>
                    <td>
                        <div class="custom-input-layout-row">
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="fas fa-check-circle"></i>
                                    <input type="radio" name="provisions_client1" id="yes_provision" value="0" checked>
                                </div>
                                Yes
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="far fa-circle"></i>
                                    <input type="radio" name="provisions_client1" id="no_provision" value="1">
                                </div>
                                No
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Have you given a Lasting Power of Attorney?</td>
                    <td>
                        <div class="custom-input-layout-row">
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="fas fa-check-circle"></i>
                                    <input type="radio" name="attorney_client1" id="yes_attorney" value="0" checked>
                                </div>
                                Yes
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="far fa-circle"></i>
                                    <input type="radio" name="attorney_client1" id="no_attorney" value="1">
                                </div>
                                No
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Have you done your CPF nominations?</td>
                    <td>
                        <div class="custom-input-layout-row">
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="fas fa-check-circle"></i>
                                    <input type="radio" name="cpf_client1" id="yes_cpf" value="0" checked>
                                </div>
                                Yes
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="far fa-circle"></i>
                                    <input type="radio" name="cpf_client1" id="no_cpf" value="1">
                                </div>
                                No
                            </label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Have you named any beneficiaries under Section 49M / 49L?</td>
                    <td>
                        <div class="custom-input-layout-row">
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="fas fa-check-circle"></i>
                                    <input class="beneficiaries-opsl" type="radio" name="beneficiaries_client1" id="yes_beneficiaries" value="0">
                                </div>
                                Yes
                                <select class="beneficiaries_select" name="beneficiaries_select_client1" id="beneficiaries_select_client1" class="form-control" data-parsley-trigger="change" required="">
                                    <option value="">Select</option>
                                    <option value="m">49M</option>
                                    <option value="l">49L</option>
                                </select>
                            </label>
                            <label class="radio-inline custom-style-radio1">
                                <div class="style-checked">
                                    <i class="far fa-circle"></i>
                                    <input class="beneficiaries-opsl" type="radio" name="beneficiaries_client1" id="no_beneficiaries" value="1" checked>
                                </div>
                                No
                            </label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="nav-step">
            <a href="javascript:;" class="style-button1">Back</a>
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
        $('.time_updated').click(function(){
            var showtime = $(this).val();
            if(showtime == "1"){
                $(".time_updated_text").attr("readonly", true);
            }
            else{ 
                $(".time_updated_text").attr("readonly", false);
            }
        });
        
        $('.beneficiaries-opsl').click(function(){
            var showsl = $(this).val();
            if(showsl == "1"){
                $(".beneficiaries_select").hide();
            }else{ 
                $(".beneficiaries_select").show();
            }
        });
    });
</script>
@endsection
