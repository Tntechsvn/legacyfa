@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 7 - Priorities & Needs Rating</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page ctpage-step7">
        <p class="note-alert-step7">Please rate all categories according to your priority:</p>
        <form name="priorities_need_form" id='priorities_need_form' class="" method="post" action="{{route('single_fact.priorities_needs.rate_category', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <table id="protection0-1" class="table table-content table-bordered table-style1 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <td></td>
                        <td colspan="4">Client 1</td>
                        <td colspan="4">Client 2</td>
                        <td colspan="4">Dependent 1</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>Low</td>
                        <td>Medium</td>
                        <td>High</td>
                        <td>To Plan For</td>
                        <td>Low</td>
                        <td>Medium</td>
                        <td>High</td>
                        <td>To Plan For</td>
                        <td>Low</td>
                        <td>Medium</td>
                        <td>High</td>
                        <td>To Plan For</td>
                    </tr>
                </thead>
                @php
                $arr = array(
                'Income Protection Upon Death',
                'Fund Disability Income / Expenses',
                'Fund Critical Illness Expenses',
                'Fund Children is Education',
                'Fund Medium to Long Term Savings / Investment Needs / Other Goals',
                'Fund Retirement Lifestyle',
                'Cover for Personal Accident',
                'Fund Long Term Care',
                'Fund Hospital Expenses');
                $i=0;

                $key_data = ['income', 'fund_disability', 'fund_critical', 'fund_children', 'fund_saving', 'fund_retirement', 'cover', 'fund_care', 'fund_hospital'];

                $data = json_decode($infoPfr->ratePrioritiesNeed, true);
                @endphp
                <tbody>
                    @foreach( $arr as $key=>$name )
                    <tr>
                        <td>{{ $name }}</td>
                        <?php
                        $checkGoPlan = $checkRateM = $checkRateH = "";
                        $checkRateL = "checked";
                        if(isset($data)){
                            $val = $data[0][$key_data[$key]];
                            $rate = substr($val, 0, 1);
                            $checkRateL = $rate == "L" ? "checked" : "";
                            $checkRateM = $rate == "M" ? "checked" : "";
                            $checkRateH = $rate == "H" ? "checked" : "";
                            $goPlan = substr($val, -1, 1);
                            $checkGoPlan = $goPlan == 1 ? "checked" : "";
                        }?>
                        <td class="style-checked-table">
                                <input type="radio" name="client1rate{{$key+1}}" value="L" {{$checkRateL}}>
                                <span class="checkmark"></span>
                        </td>
                         <td class="style-checked-table">
                                <input type="radio" name="client1rate{{$key+1}}" value="M" {{$checkRateM}}>
                                <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                                <input type="radio" name="client1rate{{$key+1}}" value="H" {{$checkRateH}}>
                                <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table2">
                            <input id="goplanclient1{{$key+1}}" class="form-check-input" value="1" name="client1goplan{{$key+1}}" type="checkbox" {{$checkGoPlan}}>
                            <span class="checkmark"></span>
                        </td>

                        <?php
                        $checkGoPlan = $checkRateL = $checkRateM = $checkRateH = "";
                        if(isset($data)){
                            $val = $data[1][$key_data[$key]];
                            $rate = substr($val, 0, 1);
                            $checkRateL = $rate == "L" ? "checked" : "";
                            $checkRateM = $rate == "M" ? "checked" : "";
                            $checkRateH = $rate == "H" ? "checked" : "";
                            $goPlan = substr($val, -1, 1);
                            $checkGoPlan = $goPlan == 1 ? "checked" : "";
                        }?>
                        <td class="style-checked-table">
                            <input type="radio" name="client2rate{{$key+1}}" value="L" {{$checkRateL}}>
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="client2rate{{$key+1}}" value="M" {{$checkRateM}}>
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="client2rate{{$key+1}}" value="H" {{$checkRateH}}>
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table2">
                            <!-- <input type="radio" name="client2goplan{{$key+1}}" id="goplanclient2{{$key+1}}" value="1" {{$checkGoPlan}}> -->
                            <input id="goplanclient2{{$key+1}}" class="form-check-input" value="1" name="client2goplan{{$key+1}}" type="checkbox" {{$checkGoPlan}}>
                            <span class="checkmark"></span>
                        </td>

                        <?php
                        $checkGoPlan = $checkRateL = $checkRateM = $checkRateH = "";
                        if(isset($data)){
                            $val = $data[2][$key_data[$key]];
                            $rate = substr($val, 0, 1);
                            $checkRateL = $rate == "L" ? "checked" : "";
                            $checkRateM = $rate == "M" ? "checked" : "";
                            $checkRateH = $rate == "H" ? "checked" : "";
                            $goPlan = substr($val, -1, 1);
                            $checkGoPlan = $goPlan == 1 ? "checked" : "";
                        }?>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent1rate{{$key+1}}" value="L" {{$checkRateL}}>
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent1rate{{$key+1}}" value="M" {{$checkRateM}}>
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent1rate{{$key+1}}" value="H" {{$checkRateH}}>
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table2">
                            <!-- <input type="radio" name="dependent1goplan{{$key+1}}" id="dependent1goplan{{$key+1}}" value="1" {{$checkGoPlan}}> -->
                            <input id="dependent1goplan{{$key+1}}" class="form-check-input" value="1" name="dependent1goplan{{$key+1}}" type="checkbox" {{$checkGoPlan}}>
                            <span class="checkmark"></span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <table id="protection0-1" class="table table-content table-bordered table-style1 protection-st protection-st2" style="width:100%">
                  <thead>
                    <tr>
                        <td></td>
                        <td colspan="4">Dependent 2</td>
                        <td colspan="4">Dependent 3</td>
                        <td colspan="4">Dependent 4</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>Low</td>
                        <td>Medium</td>
                        <td>High</td>
                        <td>To Plan For</td>
                        <td>Low</td>
                        <td>Medium</td>
                        <td>High</td>
                        <td>To Plan For</td>
                        <td>Low</td>
                        <td>Medium</td>
                        <td>High</td>
                        <td>To Plan For</td>
                    </tr>
                </thead>
                @php
                    $arr = array(
                    'Income Protection Upon Death',
                    'Fund Disability Income / Expenses',
                    'Fund Critical Illness Expenses',
                    'Fund Children is Education',
                    'Fund Medium to Long Term Savings / Investment Needs / Other Goals',
                    'Fund Retirement Lifestyle',
                    'Cover for Personal Accident',
                    'Fund Long Term Care',
                    'Fund Hospital Expenses');
                @endphp
                <tbody>
                    @foreach( $arr as $key=>$name )
                    <tr>
                        <td>{{ $name }}</td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent2rate{{$key+1}}" value="L">
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent2rate{{$key+1}}" value="M" >
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent2rate{{$key+1}}" value="H" >
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table2">
                            <!-- <input type="radio" name="client2goplan{{$key+1}}" id="goplanclient2{{$key+1}}" value="1" {{$checkGoPlan}}> -->
                            <input id="dependent2goplan{{$key+1}}" class="form-check-input" value="1" name="dependent2goplan{{$key+1}}" type="checkbox">
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent3rate{{$key+1}}" value="L">
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent3rate{{$key+1}}" value="M" >
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent3rate{{$key+1}}" value="H" >
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table2">
                            <!-- <input type="radio" name="client2goplan{{$key+1}}" id="goplanclient2{{$key+1}}" value="1" {{$checkGoPlan}}> -->
                            <input id="dependent3goplan{{$key+1}}" class="form-check-input" value="1" name="dependent3goplan{{$key+1}}" type="checkbox">
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent4rate{{$key+1}}" value="L">
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent4rate{{$key+1}}" value="M" >
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <input type="radio" name="dependent4rate{{$key+1}}" value="H" >
                            <span class="checkmark"></span>
                        </td>
                        <td class="style-checked-table">
                            <!-- <input type="radio" name="client2goplan{{$key+1}}" id="goplanclient2{{$key+1}}" value="1" {{$checkGoPlan}}> -->
                            <input id="dependent4goplan{{$key+1}}" class="form-check-input" value="1" name="dependent4goplan{{$key+1}}" type="checkbox">
                            <span class="checkmark"></span>
                        </td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
            <div class="nav-step">
                <a href="{{route('single_fact.cka.list', $infoPfr->id)}}" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
                <button class="btn btn-primary mb-2 style-button1">Reset All</button>
            </div>     
        </form>      
    </div>
</div>
@include('pages.navigation', ['id' => $infoPfr->id])
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('input').on('change', function(){
            var name = $(this).attr('name');
            var val = $(this).val();
            if(val == "H"){
                var col = "";
                if(name.substr(0, 6) == "client"){
                    col = name.substr(0, 7);
                }
                if(name.substr(0, 9) == "dependent"){
                    col = name.substr(0, 10);
                }
                var row = name.substr(-1, 1);
                var input = col + "goplan" + row;
                $('#goplan' + col + row).prop("checked", true);
            }
        });

        $('#priorities_need_form').on('submit', function(e){
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
