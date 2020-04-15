@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Existing Portfolio:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>PROPERTY</h3>
            <a class="btn btn-primary" id="add_new_property" data-url="{{route('portfolio.add_new_property', $infoPfr->id)}}"><i class="far fa-plus-square"></i></a>
        </div>
        <table id="property-table" class="table table-style1 table-content" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Client</th>
                    <th>Category</th>
                    <th>Type of Property</th>
                    <th>Year Purchased</th>
                    <th>Purchase Price ($)</th>
                    <th>Loan Taken ($)</th>
                    <th>Current Outstanding Loan ($)</th>
                    <th>Current Market Value ($)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($arrProperty))
                @php $i = 1; @endphp
                @foreach($arrProperty as $property)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$property->client_property}}</td>
                    <td>{{$property->category_property}}</td>
                    <td>{{$property->type_property}}</td>
                    <td>{{$property->year_property}}</td>
                    <td>{{$property->price_property}}</td>
                    <td>{{$property->loan_property}}</td>
                    <td>{{$property->outstanding_loan}}</td>
                    <td>{{$property->market_property}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit_property" data-client="{{$property->client_property}}" data-category="{{$property->category_property}}" data-type="{{$property->type_property}}" data-year="{{$property->year_property}}" data-price="{{$property->price_property}}" data-loan="{{$property->loan_property}}" data-outstanding="{{$property->outstanding_loan}}" data-monthly-loan="{{$property->monthly_loan}}" data-monthly-loan-cpf="{{$property->monthly_loan_cpf}}" data-market="{{$property->market_property}}" data-intention="{{$property->intention}}" data-url="{{route('portfolio.edit_property', [$infoPfr->id, $i])}}" data-title="Edit"><i class="fas fa-edit"></i></a>

                        <a href="javascript:;" class="deletestyle1 delete_property" data-url="{{route('portfolio.delete_property', [$infoPfr->id, $i])}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @php $i++; @endphp
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
    <!-- INVESTMENT -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>INVESTMENT</h3>
            <a class="btn btn-primary" id="add_new_investment" data-url="{{route('portfolio.add_new_investment', $infoPfr->id)}}"><i class="far fa-plus-square"></i></a>
        </div>
        <table id="investment-table" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Client</th>
                    <th>Type of Investment</th>
                    <th>Company</th>
                    <th>Investment Year</th>
                    <th>Investment Amount ($)</th>
                    <th>Current Value ($)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($arrInvestment))
                @php $i = 1; @endphp
                @foreach($arrInvestment as $investment)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$investment->client_investment}}</td>
                    <td>{{$investment->type_investment}}</td>
                    <td>{{$investment->company_investment}}</td>
                    <td>{{$investment->invested_investment}}</td>
                    <td>{{$investment->amount_investment}}</td>
                    <td>{{$investment->market_investment}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit_investment" data-client="{{$investment->client_investment}}" data-type="{{$investment->type_investment}}" data-company="{{$investment->company_investment}}" data-invested="{{$investment->invested_investment}}" data-amount="{{$investment->amount_investment}}" data-market="{{$investment->market_investment}}" data-source="{{$investment->source_investment}}" data-intention="{{$investment->intention_investment}}" data-url="{{route('portfolio.edit_investment', [$infoPfr->id, $i])}}" data-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete_investment" data-url="{{route('portfolio.delete_investment', [$infoPfr->id, $i])}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @php $i++; @endphp
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <!-- SAVINGS -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>SAVINGS</h3>
            <a class="btn btn-primary" id="add_new_saving" data-url="{{route('portfolio.add_new_saving', $infoPfr->id)}}"><i class="far fa-plus-square"></i></a>
        </div>
        <table id="saving-table" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Client</th>
                    <th>Type of Deposit</th>
                    <th>Bank</th>
                    <th>Deposit Year</th>
                    <th>Savings Amount ($)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($arrSaving))
                @php $i = 1; @endphp
                @foreach($arrSaving as $saving)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$saving->client_saving}}</td>
                    <td>{{$saving->type_deposit}}</td>
                    <td>{{$saving->bank_saving}}</td>
                    <td>{{$saving->deposit_year}}</td>
                    <td>{{$saving->amount_saving}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit_saving" data-client="{{$saving->client_saving}}" data-type="{{$saving->type_deposit}}" data-bank="{{$saving->bank_saving}}" data-year="{{$saving->deposit_year}}" data-amount="{{$saving->amount_saving}}" data-intention="{{$saving->intention_saving}}" data-url="{{route('portfolio.edit_saving', [$infoPfr->id, $i])}}" data-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete_saving" data-url="{{route('portfolio.delete_saving', [$infoPfr->id, $i])}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                    @php $i++; @endphp
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <!-- CPF -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>CPF</h3>
            <a  class="btn btn-primary" id="add_new_cpf" class="" data-toggle="modal" data-target="#cpf_modal"><i class="far fa-plus-square"></i></a>
        </div>
        <table id="cpf-table" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Client</th>
                    <th>Ordinary Account ($)</th>
                    <th>Special Account ($)</th>
                    <th>Medisave Account ($)</th>
                    <th>Retirement Account ($)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($arrCpf))
                @php $i = 1; @endphp
                @foreach($arrCpf as $cpf)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$cpf->client_cpf}}</td>
                    <td>{{$cpf->ordinary_account}}</td>
                    <td>{{$cpf->special_account}}</td>
                    <td>{{$cpf->medisave_account}}</td>
                    <td>{{$cpf->retirement_account}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit_cpf" data-toggle="modal" data-target="#cpf_modal" data-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete_cpf" data-url="{{route('portfolio.delete_cpf', [$infoPfr->id, $i])}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                    @php $i++; @endphp
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <!-- INSURANCE -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>INSURANCE</h3>
            <a  class="btn btn-primary" id="add_new_insurance" class="" data-toggle="modal" data-target="#insurance_modal"><i class="far fa-plus-square"></i></a>
        </div>
        <table id="insurance-table" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th rowspan="2">SN</th>
                    <th rowspan="2">Client</th>
                    <th rowspan="2">Status</th>
                    <th rowspan="2">Insurer</th>
                    <th rowspan="2">Policy Type</th>
                    <th colspan="4">Sum Assured ($)</th>
                    <th rowspan="2">Purchase Year</th>
                    <th rowspan="2">Premium ($) & Frequency</th>
                    <th rowspan="2">Maturity Year</th>
                    <th rowspan="2">Estimated Current Cash Value ($)</th>
                    <th rowspan="2">Actions</th>
                </tr>
                <tr>
                    <th>Death</th>
                    <th>TPD</th>
                    <th>CI</th>
                    <th>Acc</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($arrInsurance))
                @php $i = 1; @endphp
                @foreach($arrInsurance as $insurance)
                @if($insurance->policy_type != "HO")
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$insurance->client_insurance}}</td>
                    <td>{{$insurance->status_insurance}}</td>
                    <td>{{$insurance->insurer_insurance}}</td>
                    <td>{{$insurance->policy_type}}</td>
                    <td>{{$insurance->sa_death}}</td>
                    <td>{{$insurance->sa_tpd}}</td>
                    <td>{{$insurance->sa_ci}}</td>
                    <td>{{$insurance->sa_accident}}</td>
                    <td>{{$insurance->year_purchased}}</td>
                    <td>{{$insurance->frequency_insurance}}</td>
                    <td>{{$insurance->maturity_year}}</td>
                    <td>{{$insurance->estimated_current_cash}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit_insurance" data-toggle="modal" data-target="#insurance_modal" data-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete_insurance" data-url="{{route('portfolio.delete_insurance', [$infoPfr->id, $i])}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endif
                @php $i++; @endphp
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <!-- INSURANCE 2 -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <table id="insurance2-table" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Client</th>
                    <th>Status</th>
                    <th>Insurer</th>
                    <th>Policy Type</th>
                    <th>Existing Hospitalization Plan (if any)</th>
                    <th>Type of Hospital Covered</th>
                    <th>Class of Ward Covered</th>
                    <th>Purchase Year</th>
                    <th>Premium ($) & Frequency</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($arrInsurance))
                @php $i = 1; @endphp
                @foreach($arrInsurance as $insurance)
                @if($insurance->policy_type == "HO")
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$insurance->client_insurance}}</td>
                    <td>{{$insurance->status_insurance}}</td>
                    <td>{{$insurance->insurer_insurance}}</td>
                    <td>{{$insurance->policy_type}}</td>
                    <td>{{$insurance->existing_plan}}</td>
                    <td>{{$insurance->insurance_hospital}}</td>
                    <td>{{$insurance->ward_covered}}</td>
                    <td>{{$insurance->year_purchased}}</td>
                    <td>{{$insurance->premium_insurance}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit_insurance" data-toggle="modal" data-target="#insurance_modal" data-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete_insurance" data-url="{{route('portfolio.delete_insurance', [$infoPfr->id, $i])}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endif
                @php $i++; @endphp
                @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <!-- LOAN -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>LOAN</h3>
            <a  class="btn btn-primary" id="add_new_loan"  class="" data-toggle="modal" data-target="#loan_modal"><i class="far fa-plus-square"></i></a>
        </div>
        <table id="loan-table" class="table table-content table-style1" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Client</th>
                    <th>Type of Loan</th>
                    <th>Loan Term</th>
                    <th>Year of Loan Taken</th>
                    <th>Amount Borrowed ($)</th>
                    <th>Current Outstanding Loan ($)</th>
                    <th>Lender</th>
                    <th>Interest Rate</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($arrLoan))
                @php $i = 1; @endphp
                @foreach($arrLoan as $loan)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$loan->client_loan}}</td>
                    <td>{{$loan->type_loan}}</td>
                    <td>{{$loan->term_loan}}</td>
                    <td>{{$loan->year_loan}}</td>
                    <td>{{$loan->amount_borrowed}}</td>
                    <td>{{$loan->outstanding_amount}}</td>
                    <td>{{$loan->lender_loan}}</td>
                    <td>{{$loan->interest_rate}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit_loan" data-toggle="modal" data-target="#loan_modal" data-title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete_loan" data-url="{{route('portfolio.delete_loan', [$infoPfr->id, $i])}}" data-title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                    @php $i++; @endphp
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <div class="nav-step">
            <button class="btn btn-primary mb-2 style-button1">Back</button>
            <button type="submit" class="btn btn-primary mb-2 style-button1">Next</button>
        </div> 
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

<!-- modal PROPERTY -->
<div class="modal fade" id="property_modal" tabindex="-1" role="dialog" aria-labelledby="property-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Property Details</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new_property" id='form_add_new_property' class="form-control-popup parsley-form1" method="post" action="{{route('portfolio.add_new_property', $infoPfr->id)}}" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal" id="form_client_property">
                        <label for="client_property">Client<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="client_property" id="client_property" class="form-control">
                                <option value="">Select</option>
                                <option value="1">Client1</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal" id="form_category_property">
                        <label for="category_property">Category<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="category_property" id="category_property" class="form-control">
                                <option value="">Select</option>
                                <option value="R">Residence</option>
                                <option value="I">Investment</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-group-modal" id="form_type_property">
                        <label for="type_property">Type of Property<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="type_property" id="type_property" class="form-control">
                                <option value="">Select</option>
                                <option value="HDBDP">HDB direct purchase</option>
                                <option value="HDBR">HDB resale</option>
                                <option value="CON">Condo</option>
                                <option value="LAN">Landed</option>
                                <option value="COM">Commercial</option>
                                <option value="Ot">Others</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="year_property">Year Purchased</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="year_property" name="year_property" placeholder="Year Purchased" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="price_property">Purchase Price ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="price_property" name="price_property" placeholder="Purchase Price" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="loan_property">Loan Taken ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="loan_property" name="loan_property" placeholder="Loan Taken" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="outstanding_loan">Current Outstanding Loan ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="outstanding_loan" name="outstanding_loan" placeholder="Current Outstanding Loan" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="monthly_loan">Monthly Loan Repayment - Cash ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="monthly_loan" name="monthly_loan" placeholder="Monthly Loan Repayment - Cash" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="monthly_loan_cpf">Monthly Loan Repayment - CPF ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="monthly_loan_cpf" name="monthly_loan_cpf" placeholder="Monthly Loan Repayment - CPF" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="market_property">Current Market Value ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="market_property" name="market_property" placeholder="Current Market Value" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="intention">Intention with Property</label>
                        <div class="custom-input-modal">
                            <textarea class="form-control" id="intention" name="intention" placeholder="Intention with Property" value="" ></textarea>
                        </div>
                    </div>
                    <div class="nav-step form-group-modal">
                        <button type="button" class="btn btn-primary mb-2 style-button1">Cancel</button>
                        <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal INVESTMENT -->
<div class="modal fade" id="investment_modal" tabindex="-1" role="dialog" aria-labelledby="property_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Investment Details</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new_investment" id='form_add_new_investment' class="form-control-popup" method="post" action="{{route('portfolio.add_new_investment', $infoPfr->id)}}" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal" id="form_client_investment">
                        <label for="client_investment">Client<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="client_investment" id="client_investment" class="form-control">
                                <option value="">Select</option>
                                <option value="1">Client1</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal" id="form_type_investment">
                        <label for="type_investment">Type of Investment<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="type_investment" id="type_investment" class="form-control">
                                <option value="">Select</option>
                                <option value="SS">Stocks & Shares</option>
                                <option value="B">Bonds</option>
                                <option value="CI">Collective Investment Scheme</option>
                                <option value="SP">Structured Products</option>
                                <option value="BO">Business Ownership</option>
                                <option value="Ot">Others</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="company_investment">Company</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="company_investment" name="company_investment" placeholder="Company" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="invested_investment">Year Invested</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="invested_investment" name="invested_investment" placeholder="Year Invested" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="amount_investment">Investment Amount ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="amount_investment" name="amount_investment" placeholder="Investment Amount ($)" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="market_investment">Current Market Value ($)<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="market_investment" name="market_investment" placeholder="Current Market Value ($)" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="source_investment">Source of Funds</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="source_investment" name="source_investment" placeholder="Source of Funds" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="intention_investment">Intention with Investment</label>
                        <div class="custom-input-modal">
                            <textarea class="form-control" id="intention_investment" name="intention_investment" placeholder="Intention with Investment" value="" ></textarea>
                        </div>
                    </div>
                    <div class="nav-step form-group-modal">
                        <button type="button" class="btn btn-primary mb-2 style-button1">Cancel</button>
                        <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal SAVING -->
<div class="modal fade" id="saving_modal" tabindex="-1" role="dialog" aria-labelledby="saving_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Savings Details</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_add_new_saving" id='form_add_new_saving' class="form-control-popup" method="post" action="{{route('portfolio.add_new_saving', $infoPfr->id)}}" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal" id="form_client_saving">
                        <label for="client_saving">Client<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="client_saving" id="client_saving" class="form-control">
                                <option value="">Select</option>
                                <option value="1">Client1</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal" id="form_deposit_saving">
                        <label for="type_deposit">Type of Deposit<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="type_deposit" id="type_deposit" class="form-control">
                                <option value="">Select</option>
                                <option value="BSA">Savings Account</option>
                                <option value="FD">Fixed Deposit</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="bank_saving">Bank</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="bank_saving" name="bank_saving" placeholder="Bank" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="deposit_year">Deposit Year</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="deposit_year" name="deposit_year" placeholder="Deposit Year" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="amount_saving">Savings Amount ($)<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="amount_saving" name="amount_saving" placeholder="Savings Amount ($)" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="intention_saving">Intention for the Savings</label>
                        <div class="custom-input-modal">
                            <textarea class="form-control" id="intention_saving" name="intention_saving" placeholder="Intention for the Savings" value="" ></textarea>
                        </div>
                    </div>
                    <div class="nav-step form-group-modal">
                        <button type="button" class="btn btn-primary mb-2 style-button1">Cancel</button>
                        <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal CPF Details -->
<div class="modal fade" id="cpf_modal" tabindex="-1" role="dialog" aria-labelledby="property-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CPF Details</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_cpf" id='form_cpf' class="form-control-popup" method="post" action="{{route('portfolio.add_new_cpf', $infoPfr->id)}}" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal">
                        <label for="client_cpf">Client<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="client_cpf" id="client_cpf" class="form-control">
                                <option value="">Select</option>
                                <option value="1">Client1</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="ordinary_account">Ordinary Account ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="ordinary_account" name="ordinary_account" placeholder="Ordinary Account ($)" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="special_account">Special Account ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="special_account" name="special_account" placeholder="Special Account ($)" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="medisave_account">Medisave Account ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="medisave_account" name="medisave_account" placeholder="Medisave Account ($)" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="retirement_account">Retirement Account ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="retirement_account" name="retirement_account" placeholder="Retirement Account ($)" value="" >
                        </div>
                    </div>
                    <div class="nav-step form-group-modal">
                        <button type="button" class="btn btn-primary mb-2 style-button1">Cancel</button>
                        <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal INSURANCE -->
<div class="modal fade" id="insurance_modal" tabindex="-1" role="dialog" aria-labelledby="insurance_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">INSURANCE</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_insurance" id='form_insurance' class="form-control-popup" method="post" action="{{route('portfolio.add_new_insurance', $infoPfr->id)}}" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal">
                        <label for="client_insurance">Client<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="client_insurance" id="client_insurance" class="form-control">
                                <option value="">Select</option>
                                <option value="1">Client1</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="status_insurance">Status<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="status_insurance" id="status_insurance" class="form-control">
                                <option value="PO & INS">Both Policy Owner & Insured</option>
                                <option value="INS">Insured</option>
                                <option value="PO">Policy Owner</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="insurer_insurance">Insurer</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="insurer_insurance" name="insurer_insurance" placeholder="Insurer" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="policy_type">Policy Type</label>
                        <div class="custom-input-modal">
                            <select name="policy_type" id="policy_type" class="form-control">
                                <option value="WL">Wholelife</option>
                                <option value="IL">Investment-linked</option>
                                <option value="EN">Endowment</option>
                                <option value="TE">Term</option>
                                <option value="AC">Accident</option>
                                <option value="HO">Hospitalization</option>
                                <option value="DI">Disability Income</option>
                                <option value="Ot">Others</option>
                            </select> 
                        </div>
                    </div>
                    <div class="custom-input-form1">
                        <div class="form-group form-group-modal">
                            <label for="sa_death">Sum Assured: Death ($)</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="sa_death" name="sa_death" placeholder="Sum Assured: Death ($)" value="" >
                            </div>
                        </div>
                        <div class="form-group form-group-modal">
                            <label for="sa_tpd">Sum Assured: TPD ($)</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="sa_tpd" name="sa_tpd" placeholder="Sum Assured: TPD ($)" value="" >
                            </div>
                        </div>  
                        <div class="form-group form-group-modal">
                            <label for="sa_ci">Sum Assured: CI ($)</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="sa_ci" name="sa_ci" placeholder="Sum Assured: CI ($)" value="" >
                            </div>
                        </div>  
                        <div class="form-group form-group-modal">
                            <label for="sa_accident">Sum Assured: Accident ($)</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="sa_accident" name="sa_accident" placeholder="Sum Assured: Accident ($)" value="" >
                            </div>
                        </div> 
                    </div>
                    <div class="custom-input-form-all">
                        <div class="form-group form-group-modal">
                            <label for="year_purchased">Year Purchased</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="year_purchased" name="year_purchased" placeholder="Year Purchased" value="" >
                            </div>
                        </div> 
                        <div class="form-group form-group-modal">
                            <label for="policy_term">Policy Term</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="policy_term" name="policy_term" placeholder="Policy Term" value="" >
                            </div>
                        </div> 
                        <div class="form-group form-group-modal">
                            <label for="frequency_insurance">Frequency</label>
                            <div class="custom-input-modal">
                                <select name="frequency_insurance" id="frequency_insurance" class="form-control">
                                    <option value="M">Monthly</option>
                                    <option value="A">Annual</option>
                                    <option value="S">Single</option>
                                    <option value="H">Half-Yearly</option>
                                    <option value="Q">Quarterly</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group form-group-modal">
                            <label for="source_fund">Source Of Fund</label>
                            <div class="custom-input-modal">
                                <select name="source_fund" id="source_fund" class="form-control">
                                    <option value="Cash">Cash</option>
                                    <option value="CPF">CPF</option>
                                    <option value="SRS">SRS</option>
                                </select> 
                            </div>
                        </div>
                        <div class="form-group form-group-modal">
                            <label for="premium_insurance">Premium ($)</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="premium_insurance" name="premium_insurance" placeholder="Premium ($)" value="" >
                            </div>
                        </div>
                    </div>
                    <div class="custom-input-form1 custom-input-form2"> 
                        <div class="form-group form-group-modal">
                            <label for="maturity_year">Maturity Year</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="maturity_year" name="maturity_year" placeholder="Maturity Year" value="" >
                            </div>
                        </div> 
                        <div class="form-group form-group-modal">
                            <label for="estimated_maturity">Estimated Maturity Value ($)</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="estimated_maturity" name="estimated_maturity" placeholder="Estimated Maturity Value ($)" value="" >
                            </div>
                        </div> 
                        <div class="form-group form-group-modal">
                            <label for="estimated_current_cash">Estimated Current Cash Value ($)<span>*</span></label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="estimated_current_cash" name="estimated_current_cash" placeholder="Estimated Current Cash Value ($)" value="" >
                            </div>
                        </div> 
                    </div>
                    <div class="custom-input-form3">
                        <div class="form-group form-group-modal">
                            <label for="existing_plan">Name of Existing Plan</label>
                            <div class="custom-input-modal">
                                <input type="text" class="form-control" id="existing_plan" name="existing_plan" placeholder="Name of Existing Plan" value="" >
                            </div>
                        </div>
                        <div class="form-group form-group-modal">
                            <label for="">Type of Hospital Covered</label>
                            <div class="custom-input-modal">
                                <label class="radio-inline">
                                    <input type="radio" name="insurance_hospital" id="private" value="0" checked>PRIVATE
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="insurance_hospital" id="pubic" value="1">PUBLIC 
                                </label>
                            </div>
                        </div> 
                        <div class="form-group form-group-modal">
                            <label for="ward_covered">Class of Ward Covered</label>
                            <div class="custom-input-modal">
                                <select name="ward_covered" id="ward_covered" class="form-control">
                                    <option value="A">A</option>
                                    <option value="B1">B1</option>
                                    <option value="B2">B2</option>
                                    <option value="C">C</option>
                                </select> 
                            </div>
                        </div> 
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="additional_insurance">Additional Notes</label>
                        <div class="custom-input-modal">
                            <textarea class="form-control" id="additional_insurance" name="additional_insurance" placeholder="Additional Notes" value="" ></textarea>
                        </div>
                    </div>  
                    <div class="nav-step form-group-modal">
                        <button type="button" class="btn btn-primary mb-2 style-button1">Cancel</button>
                        <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>

<!-- modal LOAN -->
<div class="modal fade" id="loan_modal" tabindex="-1" role="dialog" aria-labelledby="property-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">LOAN</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_loan" id='form_loan' class="form-control-popup" method="post" action="{{route('portfolio.add_new_loan', $infoPfr->id)}}" data-parsley-validate>
                    @csrf
                    <div class="form-group form-group-modal">
                        <label for="client_loan">Client<span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="client_loan" id="client_loan" class="form-control">
                                <option value="">Select</option>
                                <option value="1">Client1</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="type_loan">Type of Loan <span>*</span></label>
                        <div class="custom-input-modal">
                            <select name="type_loan" id="type_loan" class="form-control">
                                <option value="V">Vehicle</option>
                                <option value="R">Renovation</option>
                                <option value="E">Education</option>
                                <option value="CC">Credit Card</option>
                                <option value="PL">Personal Loans</option>
                                <option value="O">Overdrafts</option>
                                <option value="Ot">Others</option>
                            </select> 
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="term_loan">Loan Term</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="term_loan" name="term_loan" placeholder="Type of Loan" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="year_loan">Year of Loan Taken</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="year_loan" name="year_loan" placeholder="Year of Loan Taken" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="amount_borrowed">Amount Borrowed ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="amount_borrowed" name="amount_borrowed" placeholder="Amount Borrowed ($)" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="outstanding_amount">Current Outstanding Amount ($)<span>*</span></label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="outstanding_amount" name="outstanding_amount" placeholder="Current Outstanding Amount ($)" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="lender_loan">Lender</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="lender_loan" name="lender_loan" placeholder="Lender" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="interest_rate">Interest Rate</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="interest_rate" name="interest_rate" placeholder="Interest Rate" value="" >
                        </div>
                    </div>
                    <div class="form-group form-group-modal">
                        <label for="repayment_cash">Monthly Loan Repayment - Cash ($)</label>
                        <div class="custom-input-modal">
                            <input type="text" class="form-control" id="repayment_cash" name="repayment_cash" placeholder="Monthly Loan Repayment - Cash ($)" value="" >
                        </div>
                    </div>
                    <div class="nav-step form-group-modal">
                        <button type="button" class="btn btn-primary mb-2 style-button1">Cancel</button>
                        <button type="submit" class="btn btn-primary mb-2 style-button1">Submit</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#add_new_property').click(function(){
            var url = $(this).data('url');
            $('#property_modal').modal('show');
            $('#form_add_new_property').attr('action', url);
            $("div#form_client_property select").val('');
            $("div#form_category_property select").val('');
            $("div#form_type_property select").val('');
            $('#year_property').val('');
            $('#price_property').val('');
            $('#loan_property').val('');
            $('#outstanding_loan').val('');
            $('#monthly_loan').val('');
            $('#monthly_loan_cpf').val('');
            $('#market_property').val('');
            $('#intention').val('');
        });

        $('.edit_property').click(function(){
            var client = $(this).data('client');
            var category = $(this).data('category');
            var type = $(this).data('type');
            var year = $(this).data('year');
            var price = $(this).data('price');
            var loan = $(this).data('loan');
            var outstanding = $(this).data('outstanding');
            var monthly_loan = $(this).data('monthly-loan');
            var monthly_loan_cpf = $(this).data('monthly-loan-cpf');
            var market = $(this).data('market');
            var intention = $(this).data('intention');
            var url = $(this).data('url');

            $('#property_modal').modal('show');
            $('#form_add_new_property').attr('action', url);
            $("div#form_client_property select").val(client);
            $("div#form_category_property select").val(category);
            $("div#form_type_property select").val(type);
            $('#year_property').val(year);
            $('#price_property').val(price);
            $('#loan_property').val(loan);
            $('#outstanding_loan').val(outstanding);
            $('#monthly_loan').val(monthly_loan);
            $('#monthly_loan_cpf').val(monthly_loan_cpf);
            $('#market_property').val(market);
            $('#intention').val(intention);
        });

        $('#form_add_new_property').on('submit', function(e){
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

        $('.delete_property').click(function(){
            if(confirm('Do you want delete this property??')){
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
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
            }
        });

        $('#add_new_investment').click(function(){
            var url = $(this).data('url');
            $('#investment_modal').modal('show');
            $('#form_add_new_investment').attr('action', url);
            $("div#form_client_investment select").val('');
            $("div#form_type_investment select").val('');
            $('#company_investment').val('');
            $('#invested_investment').val('');
            $('#amount_investment').val('');
            $('#market_investment').val('');
            $('#source_investment').val('');
            $('#intention_investment').val('');
        });

        $('.edit_investment').click(function(){
            var client = $(this).data('client');
            var type = $(this).data('type');
            var company = $(this).data('company');
            var invested = $(this).data('invested');
            var amount = $(this).data('amount');
            var market = $(this).data('market');
            var source = $(this).data('source');
            var intention = $(this).data('intention');
            var url = $(this).data('url');

            $('#investment_modal').modal('show');
            $('#form_add_new_investment').attr('action', url);

            $("div#form_client_investment select").val(client);
            $("div#form_type_investment select").val(type);
            $('#company_investment').val(company);
            $('#invested_investment').val(invested);
            $('#amount_investment').val(amount);
            $('#market_investment').val(market);
            $('#source_investment').val(source);
            $('#intention_investment').val(intention);
        });

        $('#form_add_new_investment').on('submit', function(e){
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

        $('.delete_investment').click(function(){
            if(confirm('Do you want delete this investment??')){
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
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
            }
        });

        $('#add_new_saving').click(function(){
            var url = $(this).data('url');
            $('#saving_modal').modal('show');
            $('#form_add_new_saving').attr('action', url);
            $("div#form_client_saving select").val('');
            $("div#form_deposit_saving select").val('');
            $('#bank_saving').val('');
            $('#deposit_year').val('');
            $('#amount_saving').val('');
            $('#intention_saving').val('');
        });

        $('.edit_saving').click(function(){
            var client = $(this).data('client');
            var type = $(this).data('type');
            var bank = $(this).data('bank');
            var year = $(this).data('year');
            var amount = $(this).data('amount');
            var intention = $(this).data('intention');
            var url = $(this).data('url');

            $('#saving_modal').modal('show');
            $('#form_add_new_saving').attr('action', url);

            $("div#form_client_saving select").val(client);
            $("div#form_deposit_saving select").val(type);
            $('#bank_saving').val(bank);
            $('#deposit_year').val(year);
            $('#amount_saving').val(amount);
            $('#intention_saving').val(intention);
        });

        $('#form_saving').on('submit', function(e){
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

        $('.delete_saving').click(function(){
            if(confirm('Do you want delete this saving??')){
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
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
            }
        });

        $('#form_cpf').on('submit', function(e){
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

        $('.delete_cpf').click(function(){
            if(confirm('Do you want delete this cpf??')){
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
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
            }
        });

        $('#form_insurance').on('submit', function(e){
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

        $('.delete_insurance').on('click', function(){
            if(confirm('Do you want delete this insurance??')){
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
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
                            location.reload();
                            alert(res['message']);
                        }
                    }
                });
            }
        });

        $('#form_loan').on('submit', function(e){
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
                        location.reload();
                        alert(res['message']);
                    }
                }
            });
        });

        $('.delete_loan').on('click', function(){
            if(confirm('Do you want delete this loan??')){
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
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
            }
        });

        $('.edit_property').click(function(){
            $('#property_modal').modal('show');
        })

        $('.edit_loan').click(function(){
            $('#loan_modal').modal('show');
        })

    });
</script>
@endsection
