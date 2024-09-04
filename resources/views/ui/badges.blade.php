@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Badge Examples</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <span class="badge bg-primary">Primary</span>
                <span class="badge bg-secondary">Secondary</span>
                <span class="badge bg-success">Success</span>
                <span class="badge bg-danger">Danger</span>
                <span class="badge bg-warning">Warning</span>
                <span class="badge bg-info">Info</span>
                <span class="badge bg-light text-dark">Light</span>
                <span class="badge bg-dark">Dark</span>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Pill Badges</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <span class="badge rounded-pill bg-primary">Primary</span>
                <span class="badge rounded-pill bg-secondary">Secondary</span>
                <span class="badge rounded-pill bg-success">Success</span>
                <span class="badge rounded-pill bg-danger">Danger</span>
                <span class="badge rounded-pill bg-warning">Warning</span>
                <span class="badge rounded-pill bg-info">Info</span>
                <span class="badge rounded-pill text-dark bg-light">Light</span>
                <span class="badge rounded-pill bg-dark">Dark</span>
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
                        <h4 class="card-title">Links Badges</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <a href="#" class="badge bg-primary">Primary</a>
                <a href="#" class="badge bg-secondary">Secondary</a>
                <a href="#" class="badge bg-success">Success</a>
                <a href="#" class="badge bg-danger">Danger</a>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Links Pill Badges</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <a href="#" class="badge rounded-pill bg-primary">Primary</a>
                <a href="#" class="badge rounded-pill bg-secondary">Secondary</a>
                <a href="#" class="badge rounded-pill bg-success">Success</a>
                <a href="#" class="badge rounded-pill bg-danger">Danger</a>
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
                        <h4 class="card-title">Badges Subtle</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <span class="badge bg-primary-subtle text-primary">Primary</span>
                <span class="badge bg-secondary-subtle text-secondary">Secondary</span>
                <span class="badge bg-success-subtle text-success">Success</span>
                <span class="badge bg-danger-subtle text-danger">Danger</span>
                <span class="badge bg-warning-subtle text-warning">Warning</span>
                <span class="badge bg-info-subtle text-info">Info</span>
                <span class="badge bg-purple-subtle text-purple">Purple</span>
                <span class="badge bg-dark-subtle text-dark">Dark</span>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Badges Pill Subtle</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <span class="badge rounded-pill bg-primary-subtle text-primary">Primary</span>
                <span class="badge rounded-pill bg-secondary-subtle text-secondary">Secondary</span>
                <span class="badge rounded-pill bg-success-subtle text-success">Success</span>
                <span class="badge rounded-pill bg-danger-subtle text-danger">Danger</span>
                <span class="badge rounded-pill bg-warning-subtle text-warning">Warning</span>
                <span class="badge rounded-pill bg-info-subtle text-info">Info</span>
                <span class="badge rounded-pill bg-pink-subtle text-pink">Pink</span>
                <span class="badge rounded-pill bg-dark-subtle text-dark">Dark</span>
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
                        <h4 class="card-title">Outline Badges</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <span class="badge bg-transparent border border-primary text-primary">Primary</span>
                <span class="badge bg-transparent border border-secondary text-secondary">Secondary</span>
                <span class="badge bg-transparent border border-success text-success">Success</span>
                <span class="badge bg-transparent border border-danger text-danger">Danger</span>
                <span class="badge bg-transparent border border-warning text-warning">Warning</span>
                <span class="badge bg-transparent border border-info text-info">Info</span>
                <span class="badge bg-transparent border border-purple text-purple">Purple</span>
                <span class="badge bg-transparent border border-dark text-dark">Dark</span>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Outline Pill Badges</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <span class="badge rounded-pill bg-transparent border border-primary text-primary">Primary</span>
                <span class="badge rounded-pill bg-transparent border border-secondary text-secondary">Secondary</span>
                <span class="badge rounded-pill bg-transparent border border-success text-success">Success</span>
                <span class="badge rounded-pill bg-transparent border border-danger text-danger">Danger</span>
                <span class="badge rounded-pill bg-transparent border border-warning text-warning">Warning</span>
                <span class="badge rounded-pill bg-transparent border border-info text-info">Info</span>
                <span class="badge rounded-pill bg-transparent border border-purple text-purple">Purple</span>
                <span class="badge rounded-pill bg-transparent border border-dark text-dark">Dark</span>
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
                        <h4 class="card-title">Buttons With Badge</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <button type="button" class="btn btn-primary btn-sm">
                    Notifications <span class="badge bg-light text-dark">4</span>
                </button>
                <button type="button" class="btn btn-secondary btn-sm">
                    Notifications <span class="badge bg-light text-dark">8</span>
                </button>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Buttons With Positioned Badge</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <button type="button" class="btn btn-primary position-relative">
                    Notifications
                    <span class="position-absolute top-0 start-100 translate-middle bg-danger border border-light rounded-circle">
                        <small class="thumb-xs">12</small>
                    </span>
                </button>
                <button type="button" class="btn btn-secondary position-relative ms-2">
                    Notifications
                    <span class="position-absolute top-0 start-100 translate-middle bg-primary px-1 border border-light rounded">
                        <small class="fs-10">New</small>
                    </span>
                </button>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection