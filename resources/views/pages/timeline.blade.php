@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Timeline</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body px-0 pt-0">
                <div class="activity p-3 pt-0" data-simplebar style="height:500px">
                    <div class="activity-info">
                        <div class="icon-info-activity ">
                            <i class="las la-check-circle text-primary"></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0 w-75">Task finished</h6>
                                <span class="text-muted d-block">10 Min ago</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                <a href="#" class="text-primary">[more info]</a>
                            </p>
                        </div>
                    </div>

                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="las la-user-clock text-danger"></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0  w-75">Task Overdue</h6>
                                <span class="text-muted">50 Min ago</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                <a href="#" class="text-primary">[more info]</a>
                            </p>
                            <span class="badge badge-soft-secondary">Design</span>
                            <span class="badge badge-soft-secondary">HTML</span>
                        </div>
                    </div>
                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="las la-clipboard-check text-primary"></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0  w-75">New Task</h6>
                                <span class="text-muted">10 hours ago</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                <a href="#" class="text-primary">[more info]</a>
                            </p>
                        </div>
                    </div>

                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="las la-comment-dots text-danger"></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0">New Comment</h6>
                                <span class="text-muted">Yesterday</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                <a href="#" class="text-primary">[more info]</a>
                            </p>
                        </div>
                    </div>
                    <div class="activity-info">
                        <div class="icon-info-activity">
                            <i class="las la-user-friends text-primary"></i>
                        </div>
                        <div class="activity-info-text">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="m-0">New Lead Miting</h6>
                                <span class="text-muted">14 Nov 2019</span>
                            </div>
                            <p class="text-muted mt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
                                <a href="#" class="text-primary">[more info]</a>
                            </p>
                        </div>
                    </div>
                </div><!--end activity-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Timeline</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="tracking-list">
                    <div class="tracking-item">
                        <div class="tracking-icon icon-inner">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="tracking-date">Sep 18, 2024<span class="d-block fs-12 text-muted">05:01 PM</span></div>
                        <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                    </div>
                    <div class="tracking-item">
                        <div class="tracking-icon icon-inner">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="tracking-date">Aug 10, 2024<span class="d-block fs-12 text-muted">11:19 AM</span></div>
                        <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                    <div class="tracking-item">
                        <div class="tracking-icon icon-inner">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="tracking-date">Aug 10, 2024<span class="d-block fs-12 text-muted">11:19 AM</span></div>
                        <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                    <div class="tracking-item">
                        <div class="tracking-icon icon-inner">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="tracking-date">Aug 10, 2024<span class="d-block fs-12 text-muted">11:19 AM</span></div>
                        <p class="mb-0 text-muted">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>

                    <div class="tracking-item">
                        <div class="tracking-icon icon-inner">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="tracking-date">Jul 06, 2024<span class="d-block fs-12 text-muted">02:02 PM</span></div>
                        <p class="mb-0 text-muted">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection