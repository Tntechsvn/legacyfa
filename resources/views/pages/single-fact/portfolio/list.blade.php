@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Existing Portfolio:</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>PROPERTY</h3>
            <a  class="btn btn-primary" id="add_new_element" class="" data-toggle="modal" data-target="#property_modal"><i class="far fa-plus-square"></i></a>
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
                @if(isset($infoPortfolio))
                @php $i = 1; @endphp
                @foreach($infoPortfolio->property as $property)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$property['client_property']}}</td>
                    <td>{{$property['category_property']}}</td>
                    <td>{{$property['type_property']}}</td>
                    <td>{{$property['year_property']}}</td>
                    <td>{{$property['price_property']}}</td>
                    <td>{{$property['loan_property']}}</td>
                    <td>{{$property['outstanding_loan']}}</td>
                    <td>{{$property['market_property']}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete"><i class="fas fa-trash"></i></a>
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
            <a  class="btn btn-primary" id="add_new_investment"  class="" data-toggle="modal" data-target="#investment_modal"><i class="far fa-plus-square"></i></a>
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
                @if(isset($infoPortfolio))
                @php $i = 1; @endphp
                @foreach($infoPortfolio->investment as $investment)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$investment['client_investment']}}</td>
                    <td>{{$investment['type_investment']}}</td>
                    <td>{{$investment['company_investment']}}</td>
                    <td>{{$investment['invested_investment']}}</td>
                    <td>{{$investment['amount_investment']}}</td>
                    <td>{{$investment['market_investment']}}</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete"><i class="fas fa-trash"></i></a>
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
            <a  class="btn btn-primary" id="add_new_saving"  class="" data-toggle="modal" data-target="#saving-modal"><i class="far fa-plus-square"></i></a>
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
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>2020</td>
                    <td>50</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- CPF -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>CPF</h3>
            <a  class="btn btn-primary" id="add_new_cpf"  class="" data-toggle="modal" data-target="#cpf-modal"><i class="far fa-plus-square"></i></a>
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
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>2020</td>
                    <td>50</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

        <!-- INSURANCE -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>INSURANCE</h3>
            <a  class="btn btn-primary" id="add_new_insurance"  class="" data-toggle="modal" data-target="#insurance-modal"><i class="far fa-plus-square"></i></a>
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
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>2020</td>
                    <td>50</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
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
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>2020</td>
                    <td>50</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- LOAN -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="addnewelm-style2">
            <h3>LOAN</h3>
            <a  class="btn btn-primary" id="add_new_loan"  class="" data-toggle="modal" data-target="#loan-modal"><i class="far fa-plus-square"></i></a>
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
                <tr>
                    <td>id</td>
                    <td>title</td>
                    <td>Category</td>
                    <td>Category</td>
                    <td>2020</td>
                    <td>2020</td>
                    <td>2020</td>
                    <td>2020</td>
                    <td>50</td>
                    <td>
                        <a href="javascript:;" class="editstyle1 edit"><i class="fas fa-edit"></i></a>
                        <a href="javascript:;" class="deletestyle1 delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
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
                <form name="form_add_new_property" id='form_add_new_property' class="form-control-popup" method="post" action="{{route('portfolio.add_new_property', $infoPfr->id)}}" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="client_property">Client<span>*</span></label>
                        <select name="client_property" id="client_property" class="form-control">
                            <option value="">Select</option>
                            <option value="1">Client1</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="category_property">Category<span>*</span></label>
                        <select name="category_property" id="category_property" class="form-control">
                            <option value="">Select</option>
                            <option value="R">Residence</option>
                            <option value="I">Investment</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="type_property">Type of Property<span>*</span></label>
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
                    <div class="form-group">
                        <label for="year_property">Year Purchased</label>
                        <input type="text" class="form-control" id="year_property" name="year_property" placeholder="Year Purchased" value="" >
                    </div>
                    <div class="form-group">
                        <label for="price_property">Purchase Price ($)</label>
                        <input type="text" class="form-control" id="price_property" name="price_property" placeholder="Purchase Price" value="" >
                    </div>
                    <div class="form-group">
                        <label for="loan_property">Loan Taken ($)</label>
                        <input type="text" class="form-control" id="loan_property" name="loan_property" placeholder="Loan Taken" value="" >
                    </div>
                    <div class="form-group">
                        <label for="outstanding_loan">Current Outstanding Loan ($)</label>
                        <input type="text" class="form-control" id="outstanding_loan" name="outstanding_loan" placeholder="Current Outstanding Loan" value="" >
                    </div>
                    <div class="form-group">
                        <label for="monthly_loan">Monthly Loan Repayment - Cash ($)</label>
                        <input type="text" class="form-control" id="monthly_loan" name="monthly_loan" placeholder="Monthly Loan Repayment - Cash" value="" >
                    </div>
                    <div class="form-group">
                        <label for="monthly_loan_cpf">Monthly Loan Repayment - CPF ($)</label>
                        <input type="text" class="form-control" id="monthly_loan_cpf" name="monthly_loan_cpf" placeholder="Monthly Loan Repayment - CPF" value="" >
                    </div>
                    <div class="form-group">
                        <label for="market_property">Current Market Value ($)</label>
                        <input type="text" class="form-control" id="market_property" name="market_property" placeholder="Current Market Value" value="" >
                    </div>
                    <div class="form-group">
                        <label for="intention">Intention with Property</label>
                        <textarea class="form-control" id="intention" name="intention" placeholder="Intention with Property" value="" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    <button type="button" class="btn btn-primary mb-2">Cancel</button>
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
                    <div class="form-group">
                        <label for="client_investment">Client<span>*</span></label>
                        <select name="client_investment" id="client_investment" class="form-control">
                            <option value="">Select</option>
                            <option value="1">Client1</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="type_investment">Type of Investment<span>*</span></label>
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
                    <div class="form-group">
                        <label for="company_investment">Company</label>
                        <input type="text" class="form-control" id="company_investment" name="company_investment" placeholder="Company" value="" >
                    </div>
                    <div class="form-group">
                        <label for="invested_investment">Year Invested</label>
                        <input type="text" class="form-control" id="invested_investment" name="invested_investment" placeholder="Year Invested" value="" >
                    </div>
                    <div class="form-group">
                        <label for="amount_investment">Investment Amount ($)</label>
                        <input type="text" class="form-control" id="amount_investment" name="amount_investment" placeholder="Investment Amount ($)" value="" >
                    </div>
                    <div class="form-group">
                        <label for="market_investment">Current Market Value ($)<span>*</span></label>
                        <input type="text" class="form-control" id="market_investment" name="market_investment" placeholder="Current Market Value ($)" value="" >
                    </div>
                    <div class="form-group">
                        <label for="source_investment">Source of Funds</label>
                        <input type="text" class="form-control" id="source_investment" name="source_investment" placeholder="Source of Funds" value="" >
                    </div>
                    <div class="form-group">
                        <label for="intention_investment">Intention with Investment</label>
                        <textarea class="form-control" id="intention_investment" name="intention_investment" placeholder="Intention with Investment" value="" ></textarea>
                    </div>
                    <button type="button" class="btn btn-primary mb-2">Cancel</button>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </form>
             </div>
        </div>
    </div>
</div>

<!-- modal INVESTMENT -->
<div class="modal fade" id="saving-modal" tabindex="-1" role="dialog" aria-labelledby="property-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Savings Details</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_saving" id='form_saving' class="form-control" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="client-saving">Client<span>*</span></label>
                        <select name="client-saving" id="client-saving" class="form-control">
                            <option value="">Select</option>
                            <option value="">Client1</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="type-deposit">Type of Deposit<span>*</span></label>
                        <select name="type-deposit" id="type-deposit" class="form-control">
                            <option value="">Select</option>
                            <option value="">Stocks & Shares</option>
                            <option value="">Bonds</option>
                            <option value="">Collective Investment Scheme</option>
                            <option value="">Structured Products</option>
                            <option value="">Business Ownership</option>
                            <option value="">Others</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="bank-saving">Bank</label>
                        <input type="text" class="form-control" id="bank-saving" name="bank-saving" placeholder="Bank" value="" >
                    </div>
                    <div class="form-group">
                        <label for="deposit-year">Deposit Year</label>
                        <input type="text" class="form-control" id="deposit-year" name="deposit-year" placeholder="Deposit Year" value="" >
                    </div>
                    <div class="form-group">
                        <label for="amount-saving">Savings Amount ($)<span>*</span></label>
                        <input type="text" class="form-control" id="amount-saving" name="amount-saving" placeholder="Savings Amount ($)" value="" >
                    </div>
                    <div class="form-group">
                        <label for="intention-saving">Intention for the Savings</label>
                        <textarea  class="form-control" id="intention-saving" name="intention-saving" placeholder="Intention for the Savings" value="" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    <button type="submit" class="btn btn-primary mb-2">Cancel</button>
                </form>
             </div>
        </div>
    </div>
</div>

<!-- modal Savings Details -->
<div class="modal fade" id="saving-modal" tabindex="-1" role="dialog" aria-labelledby="property-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Savings Details</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_saving" id='form_saving' class="form-control" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="client-saving">Client<span>*</span></label>
                        <select name="client-saving" id="client-saving" class="form-control">
                            <option value="">Select</option>
                            <option value="">Client1</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="type-deposit">Type of Deposit<span>*</span></label>
                        <select name="type-deposit" id="type-deposit" class="form-control">
                            <option value="">Select</option>
                            <option value="">Stocks & Shares</option>
                            <option value="">Bonds</option>
                            <option value="">Collective Investment Scheme</option>
                            <option value="">Structured Products</option>
                            <option value="">Business Ownership</option>
                            <option value="">Others</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="bank-saving">Bank</label>
                        <input type="text" class="form-control" id="bank-saving" name="bank-saving" placeholder="Bank" value="" >
                    </div>
                    <div class="form-group">
                        <label for="deposit-year">Deposit Year</label>
                        <input type="text" class="form-control" id="deposit-year" name="deposit-year" placeholder="Deposit Year" value="" >
                    </div>
                    <div class="form-group">
                        <label for="amount-saving">Savings Amount ($)<span>*</span></label>
                        <input type="text" class="form-control" id="amount-saving" name="amount-saving" placeholder="Savings Amount ($)" value="" >
                    </div>
                    <div class="form-group">
                        <label for="intention-saving">Intention for the Savings</label>
                        <textarea  class="form-control" id="intention-saving" name="intention-saving" placeholder="Intention for the Savings" value="" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    <button type="submit" class="btn btn-primary mb-2">Cancel</button>
                </form>
             </div>
        </div>
    </div>
</div>

<!-- modal CPF Details -->
<div class="modal fade" id="cpf-modal" tabindex="-1" role="dialog" aria-labelledby="property-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CPF Details</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_cpf" id='form_cpf' class="form-control" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="client-cpf">Client<span>*</span></label>
                        <select name="client-cpf" id="client-cpf" class="form-control">
                            <option value="">Select</option>
                            <option value="">Client1</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="ordinary-account">Ordinary Account ($)</label>
                        <input type="text" class="form-control" id="ordinary-account" name="ordinary-account" placeholder="Ordinary Account ($)" value="" >
                    </div>
                    <div class="form-group">
                        <label for="special-account">Special Account ($)</label>
                        <input type="text" class="form-control" id="special-account" name="special-account" placeholder="Special Account ($)" value="" >
                    </div>
                    <div class="form-group">
                        <label for="ordinary-account">Medisave Account ($)</label>
                        <input type="text" class="form-control" id="medisave-account" name="medisave-account" placeholder="Medisave Account ($)" value="" >
                    </div>
                    <div class="form-group">
                        <label for="retirement-account">Retirement Account ($)</label>
                        <input type="text" class="form-control" id="retirement-account" name="retirement-account" placeholder="Retirement Account ($)" value="" >
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    <button type="submit" class="btn btn-primary mb-2">Cancel</button>
                </form>
             </div>
        </div>
    </div>
</div>

<!-- modal INSURANCE -->
<div class="modal fade" id="loan-insurance" tabindex="-1" role="dialog" aria-labelledby="property-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">INSURANCE</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_insurance" id='form_insurance' class="form-control" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="client-insurance">Client<span>*</span></label>
                        <select name="client-insurance" id="client-insurance" class="form-control">
                            <option value="">Select</option>
                            <option value="">Client1</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="status-insurance">Status<span>*</span></label>
                        <select name="status-insurance" id="status-insurance" class="form-control">
                            <option value="">Select</option>
                            <option value="">Both Policy Owner & Insured</option>
                            <option value="">Insured</option>
                            <option value="">Policy Owner</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="insurer-insurance">Insurer</label>
                        <input type="text" class="form-control" id="insurer-insurance" name="insurer-insurance" placeholder="Insurer" value="" >
                    </div>
                    <div class="form-group">
                        <label for="policy-type">Policy Type</label>
                        <select name="policy-type" id="policy-type" class="form-control">
                            <option value="">Select</option>
                            <option value="">Wholelife</option>
                            <option value="">Investment-linked</option>
                            <option value="">Endowment</option>
                            <option value="">Term</option>
                            <option value="">Accident</option>
                            <option value="">Hospitalization</option>
                            <option value="">Disability Income</option>
                            <option value="">Others</option>
                        </select> 
                    </div>
                    <div class="custom-input-form1">
                        <div class="form-group">
                            <label for="sa-death">Sum Assured: Death ($)</label>
                            <input type="text" class="form-control" id="sa-death" name="sa-death" placeholder="Sum Assured: Death ($)" value="" >
                        </div>
                        <div class="form-group">
                            <label for="sa-tpd">Sum Assured: TPD ($)</label>
                            <input type="text" class="form-control" id="sa-tpd" name="sa-tpd" placeholder="Sum Assured: TPD ($)" value="" >
                        </div>  
                        <div class="form-group">
                            <label for="sa-ci">Sum Assured: CI ($)</label>
                            <input type="text" class="form-control" id="sa-ci" name="sa-ci" placeholder="Sum Assured: CI ($)" value="" >
                        </div>  
                        <div class="form-group">
                            <label for="sa-accident">Sum Assured: Accident ($)</label>
                            <input type="text" class="form-control" id="sa-accident" name="sa-accident" placeholder="Sum Assured: Accident ($)" value="" >
                        </div> 
                    </div>
                    <div class="custom-input-form-all">
                        <div class="form-group">
                            <label for="year-purchased">Year Purchased</label>
                            <input type="text" class="form-control" id="year-purchased" name="year-purchased" placeholder="Year Purchased" value="" >
                        </div> 
                        <div class="form-group">
                            <label for="policy-term">Policy Term</label>
                            <input type="text" class="form-control" id="policy-term" name="policy-term" placeholder=">Policy Term" value="" >
                        </div> 
                        <div class="form-group">
                            <label for="frequency-insurance">Frequency</label>
                            <select name="frequency-insurance" id="frequency-insurance" class="form-control">
                                <option value="">Select</option>
                                <option value="">Monthly</option>
                                <option value="">Annual</option>
                                <option value="">Single</option>
                                <option value="">Half-Yearly</option>
                                <option value="">Quarterly</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="source-fund">Source Of Fund</label>
                            <select name="source-fund" id="source-fund" class="form-control">
                                <option value="">Select</option>
                                <option value="">Cash</option>
                                <option value="">CPF</option>
                                <option value="">SRS</option>
                            </select> 
                        </div>
                        <div class="form-group">
                            <label for="premium-insurance">Premium ($)</label>
                            <input type="text" class="form-control" id="premium-insurance" name="premium-insurance" placeholder="Premium ($)" value="" >
                        </div>
                    </div>
                    <div class="custom-input-form1 custom-input-form2"> 
                        <div class="form-group">
                            <label for="maturity-year">Maturity Year</label>
                            <input type="text" class="form-control" id="maturity-year" name="maturity-year" placeholder="Maturity Year" value="" >
                        </div> 
                        <div class="form-group">
                            <label for="estimated-maturity">Estimated Maturity Value ($)</label>
                            <input type="text" class="form-control" id="estimated-maturity" name="estimated-maturity" placeholder="Estimated Maturity Value ($)" value="" >
                        </div> 
                        <div class="form-group">
                            <label for="estimated-current-cash">Estimated Current Cash Value ($)<span>*</span></label>
                            <input type="text" class="form-control" id="estimated-current-cash" name="estimated-current-cash" placeholder="Estimated Current Cash Value ($)" value="" >
                        </div> 
                    </div>
                    <div class="custom-input-form3">
                        <div class="form-group">
                            <label for="existing-plan">Name of Existing Plan</label>
                            <input type="text" class="form-control" id="existing-plan" name="existing-plan" placeholder="Name of Existing Plan" value="" >
                        </div>
                        <div class="form-group">
                            <label for="existing-plan">Type of Hospital Covered</label>
                            <label class="radio-inline">
                                <input type="radio" name="existing-plan" value="0" checked>PRIVATE
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="existing-plan" value="1">PUBLIC 
                            </label>
                        </div> 
                        <div class="form-group">
                            <label for="ward-covered">Class of Ward Covered</label>
                            <select name="ward-covered" id="ward-covered" class="form-control">
                                <option value="">Select</option>
                                <option value="">A</option>
                                <option value="">B1</option>
                                <option value="">B2</option>
                                <option value="">C</option>
                            </select> 
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="additional-insurance">Additional Notes</label>
                        <textarea  class="form-control" id="additional-insurance" name="additional-insurance" placeholder="Additional Notes" value="" ></textarea>
                    </div>   
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    <button type="submit" class="btn btn-primary mb-2">Cancel</button>
                </form>
             </div>
        </div>
    </div>
</div>


<!-- modal LOAN -->
<div class="modal fade" id="loan-modal" tabindex="-1" role="dialog" aria-labelledby="property-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">LOAN</h5>  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form name="form_loan" id='form_loan' class="form-control" method="post" action="" data-parsley-validate>
                    @csrf
                    <div class="form-group">
                        <label for="client-cpf">Client<span>*</span></label>
                        <select name="client-cpf" id="client-cpf" class="form-control">
                            <option value="">Select</option>
                            <option value="">Client1</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="type-loan">Client<span>*</span></label>
                        <select name="client-cpf" id="type-loan" class="form-control">
                            <option value="">Select</option>
                            <option value="">Vehicle</option>
                            <option value="">Renovation</option>
                            <option value="">Education</option>
                            <option value="">Credit Card</option>
                            <option value="">Personal Loans</option>
                            <option value="">Overdrafts</option>
                            <option value="">Others</option>
                        </select> 
                    </div>
                    <div class="form-group">
                        <label for="term-loan">Loan Term</label>
                        <input type="text" class="form-control" id="term-loan" name="term-loan" placeholder="Type of Loan" value="" >
                    </div>
                    <div class="form-group">
                        <label for="year-loan">Year of Loan Taken</label>
                        <input type="text" class="form-control" id="year-loan" name="year-loan" placeholder="Year of Loan Taken" value="" >
                    </div>
                    <div class="form-group">
                        <label for="amount-borrowed">Amount Borrowed ($)</label>
                        <input type="text" class="form-control" id="amount-borrowed" name="amount-borrowed" placeholder="Amount Borrowed ($)" value="" >
                    </div>
                    <div class="form-group">
                        <label for="outstanding-amount">Current Outstanding Amount ($)<span>*</span></label>
                        <input type="text" class="form-control" id="outstanding-amount" name="outstanding-amount" placeholder="Current Outstanding Amount ($)" value="" >
                    </div>
                    <div class="form-group">
                        <label for="lender-loan">Lender</label>
                        <input type="text" class="form-control" id="lender-loan" name="lender-loan" placeholder="Lender" value="" >
                    </div>
                    <div class="form-group">
                        <label for="interest-rate">Interest Rate</label>
                        <input type="text" class="form-control" id="interest-rate" name="interest-rate" placeholder="Interest Rate" value="" >
                    </div>
                    <div class="form-group">
                        <label for="repayment-cash">Monthly Loan Repayment - Cash ($)</label>
                        <input type="text" class="form-control" id="repayment-cash" name="repayment-cash" placeholder="Monthly Loan Repayment - Cash ($)" value="" >
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    <button type="submit" class="btn btn-primary mb-2">Cancel</button>
                </form>
             </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
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
                        alert(res['message']);
                    }else{
                        location.reload();
                        alert(res['message']);
                    }
                }
            });
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
                        alert(res['message']);
                    }else{
                        location.reload();
                        alert(res['message']);
                    }
                }
            });
        });

        $('.delete').on('click', function(){
            if(confirm('Do you want delete this dependant??')){
                var id = $(this).data('id');
                var url = $(this).data('url');
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: 'json',
                    success: function(res){
                        if(res['error']){
                            alert(res['message']);
                        }else{
                            alert(res['message']);
                        }
                    }
                });
            }
        });
    });
</script>
@endsection
