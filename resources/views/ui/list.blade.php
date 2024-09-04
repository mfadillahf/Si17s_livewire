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
                <ul class="list-group">
                    <li class="list-group-item"><i class="la la-check text-success me-2"></i>Cras justo odio</li>
                    <li class="list-group-item"><i class="la la-check text-success me-2"></i>Dapibus ac facilisis in</li>
                    <li class="list-group-item"><i class="la la-check text-success me-2"></i>Morbi leo risus</li>
                    <li class="list-group-item disabled"><i class="la la-check text-success me-2"></i>Disabled</li>
                </ul>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Active Items</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <ul class="list-group">
                    <li class="list-group-item"><i class="la la-arrow-right text-secondary me-2"></i>Cras justo odio</li>
                    <li class="list-group-item active"><i class="la la-arrow-right me-2"></i>Dapibus ac facilisis in</li>
                    <li class="list-group-item"><i class="la la-arrow-right text-secondary me-2"></i>Morbi leo risus</li>
                    <li class="list-group-item"><i class="la la-arrow-right text-secondary me-2"></i>Porta ac consectetur ac</li>
                </ul>
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
                        <h4 class="card-title">Links And Buttons</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active">
                        <i class="la la-hand-o-right me-2"></i>Button Active
                    </button>
                    <button type="button" class="list-group-item list-group-item-action"><i class="la la-hand-o-right text-primary me-2"></i>Button</button>
                    <a href="#" class="list-group-item list-group-item-action"><i class="la la-hand-o-right text-primary me-2"></i>Link</a>
                    <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true"><i class="la la-hand-o-right text-primary me-2"></i>Link disabled</a>
                </div><!--end list-group-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Flush</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Cras justo odio</li>
                    <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Dapibus ac facilisis in</li>
                    <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Morbi leo risus</li>
                    <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Vestibulum at eros</li>
                </ul>
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
                        <h4 class="card-title">Contextual Classes</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <ul class="list-group">
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                    <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                    <li class="list-group-item list-group-item-success">A simple success list group item</li>
                    <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                    <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                    <li class="list-group-item list-group-item-info">A simple info list group item</li>
                    <li class="list-group-item list-group-item-light">A simple light list group item</li>
                    <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
                </ul>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Horizontal</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <ul class="list-group list-group-horizontal-md">
                    <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Cras justo</li>
                    <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Dapibus</li>
                    <li class="list-group-item"><i class="la la-angle-double-right text-info me-2"></i>Morbi leo</li>
                </ul><!--end list-group-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">With Badges</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="la la-check text-muted font-16 me-2"></i>Cras justo odio
                        </div>
                        <span class="badge border border-primary text-primary badge-pill">4</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="la la-bell text-muted font-18 me-2"></i>New Notifications
                        </div>
                        <span class="badge border border-secondary text-secondary badge-pill">New</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="la la-money text-muted font-16 me-2"></i>Payment Successfull
                        </div>
                        <span class="badge border border-success text-success badge-pill">Successfully</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="la la-warning text-muted font-16 me-2"></i>Payment pending
                        </div>
                        <span class="badge border border-warning text-warning">Pending</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="la la-comments text-muted font-16 me-2"></i>Good Morning!
                        </div>
                        <span class="badge border border-info text-info badge-pill">1</span>
                    </li>
                </ul><!--end list-group-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection