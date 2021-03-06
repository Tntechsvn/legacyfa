@extends('master')

@section('content')

                    <div class="maincontent">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
                            <h4>List Companies:</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="addnewelm">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addcompanymodal">
                                  Add Company
                                </button>
                            </div>
                            <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Company</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- modal ADD NEW COMPANY -->
                    <div class="modal fade" id="addcompanymodal" tabindex="-1" role="dialog" aria-labelledby="addcompanymodal" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Add Company</h5>  
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body">
                                <form name="addphone_Form" id='addphone_form' class="form-control-user" method="post" action="" data-parsley-validate>
                                    <label>Company<span>*</span></label>
                                    <input type="text" class="form-control-elm input-user" id="name-company" value="" placeholder="Company Name" >
                                    <button type="submit" class="btn btn-primary submit-menuhasbooking">Submit</button>
                                </form>
                            </div>
                        </div>
                      </div>
                    </div>               

@endsection
