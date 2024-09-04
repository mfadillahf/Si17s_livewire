@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Orders</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <button class="btn btn-primary"><i class="fas fa-plus me-1"></i> Add Order</button>
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
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#546987</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#362514</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#215487</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#326598</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#369852</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#987456</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#159753</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#852456</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#154863</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}">#625877</a></td>
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
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection