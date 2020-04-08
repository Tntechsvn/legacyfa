@extends('master')

@section('content')
<div class="maincontent">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
        <h4>Priorities & Needs Rating</h4>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <p class="note-alert-step7">Please rate all categories according to your priority:</p>
        <form name="cashflow_form" id='cashflow_form' class="" method="post" action="" data-parsley-validate>
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
                <tbody>
                    <tr>
                        <td>Income Protection Upon Death</td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien1trate1" checked>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien1rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien1rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien1goplan1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien2trate1" checked>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien2rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien2rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien2goplan1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="dependent1trate1" checked>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="dependentclien1rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="dependentclien1rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="dependentclien1goplan1">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Income Protection Upon Death</td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien1trate1" checked>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien1rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien1rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien1goplan1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien2trate1" checked>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien2rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien2rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="clien2goplan1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="dependent1trate1" checked>
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="dependentclien1rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="dependentclien1rate1">
                            </div>
                        </td>
                        <td>
                            <div class="radio">
                                <input type="radio" name="dependentclien1goplan1">
                            </div>
                        </td>
                    </tr>
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
@endsection