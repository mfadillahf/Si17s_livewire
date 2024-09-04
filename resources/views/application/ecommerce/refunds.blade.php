@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-lg-8">

        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Refund Request</h4>
                        <p class="mb-0 text-muted mt-1">Orders #234755</p>
                    </div><!--end col-->
                    <div class="col-auto">
                        <a href="{{ route('third', ['application', 'ecommerce', 'order-details'])}}" class="text-secondary"><i class="fa-solid fa-circle-info me-1"></i> Order Detail</a>
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
    </div> <!-- end col -->
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Order Summary</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <span class="badge rounded text-success bg-success-subtle fs-12 p-1">Payment Completed</span>
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
            <div class="card-body">
                <form>
                    <div class="form-groupmb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" placeholder="Amount">
                    </div><!--end form-group-->
                    <div class="form-group mb-3">
                        <label class="form-label mt-2" for="customer-message">Message</label>
                        <textarea class="form-control" rows="3" id="customer-message" placeholder="writing here.."></textarea>
                    </div><!--end form-group-->
                    <button type="submit" class="btn btn-primary">Refund</button>
                    <button type="button" class="btn btn-danger">Decline</button>
                </form><!--end form-->
            </div><!--card-body-->
        </div><!--end card-->
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection