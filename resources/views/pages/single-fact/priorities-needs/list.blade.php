@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Priorities & Needs Rating</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p class="note-alert-step7">Please rate all categories according to your priority:</p>
        <form name="priorities_need_form" id='priorities_need_form' class="" method="post" action="{{route('single_fact.priorities_needs.rate_category', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <table id="annual-income-table" class="table table-content table-style1" style="width:100%">
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
                        <td>
                            <input type="radio" name="client1rate{{$key+1}}" value="L" {{$checkRateL}}>
                        </td>
                        <td>
                            <input type="radio" name="client1rate{{$key+1}}" value="M" {{$checkRateM}}>
                        </td>
                        <td>
                            <input type="radio" name="client1rate{{$key+1}}" value="H" {{$checkRateH}}>
                        </td>
                        <td>
                            <input type="radio" name="client1goplan{{$key+1}}" id="goplanclient1{{$key+1}}" value="1" {{$checkGoPlan}}>
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
                        <td>
                            <input type="radio" name="client2rate{{$key+1}}" value="L" {{$checkRateL}}>
                        </td>
                        <td>
                            <input type="radio" name="client2rate{{$key+1}}" value="M" {{$checkRateM}}>
                        </td>
                        <td>
                            <input type="radio" name="client2rate{{$key+1}}" value="H" {{$checkRateH}}>
                        </td>
                        <td>
                            <input type="radio" name="client2goplan{{$key+1}}" id="goplanclient2{{$key+1}}" value="1" {{$checkGoPlan}}>
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
                        <td>
                            <input type="radio" name="dependent1rate{{$key+1}}" value="L" {{$checkRateL}}>
                        </td>
                        <td>
                            <input type="radio" name="dependent1rate{{$key+1}}" value="M" {{$checkRateM}}>
                        </td>
                        <td>
                            <input type="radio" name="dependent1rate{{$key+1}}" value="H" {{$checkRateH}}>
                        </td>
                        <td>
                            <input type="radio" name="dependent1goplan{{$key+1}}" id="goplandependent1{{$key+1}}" value="1" {{$checkGoPlan}}>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <button class="btn btn-primary mb-2">Back</button>
            <button type="submit" class="btn btn-primary mb-2">Next</button>
            <button class="btn btn-primary mb-2">Reset All</button>
        </form>      
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 step-link">
        <ul>
            <li><a href="javascript:;">1</a></li>
            <li><a href="{{route('single_fact.balance.list', $infoPfr->id)}}">2</a></li>
            <li><a href="{{route('single_fact.cash_flow.list', $infoPfr->id)}}">3</a></li>
            <li><a href="{{route('portfolio.list', $infoPfr->id)}}">4</a></li>
            <li><a href="{{route('single_fact.risk_profile.list', $infoPfr->id)}}">5</a></li>
            <li><a href="{{route('single_fact.cka.list', $infoPfr->id)}}">6</a></li>
            <li><a href="{{route('single_fact.priorities_needs.show_form_rate_category', $infoPfr->id)}}">7</a></li>
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
                        //location.reload();
                        alert(res['message']);
                    }
                }
            });
        });
    });
</script>
@endsection
