@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 9 - Analysis & Recommendations</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">9.2 - Plan(S) Recommended</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <h3>Plan(s) Recommended</h3>
            <table id="property-table" class="table table-style1 table-content" style="width:100%">
                <thead>
                    <tr>
                        <th>SN#</th>
                        <th>Company Name</th>
                        <th>Name of Plan(s) / Rider(s)</th>
                        <th>Policy Term</th>
                        <th>Sum Assured</th>
                        <th>Premium ($)</th>
                        <th>Payment Frequency</th>
                        <th>Name of Owner/Insured</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>tntechs</td>
                        <td>easyfood app</td>
                        <td>Policy</td>
                        <td>total export</td>
                        <td>total premium</td>
                        <td>Thanh Toán</td>
                        <td>Name OI</td>
                        <td>
                            <a href="javascript:;" class="deletestyle1 delete_property" data-url="" data-title="Delete"><i class="fas fa-minus"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3>Investment-linked Plans (ILP)</h3>
            <table id="property-table" class="table table-style1 table-content" style="width:100%">
                <thead>
                    <tr>
                        <th>SN#</th>
                        <th>Plan Name</th>
                        <th>Fund Name</th>
                        <th>Percentage</th>
                        <th>Fund Risk Category</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>tntechs</td>
                        <td>easyfood app</td>
                        <td>Policy</td>
                        <td>total export</td>
                        <td>
                            <a href="javascript:;" class="deletestyle1 delete_property" data-url="" data-title="Delete"><i class="fas fa-minus"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <h3>Collective Investment Schemes (CIS)</h3>
            <table id="property-table" class="table table-style1 table-content" style="width:100%">
                <thead>
                    <tr>
                        <th>SN#</th>
                        <th>Portfolio / Fund Name</th>
                        <th>Amount ($)</th>
                        <th>Fund Risk Category</th>
                        <th>Higher than Client Risk Profile?</th>
                        <th>Name of Owner</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>tntechs</td>
                        <td>easyfood app</td>
                        <td>Policy</td>
                        <td>total export</td>
                        <td>total premium</td>
                        <td>
                            <a href="javascript:;" class="deletestyle1 delete_property" data-url="" data-title="Delete"><i class="fas fa-minus"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group form-layout-row">
                <p><strong>Reason(s) for Recommendations</strong></p>
                <p>1.) State how the plan meets client's need(s) <span>*</span></p>
                <p>2.) State and explain features and benefits relating to the product(s) sold - <span>this is auto-generated based on plan/s selected above</span></p>
                <p>3.) Affordability, considerations before investing (where applicable), remaining shortfall (if any)</p>
                <div class="custom-input-layout-row">
                    <textarea  id="reason-recommendations" name="reason-recommendations"  data-parsley-trigger="change" required=""></textarea>
                </div>
            </div>
            <div class="form-group form-layout-row">
                <p><strong>Risk / Limitation(s) of Plan(s)</strong></p>
                <p>1.) State any possible risks relating to the product(s) sold - <span>this is auto-generated based on plan/s selected above</span></p>
                <p>2.) State possible disadvantage(s) based on circumstances of client</p>
                <div class="custom-input-layout-row">
                    <textarea  id="risk-limitation" name="risk-limitation"  data-parsley-trigger="change" required=""></textarea>
                </div>
            </div>
            <div class="form-group form-layout-row">
                <p><strong>Reason(s) for Deviation(s)</strong></p>
                <p>- Reasons for any deviation form client's profile, objectives and/or Representative's recommendations (where applicable) -Premiums are more than client's budget</p>
                <p>- Funds recommended (eg. ILP sub-fund, par fund) are of a higher risk than client's risk preference </p>
                <p>- Clients choice of product(s) / fund(s) differs from Representatives recommended plan(s) / fund(s)</p>
                <div class="custom-input-layout-row">
                    <textarea  id=reason-deviation" name="reason-deviation"  data-parsley-trigger="change" required=""></textarea>
                </div>
            </div>






            <div class="nav-step">
                <a href="{{route('single_fact.analysis_recommendations.client_overview', $infoPfr->id)}}" class="style-button1">Back</a>
                <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
            </div>
        </form>      
    </div>
</div>
@include('pages.navigation', ['id' => $infoPfr->id])
@endsection
