@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Custom Steps Wizard</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <form action="" method="post" id="custom-step">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab">
                            <a class="nav-link py-2 active" id="step1-tab" data-bs-toggle="tab" href="#step1">Seller Details</a>
                            <a class="nav-link py-2" id="step2-tab" data-bs-toggle="tab" href="#step2">Company Document</a>
                            <a class="nav-link py-2" id="step3-tab" data-bs-toggle="tab" href="#step3">Bank Details</a>
                            <a class="nav-link py-2" id="step4-tab" data-bs-toggle="tab" href="#step4">Confirm Detail</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane active" id="step1">
                            <h4 class="card-title my-4  fs-15">Seller Details</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtFirstNameBilling" class="col-lg-3 col-form-label text-lg-end">Contact Person</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameBilling" name="txtFirstNameBilling" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtLastNameBilling" class="col-lg-3 col-form-label text-lg-end">Mobile No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameBilling" name="txtLastNameBilling" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtCompanyBilling" class="col-lg-3 col-form-label text-lg-end">Landline No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyBilling" name="txtCompanyBilling" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtEmailAddressBilling" class="col-lg-3 col-form-label text-lg-end">Email Address</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressBilling" name="txtEmailAddressBilling" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtAddress1Billing" class="col-lg-3 col-form-label text-lg-end">Address 1</label>
                                        <div class="col-lg-9">
                                            <textarea id="txtAddress1Billing" name="txtAddress1Billing" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtAddress2Billing" class="col-lg-3 col-form-label text-lg-end">Warehouse Address</label>
                                        <div class="col-lg-9">
                                            <textarea id="txtAddress2Billing" name="txtAddress2Billing" rows="4" class="form-control"></textarea>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtCityBilling" class="col-lg-3 col-form-label text-lg-end">Company Type</label>
                                        <div class="col-lg-9">
                                            <input id="txtCityBilling" name="txtCityBilling" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtStateProvinceBilling" class="col-lg-3 col-form-label text-lg-end">Live Market A/C</label>
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceBilling" name="txtStateProvinceBilling" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtTelephoneBilling" class="col-lg-3 col-form-label text-lg-end">Product Category</label>
                                        <div class="col-lg-9">
                                            <input id="txtTelephoneBilling" name="txtTelephoneBilling" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtFaxBilling" class="col-lg-3 col-form-label text-lg-end">Product Sub Category</label>
                                        <div class="col-lg-9">
                                            <input id="txtFaxBilling" name="txtFaxBilling" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="mt-2">
                                <button type="button" id="step1Next" class="btn btn-primary float-end">Next</button>
                            </div>
                        </div>
                        <div class="tab-pane" id="step2">
                            <h4 class="card-title my-4 fs-15">Company Document</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtFirstNameShipping" class="col-lg-3 col-form-label text-lg-end">PAN Card</label>
                                        <div class="col-lg-9">
                                            <input id="txtFirstNameShipping" name="txtFirstNameShipping" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtLastNameShipping" class="col-lg-3 col-form-label text-lg-end">VAT/TIN No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtLastNameShipping" name="txtLastNameShipping" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtCompanyShipping" class="col-lg-3 col-form-label text-lg-end">CST No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtCompanyShipping" name="txtCompanyShipping" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtEmailAddressShipping" class="col-lg-3 col-form-label text-lg-end">Service Tax No.</label>
                                        <div class="col-lg-9">
                                            <input id="txtEmailAddressShipping" name="txtEmailAddressShipping" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtCityShipping" class="col-lg-3 col-form-label text-lg-end">Company UIN</label>
                                        <div class="col-lg-9">
                                            <input id="txtCityShipping" name="txtCityShipping" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtStateProvinceShipping" class="col-lg-3 col-form-label text-lg-end">Declaration</label>
                                        <div class="col-lg-9">
                                            <input id="txtStateProvinceShipping" name="txtStateProvinceShipping" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div>
                                <button type="button" id="step2Prev" class="btn btn-secondary float-start mt-2">Previous</button>
                                <button type="button" id="step2Next" class="btn btn-primary float-end mt-2">Next</button>
                            </div>
                        </div>
                        <div class="tab-pane" id="step3">
                            <h4 class="card-title my-4 fs-15">Bank Details</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtNameCard" class="col-lg-3 col-form-label text-lg-end">Name on Card</label>
                                        <div class="col-lg-9">
                                            <input id="txtNameCard" name="txtNameCard" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="ddlCreditCardType" class="col-lg-3 col-form-label text-lg-end">Credit Card Type</label>
                                        <div class="col-lg-9">
                                            <select id="ddlCreditCardType" name="ddlCreditCardType" class="form-select">
                                                <option value="">--Please Select--</option>
                                                <option value="AE">American Express</option>
                                                <option value="VI">Visa</option>
                                                <option value="MC">MasterCard</option>
                                                <option value="DI">Discover</option>
                                            </select>
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtCreditCardNumber" class="col-lg-3 col-form-label text-lg-end">Credit Card Number</label>
                                        <div class="col-lg-9">
                                            <input id="txtCreditCardNumber" name="txtCreditCardNumber" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtCardVerificationNumber" class="col-lg-3 col-form-label text-lg-end">Card Verification Number</label>
                                        <div class="col-lg-9">
                                            <input id="txtCardVerificationNumber" name="txtCardVerificationNumber" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row mb-2">
                                        <label for="txtExpirationDate" class="col-lg-3 col-form-label text-lg-end">Expiration Date</label>
                                        <div class="col-lg-9">
                                            <input id="txtExpirationDate" name="txtExpirationDate" type="text" class="form-control">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end col-->
                            </div><!--end row-->
                            <div>
                                <button type="button" id="step3Prev" class="btn btn-secondary float-start mt-2">Previous</button>
                                <button type="button" id="step3Next" class="btn btn-primary float-end mt-2">Next</button>
                            </div>
                        </div>
                        <div class="tab-pane" id="step4">
                            <h4 class="card-title my-4 fs-15">Confirm Detail</h4>
                            <div class="form-check my-4 text-center">
                                <img src="/images/extra/task.png" class="mb-3" height="60" alt="">
                                <h4 class="mb-1 fs-16">You are all set!</h4>
                                <p class="text-muted">Now you can access your account anytime anywhere</p>
                                <div>
                                    <input class="form-check-input float-none" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        I agree with the Terms and Conditions.
                                    </label>
                                </div>
                            </div>
                            <div>
                                <button type="button" id="step4Prev" class="btn btn-secondary float-start mt-2">Previous</button>
                                <button type="button" id="step4Finish" class="btn btn-danger float-end mt-2">Finish</button>
                            </div>
                        </div>
                    </div>
                </form><!--end form-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->    

@endsection

@section('script')
@vite(['resources/js/pages/form-wizard.js'])
@endsection