@extends('layouts.vertical', ['title' => 'Alerts'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Default Alerts</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="alert alert-success shadow-sm border-theme-white-2" role="alert">
                    <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-success rounded-circle mx-auto me-1">
                        <i class="fas fa-check align-self-center mb-0 text-white "></i>
                    </div>
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert alert-danger shadow-sm border-theme-white-2" role="alert">
                    <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-danger rounded-circle mx-auto me-1">
                        <i class="fas fa-xmark align-self-center mb-0 text-white "></i>
                    </div>
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
                <div class="alert alert-warning shadow-sm border-theme-white-2" role="alert">
                    <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-warning rounded-circle mx-auto me-1">
                        <i class="fas fa-exclamation align-self-center mb-0 text-white "></i>
                    </div>
                    <strong>Well done!</strong> An example warning alert with an icon.
                </div>
                <div class="alert alert-purple shadow-sm border-theme-white-2 mb-0" role="alert">
                    <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-purple rounded-circle mx-auto me-1">
                        <i class="fas fa-info align-self-center mb-0 text-white "></i>
                    </div>
                    A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Outline Alerts</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="alert border-2 border-success text-success" role="alert">
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert border-2 border-danger text-danger" role="alert">
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>
                <div class="alert border-2 border-warning text-warning" role="alert">
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert border-2 border-info mb-0 text-info" role="alert">
                    <strong>Oh snap!</strong> Change a few things up and try submitting again. 🎉
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Dismissible Alerts</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="alert alert-success alert-dismissible fade show shadow-sm border-theme-white-2 rounded-pill" role="alert">
                    <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-success rounded-circle mx-auto me-1">
                        <i class="fas fa-check align-self-center mb-0 text-white "></i>
                    </div>
                    <strong>Well done!</strong> You successfully read this important alert message.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="alert alert-danger alert-dismissible fade show shadow-sm border-theme-white-2 mb-0" role="alert">
                    <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-danger rounded-circle mx-auto me-1">
                        <i class="fas fa-xmark align-self-center mb-0 text-white "></i>
                    </div>
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Dismissible Outline Alerts</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="alert border-2 border-success text-success alert-dismissible fade show rounded-pill" role="alert">
                    <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-success rounded-circle mx-auto me-1">
                        <i class="fas fa-check align-self-center mb-0 text-white "></i>
                    </div>
                    <strong>Well done!</strong> You successfully read this important alert message.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="alert  border-2 border-danger text-danger alert-dismissible fade show mb-0" role="alert">
                    <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-danger rounded-circle mx-auto me-1">
                        <i class="fas fa-xmark align-self-center mb-0 text-white "></i>
                    </div>
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Custom Icon Alerts</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="alert alert-danger alert-dismissible fade show  border-start border-2 border-danger mb-0" role="alert">
                    <div class="d-flex align-items-center gap-2">
                        <i class="fas fa-skull-crossbones align-self-center fs-30 text-danger "></i>
                        <div class="flex-grow-1 ms-2 text-truncate">
                            <h5 class="mb-1 fw-bold mt-0">Primary</h5>
                            <p class="mb-0">Oh snap! Change a few things up and try submitting again.</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div><!--end media-body-->
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Additional Content</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="alert alert-info mb-0 border-2" role="alert">
                    <h4 class="alert-heading font-18">Well done!</h4>
                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection