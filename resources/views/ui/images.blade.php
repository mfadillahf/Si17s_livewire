@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Responsive Imagess</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <img src="/images/extra/color-bg-2.jpg" alt="" class="img-fluid rounded">
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="/images/users/avatar-1.jpg" alt="" class="img-thumbnail">
                    </div>
                    <div class="flex-grow-1 ms-3 text-truncate">
                        <h4 class="mb-1 fw-semibold">Kathryn Money</h4>
                        <p class="text-muted mb-3 font-13">UI & UX Designer, Japan</p>
                        <button type="button" class="btn btn-sm btn-primary">Message</button>
                    </div><!--end media-body-->
                </div><!--end media-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="/images/users/avatar-10.jpg" alt="" class="rounded">
                    </div>
                    <div class="flex-grow-1 ms-3 text-truncate">
                        <h4 class="mb-1 fw-semibold">Anthony Stover</h4>
                        <p class="text-muted mb-3 font-13">Frontend Developer, USA</p>
                        <button type="button" class="btn btn-sm btn-primary">Message</button>
                    </div><!--end media-body-->
                </div><!--end media-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <img src="/images/users/avatar-8.jpg" alt="" class="rounded-circle">
                    </div>
                    <div class="flex-grow-1 ms-3 text-truncate">
                        <h4 class="mb-1 fw-semibold">Catherine Orman</h4>
                        <p class="text-muted mb-3 font-13">Backend Developer, Canada</p>
                        <button type="button" class="btn btn-sm btn-primary">Message</button>
                    </div><!--end media-body-->
                </div><!--end media-->
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
                        <h4 class="card-title">Aligning Images (float)</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <img src="/images/users/avatar-4.jpg" alt="" class="rounded float-start">
                <img src="/images/users/avatar-7.jpg" alt="" class="rounded float-end">
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Aligning Images</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <img src="/images/users/avatar-6.jpg" alt="" class="rounded d-block mx-auto">
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection