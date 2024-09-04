@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Basic</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                        <h5 class="me-auto my-0">Rizz</h5>
                        <small>11 mins ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body ">
                        Hello, world! This is a toast message.
                    </div>
                </div><!--end toast-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Stacking</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="bg-light rounded p-3">
                    <div class="toast-container position-relative">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                                <h5 class="me-auto my-0">Rizz</h5>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body ">
                                Hello, world! This is a toast message.
                            </div>
                        </div><!--end toast-->

                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                                <h5 class="me-auto my-0">Rizz</h5>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body ">
                                Hello, world! This is a toast message.
                            </div>
                        </div><!--end toast-->
                    </div><!--end toast-container-->
                </div> <!--end /div-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Toast Placement</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <form>
                    <div class="form-group mb-3">
                        <select class="form-select" id="selectToastPlacement">
                            <option value="" selected>Select a position...</option>
                            <option value="top-0 start-0">Top left</option>
                            <option value="top-0 start-50 translate-middle-x">Top center</option>
                            <option value="top-0 end-0">Top right</option>
                            <option value="top-50 start-0 translate-middle-y">Middle left</option>
                            <option value="top-50 start-50 translate-middle">Middle center</option>
                            <option value="top-50 end-0 translate-middle-y">Middle right</option>
                            <option value="bottom-0 start-0">Bottom left</option>
                            <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                            <option value="bottom-0 end-0">Bottom right</option>
                        </select>
                    </div>
                </form>
                <div aria-live="polite" aria-atomic="true" class="position-relative bd-example-toasts" style="height: 260px; background-color:rgba(235, 240, 247, 0.1);">
                    <div class="toast-container position-absolute p-3" id="toastPlacement">
                        <div class="toast">
                            <div class="toast-header">
                                <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                                <h5 class="me-auto my-0">Rizz</h5>
                                <small>11 mins ago</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body ">
                                Hello, world! This is a toast message.
                            </div>
                        </div>
                    </div>
                </div><!--end toast-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Translucent</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="bg-light rounded p-3">
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="/images/logo-sm.png" alt="" height="20" class="me-1">
                            <h5 class="me-auto my-0">Rizz</h5>
                            <small>11 mins ago</small>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body ">
                            Hello, world! This is a toast message.
                        </div>
                    </div><!--end toast-->
                </div> <!--end /div-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Custom Content</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="bg-light rounded p-3">
                    <div class="toast d-flex align-items-center mb-2" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                        <button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>

                    <div class="toast mb-2" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                            <div class="mt-2 pt-2 border-top">
                                <button type="button" class="btn btn-primary btn-sm">Take action</button>
                                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                            </div>
                        </div>
                    </div>
                    <div class="toast d-flex align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            Hello, world! This is a toast message.
                        </div>
                        <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div> <!--end /div-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Custom Toast</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header border-0">
                        <button type="button" class="btn-close ms-auto " data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body  text-center">
                        <img src="/images/users/avatar-5.jpg" alt="" class="d-block mx-auto rounded-circle thumb-xl">
                        <h5 class="fw-bold mt-2 mb-1">Charles Smith</h5>
                        <p class="text-muted mb-0">UI/UX front end developer</p>
                        <div class="mt-3 mb-2">
                            <button type="button" class="btn btn-outline-primary btn-icon-circle btn-icon-circle-sm"><i class="fab fa-facebook-f"></i></button>
                            <button type="button" class="btn btn-outline-info btn-icon-circle btn-icon-circle-sm"><i class="fab fa-twitter"></i></button>
                            <button type="button" class="btn btn-outline-pink btn-icon-circle btn-icon-circle-sm"><i class="fab fa-dribbble"></i></button>
                        </div>
                    </div><!-- end toast-body -->
                </div><!--end toast-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection

@section('script')
@vite(['resources/js/pages/toast.init.js'])
@endsection