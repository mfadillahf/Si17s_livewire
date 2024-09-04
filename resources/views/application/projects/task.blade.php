@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-md-12 col-lg-4">
        <div class="mb-3">
            <div class="card-body pt-0 text-center">
                <div id="task" class="apex-charts"></div>
                <h4 class="card-title my-2">Tasks Summary</h4>
                <button type="button" class="btn btn-outline-primary px-3 mt-2">View Tasks</button>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-12 col-lg-8">
        <div class="row g-3">
            <div class="col-md-6 col-lg-4">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <span class="fs-24 text-danger fw-normal">38</span>
                                <h6 class="text-uppercase fs-12 text-muted mt-2 m-0">Ongoing</h6>
                            </div><!--end col-->
                        </div> <!-- end row -->
                    </div><!--end card-body-->
                </div> <!--end card-body-->
            </div><!--end col-->
            <div class="col-md-6 col-lg-4">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <span class="fs-24 text-warning fw-normal">41</span>
                                <h6 class="text-uppercase fs-12 text-muted mt-2 m-0">Process</h6>
                            </div><!--end col-->
                        </div> <!-- end row -->
                    </div><!--end card-body-->
                </div> <!--end card-body-->
            </div><!--end col-->
            <div class="col-md-6 col-lg-4">
                <div class="card mb-3 mb-lg-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col text-center">
                                <span class="fs-24 text-success fw-normal">40.8%</span>
                                <h6 class="text-uppercase fs-12 text-muted mt-2 m-0">Completed</h6>
                            </div><!--end col-->
                        </div> <!-- end row -->
                    </div><!--end card-body-->
                </div> <!--end card-->
            </div><!--end col-->
        </div><!--end row-->
        <div class="p-3  border-info border-dashed bg-info-subtle  mt-3 rounded">
            <div class="row d-flex justify-content-center">
                <div class="col">
                    <div class=" ">
                        <a href="#" class="fw-bold me-1">You've almost reached your goal</a> 75% of your goals are completed just complate 25% of remaining goals to achieve your target.
                    </div>
                    <div class="row mt-3 g-2">
                        <div class="col col-md-12 col-lg-6">
                            <div class="">
                                <p class="text-dark mb-2 fw-semibold fs-13">All Members</p>
                                <div class="img-group d-flex">
                                    <a class="user-avatar position-relative d-inline-block" href="#">
                                        <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                    </a>
                                    <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                        <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                    </a>
                                    <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                        <img src="/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                    </a>
                                    <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                        <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                    </a>
                                    <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                        <img src="/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                    </a>
                                    <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                        <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                    </a>
                                    <a href="" class="user-avatar position-relative d-inline-block ms-1">
                                        <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+80</span>
                                    </a>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col col-md-12 col-lg-6 align-self-center">
                            <span class="badge rounded text-primary bg-transparent border border-primary mb-2 p-1">Senior team leader interview</span>
                            <p class="text-dark  fw-semibold fs-13">15 Aug 2024, AM-10:15</p>
                        </div><!--end col-->
                    </div><!--end row-->

                </div><!--end col-->
                <div class="col-auto align-self-center">
                    <button type="button" class="btn btn-primary px-3 btn-sm mt-2">View All</button>
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </div> <!--end col-->
</div><!--end row-->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Tasks & Details</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="accordion card-bg " id="task-1">
                    <div class="task-accordion rounded  border-dashed border-theme-color mb-3 p-2">
                        <div class="cursor-pointer" data-bs-toggle="collapse" data-bs-target="#task-one" aria-expanded="true" aria-controls="task-one">
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="iconoir-calendar fs-2 me-2"></i>
                                                    <div class="flex-grow-1 text-truncate">
                                                        <h6 class="m-0 mb-1 fw-semibold">Start from to end</h6>
                                                        <div class="fw-semibold"><span>20 Mar 2024</span> - <span class="text-danger"> 30 Nov 2024</span></div>
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Task</h6>
                                                <span class="fs-13 fw-semibold">Working API issue</span>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Priority</h6>
                                                <span class="text-danger"><i class="fa-solid fa-stop fs-10"></i> High</span>
                                            </td>

                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Team</h6>
                                                <span class="text-secondary">React development team</span>
                                            </td>

                                            <td class="text-end">
                                                <h6 class="m-0 mb-1 fw-semibold">Status</h6>
                                                <span class="badge rounded text-blue bg-transparent border border-blue p-1">In progress</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="task-one" class="accordion-collapse collapse show " data-bs-parent="#task-1">
                            <div class="accordion-body  bg-body border-dashed-top  p-3 p-3">
                                <h6 class="fw-semibold">Task Info</h6>
                                <p class="mt-2 mb-3">
                                    Outline common error scenarios that team members may encounter when using the APIs.
                                    Provide guidance on how to handle these errors gracefully and troubleshoot issues effectively.
                                    Offer examples of typical API requests and corresponding responses.
                                    These examples can help team members understand how to interact with the APIs and interpret the data they receive.
                                </p>
                                <div class="row row-cols-auto g-3">
                                    <div class="col col-md-3">
                                        <div class="d-flex align-items-center">
                                            <img src="/images/users/avatar-6.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Elliott Snyder</h5>
                                                    <p class="text-muted mb-0">Client</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col col-md-3">
                                        <h6 class="m-0 mb-1 fw-semibold">Project type</h5>
                                            <p class="text-muted mb-0">Bank data Management</p>
                                    </div><!--end col-->
                                    <div class="col col-md-2 text-end align-self-center">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0 mb-1 fw-semibold">Progress</h5>
                                                <small class="text-end">70%</small>
                                        </div>
                                        <div class="progress bg-secondary-subtle" style="height:5px;">
                                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col col-md-2">
                                        <h6 class="m-0 mb-1 fw-semibold">Total Report</h5>
                                            <p class="text-muted mb-0">12</p>
                                    </div><!--end col-->
                                    <div class="col col-md-2 ms-auto">
                                        <h6 class="m-0 mb-1 fw-semibold">Assigned To</h5>
                                            <p class="text-muted mb-0">Kylie Bishop</p>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end accordion-body-->
                        </div><!--end task-->
                    </div> <!--end -->
                    <div class="task-accordion rounded  border-dashed border-theme-color mb-3 p-2">
                        <div class="cursor-pointer" data-bs-toggle="collapse" data-bs-target="#task-two" aria-expanded="false" aria-controls="task-two">
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="iconoir-calendar fs-2 me-2"></i>
                                                    <div class="flex-grow-1 text-truncate">
                                                        <h6 class="m-0 mb-1 fw-semibold">Start from to end</h6>
                                                        <div class="fw-semibold"><span>10 Jan 2024</span> - <span class="text-danger"> 30 Apr 2024</span></div>
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Task</h6>
                                                <span class="fs-13 fw-semibold">Add Product page</span>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Priority</h6>
                                                <span class="text-warning"><i class="fa-solid fa-stop fs-10"></i> Low</span>
                                            </td>

                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Team</h6>
                                                <span class="text-secondary">Flutter development team</span>
                                            </td>

                                            <td class="text-end">
                                                <h6 class="m-0 mb-1 fw-semibold">Status</h6>
                                                <span class="badge rounded text-success bg-transparent border border-success p-1">Done</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="task-two" class="accordion-collapse collapse" data-bs-parent="#task-1">
                            <div class="accordion-body bg-body border-dashed-top p-3">
                                <h6 class="fw-semibold">Task Info</h6>
                                <p class="mt-2 mb-3 text-wrap">
                                    Outline common error scenarios that team members may encounter when using the APIs.
                                    Provide guidance on how to handle these errors gracefully and troubleshoot issues effectively.
                                    Offer examples of typical API requests and corresponding responses.
                                    These examples can help team members understand how to interact with the APIs and interpret the data they receive.
                                </p>
                                <div class="row row-cols-auto g-3">
                                    <div class="col col-md-3">
                                        <div class="d-flex align-items-center">
                                            <img src="/images/users/avatar-1.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Daniel Baldwin</h5>
                                                    <p class="text-muted mb-0">Client</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col col-md-3">
                                        <h6 class="m-0 mb-1 fw-semibold">Project type</h5>
                                            <p class="text-muted mb-0">Ecommerce</p>
                                    </div><!--end col-->
                                    <div class="col col-md-2 text-end align-self-center">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0 mb-1 fw-semibold">Progress</h5>
                                                <small class="text-end">85%</small>
                                        </div>
                                        <div class="progress bg-secondary-subtle" style="height:5px;">
                                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 45% " aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col col-md-2">
                                        <h6 class="m-0 mb-1 fw-semibold">Total Report</h5>
                                            <p class="text-muted mb-0">15</p>
                                    </div><!--end col-->
                                    <div class="col col-md-2 ms-auto">
                                        <h6 class="m-0 mb-1 fw-semibold">Assigned To</h5>
                                            <p class="text-muted mb-0">Pearl Carlson</p>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end accordion-body-->
                        </div><!--end task-->
                    </div> <!--end -->
                    <div class="task-accordion rounded  border-dashed border-theme-color p-2">
                        <div class="cursor-pointer" data-bs-toggle="collapse" data-bs-target="#task-three" aria-expanded="false" aria-controls="task-three">
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="iconoir-calendar fs-2 me-2"></i>
                                                    <div class="flex-grow-1 text-truncate">
                                                        <h6 class="m-0 mb-1 fw-semibold">Start from to end</h6>
                                                        <div class="fw-semibold"><span>15 jun 2024</span> - <span class="text-danger"> 15 Aug 2024</span></div>
                                                    </div><!--end media body-->
                                                </div>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Task</h6>
                                                <span class="fs-13 fw-semibold">Form submit page</span>
                                            </td>
                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Priority</h6>
                                                <span class="text-info"><i class="fa-solid fa-stop fs-10"></i> Medium</span>
                                            </td>

                                            <td class="text-start">
                                                <h6 class="m-0 mb-1 fw-semibold">Team</h6>
                                                <span class="text-secondary">Agular development team</span>
                                            </td>

                                            <td class="text-end">
                                                <h6 class="m-0 mb-1 fw-semibold">Status</h6>
                                                <span class="badge rounded text-secondary bg-transparent border border-secondary p-1">Pending</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="task-three" class="accordion-collapse collapse" data-bs-parent="#task-1">
                            <div class="accordion-body  bg-body border-dashed-top  p-3">
                                <h6 class="fw-semibold">Task Info</h6>
                                <p class="mt-2 mb-3">
                                    Outline common error scenarios that team members may encounter when using the APIs.
                                    Provide guidance on how to handle these errors gracefully and troubleshoot issues effectively.
                                    Offer examples of typical API requests and corresponding responses.
                                    These examples can help team members understand how to interact with the APIs and interpret the data they receive.
                                </p>
                                <div class="row row-cols-auto g-3">
                                    <div class="col col-md-3">
                                        <div class="d-flex align-items-center">
                                            <img src="/images/users/avatar-3.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                            <div class="flex-grow-1 ms-2">
                                                <h6 class="m-0 mb-1 fw-semibold">Unity Pugh</h5>
                                                    <p class="text-muted mb-0">Client</p>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col col-md-3">
                                        <h6 class="m-0 mb-1 fw-semibold">Project type</h5>
                                            <p class="text-muted mb-0">AI Chat & Images</p>
                                    </div><!--end col-->
                                    <div class="col col-md-2 text-end align-self-center">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="m-0 mb-1 fw-semibold">Progress</h5>
                                                <small class="text-end">30%</small>
                                        </div>
                                        <div class="progress bg-secondary-subtle" style="height:5px;">
                                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col col-md-2">
                                        <h6 class="m-0 mb-1 fw-semibold">Total Report</h5>
                                            <p class="text-muted mb-0">8</p>
                                    </div><!--end col-->
                                    <div class="col col-md-2 ms-auto">
                                        <h6 class="m-0 mb-1 fw-semibold">Assigned To</h5>
                                            <p class="text-muted mb-0">Theodore Duran</p>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end accordion-body-->
                        </div><!--end task-->
                    </div> <!--end -->
                </div><!--end accordion-->
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
@vite(['resources/js/pages/projects-task.init.js'])
@endsection