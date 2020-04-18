@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth step-title">
        <h4>Step 7 - Priorities & Needs Rating</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sub-title-step">
        <p class="stlstep">7.9 - Fund Hospital Expenses</p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection3-1" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Hospital Expenses</th>
                        <th>Client 1</th>
                        <th>Dependent 1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3">Desired Hospital Cover:</td>
                    </tr>
                    <tr>
                        <td>Choice of Hospital Type</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_type_desired_client1" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_type_desired_client1" value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_type_desired_dependent1" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_type_desired_dependent1" value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Choice of Ward Class</td>
                        <td>
                            <div class="custom-input-layout-row width100">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_class_client1" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_client1" value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_client1" value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_client1" value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_class_dependent1" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent1"  value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent1"  value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent1"  value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Type of Cover</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_client1" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_client1" value="R">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_dependent1" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_dependent1" value="R">
                                Rider
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Existing Hospital Cover:</td>
                    </tr>
                    <tr>
                        <td>Existing Plan Name</td>
                        <td><input type="text" class="form-control" id="existing_plan_client1" name="existing_plan_client1" placeholder="" value="" ></td>
                        <td><input type="text" class="form-control" id="existing_plan_dependent1" name="existing_plan_dependent1" placeholder="" value="" ></td>
                    </tr>
                    <tr>
                        <td>Type of Hospital Covered</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_covered_client1" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_covered_client1" value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_covered_dependent1" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_covered_dependent1" value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Class of Ward Cover</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_cover_client1" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_client1" value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_client1" value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_client1" value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_cover_dependent1" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent1" value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent1" value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent1" value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Type of Cover</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_client1" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_client1" value="R">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_dependent1" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_dependent1" value="R">
                                Rider
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="2"><textarea class="form-control" id="additional_group1" name="additional_group1"></textarea></td>
                    </tr>
                </tbody>
            </table>


            <table id="protection3-1" class="table table-content table-bordered table-style2 protection-st" style="width:100%">
                <thead>
                    <tr>
                        <th>Fund Hospital Expenses</th>
                        <th>Dependent 2</th>
                        <th>Dependent 3</th>
                        <th>Dependent 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4">Desired Hospital Cover:</td>
                    </tr>
                    <tr>
                        <td>Choice of Hospital Type</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_type_desired_dependent2" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_type_desired_dependent2" value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_type_desired_dependent3" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_type_desired_dependent3" value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_type_desired_dependent4" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_type_desired_dependent4" value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Choice of Ward Class</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_class_dependent2" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent2" value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent2" value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent2" value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_class_dependent3" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent3" value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent3" value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent3" value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_class_dependent4" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent4" value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent4" value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_class_dependent4" value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Type of Cover</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_dependent2" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_dependent2" value="R">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_dependent3" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_dependent3" value="R">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_dependent4" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_desired_dependent4" value="R">
                                Rider
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">Existing Hospital Cover:</td>
                    </tr>
                    <tr>
                        <td>Existing Plan Name</td>
                        <td><input type="text" class="form-control" id="existing_plan_dependent2" name="existing_plan_dependent2" placeholder="" value="" ></td>
                        <td><input type="text" class="form-control" id="existing_plan_dependent3" name="existing_plan_dependent3" placeholder="" value="" ></td>
                        <td><input type="text" class="form-control" id="existing_plan_dependent4" name="existing_plan_dependent4" placeholder="" value="" ></td>
                    </tr>
                    <tr>
                        <td>Type of Hospital Covered</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_covered_dependent2" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_covered_dependent2"  value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_covered_dependent3" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_covered_dependent3" value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital_covered_dependent4" value="PR" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital_covered_dependent4" value="PU">
                                    </div>
                                    Public
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Class of Ward Cover</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_cover_dependent2" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent2" value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent2" value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent2" value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_cover_dependent3" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent3" value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent3" value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent3" value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="ward_cover_dependent4" value="A" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent4" value="B1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent4" value="B2">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="ward_cover_dependent4" value="C">
                                    </div>
                                    C
                                </label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Type of Cover</td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_dependent2" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_dependent2" value="R">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_dependent3" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_dependent3" value="R">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_dependent4" value="B">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="type_cover_existing_dependent4" value="R">
                                Rider
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="3"><textarea class="form-control" id="additional_group2" name="additional_group2"></textarea></td>
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
