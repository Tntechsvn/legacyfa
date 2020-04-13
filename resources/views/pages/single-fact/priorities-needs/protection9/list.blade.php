@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Fund Hospital Expenses</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ct-page">
        <form name="protection1" id='protection1' class="" method="post" action="" data-parsley-validate>
            @csrf
            <table id="protection3-1" class="table table-content table-style1 protection-st" style="width:100%">
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
                                        <input type="radio" name="status1-client1" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="status1-client1" id="female" value="1">
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
                                        <input type="radio" name="status1-dependent1" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="status1-dependent1" id="female" value="1">
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
                                        <input type="radio" name="choice-ward-client1"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-client1"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-client1"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-client1"  value="1">
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
                                        <input type="radio" name="choice-ward-dependent1"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent1"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent1"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent1"  value="1">
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
                                <input class="form-check-input" type="checkbox"  name="type-cover-client1" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover-client1" value="option2">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover-dependent1" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover-dependent1" value="option2">
                                Rider
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">Existing Hospital Cover:</td>
                    </tr>
                    <tr>
                        <td>Existing Plan Name</td>
                        <td><input type="text" class="form-control" id="existing-plan-client1" name="existing-plan-client1" placeholder="" value="" ></td>
                        <td><input type="text" class="form-control" id="existing-plan-dependent1" name="existing-plan-dependent1" placeholder="" value="" ></td>
                    </tr>


                    <tr>
                        <td>Type of Hospital Covered</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital-covered-client1" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital-covered-client1" id="female" value="1">
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
                                        <input type="radio" name="hospital-covered-dependent1" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital-covered-dependent1" id="female" value="1">
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
                                        <input type="radio" name="class-ward-client1"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-client1"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-client1"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-client1"  value="1">
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
                                        <input type="radio" name="class-ward-dependent1"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent1"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent1"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent1"  value="1">
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
                                <input class="form-check-input" type="checkbox"  name="type-cover2-client1" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover2-client1" value="option2">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover2-dependent1" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover2-dependent1" value="option2">
                                Rider
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="2"><textarea class="form-control" id="additional-client1" name="additional-client1"></textarea></td>
                    </tr>
                </tbody>
            </table>


            <table id="protection3-1" class="table table-content table-style1 protection-st" style="width:100%">
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
                                        <input type="radio" name="status1-dependent2" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="status1-dependent2" id="female" value="1">
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
                                        <input type="radio" name="status1-dependent3" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="status1-dependent3" id="female" value="1">
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
                                        <input type="radio" name="status1-dependent4" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="status1-dependent4" id="female" value="1">
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
                                        <input type="radio" name="choice-ward-dependent2"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent2"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent2"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent2"  value="1">
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
                                        <input type="radio" name="choice-ward-dependent3"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent3"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent3"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent3"  value="1">
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
                                        <input type="radio" name="choice-ward-dependent4"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent4"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent4"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="choice-ward-dependent4"  value="1">
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
                                <input class="form-check-input" type="checkbox"  name="type-cover-dependent2" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover-dependent2" value="option2">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover-dependent3" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover-dependent3" value="option2">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover-dependent4" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover-dependent4" value="option2">
                                Rider
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">Existing Hospital Cover:</td>
                    </tr>
                    <tr>
                        <td>Existing Plan Name</td>
                        <td><input type="text" class="form-control" id="existing-plan-dependent2" name="existing-plan-dependent2" placeholder="" value="" ></td>
                        <td><input type="text" class="form-control" id="existing-plan-dependent3" name="existing-plan-dependent3" placeholder="" value="" ></td>
                        <td><input type="text" class="form-control" id="existing-plan-dependent4" name="existing-plan-dependent4" placeholder="" value="" ></td>
                    </tr>


                    <tr>
                        <td>Type of Hospital Covered</td>
                        <td>
                            <div class="custom-input-layout-row">
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="fas fa-check-circle"></i>
                                        <input type="radio" name="hospital-covered-dependent2" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital-covered-dependent2" id="female" value="1">
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
                                        <input type="radio" name="hospital-covered-dependent3" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital-covered-dependent3" id="female" value="1">
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
                                        <input type="radio" name="hospital-covered-dependent4" id="male" value="0" checked>
                                    </div>
                                    Private
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="hospital-covered-dependent4" id="female" value="1">
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
                                        <input type="radio" name="class-ward-dependent2"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent2"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent2"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent2"  value="1">
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
                                        <input type="radio" name="class-ward-dependent3"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent3"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent3"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent3"  value="1">
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
                                        <input type="radio" name="class-ward-dependent4"  value="0" checked>
                                    </div>
                                    A
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent4"  value="1">
                                    </div>
                                    B1
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent4"  value="1">
                                    </div>
                                    B2
                                </label>
                                <label class="radio-inline custom-style-radio1">
                                    <div class="style-checked">
                                        <i class="far fa-circle"></i>
                                        <input type="radio" name="class-ward-dependent4"  value="1">
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
                                <input class="form-check-input" type="checkbox"  name="type-cover2-dependent2" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover2-dependent2" value="option2">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover2-dependent3" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover2-dependent3" value="option2">
                                Rider
                            </div>
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover2-dependent4" value="option1">
                                Basic
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox"  name="type-cover2-dependent4" value="option2">
                                Rider
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Additional Notes</td>
                        <td colspan="3"><textarea class="form-control" id="additional-client1" name="additional-client1"></textarea></td>
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

