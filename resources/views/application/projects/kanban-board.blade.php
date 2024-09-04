@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row my-3">
    <div class="col-12">
        <div class="">
            <div class="card-body">
                <div class="d-block d-md-flex justify-content-between align-items-center ">
                    <div class="d-flex align-self-center mb-2 mb-md-0">
                        <div class="img-group d-inline-flex justify-content-center">
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
                                <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+6</span>
                            </a>
                        </div>
                        <button type="button" class="btn card-bg text-primary shadow-sm ms-2"><i class="fa-solid fa-plus me-1"></i> Invite</button>
                    </div>
                    <div class="align-self-center">
                        <form class="row g-2">
                            <div class="col-auto">
                                <label for="inputsearch" class="visually-hidden">Search</label>
                                <input type="search" class="form-control" id="inputsearch" placeholder="Search">
                            </div><!--end col-->
                            <div class="col-auto">
                                <a class="btn card-bg text-primary shadow-sm dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-auto-close="outside">
                                    <i class="iconoir-filter-alt"></i> Filter
                                </a>
                                <div class="dropdown-menu dropdown-menu-start">
                                    <div class="p-2">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" checked id="filter-all">
                                            <label class="form-check-label" for="filter-all">
                                                All
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" checked id="filter-one">
                                            <label class="form-check-label" for="filter-one">
                                                Design
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" checked id="filter-two">
                                            <label class="form-check-label" for="filter-two">
                                                UI/UX
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" checked id="filter-three">
                                            <label class="form-check-label" for="filter-three">
                                                Backend
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-auto">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBoard"><i class="fa-solid fa-plus me-1"></i> Add Task</button>
                            </div><!--end col-->
                        </form>
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="row">
    <div class="col-md-12 col-lg-12">
        <div class="kanban-board">
            <div class="kanban-col">
                <div class="my-3">
                    <div class="d-flex justify-content-between align-items-center border-bottom border-2 border-pink">
                        <div>
                            <h6 class="fw-semibold fs-16 text-muted mb-1">To Do</h6>
                            <h6 class="fs-13 fw-semibold">3 Issues - <span class="text-muted">20 Points</span></h6>
                        </div>
                        <div>
                            <a class="text-secondary me-1 add-btn cursor-pointer" data-bs-toggle="modal" data-bs-target="#addtask">
                                <i class="fa-solid fa-plus fs-18"></i>
                            </a>
                            <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis fs-18"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div><!--end /div-->

                <div id="project-list-left" class="pt-1">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-info bg-info-subtle fw-normal px-1 mb-1">Medium</span>
                            <h5 class="my-2 font-14">Simple Design</h5>
                            <p class="text-muted mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>14 Tasks</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">70%</small>
                            </div>
                            <div class="progress bg-secondary-subtle" style="height:5px;">
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-file text-muted"></i>
                                                <span class="text-muted font-weight-bold">5 Files</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-warning bg-warning-subtle fw-normal px-2 mb-1">Low</span>
                            <h5 class="my-2 font-14">UI/UX Design img.</h5>
                            <p class="p-3  rounded-md">
                                <img src="/images/extra/ill-2.png" alt="" class="img-fluid mx-auto">
                            </p>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-danger bg-danger-subtle fw-normal px-1 mb-1">High</span>
                            <h5 class="my-2 font-14">Strong Password</h5>
                            <p class="text-muted mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <div>
                                <span class="badge rounded text-primary bg-primary-subtle fw-normal px-1 mb-1">API</span>
                                <span class="badge rounded text-info bg-info-subtle fw-normal px-1 mb-1">Form Submit</span>
                                <span class="badge rounded text-danger bg-danger-subtle fw-normal px-1 mb-1">Responsive</span>
                            </div>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-success bg-success-subtle fw-normal px-2 mb-1">Completed</span>
                            <h5 class="my-2 font-14">Multi Color Dashboard</h5>
                            <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end project-list-left-->
                <a href="" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#addtask"> <i class="fa-solid fa-plus me-1"></i> Add New Task</a>
            </div><!--end kanban-col-->
            <div class="kanban-col">
                <div class="my-3">
                    <div class="d-flex justify-content-between align-items-center  border-bottom border-2 border-warning">
                        <div>
                            <h6 class="fw-semibold fs-16 text-muted mb-1">In Progress</h6>
                            <h6 class="fs-13 fw-semibold">2 Issues - <span class="text-muted">8 Points</span></h6>
                        </div>
                        <div>
                            <a class="text-secondary me-1 add-btn cursor-pointer" data-bs-toggle="modal" data-bs-target="#addtask">
                                <i class="fa-solid fa-plus fs-18"></i>
                            </a>
                            <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis fs-18"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div><!--end /div-->
                <div id="project-list-center-left" class="pt-1">

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-danger bg-danger-subtle fw-normal px-1 mb-1">High</span>
                            <h5 class="my-2 font-14">Nodejs setup</h5>
                            <p class="text-muted mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <div>
                                <span class="badge rounded text-primary bg-primary-subtle fw-normal px-1 mb-1">API</span>
                                <span class="badge rounded text-info bg-info-subtle fw-normal px-1 mb-1">Form Submit</span>
                                <span class="badge rounded text-danger bg-danger-subtle fw-normal px-1 mb-1">Responsive</span>
                            </div>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-success bg-success-subtle fw-normal px-2 mb-1">Completed</span>
                            <h5 class="my-2 font-14">Add Animation Page</h5>
                            <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-info bg-info-subtle fw-normal px-1 mb-1">Medium</span>
                            <h5 class="my-2 font-14">QR code issue fix</h5>
                            <p class="text-muted mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>14 Tasks</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">70%</small>
                            </div>
                            <div class="progress bg-secondary-subtle" style="height:5px;">
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-file text-muted"></i>
                                                <span class="text-muted font-weight-bold">5 Files</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-warning bg-warning-subtle fw-normal px-2 mb-1">Low</span>
                            <h5 class="my-2 font-14">UI/UX Design img.</h5>
                            <p class="p-3  rounded-md">
                                <img src="/images/extra/ill-2.png" alt="" class="img-fluid mx-auto">
                            </p>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end project-list-left-->
                <a href="" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#addtask"> <i class="fa-solid fa-plus me-1"></i> Add New Task</a>
            </div><!--end kanban-col-->
            <div class="kanban-col">
                <div class="my-3">
                    <div class="d-flex justify-content-between align-items-center border-bottom border-2 border-success">
                        <div>
                            <h6 class="fw-semibold fs-16 text-muted mb-1">Review</h6>
                            <h6 class="fs-13 fw-semibold">1 Issues - <span class="text-muted">7 Points</span></h6>
                        </div>
                        <div>
                            <a class="text-secondary me-1 add-btn cursor-pointer" data-bs-toggle="modal" data-bs-target="#addtask">
                                <i class="fa-solid fa-plus fs-18"></i>
                            </a>
                            <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis fs-18"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div><!--end /div-->
                <div id="project-list-center-right" class="pt-1">

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-warning bg-warning-subtle fw-normal px-2 mb-1">Low</span>
                            <h5 class="my-2 font-14">Figma Layer Setup</h5>
                            <p class="p-3  rounded-md">
                                <img src="/images/extra/ill-1.png" alt="" class="img-fluid mx-auto">
                            </p>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-danger bg-danger-subtle fw-normal px-1 mb-1">High</span>
                            <h5 class="my-2 font-14">Components BS 5</h5>
                            <p class="text-muted mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <div>
                                <span class="badge rounded text-primary bg-primary-subtle fw-normal px-1 mb-1">API</span>
                                <span class="badge rounded text-info bg-info-subtle fw-normal px-1 mb-1">Form Submit</span>
                                <span class="badge rounded text-danger bg-danger-subtle fw-normal px-1 mb-1">Responsive</span>
                            </div>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-success bg-success-subtle fw-normal px-2 mb-1">Completed</span>
                            <h5 class="my-2 font-14">Live data in datatable </h5>
                            <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-info bg-info-subtle fw-normal px-1 mb-1">Medium</span>
                            <h5 class="my-2 font-14">Reactjs setup</h5>
                            <p class="text-muted mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>14 Tasks</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">70%</small>
                            </div>
                            <div class="progress bg-secondary-subtle" style="height:5px;">
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-file text-muted"></i>
                                                <span class="text-muted font-weight-bold">5 Files</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end project-list-left-->
                <a href="" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#addtask"> <i class="fa-solid fa-plus me-1"></i> Add New Task</a>
            </div><!--end kanban-col-->
            <div class="kanban-col">
                <div class="my-3">
                    <div class="d-flex justify-content-between align-items-center border-bottom border-2 border-info">
                        <div>
                            <h6 class="fw-semibold fs-16 text-muted mb-1">Done</h6>
                            <h6 class="fs-13 fw-semibold">5 Issues - <span class="text-muted">12 Points</span></h6>
                        </div>
                        <div>
                            <a class="text-secondary me-1 add-btn cursor-pointer" data-bs-toggle="modal" data-bs-target="#addtask">
                                <i class="fa-solid fa-plus fs-18"></i>
                            </a>
                            <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis fs-18"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                            </div>
                        </div>
                    </div>
                </div><!--end /div-->
                <div id="project-list-right" class="pt-1">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-success bg-success-subtle fw-normal px-2 mb-1">Completed</span>
                            <h5 class="my-2 font-14">Photoshop 7</h5>
                            <p class="text-muted mb-0">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-info bg-info-subtle fw-normal px-1 mb-1">Medium</span>
                            <h5 class="my-2 font-14">Mobile Account Setting</h5>
                            <p class="text-muted mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>14 Tasks</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">70%</small>
                            </div>
                            <div class="progress bg-secondary-subtle" style="height:5px;">
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-file text-muted"></i>
                                                <span class="text-muted font-weight-bold">5 Files</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-warning bg-warning-subtle fw-normal px-2 mb-1">Low</span>
                            <h5 class="my-2 font-14">UI/UX Design img.</h5>
                            <p class="p-3  rounded-md">
                                <img src="/images/extra/ill-1.png" alt="" class="img-fluid mx-auto">
                            </p>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-end">
                                <a class="dropdown-toggle arrow-none text-secondary" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis fs-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="bottom-end">
                                    <a class="dropdown-item" href="#"><i class="las la-pen fs-16 me-1 align-text-bottom"></i> Edit</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="las la-trash fs-16 me-1 align-text-bottom"></i> Delete</a>
                                </div>
                            </div><!--end dropdown-->
                            <span class="badge rounded text-danger bg-danger-subtle fw-normal px-1 mb-1">High</span>
                            <h5 class="my-2 font-14">Mobile Account Setting</h5>
                            <p class="text-muted mb-3">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                            <div>
                                <span class="badge rounded text-primary bg-primary-subtle fw-normal px-1 mb-1">API</span>
                                <span class="badge rounded text-info bg-info-subtle fw-normal px-1 mb-1">Form Submit</span>
                                <span class="badge rounded text-danger bg-danger-subtle fw-normal px-1 mb-1">Responsive</span>
                            </div>
                            <hr class="hr-dashed">
                            <div class="row justify-content-center">
                                <div class="col-auto align-self-center">
                                    <ul class="list-inline mb-0">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="fa-solid fa-list-check text-muted"></i>
                                                <span class="text-muted font-weight-bold">0/5 Tasks</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="fa-regular fa-message text-muted"></i>
                                                <span class="text-muted font-weight-bold">3 Comments</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                                <div class="col align-self-center">
                                    <div class="img-group d-flex justify-content-center">
                                        <a class="user-avatar position-relative d-inline-block" href="#">
                                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-sm shadow-sm rounded-circle">
                                        </a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end project-list-left-->
                <a href="" class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#addtask"> <i class="fa-solid fa-plus me-1"></i> Add New Task</a>
            </div><!--end kanban-col-->
        </div><!--end kanban-->
    </div> <!--end col-->
</div><!--end row-->

@endsection

@section('script')
@vite(['resources/js/pages/project-kanban.init.js'])
@endsection