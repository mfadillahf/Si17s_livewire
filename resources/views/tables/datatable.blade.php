@extends('layouts.vertical', ['title' => 'Rizz'])

@section('css')
@vite(['node_modules/simple-datatables/dist/style.css'])
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Customers Details</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table datatable" id="datatable_1">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 16px;">
                                    <div class="form-check mb-0 ms-n1">
                                        <input type="checkbox" class="form-check-input" name="select-all" id="select-all">
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Ext.</th>
                                <th>City</th>
                                <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                <th>Completion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Unity Pugh</td>
                                <td>9958</td>
                                <td>Curicó</td>
                                <td>2005/02/11</td>
                                <td>37%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Theodore Duran</td>
                                <td>8971</td>
                                <td>Dhanbad</td>
                                <td>1999/04/07</td>
                                <td>97%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Kylie Bishop</td>
                                <td>3147</td>
                                <td>Norman</td>
                                <td>2005/09/08</td>
                                <td>63%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Willow Gilliam</td>
                                <td>3497</td>
                                <td>Amqui</td>
                                <td>2009/29/11</td>
                                <td>30%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Blossom Dickerson</td>
                                <td>5018</td>
                                <td>Kempten</td>
                                <td>2006/11/09</td>
                                <td>17%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Elliott Snyder</td>
                                <td>3925</td>
                                <td>Enines</td>
                                <td>2006/03/08</td>
                                <td>57%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Castor Pugh</td>
                                <td>9488</td>
                                <td>Neath</td>
                                <td>2014/23/12</td>
                                <td>93%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Pearl Carlson</td>
                                <td>6231</td>
                                <td>Cobourg</td>
                                <td>2014/31/08</td>
                                <td>100%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Deirdre Bridges</td>
                                <td>1579</td>
                                <td>Eberswalde-Finow</td>
                                <td>2014/26/08</td>
                                <td>44%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Daniel Baldwin</td>
                                <td>6095</td>
                                <td>Moircy</td>
                                <td>2000/11/01</td>
                                <td>33%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Pearl Carlson</td>
                                <td>6231</td>
                                <td>Cobourg</td>
                                <td>2014/31/08</td>
                                <td>100%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Export Table</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table datatable" id="datatable_2">
                        <thead class="">
                            <tr>
                                <th style="width: 16px;">
                                    <div class="form-check mb-0 ms-n1">
                                        <input type="checkbox" class="form-check-input" name="select-all" id="select-all">
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Ext.</th>
                                <th>City</th>
                                <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                <th>Completion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Unity Pugh</td>
                                <td>9958</td>
                                <td>Curicó</td>
                                <td>2005/02/11</td>
                                <td>37%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Theodore Duran</td>
                                <td>8971</td>
                                <td>Dhanbad</td>
                                <td>1999/04/07</td>
                                <td>97%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Kylie Bishop</td>
                                <td>3147</td>
                                <td>Norman</td>
                                <td>2005/09/08</td>
                                <td>63%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Willow Gilliam</td>
                                <td>3497</td>
                                <td>Amqui</td>
                                <td>2009/29/11</td>
                                <td>30%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Blossom Dickerson</td>
                                <td>5018</td>
                                <td>Kempten</td>
                                <td>2006/11/09</td>
                                <td>17%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Elliott Snyder</td>
                                <td>3925</td>
                                <td>Enines</td>
                                <td>2006/03/08</td>
                                <td>57%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Castor Pugh</td>
                                <td>9488</td>
                                <td>Neath</td>
                                <td>2014/23/12</td>
                                <td>93%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Pearl Carlson</td>
                                <td>6231</td>
                                <td>Cobourg</td>
                                <td>2014/31/08</td>
                                <td>100%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Deirdre Bridges</td>
                                <td>1579</td>
                                <td>Eberswalde-Finow</td>
                                <td>2014/26/08</td>
                                <td>44%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Daniel Baldwin</td>
                                <td>6095</td>
                                <td>Moircy</td>
                                <td>2000/11/01</td>
                                <td>33%</td>
                            </tr>
                            <tr>
                                <td style="width: 16px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                    </div>
                                </td>
                                <td>Pearl Carlson</td>
                                <td>6231</td>
                                <td>Cobourg</td>
                                <td>2014/31/08</td>
                                <td>100%</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex flex-wrap gap-2 mt-2">
                        <button type="button" class="btn btn-sm btn-primary csv">Export CSV</button>
                        <button type="button" class="btn btn-sm btn-primary sql">Export SQL</button>
                        <button type="button" class="btn btn-sm btn-primary txt">Export TXT</button>
                        <button type="button" class="btn btn-sm btn-primary json">Export JSON</button>
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection

@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection