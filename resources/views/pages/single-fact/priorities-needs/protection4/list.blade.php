@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 7 - Priorities & Needs Rating</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">7.4 - SAVINGS & INVESTMENT <span>(Fund Children's Education)</span></p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="{{route('single_fact.priorities-needs.priotection_1', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <table id="protection4-1" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Children's Education</th>
                        <th>Child 1</th>
                        <th>Child 2</th>
                        <th>Child 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control" id="name_child1" name="name_child1" placeholder="$" value="" ></td>
                        <td><input type="text" class="form-control" id="name_child2" name="name_child2" placeholder="$" value="" ></td>
                        <td><input type="text" class="form-control" id="name_child3" name="name_child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Years to Tertiary Education</td>
                        <td><input type="number" class="form-control" id="education_child1" name="education_child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education_child2" name="education_child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education_child3" name="education_child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>No. of Years of Study</td>
                        <td><input type="number" class="form-control" id="years_study_child1" name="years_study_child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_study_child2" name="years_study_child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_study_child3" name="years_study_child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Annual Tuition Fees ($)</td>
                        <td><input type="number" class="form-control" id="tuition_fees_child1" name="tuition_fees_child1" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="tuition_fees_child2" name="tuition_fees_child2" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="tuition_fees_child3" name="tuition_fees_child3" placeholder="$" value=""></td>
                    </tr>
                    <tr>
                        <td>Education Inflation Rate (in %)</td>
                        <td><input type="number" class="form-control" id="education_inflation_child1" name="education_inflation_child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education_inflation_child2" name="education_inflation_child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education_inflation_child3" name="education_inflation_child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Future Value of Annual Tuition Fees ($)</td>
                        <td><input type="number" class="form-control" id="future_value_child1" name="future_value_child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future_value_child2" name="future_value_child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future_value_child3" name="future_value_child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>A. TOTAL TUITION FEES ($)</td>
                        <td><input type="number" class="form-control" id="total_tuition_child1" name="total_tuition_child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_tuition_child2" name="total_tuition_child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_tuition_child3" name="total_tuition_child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Annual Living Costs ($)</td>
                        <td><input type="number" class="form-control" id="living_costs_child1" name="living_costs_child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="living_costs_child2" name="living_costs_child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="living_costs_child3" name="living_costs_child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Inflation Rate (in %)</td>
                        <td><input type="number" class="form-control" id="inflation_child1" name="inflation_child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation_child2" name="inflation_child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation_child3" name="inflation_child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Future Value of Annual Living Costs ($)</td>
                        <td><input type="number" class="form-control" id="future_costs_child1" name="future_costs_child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future_costs_child2" name="future_costs_child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future_costs_child3" name="future_costs_child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>B. TOTAL LIVING COSTS ($)</td>
                        <td><input type="number" class="form-control" id="total_living_child1" name="total_living_child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_living_child2" name="total_living_child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_living_child3" name="total_living_child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>TOTAL EDUCATION FUNDING ( A + B ) ($)</td>
                        <td><input type="number" class="form-control" id="total_ab_child1" name="total_ab_child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_ab_child2" name="total_ab_child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_ab_child3" name="total_ab_child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Future Value of Existing Resources for Education ($)</td>
                        <td><input type="number" class="form-control" id="future_existing_child1" name="future_existing_child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future_existing_child2" name="future_existing_child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future_existing_child3" name="future_existing_child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net_amount_child1" name="net_amount_child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="net_amount_child2" name="net_amount_child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="net_amount_child3" name="net_amount_child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="3"><textarea class="form-control" id="additional_group1" name="additional_group1"></textarea></td>
                    </tr>
                </tbody>
            </table>

            <table id="protection4-1" class="table table-content table-bordered table-style2 protection-st protection-st2" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Children's Education</th>
                        <th>Child 4</th>
                        <th>Child 5</th>
                        <th>Child 6</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control" id="name_child4" name="name_child4" placeholder="$" value="" ></td>
                        <td><input type="text" class="form-control" id="name_child5" name="name_child5" placeholder="$" value="" ></td>
                        <td><input type="text" class="form-control" id="name_child6" name="name_child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Years to Tertiary Education</td>
                        <td><input type="number" class="form-control" id="education_child4" name="education_child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education_child5" name="education_child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education_child6" name="education_child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>No. of Years of Study</td>
                        <td><input type="number" class="form-control" id="years_study_child4" name="years_study_child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_study_child5" name="years_study_child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years_study_child6" name="years_study_child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Annual Tuition Fees ($)</td>
                        <td><input type="number" class="form-control" id="tuition_fees_child4" name="tuition_fees_child4" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="tuition_fees_child5" name="tuition_fees_child5" placeholder="$" value=""></td>
                        <td><input type="number" class="form-control" id="tuition_fees_child6" name="tuition_fees_child6" placeholder="$" value=""></td>
                    </tr>
                    <tr>
                        <td>Education Inflation Rate (in %)</td>
                        <td><input type="number" class="form-control" id="education_inflation_child4" name="education_inflation_child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education_inflation_child5" name="education_inflation_child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education_inflation_child6" name="education_inflation_child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Future Value of Annual Tuition Fees ($)</td>
                        <td><input type="number" class="form-control" id="future_value_child4" name="future_value_child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future_value_child5" name="future_value_child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future_value_child6" name="future_value_child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>A. TOTAL TUITION FEES ($)</td>
                        <td><input type="number" class="form-control" id="total_tuition_child4" name="total_tuition_child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_tuition_child5" name="total_tuition_child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_tuition_child6" name="total_tuition_child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Annual Living Costs ($)</td>
                        <td><input type="number" class="form-control" id="living_costs_child4" name="living_costs_child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="living_costs_child5" name="living_costs_child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="living_costs_child6" name="living_costs_child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Inflation Rate (in %)</td>
                        <td><input type="number" class="form-control" id="inflation_child4" name="inflation_child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation_child5" name="inflation_child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation_child6" name="inflation_child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Future Value of Annual Living Costs ($)</td>
                        <td><input type="number" class="form-control" id="future_costs_child4" name="future_costs_child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future_costs_child5" name="future_costs_child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future_costs_child6" name="future_costs_child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>B. TOTAL LIVING COSTS ($)</td>
                        <td><input type="number" class="form-control" id="total_living_child4" name="total_living_child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_living_child5" name="total_living_child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_living_child6" name="total_living_child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>TOTAL EDUCATION FUNDING ( A + B ) ($)</td>
                        <td><input type="number" class="form-control" id="total_ab_child4" name="total_ab_child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_ab_child5" name="total_ab_child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total_ab_child6" name="total_ab_child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Future Value of Existing Resources for Education ($)</td>
                        <td><input type="number" class="form-control" id="future_existing_child4" name="future_existing_child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future_existing_child5" name="future_existing_child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future_existing_child6" name="future_existing_child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net_amount_child4" name="net_amount_child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="net_amount_child5" name="net_amount_child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="net_amount_child6" name="net_amount_child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="3"><textarea class="form-control" id="additional_group2" name="additional_group2"></textarea></td>
                    </tr>
                </tbody>
            </table>
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
            @if(!isset($infoPfr))
            @else
                @include('pages.navigation', ['id' => $infoPfr->id])
            @endif
        </ul>
    </div>
</div>
@endsection

