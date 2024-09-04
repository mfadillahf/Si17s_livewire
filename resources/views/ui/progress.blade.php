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
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width:20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width:30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width:50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Striped And Animated</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="progress mb-3">
                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3">
                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width:30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-info progress-bar-striped progress-bar-animated" role="progressbar" style="width:60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div class="progress mb-3">
                    <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width:75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-gray progress-bar-striped progress-bar-animated" role="progressbar" style="width:90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
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
                        <h4 class="card-title">Labels And Multiple Bars</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="progress mb-3">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar bg-secondary progress-bar-striped" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                </div>
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                    <div class="progress-bar progress-bar-striped bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Height</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="progress mb-3" style="height: 3px;">
                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <div class="progress mb-3"">
                                        <div class=" progress-bar progress-bar-striped" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress" style="height: 14px;">
                <div class="progress-bar  progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div><!--end card-body-->
    </div><!--end card-->
</div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Vertical</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="progress progress-vertical my-3" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-vertical my-3" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="height: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-vertical my-3" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="height: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4  d-flex justify-content-center">
                        <div class="progress progress-vertical-bottom my-3" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="height: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-vertical-bottom my-3" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="progress progress-vertical-bottom my-3" style="height: 8px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="height: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="progress progress-vertical-bottom my-3" style="width: 30px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="height: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="progress progress-vertical-bottom my-3" style="width: 30px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="height: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection