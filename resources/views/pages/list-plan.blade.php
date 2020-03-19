@extends('master')

@section('content')

                    <div class="maincontent">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titlesection borderfullwidth">
                            <h4>List Of Plans:</h4>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="addnewelm">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addplanmodal">
                                  Add Plan
                                </button>
                            </div>
                            <table id="example" class="table table-striped table-bordered table-content" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Company</th>
                                        <th>Play Name</th>
                                        <th>Categoty</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Aviva</td>
                                        <td>Delete</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- modal ADD NEW Plan  -->
                    <div class="modal fade" id="addplanmodal" tabindex="-1" role="dialog" aria-labelledby="addplanmodal" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Add Plan</h5>  
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body">
                                <form name="addphone_Form" id='addphone_form' class="form-control-user" method="post" action="" data-parsley-validate>

                                    <div class="section-input">
                                    <label>Company<span>*</span></label>
                                       <select name="company">
                                           <option value="Company 1">Company 1</option>
                                           <option value="Company 1">Company 2</option>
                                       </select> 
                                        <select class="form-control" id="exampleFormControlSelect1">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name-plan">Plan Name<span>*</span></label>
                                        <input type="text" class="form-control" id="name-plan"  name="name-plan" placeholder="Plan Name" value="" >
                                    </div>
                                    <div class="section-input">
                                        <label>Category<span>*</span></label>
                                       <select name="category">
                                           <option value="Company 1">Category 1</option>
                                           <option value="Company 1">Category 2</option>
                                       </select> 
                                    </div>
                                    <div class="section-input">
                                        <label>Plan Featured<span>*</span></label>
                                        <textarea placeholder="Plan Featured"></textarea> 
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                </form>
                            </div>
                        </div>
                      </div>
                    </div>

@endsection
