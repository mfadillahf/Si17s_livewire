@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Ratio Video 16:9</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/-GfNEDs3ERw" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Ratio Video 21:9</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <!-- 21:9 aspect ratio -->
                <div class="ratio ratio-21x9">
                    <iframe src="https://www.youtube.com/embed/-GfNEDs3ERw" title="YouTube video" allowfullscreen></iframe>
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
                        <h4 class="card-title">Ratio Video 4:3</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <!-- 4:3 aspect ratio -->
                <div class="ratio ratio-4x3">
                    <iframe src="https://www.youtube.com/embed/-GfNEDs3ERw" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Ratio Video 1:1</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <!-- 1:1 aspect ratio -->
                <div class="ratio ratio-1x1">
                    <iframe src="https://www.youtube.com/embed/-GfNEDs3ERw" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection