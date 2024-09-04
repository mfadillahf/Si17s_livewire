@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-5">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Customers Data</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-calendar fs-5 me-1"></i> This Year<i class="las la-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">This Year</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="row g-3">
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="fs-18 fw-semibold">38,321</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Total Customers</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="fs-18 fw-semibold">946</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">New Customers</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->

                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="fs-18 fw-semibold">70.8%</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Returning Customers</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="fs-18 fw-semibold">1.5%</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Bounce Rate</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-12 col-lg-7">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Customers Growth</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-calendar fs-5 me-1"></i> This Year<i class="las la-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">This Year</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div id="customers-line" class="apex-charts"></div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Twitter</p>
                        <h3 class="mt-2 mb-0 fw-bold">2215 <span class="fs-13 text-muted">Click</span> </h3>
                    </div><!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-blue rounded-circle mx-auto">
                            <i class="icofont-twitter h1 align-self-center mb-0 text-white"></i>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row d-flex justify-content-center  mt-3 text-center">
                    <div class="col-6">
                        <h5 class="mb-2 fs-18 mb-0 fw-bold">214 <span class="text-success fw-normal fs-12">1.9%</span></h5>
                        <p class="text-muted mb-0 fw-semibold fs-14">Audiance</p>
                    </div><!--end col-->
                    <div class="col-6 align-self-center">
                        <h5 class="mb-2 fs-18 mb-0 fw-bold">3251 <span class="text-danger fw-normal fs-12">0.5%</span> </h5>
                        <p class="text-muted mb-0 fw-semibold fs-14">Comission</p>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-outline-primary px-3">Report</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Google</p>
                        <h3 class="mt-2 mb-0 fw-bold">2154 <span class="fs-13 text-muted">Click</span> </h3>
                    </div><!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-danger rounded-circle mx-auto">
                            <i class="icofont-google-plus h1 align-self-center mb-0 text-white"></i>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row d-flex justify-content-center  mt-3 text-center">
                    <div class="col-6">
                        <h5 class="mb-2 fs-18 mb-0 fw-bold">159 <span class="text-success fw-normal fs-12">2.5%</span></h5>
                        <p class="text-muted mb-0 fw-semibold fs-14">Audiance</p>
                    </div><!--end col-->
                    <div class="col-6 align-self-center">
                        <h5 class="mb-2 fs-18 mb-0 fw-bold">1245 <span class="text-danger fw-normal fs-12">0.7%</span> </h5>
                        <p class="text-muted mb-0 fw-semibold fs-14">Comission</p>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-outline-primary px-3">Report</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Instagram</p>
                        <h3 class="mt-2 mb-0 fw-bold">3251 <span class="fs-13 text-muted">Click</span> </h3>
                    </div><!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-warning rounded-circle mx-auto">
                            <i class="icofont-instagram h1 align-self-center mb-0 text-white"></i>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row d-flex justify-content-center  mt-3 text-center">
                    <div class="col-6">
                        <h5 class="mb-2 fs-18 mb-0 fw-bold">124 <span class="text-success fw-normal fs-12">1.7%</span></h5>
                        <p class="text-muted mb-0 fw-semibold fs-14">Audiance</p>
                    </div><!--end col-->
                    <div class="col-6 align-self-center">
                        <h5 class="mb-2 fs-18 mb-0 fw-bold">2514 <span class="text-danger fw-normal fs-12">0.2%</span> </h5>
                        <p class="text-muted mb-0 fw-semibold fs-14">Comission</p>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-outline-primary px-3">Report</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->
<div class="row">
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
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Ext.</th>
                                <th>City</th>
                                <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                <th>Completion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Unity Pugh
                                </td>
                                <td>9958</td>
                                <td>Curicó</td>
                                <td>2005/02/11</td>
                                <td>37%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-2.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Theodore Duran
                                </td>
                                <td>8971</td>
                                <td>Dhanbad</td>
                                <td>1999/04/07</td>
                                <td>97%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-3.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Kylie Bishop
                                </td>
                                <td>3147</td>
                                <td>Norman</td>
                                <td>2005/09/08</td>
                                <td>63%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-4.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Willow Gilliam
                                </td>
                                <td>3497</td>
                                <td>Amqui</td>
                                <td>2009/29/11</td>
                                <td>30%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-5.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Blossom Dickerson
                                </td>
                                <td>5018</td>
                                <td>Kempten</td>
                                <td>2006/11/09</td>
                                <td>17%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-3.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Elliott Snyder
                                </td>
                                <td>3925</td>
                                <td>Enines</td>
                                <td>2006/03/08</td>
                                <td>57%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Castor Pugh
                                </td>
                                <td>9488</td>
                                <td>Neath</td>
                                <td>2014/23/12</td>
                                <td>93%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-2.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Pearl Carlson
                                </td>
                                <td>6231</td>
                                <td>Cobourg</td>
                                <td>2014/31/08</td>
                                <td>100%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-3.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Deirdre Bridges
                                </td>
                                <td>1579</td>
                                <td>Eberswalde-Finow</td>
                                <td>2014/26/08</td>
                                <td>44%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-4.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Daniel Baldwin
                                </td>
                                <td>6095</td>
                                <td>Moircy</td>
                                <td>2000/11/01</td>
                                <td>33%</td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <img src="/images/users/avatar-5.jpg" alt="" class="thumb-md rounded-circle me-1">
                                    Pearl Carlson
                                </td>
                                <td>6231</td>
                                <td>Cobourg</td>
                                <td>2014/31/08</td>
                                <td>100%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
@vite(['resources/js/pages/analytics-customers.init.js'])
@endsection