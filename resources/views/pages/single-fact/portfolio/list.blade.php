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

        <!-- CPF -->
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
        <div class="addnewelm-style2">
            <a  class="btn btn-primary" id="add_new_insurance2"  class="" data-toggle="modal" data-target="#insurance2-modal"><i class="far fa-plus-square"></i></a>
        </div>
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
