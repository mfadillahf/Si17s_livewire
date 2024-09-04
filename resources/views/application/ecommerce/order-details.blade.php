@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-lg-8">

        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Orders #234755</h4>
                        <p class="mb-0 text-muted mt-1">15 March 2024 at 09:45 am from draft orders</p>
                    </div><!--end col-->
                    <div class="col-auto">
                        <button class="btn btn-primary"><i class="fas fa-plus me-1"></i> Add Item</button>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Item</th>
                                <th class="text-end">Price</th>
                                <th class="text-end">Quantity</th>
                                <th class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="/images/products/03.png" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Royal Purse</span>
                                        <span class="text-muted font-13">Pure Lether 100%</span>
                                    </p>
                                </td>
                                <td class="text-end">$80</td>
                                <td class="text-end">3</td>
                                <td class="text-end">$240</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/images/products/04.png" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Apple Watch</span>
                                        <span class="text-muted font-13">Size-05 (Model 2021)</span>
                                    </p>
                                </td>
                                <td class="text-end">$100</td>
                                <td class="text-end">1</td>
                                <td class="text-end">$100</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/images/products/06.png" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Cosco Vollyboll</span>
                                        <span class="text-muted font-13">size-04 (Model 2021)</span>
                                    </p>
                                </td>
                                <td class="text-end">$20</td>
                                <td class="text-end">4</td>
                                <td class="text-end">$80</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/images/products/05.png" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Reebok Shoes</span>
                                        <span class="text-muted font-13">size-08 (Model 2021)</span>
                                    </p>
                                </td>
                                <td class="text-end">$50</td>
                                <td class="text-end">10</td>
                                <td class="text-end">$500</td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="/images/products/01.png" alt="" height="40">
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Morden Chair</span>
                                        <span class="text-muted font-13">Size-Mediam (Model 2021)</span>
                                    </p>
                                </td>
                                <td class="text-end">$70</td>
                                <td class="text-end">2</td>
                                <td class="text-end">$140</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!--card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Bought - Awaiting Delivery</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <a href="" class="text-secondary"><i class="fas fa-download me-1"></i> Download Invoice</a>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="position-relative m-4">
                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 1px;">
                        <div class="progress-bar" style="width: 50%"></div>
                    </div>
                    <div class="position-absolute top-0 start-0 translate-middle bg-primary text-white rounded-pill thumb-md"><i class="iconoir-home"></i></div>
                    <div class="position-absolute top-0 start-50 translate-middle bg-primary-subtle text-primary rounded-pill thumb-md"><i class="iconoir-delivery-truck"></i></div>
                    <div class="position-absolute top-0 start-100 translate-middle bg-light text-dark rounded-pill thumb-md"><i class="iconoir-map-pin"></i></div>
                </div>
                <div class="row row-cols-3">
                    <div class="col text-start">
                        <h6 class="mb-1">Order Created</h6>
                        <p class="mb-0 text-muted fs-12 fw-medium">15 Feb 2024, 11:30 AM</p>
                    </div> <!-- end col -->
                    <div class="col text-center">
                        <h6 class="mb-1">On Delivery</h6>
                        <p class="mb-0 text-muted fs-12 fw-medium">18 Feb 2024, 05:15 PM</p>
                    </div> <!-- end col -->
                    <div class="col text-end">
                        <h6 class="mb-1">Order Delivered</h6>
                        <p class="mb-0 text-muted fs-12 fw-medium">20 Feb 2024, 01:00 PM</p>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="bg-primary-subtle p-2 border-dashed border-primary rounded mt-3">
                    <span class="text-primary fw-semibold">Note :</span><span class="text-primary fw-normal"> Ship all the ordered item together by monday and i send you an email please check. Thanks!</span>
                </div>
            </div><!--card-body-->
        </div><!--end card-->
    </div> <!-- end col -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Order Summary</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <span class="badge rounded text-warning bg-warning-subtle fs-12 p-1">Payment pending</span>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div>
                    <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold">Items subtotal :</p>
                        <p class="text-body-emphasis fw-semibold">$1060</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold">Discount :</p>
                        <p class="text-danger fw-semibold">-$80</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold">Tax :</p>
                        <p class="text-body-emphasis fw-semibold">$180.70</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold">Subtotal :</p>
                        <p class="text-body-emphasis fw-semibold">$1160.70</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold mb-0">Shipping Cost :</p>
                        <p class="text-body-emphasis fw-semibold mb-0">$20</p>
                    </div>
                </div>
                <hr class="hr-dashed">
                <div class="d-flex justify-content-between">
                    <h4 class="mb-0">Total :</h4>
                    <h4 class="mb-0">$1180.70</h4>
                </div>
            </div><!--card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Order Information</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <a href="" class="text-secondary"><i class="fas fa-pen me-1"></i> Edit</a>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-body fw-semibold"><i class="iconoir-profile-circle text-secondary fs-20 align-middle me-1"></i>Username :</p>
                        <p class="text-body-emphasis fw-semibold">@donFlo</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-body fw-semibold"><i class="iconoir-people-tag text-secondary fs-20 align-middle me-1"></i>Full Name :</p>
                        <p class="text-body-emphasis fw-semibold">Don Flowers</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-body fw-semibold"><i class="iconoir-mail text-secondary fs-20 align-middle me-1"></i>Email :</p>
                        <p class="text-body-emphasis fw-semibold">DonIFlowers@jourrapide.com</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-body fw-semibold"><i class="iconoir-dollar-circle text-secondary fs-20 align-middle me-1"></i>Total Payment :</p>
                        <p class="text-body-emphasis fw-semibold"><span class="text-primary">$2450</span> ($30 for transportation)</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-body fw-semibold"><i class="iconoir-calendar text-secondary fs-20 align-middle me-1"></i>Order Date :</p>
                        <p class="text-body-emphasis fw-semibold">31 Dec 2023</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-body fw-semibold"><i class="iconoir-calendar text-secondary fs-20 align-middle me-1"></i>Delivery Date :</p>
                        <p class="text-body-emphasis fw-semibold">05 Jan 2024</p>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <p class="text-body fw-semibold"><i class="iconoir-delivery-truck text-secondary fs-20 align-middle me-1"></i>Courier :</p>
                        <p class="text-body-emphasis fw-semibold">FedEx Corporation</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-body fw-semibold"><i class="iconoir-map-pin text-secondary fs-20 align-middle me-1"></i>Address :</p>
                        <p class="text-body-emphasis fw-semibold"><img src="/images/flags/baha_flag.jpg" alt="" class="thumb-sm rounded-circle d-inline-block me-1">
                            718 Bingamon Branch Road <br> Central Valley, NY 10917
                        </p>
                    </div>
                </div>
            </div><!--card-body-->
        </div><!--end card-->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection