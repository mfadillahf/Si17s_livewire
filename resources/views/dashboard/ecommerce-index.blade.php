@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-4">
        <div class="card">
            <div class="card-body border-dashed-bottom pb-3">
                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <div class="d-flex justify-content-center align-items-center thumb-xl border border-secondary rounded-circle">
                            <i class="icofont-money-bag h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                        <h5 class="mt-2 mb-0 fs-14">Total Revenue</h5>
                    </div><!--end col-->
                    <div class="col align-self-center">
                        <div id="line-1" class="apex-charts float-end"></div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
            <div class="card-body">
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-md-6">
                        <h2 class="fs-22 mt-0 mb-1 fw-bold">$8365.00</h2>
                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                    </div><!--end col-->
                    <div class="col-12 col-md-6 align-self-center text-start text-md-end">
                        <button type="button" class="btn btn-primary btn-sm px-2 mt-2 mt-md-0 ">View Report</button>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-body border-dashed-bottom pb-3">
                <div class="row d-flex justify-content-between">
                    <div class="col-auto">
                        <div class="d-flex justify-content-center align-items-center thumb-xl border border-secondary rounded-circle">
                            <i class="icofont-opencart h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                        <h5 class="mt-2 mb-0 fs-14">New Order</h5>
                    </div><!--end col-->
                    <div class="col align-self-center ">
                        <div id="line-2" class="apex-charts float-end"></div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
            <div class="card-body">
                <div class="row d-flex justify-content-center ">
                    <div class="col-12 col-md-6">
                        <h2 class="fs-22 mt-0 mb-1 fw-bold">722</h2>
                        <p class="mb-0 text-truncate text-muted"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span> New Sessions Today</p>
                    </div><!--end col-->
                    <div class="col-12 col-md-6 align-self-center text-start text-md-end">
                        <button type="button" class="btn btn-outline-secondary btn-sm px-2 mt-2 mt-md-0 ">View Report</button>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-12 col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Monthly Avg. Income</h4>
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
                <div id="monthly_income" class="apex-charts"></div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="fs-18 fw-semibold">$24,500</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Today's Revenue</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="fs-18 fw-semibold">82.8%</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Conversion Rate</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->

                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="fs-18 fw-semibold">$9982.00</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Total Expenses</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                    <div class="col-md-6 col-lg-3">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col text-center">
                                        <span class="fs-18 fw-semibold">$80.5</span>
                                        <h6 class="text-uppercase text-muted mt-2 m-0">Avg. Value</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Popular Products</h4>
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
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="border-top-0">Product</th>
                                <th class="border-top-0">Price</th>
                                <th class="border-top-0">Sell</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Action</th>
                            </tr><!--end tr-->
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/images/products/01.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">History Book</h6>
                                            <a href="#" class="fs-12 text-primary">ID: A3652</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>$50 <del class="text-muted fs-10">$70</del></td>
                                <td>450 <small class="text-muted">(550)</small></td>
                                <td><span class="badge bg-primary-subtle text-primary px-2">In Stock</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr><!--end tr-->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/images/products/02.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Colorful Pots</h6>
                                            <a href="#" class="fs-12 text-primary">ID: A5002</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>$99 <del class="text-muted fs-10">$150</del></td>
                                <td>750 <small class="text-muted">(00)</small></td>
                                <td><span class="badge bg-danger-subtle text-danger px-2">Out of Stock</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr><!--end tr-->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/images/products/04.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Pearl Bracelet</h6>
                                            <a href="#" class="fs-12 text-primary">ID: A6598</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>$199 <del class="text-muted fs-10">$250</del></td>
                                <td>280 <small class="text-muted">(220)</small></td>
                                <td><span class="badge bg-primary-subtle text-primary px-2">In Stock</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr><!--end tr-->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/images/products/06.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Dancing Man</h6>
                                            <a href="#" class="fs-12 text-primary">ID: A9547</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>$40 <del class="text-muted fs-10">$49</del></td>
                                <td>500 <small class="text-muted">(1000)</small></td>
                                <td><span class="badge bg-danger-subtle text-danger px-2">Out of Stock</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr><!--end tr-->
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="/images/products/05.png" height="40" class="me-3 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Fire Lamp</h6>
                                            <a href="#" class="fs-12 text-primary">ID: A2047</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>$80 <del class="text-muted fs-10">$59</del></td>
                                <td>800 <small class="text-muted">(2000)</small></td>
                                <td><span class="badge bg-danger-subtle text-danger px-2">Out of Stock</span></td>
                                <td>
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr><!--end tr-->
                        </tbody>
                    </table> <!--end table-->
                </div><!--end /div-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->

    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Customers</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <div class="img-group d-flex">
                            <a class="user-avatar position-relative d-inline-block" href="#">
                                <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                            </a>
                            <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                            </a>
                            <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                <img src="/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                            </a>
                            <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                            </a>
                            <a href="" class="user-avatar position-relative d-inline-block ms-1">
                                <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+6</span>
                            </a>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
            </div>
            <div class="card-body pt-0">
                <div id="customers" class="apex-charts"></div>
                <div class="bg-light py-3 px-2 mb-0 mt-3 text-center rounded">
                    <h6 class="mb-0"><i class="icofont-calendar fs-5 me-1"></i> 01 January 2024 to 31 December 2024</h6>
                </div>
                <p class="text-secondary text-truncate mb-0 rounded mt-2 text-center">To review the new order by Jems. <a href="#" class="text-primary text-decoration-underline">detail</a> </p>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Top Selling by Country</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-calendar fs-5 me-1"></i> This Month<i class="las la-angle-down ms-1"></i>
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
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                            <tr class="">
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/flags/us_flag.jpg" class="me-2 align-self-center thumb-md rounded-circle" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">USA</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="progress bg-primary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 85%"></div>
                                                </div>
                                                <small class="flex-shrink-1 ms-1">85%</small>
                                            </div>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-body ps-2 align-self-center text-end">$5860.00</span></td>
                            </tr><!--end tr-->
                            <tr class="">
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/flags/spain_flag.jpg" class="me-2 align-self-center thumb-md rounded-circle" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">Spain</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="progress bg-primary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 78%"></div>
                                                </div>
                                                <small class="flex-shrink-1 ms-1">78%</small>
                                            </div>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-body ps-2 align-self-center text-end">$5422.00</span></td>
                            </tr><!--end tr-->
                            <tr class="">
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/flags/french_flag.jpg" class="me-2 align-self-center thumb-md rounded-circle" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">French</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="progress bg-primary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 71%"></div>
                                                </div>
                                                <small class="flex-shrink-1 ms-1">71%</small>
                                            </div>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-body ps-2 align-self-center text-end">$4587.00</span></td>
                            </tr><!--end tr-->
                            <tr class="">
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/flags/germany_flag.jpg" class="me-2 align-self-center thumb-md rounded-circle" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">Germany</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="progress bg-primary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 65%"></div>
                                                </div>
                                                <small class="flex-shrink-1 ms-1">65%</small>
                                            </div>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-body ps-2 align-self-center text-end">$3655.00</span></td>
                            </tr><!--end tr-->
                            <tr class="">
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/flags/baha_flag.jpg" class="me-2 align-self-center thumb-md rounded-circle" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">Bahamas</h6>
                                            <div class="d-flex align-items-center">
                                                <div class="progress bg-primary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 48%"></div>
                                                </div>
                                                <small class="flex-shrink-1 ms-1">48%</small>
                                            </div>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-body ps-2 align-self-center text-end">$3325.00</span></td>
                            </tr><!--end tr-->
                        </tbody>
                    </table> <!--end table-->
                </div><!--end /div-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Categories Data</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <div class="text-center">
                            <h6 class="text-uppercase text-muted mt-1 m-0"><span class="fs-16 fw-semibold">24+</span> Categories</h6>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
            </div>
            <div class="card-body pt-0">
                <div id="categories" class="apex-charts mt-n2"></div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary mx-auto">More Detail <i class="fa-solid fa-arrow-right-long"></i> </button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->

    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Recents Order</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-calendar fs-5 me-1"></i> This Month<i class="las la-angle-down ms-1"></i>
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
                <div class="table-responsive">
                    <table class="table mb-0">
                        <tbody>
                            <tr class="">
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-1.jpg" height="36" class="me-2 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">Scott Holland</h6>
                                            <a href="#" class="font-12 text-muted text-decoration-underline">#3652</a>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-primary ps-2 align-self-center text-end">$3325.00</span></td>
                            </tr><!--end tr-->
                            <tr class="">
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-2.jpg" height="36" class="me-2 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">Karen Savage</h6>
                                            <a href="#" class="font-12 text-muted text-decoration-underline">#4789</a>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-primary ps-2 align-self-center text-end">$2548.00</span></td>
                            </tr><!--end tr-->
                            <tr class="">
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-3.jpg" height="36" class="me-2 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">Steven Sharp </h6>
                                            <a href="#" class="font-12 text-muted text-decoration-underline">#4521</a>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-primary ps-2 align-self-center text-end">$2985.00</span></td>
                            </tr><!--end tr-->
                            <tr class="">
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-4.jpg" height="36" class="me-2 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">Teresa Himes </h6>
                                            <a href="#" class="font-12 text-muted text-decoration-underline">#3269</a>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-primary ps-2 align-self-center text-end">$1845.00</span></td>
                            </tr><!--end tr-->
                            <tr>
                                <td class="px-0">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-5.jpg" height="36" class="me-2 align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0 text-truncate">Ralph Denton</h6>
                                            <a href="#" class="font-12 text-muted text-decoration-underline">#4521</a>
                                        </div><!--end media body-->
                                    </div><!--end media-->
                                </td>
                                <td class="px-0 text-end"><span class="text-primary ps-2 align-self-center text-end">$1422.00</span></td>
                            </tr><!--end tr-->
                        </tbody>
                    </table> <!--end table-->
                </div><!--end /div-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection

@section('script')
@vite(['resources/js/pages/ecommerce-index.init.js'])
@endsection