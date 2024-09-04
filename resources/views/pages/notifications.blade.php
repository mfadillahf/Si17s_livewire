@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <div class="card" style="background-color:#ffd88e3b;">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h6 class="mb-2 mt-1 fw-medium text-dark fs-18">Notifications</h6>
                        <p class="text-body fs-14 ">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical <br> Latin literature from 45 BC, making it over 2000 years old. </p>
                        <button type="button" class="btn btn-warning px-2">View All</button>
                    </div> <!--end col-->
                    <div class="col-auto align-self-center">
                        <img src="/images/extra/card/notification.gif" alt="" height="90" class="rounded">
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card-body mb-3">
            <h5 class="text-body m-0 d-inline-block">Today</h5>
            <span class="text-pink bg-pink-subtle py-0 px-1 rounded fw-medium d-inline-block ms-1">2</span>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <a href="#" class="">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/users/avatar-10.jpg" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h6 class="my-1 fw-medium text-dark fs-14">Appointment with Charles Reiter<small class="text-muted ps-2">01:30 PM</small></h6>
                                    <p class="text-muted mb-0 text-wrap">Please ensure you have all necessary documents or items required for the appointment </p>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a>
                    </div> <!--end col-->
                    <div class="col-md-2 text-end align-self-center mt-sm-2 mt-lg-0">
                        <button type="button" class="btn btn-primary btn-sm px-2">View</button>
                        <button type="button" class="btn btn bg-secondary-subtle text-secondary btn-sm"><i class="fas fa-trash"></i></button>
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <a href="#" class="">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/users/avatar-1.jpg" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h6 class="my-1 fw-medium text-dark fs-14">New Session booked by Joseph Rust<small class="text-muted ps-2">10:37 AM</small></h6>
                                    <p class="text-muted mb-0 text-wrap">Please confirm this appointment and let us know if you have any preferences or special requirements. Looking forward to our session together! </p>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a>
                    </div> <!--end col-->
                    <div class="col-md-2 text-end align-self-center mt-sm-2 mt-lg-0">
                        <button type="button" class="btn btn-primary btn-sm px-2">View</button>
                        <button type="button" class="btn btn bg-secondary-subtle text-secondary btn-sm"><i class="fas fa-trash"></i></button>
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <a href="#" class="">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/users/avatar-9.jpg" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h6 class="my-1 fw-medium text-dark fs-14">Payment Not Added<small class="text-muted ps-2">04:10 AM</small></h6>
                                    <p class="text-muted mb-0 text-wrap">This is to inform you that your recent payment has not been successfully processed. Please review your payment method and ensure that sufficient funds are available or that the provided details are accurate. </p>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a>
                    </div> <!--end col-->
                    <div class="col-md-2 text-end align-self-center mt-sm-2 mt-lg-0 ">
                        <button type="button" class="btn btn-primary btn-sm px-2">View</button>
                        <button type="button" class="btn btn bg-secondary-subtle text-secondary btn-sm"><i class="fas fa-trash"></i></button>
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card-body mb-3">
            <h5 class="text-muted m-0 d-inline-block">Yesterday</h5>
            <span class="text-pink bg-pink-subtle py-0 px-1 rounded fw-medium d-inline-block ms-1">5</span>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <a href="#" class="">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/users/avatar-2.jpg" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h6 class="my-1 fw-medium text-dark fs-14">Password change email sent<small class="text-muted ps-2">07:45 PM</small></h6>
                                    <p class="text-muted mb-0 text-wrap">This is to inform you that your password has been successfully changed for your account.</p>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a>
                    </div> <!--end col-->
                    <div class="col-md-2 text-end align-self-center mt-sm-2 mt-lg-0">
                        <button type="button" class="btn btn-primary btn-sm px-2">View</button>
                        <button type="button" class="btn btn bg-secondary-subtle text-secondary btn-sm"><i class="fas fa-trash"></i></button>
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <a href="#" class="">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/users/avatar-3.jpg" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h6 class="my-1 fw-medium text-dark fs-14">Meeting at 07:45 PM <small class="text-muted ps-2">02:05 PM</small></h6>
                                    <p class="text-muted mb-0 text-wrap">Meeting Reminder: Just a quick heads-up about your meeting tonight at 07:45 PM. Don't forget to prep any necessary materials and jot down any questions or topics you'd like to discuss. </p>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a>
                    </div> <!--end col-->
                    <div class="col-md-2 text-end align-self-center mt-sm-2 mt-lg-0">
                        <button type="button" class="btn btn-primary btn-sm px-2">View</button>
                        <button type="button" class="btn btn bg-secondary-subtle text-secondary btn-sm"><i class="fas fa-trash"></i></button>
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <a href="#" class="">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/users/avatar-4.jpg" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h6 class="my-1 fw-medium text-dark fs-14">Payment Not Added<small class="text-muted ps-2">11:15 AM</small></h6>
                                    <p class="text-muted mb-0 text-wrap">This is to inform you that your recent payment has not been successfully processed. Please review your payment method and ensure that sufficient funds are available or that the provided details are accurate. </p>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a>
                    </div> <!--end col-->
                    <div class="col-md-2 text-end align-self-center mt-sm-2 mt-lg-0 ">
                        <button type="button" class="btn btn-primary btn-sm px-2">View</button>
                        <button type="button" class="btn btn bg-secondary-subtle text-secondary btn-sm"><i class="fas fa-trash"></i></button>
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <a href="#" class="">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/users/avatar-8.jpg" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h6 class="my-1 fw-medium text-dark fs-14">Payment Not Added<small class="text-muted ps-2">09:44 AM</small></h6>
                                    <p class="text-muted mb-0 text-wrap">This is to inform you that your recent payment has not been successfully processed. Please review your payment method and ensure that sufficient funds are available or that the provided details are accurate. </p>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a>
                    </div> <!--end col-->
                    <div class="col-md-2 text-end align-self-center mt-sm-2 mt-lg-0 ">
                        <button type="button" class="btn btn-primary btn-sm px-2">View</button>
                        <button type="button" class="btn btn bg-secondary-subtle text-secondary btn-sm"><i class="fas fa-trash"></i></button>
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card-body mb-3">
            <h5 class="text-muted m-0 d-inline-block">01 June 2024</h5>
            <span class="text-pink bg-pink-subtle py-0 px-1 rounded fw-medium d-inline-block ms-1">8</span>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <a href="#" class="">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/users/avatar-5.jpg" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h6 class="my-1 fw-medium text-dark fs-14">New system upgrade<small class="text-muted ps-2">01:30 PM</small></h6>
                                    <p class="text-muted mb-0 text-wrap">During this time, access may be temporarily limited. We appreciate your patience and understanding as we work to improve your experience. Stay tuned for more details!</p>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a>
                    </div> <!--end col-->
                    <div class="col-md-2 text-end align-self-center mt-sm-2 mt-lg-0">
                        <button type="button" class="btn btn-primary btn-sm px-2">View</button>
                        <button type="button" class="btn btn bg-secondary-subtle text-secondary btn-sm"><i class="fas fa-trash"></i></button>
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-10">
                        <a href="#" class="">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/users/avatar-7.jpg" alt="" class="thumb-lg rounded-circle">
                                </div>
                                <div class="flex-grow-1 ms-2 text-truncate">
                                    <h6 class="my-1 fw-medium text-dark fs-14">New Session booked by Joseph Rust<small class="text-muted ps-2">08:05 AM</small></h6>
                                    <p class="text-muted mb-0 text-wrap">Please confirm this appointment and let us know if you have any preferences or special requirements. Looking forward to our session together! </p>
                                </div><!--end media-body-->
                            </div><!--end media-->
                        </a>
                    </div> <!--end col-->
                    <div class="col-md-2 text-end align-self-center mt-sm-2 mt-lg-0">
                        <button type="button" class="btn btn-primary btn-sm px-2">View</button>
                        <button type="button" class="btn btn bg-secondary-subtle text-secondary btn-sm"><i class="fas fa-trash"></i></button>
                    </div> <!--end col-->
                </div><!--end row-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection