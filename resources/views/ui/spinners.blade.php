@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Border spinner</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Growing spinner</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="spinner-grow text-primary" role="status">
                    <span class="sr-only">Loading...</span>
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
                        <h4 class="card-title">Colors</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="spinner-border text-primary" role="status"></div>
                <div class="spinner-border text-primary" role="status"></div>
                <div class="spinner-border text-secondary" role="status"></div>
                <div class="spinner-border text-success" role="status"></div>
                <div class="spinner-border text-danger" role="status"></div>
                <div class="spinner-border text-warning" role="status"></div>
                <div class="spinner-border text-info" role="status"></div>
                <div class="spinner-border text-purple" role="status"></div>
                <div class="spinner-border text-light" role="status"></div>
                <div class="spinner-border text-dark" role="status"></div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Colors Growing</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="spinner-grow text-primary" role="status"></div>
                <div class="spinner-grow text-secondary" role="status"></div>
                <div class="spinner-grow text-success" role="status"></div>
                <div class="spinner-grow text-danger" role="status"></div>
                <div class="spinner-grow text-warning" role="status"></div>
                <div class="spinner-grow text-info" role="status"></div>
                <div class="spinner-grow text-purple" role="status"></div>
                <div class="spinner-grow text-light" role="status"></div>
                <div class="spinner-grow text-dark" role="status"></div>
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
                        <h4 class="card-title">Alignment</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border text-primary" role="status"></div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Placement</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="d-flex align-items-center">
                    <strong>Loading...</strong>
                    <div class="spinner-border text-primary ms-auto" role="status" aria-hidden="true"></div>
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
                        <h4 class="card-title">Size</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-lg-4 d-flex">
                        <div class="spinner-border thumb-md text-primary" role="status"></div>
                        <div class="spinner-grow thumb-md text-secondary ms-1" role="status"></div>
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="spinner-border text-primary" role="status"></div>
                        <div class="spinner-border text-secondary" role="status"></div>
                    </div><!-- end col -->

                    <div class="col-lg-4">
                        <div class="spinner-border spinner-border-sm" role="status"></div>
                        <div class="spinner-grow spinner-grow-sm" role="status"></div>
                    </div><!-- end col -->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Buttons spinners</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="d-flex flex-wrap gap-2">
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="sr-only">Loading...</span>
                    </button>
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> <span class="sr-only">Loading...</span>
                    </button>
                    <button class="btn btn-primary" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
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
                        <h4 class="card-title">Custom spinners</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="spinner-border spinner-border-custom-1 text-primary" role="status"></div>
                <div class="spinner-border spinner-border-custom-2 text-secondary" role="status"></div>
                <div class="spinner-border spinner-border-custom-3 border-success" role="status"></div>
                <div class="spinner-border spinner-border-custom-4 text-warning" role="status"></div>
                <div class="spinner-border spinner-border-custom-5 border-info" role="status"></div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Custom Icon Spinners</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="la la-spinner text-primary la-spin progress-icon-spin"></i>
                        </div>
                    </div><!--end col-->
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="la la-refresh text-secondary la-spin progress-icon-spin"></i>
                        </div>
                    </div><!--end col-->
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="la la-sun-o text-warning la-spin progress-icon-spin"></i>
                        </div>
                    </div><!--end col-->
                    <div class="col-md-3">
                        <div class="text-center">
                            <i class="la la-cog la-spin progress-icon-spin"></i>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection