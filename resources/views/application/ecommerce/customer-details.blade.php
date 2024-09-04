@extends('layouts.vertical', ['title' => 'Riz'])

@section('content')

<div class="row">

    <div class="col-md-12 col-lg-5">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col ">
                        <div class="d-flex align-items-center">
                            <div class="position-relative">
                                <img src="/images/users/avatar-8.jpg" alt="" class="rounded-circle img-fluid">
                                <div class="position-absolute top-50 start-100 translate-middle">
                                    <img src="/images/flags/baha_flag.jpg" alt="" class="rounded-circle thumb-sm border border-3 border-white">
                                </div>
                            </div>
                            <div class="flex-grow-1 text-truncate ms-3">
                                <h5 class="m-0 fs-3 fw-bold">Karen Savage</h5>
                                <p class="text-muted mb-0">@karen</p>
                            </div><!--end media body-->
                        </div><!--end media-->
                    </div><!--end col-->
                    <div class="col-auto text-end">
                        <button type="button" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</button>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="mt-3">
                    <div class="text-body mb-2  d-flex align-items-center"><i class="iconoir-language fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Language :</span> English / French / Spanish</div>
                    <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                    <div class="text-body mb-3 d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                    <ul class="mb-0 list-unstyled">
                        <li class="list-inline-item">
                            <a href="#" class="d-flex justify-content-center align-items-center thumb-md rounded-circle mx-auto social twitter">
                                <i class="icofont-twitter fs-18 align-self-center mb-0 "></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="d-flex justify-content-center align-items-center thumb-md rounded-circle mx-auto social instagram">
                                <i class="icofont-instagram fs-18 align-self-center mb-0 "></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="d-flex justify-content-center align-items-center thumb-md rounded-circle mx-auto social facebook">
                                <i class="icofont-facebook fs-18 align-self-center mb-0 "></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-12 col-lg-7">
        <div class="card">
            <div class="card-body">
                <div class="row g-3">
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="iconoir-dollar-circle fs-24 align-self-center text-info me-2"></i>
                                    <div class="flex-grow-1 text-truncate">
                                        <p class="text-dark mb-0 fw-semibold fs-13">Total Cost</p>
                                        <h3 class="mt-1 mb-0 fs-18 fw-bold">$27,215k <span class="fs-11 text-muted fw-normal">New 365 Days</span> </h3>
                                    </div><!--end media body-->
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="iconoir-cart fs-24 align-self-center text-blue me-2"></i>
                                    <div class="flex-grow-1 text-truncate">
                                        <p class="text-dark mb-0 fw-semibold fs-13">Total Order</p>
                                        <h3 class="mt-1 mb-0 fs-18 fw-bold">190 <span class="fs-11 text-muted fw-normal">Order 365 Days</span> </h3>
                                    </div><!--end media body-->
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->

                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="iconoir-thumbs-up fs-24 align-self-center text-primary me-2"></i>
                                    <div class="flex-grow-1 text-truncate">
                                        <p class="text-dark mb-0 fw-semibold fs-13">Completed</p>
                                        <h3 class="mt-1 mb-0 fs-18 fw-bold">165 <span class="fs-11 text-muted fw-normal">Comp. Order 365 Days</span> </h3>
                                    </div><!--end media body-->
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                    <div class="col-md-6 col-lg-6">
                        <div class="card shadow-none border mb-3 mb-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <i class="iconoir-xmark-circle fs-24 align-self-center text-danger me-2"></i>
                                    <div class="flex-grow-1 text-truncate">
                                        <p class="text-dark mb-0 fw-semibold fs-13">Canceld</p>
                                        <h3 class="mt-1 mb-0 fs-18 fw-bold">25 <span class="fs-11 text-muted fw-normal">Canc.Order 365 Days</span> </h3>
                                    </div><!--end media body-->
                                </div>
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                </div><!--end row-->
                <div class="bg-primary-subtle p-2 border-dashed border-primary rounded mt-3">
                    <img src="/images/extra/party.gif" alt="" class="d-inline-block me-1" height="30">
                    <span class="text-primary fw-semibold">Karen Savage's</span><span class="text-primary fw-normal"> best performance from last year</span>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Orders</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <button class="btn btn-primary"><i class="fas fa-eye me-1"></i> View All</button>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>Date</th>
                                <th>Payment</th>
                                <th>Status</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#632536</a></td>
                                <td>
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Bata Shoes</span>
                                        <span class="text-muted font-13">size-08 (Model 2024)</span>
                                    </p>
                                </td>
                                <td>15/08/2023</td>
                                <td>UPI</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success"><i class="fas fa-check me-1"></i> Completed</span>
                                </td>
                                <td>$390</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#365485</a></td>
                                <td>
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Morden Chair</span>
                                        <span class="text-muted font-13">Size-Mediam (Model 2021)</span>
                                    </p>
                                </td>
                                <td>22/09/2023</td>
                                <td>Banking</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success"><i class="fas fa-check me-1"></i> Completed</span>
                                </td>
                                <td>$630</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#325415</a></td>
                                <td>
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Reebok Shoes</span>
                                        <span class="text-muted font-13">size-08 (Model 2021)</span>
                                    </p>
                                </td>
                                <td>31/12/2023</td>
                                <td>Paypal</td>
                                <td>
                                    <span class="badge bg-danger-subtle text-danger"><i class="fas fa-xmark me-1"></i> Cancel</span>
                                </td>
                                <td>$450</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#546987</a></td>
                                <td>
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Cosco Vollyboll</span>
                                        <span class="text-muted font-13">size-04 (Model 2021)</span>
                                    </p>
                                </td>
                                <td>05/01/2024</td>
                                <td>UPI</td>
                                <td>
                                    <span class="badge bg-success-subtle text-success"><i class="fas fa-check me-1"></i> Completed</span>
                                </td>
                                <td>$880</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#951236</a></td>
                                <td>
                                    <p class="d-inline-block align-middle mb-0">
                                        <span class="d-block align-middle mb-0 product-name text-body">Royal Purse</span>
                                        <span class="text-muted font-13">Pure Lether 100%</span>
                                    </p>
                                </td>
                                <td>20/02/2024</td>
                                <td>BTC</td>
                                <td>
                                    <span class="badge bg-secondary-subtle text-secondary"><i class="fas fa-clock me-1"></i> Pending</span>
                                </td>
                                <td>$520</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection