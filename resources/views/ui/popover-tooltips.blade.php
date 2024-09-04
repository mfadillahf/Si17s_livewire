@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Popovers Example</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="button-items d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on top
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on right
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on bottom
                    </button>

                    <button type="button" class="btn btn-primary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                        Popover on left
                    </button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Bootstrap Tooltips</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="button-items d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                        Tooltip on top
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                        Tooltip on right
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                        Tooltip on bottom
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">
                        Tooltip on left
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
                        <h4 class="card-title">Custom & Dismiss Popover</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="button-items d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="popover" data-bs-placement="right" data-bs-custom-class="custom-popover" data-bs-title="Custom popover" data-bs-content="This popover is themed via CSS variables.">
                        Custom popover
                    </button>
                    <a tabindex="0" class="btn btn-danger" role="button" data-bs-toggle="popover" data-bs-trigger="focus" title="Dismissible popover" data-bs-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Custom Tooltip</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="button-items d-flex flex-wrap gap-2">
                    <button type="button" class="btn btn-dark custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="This top tooltip is themed via CSS variables.">
                        Custom Tooltip
                    </button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection