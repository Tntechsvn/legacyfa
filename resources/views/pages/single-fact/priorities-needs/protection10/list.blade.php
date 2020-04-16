@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Estate Planning</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection10-1" class="table table-content table-style1 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>Client 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">Do you have a Will written?</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="written_client1" id="yes_written" value="0" checked>
                                    </div>
                                    Yes
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="written_client1" id="no_written" value="1">
                                    </div>
                                    No
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>When was it last updated?</td>
                        <td>
                           <input type="text" class="form-control" id="time_updated_client1" name="time_updated_client1" placeholder="N/A" value="" readonly="">
                        </td>
                    </tr>
                    <tr>
                        <td>Were there any provisions made for special needs dependant?</td>
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
                        </td>
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
                                        <input type="radio" name="beneficiaries_client1" id="yes_beneficiaries" value="0" checked>
                                    </div>
                                    Yes
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="beneficiaries_client1" id="no_beneficiaries" value="1">
                                    </div>
                                    No
                                </label>
                            </div>
                        </td>
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

