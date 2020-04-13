@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>SAVINGS & INVESTMENT - Fund Children's Education</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="{{route('single_fact.priorities-needs.priotection_1', $infoPfr->id)}}" data-parsley-validate>
            @csrf
            <table id="protection4-1" class="table table-content table-style1 protection-st" style="width:100%">
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
                        <td><input type="text" class="form-control" id="name-child1" name="name-child1" placeholder="$" value="" ></td>
                        <td><input type="text" class="form-control" id="name-child2" name="name-child2" placeholder="$" value="" ></td>
                        <td><input type="text" class="form-control" id="name-child3" name="name-child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Years to Tertiary Education</td>
                        <td><input type="number" class="form-control" id="education-child1" name="education-child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education-child2" name="education-child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education-child3" name="education-child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>No. of Years of Study</td>
                        <td><input type="number" class="form-control" id="years-study-child1" name="years-study-child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years-study-child2" name="years-study-child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years-study-child3" name="years-study-child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Annual Tuition Fees ($)</td>
                        <td><input type="number" class="form-control" id="tuition-fees-child1" name="tuition-fees-child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="tuition-fees-child2" name="tuition-fees-child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="tuition-fees-child3" name="tuition-fees-child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Education Inflation Rate (in %)</td>
                        <td><input type="number" class="form-control" id="inflation-child1" name="inflation-child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation-child2" name="inflation-child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation-child3" name="inflation-child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Future Value of Annual Tuition Fees ($)</td>
                        <td><input type="number" class="form-control" id="future-value-child1" name="future-value-child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future-value-child2" name="future-value-child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future-value-child3" name="future-value-child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>A. TOTAL TUITION FEES ($)</td>
                        <td><input type="number" class="form-control" id="total-tuition-child1" name="total-tuition-child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-tuition-child2" name="total-tuition-child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-tuition-child3" name="total-tuition-child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Annual Living Costs ($)</td>
                        <td><input type="number" class="form-control" id="living-costs-child1" name="living-costs-child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="living-costs-child2" name="living-costs-child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="living-costs-child3" name="living-costs-child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Inflation Rate (in %)</td>
                        <td><input type="number" class="form-control" id="inflation-child1" name="inflation-child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation-child2" name="inflation-child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation-child3" name="inflation-child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Future Value of Annual Living Costs ($)</td>
                        <td><input type="number" class="form-control" id="future-costs-child1" name="future-costs-child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future-costs-child2" name="future-costs-child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future-costs-child3" name="future-costs-child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>B. TOTAL LIVING COSTS ($)</td>
                        <td><input type="number" class="form-control" id="total-living-child1" name="total-living-child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-living-child2" name="total-living-child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-living-child3" name="total-living-child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>TOTAL EDUCATION FUNDING ( A + B ) ($)</td>
                        <td><input type="number" class="form-control" id="total-ab-child1" name="total-ab-child1" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-ab-child2" name="total-ab-child2" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-ab-child3" name="total-ab-child3" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Future Value of Existing Resources for Education ($)</td>
                        <td><input type="number" class="form-control" id="future-existing-child1" name="future-existing-child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future-existing-child2" name="future-existing-child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future-existing-child3" name="future-existing-child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net-amount-child1" name="net-amount-child1" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-amount-child2" name="net-amount-child2" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-amount-child3" name="net-amount-child3" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="3"><textarea class="form-control" id="additional-child1" name="additional-child1"></textarea></td>
                    </tr>
                </tbody>
            </table>

            <table id="protection4-1" class="table table-content table-style1 protection-st protection-st2" style="width:100%">
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
                        <td><input type="text" class="form-control" id="name-child4" name="name-child4" placeholder="$" value="" ></td>
                        <td><input type="text" class="form-control" id="name-child5" name="name-child5" placeholder="$" value="" ></td>
                        <td><input type="text" class="form-control" id="name-child6" name="name-child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Years to Tertiary Education</td>
                        <td><input type="number" class="form-control" id="education-child4" name="education-child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education-child5" name="education-child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="education-child6" name="education-child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>No. of Years of Study</td>
                        <td><input type="number" class="form-control" id="years-study-child4" name="years-study-child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years-study-child5" name="years-study-child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="years-study-child6" name="years-study-child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Annual Tuition Fees ($)</td>
                        <td><input type="number" class="form-control" id="tuition-fees-child4" name="tuition-fees-child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="tuition-fees-child5" name="tuition-fees-child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="tuition-fees-child6" name="tuition-fees-child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Education Inflation Rate (in %)</td>
                        <td><input type="number" class="form-control" id="inflation-child4" name="inflation-child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation-child5" name="inflation-child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation-child6" name="inflation-child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Future Value of Annual Tuition Fees ($)</td>
                        <td><input type="number" class="form-control" id="future-value-child4" name="future-value-child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future-value-child5" name="future-value-child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future-value-child6" name="future-value-child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>A. TOTAL TUITION FEES ($)</td>
                        <td><input type="number" class="form-control" id="total-tuition-child4" name="total-tuition-child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-tuition-child5" name="total-tuition-child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-tuition-child6" name="total-tuition-child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Annual Living Costs ($)</td>
                        <td><input type="number" class="form-control" id="living-costs-child4" name="living-costs-child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="living-costs-child5" name="living-costs-child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="living-costs-child6" name="living-costs-child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Inflation Rate (in %)</td>
                        <td><input type="number" class="form-control" id="inflation-child4" name="inflation-child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation-child5" name="inflation-child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="inflation-child6" name="inflation-child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Future Value of Annual Living Costs ($)</td>
                        <td><input type="number" class="form-control" id="future-costs-child4" name="future-costs-child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future-costs-child5" name="future-costs-child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="future-costs-child6" name="future-costs-child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>B. TOTAL LIVING COSTS ($)</td>
                        <td><input type="number" class="form-control" id="total-living-child4" name="total-living-child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-living-child5" name="total-living-child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-living-child6" name="total-living-child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>TOTAL EDUCATION FUNDING ( A + B ) ($)</td>
                        <td><input type="number" class="form-control" id="total-ab-child4" name="total-ab-child4" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-ab-child5" name="total-ab-child5" placeholder="$" value="" readonly></td>
                        <td><input type="number" class="form-control" id="total-ab-child6" name="total-ab-child6" placeholder="$" value="" readonly></td>
                    </tr>
                    <tr>
                        <td>Less: Future Value of Existing Resources for Education ($)</td>
                        <td><input type="number" class="form-control" id="future-existing-child4" name="future-existing-child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future-existing-child5" name="future-existing-child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="future-existing-child6" name="future-existing-child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Net Amount Required ($)</td>
                        <td><input type="number" class="form-control" id="net-amount-child4" name="net-amount-child4" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-amount-child5" name="net-amount-child5" placeholder="$" value="" ></td>
                        <td><input type="number" class="form-control" id="net-amount-child6" name="net-amount-child6" placeholder="$" value="" ></td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="3"><textarea class="form-control" id="additional-child4" name="additional-child4"></textarea></td>
                    </tr>
                </tbody>
            </table>
            <div class="nav-step">
                <button class="btn btn-primary mb-2">Back</button>
                <button type="submit" class="btn btn-primary mb-2">Next</button>
            </div>
        </form>      
    </div>
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

