@extends('layouts.vertical', ['title' => 'Rizz'])

@section('css')
@vite(['node_modules/dragula/dist/dragula.min.css'])
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-md-4 col-lg-4">
        <div class="border-dashed border-theme-color rounded">
            <div class="card bg-light ">
                <div class="card-body border-dashed-bottom border-theme-color">
                    <button type="button" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center float-end"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</button>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="/images/users/avatar-1.jpg" alt="" class="rounded-circle thumb-xxl mx-auto d-inline-block">
                        </div>
                        <div class="flex-grow-1 ms-2 text-truncate">
                            <h5 class="m-0 fw-bold">Carol Maier</h5>
                            <p class="text-muted mb-0">@carol</p>
                        </div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="col-12">
                            <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                            <div class="text-body  d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
            <div id="project-list-start" class="p-3 pt-0">
                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-success bg-transparent border border-primary">In Progress</span>
                        </div>
                        <div class="d-flex align-items-center mb-3 pb-2 border-dashed-bottom">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/meta.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Meta App</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Aaron Poulin</p>
                            </div><!--end media-body-->
                        </div>
                        <div class="d-flex justify-content-between fw-semibold align-items-center  my-3">
                            <div class="img-group d-flex justify-content-center">
                                <a class="user-avatar position-relative d-inline-block" href="#">
                                    <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
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
                            <button type="button" class="btn btn-primary btn-sm px-3">Details</button>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>91 Tasks</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">70%</small>
                            </div>
                            <div class="progress bg-secondary-subtle" style="height:5px;">
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row mt-3 align-items-center">
                                <div class="col-auto col-md-5">
                                    <div class="text-start">
                                        <h5 class="fs-16 fw-semibold mb-0">$33,100</h5>
                                        <p class="mb-0  text-muted">Total Budget</p>
                                    </div>
                                </div>
                                <div class="col col-md-7 text-end align-self-center">
                                    <h6 class="fw-normal text-muted fs-12 mb-1">Start : <span class="text-dark fw-semibold"> 08 Dec 2023</span></h6>
                                    <h6 class="fw-normal text-muted mb-0 fs-12">Deadline : <span class="text-dark fw-semibold"> 28 Fab 2024</span></h6>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-success bg-transparent border border-primary">90%</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/nextjs.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Nextjs Developer</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Richard Ali</p>
                            </div><!--end media-body-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-success bg-transparent border border-primary">90%</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/reactjs.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Reactjs Developer</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Crystal Darling</p>
                            </div><!--end media-body-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-success bg-transparent border border-primary">In Progress</span>
                        </div>
                        <div class="d-flex align-items-center mb-3 pb-2 border-dashed-bottom">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/chatgpt.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">AI App</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Charles Fang</p>
                            </div><!--end media-body-->
                        </div>
                        <div class="d-flex justify-content-between fw-semibold align-items-center  my-3">
                            <div class="img-group d-flex justify-content-center">
                                <a class="user-avatar position-relative d-inline-block" href="#">
                                    <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                </a>
                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                    <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                </a>
                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                    <img src="/images/users/avatar-9.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                </a>
                                <a href="" class="user-avatar position-relative d-inline-block ms-1">
                                    <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+3</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm px-3">Details</button>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>22 Tasks</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">80%</small>
                            </div>
                            <div class="progress bg-secondary-subtle" style="height:5px;">
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30% " aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row mt-3 align-items-center">
                                <div class="col-auto col-md-5">
                                    <div class="text-start">
                                        <h5 class="fs-16 fw-semibold mb-0">$42,400</h5>
                                        <p class="mb-0  text-muted">Total Budget</p>
                                    </div>
                                </div>
                                <div class="col col-md-7 text-end align-self-center">
                                    <h6 class="fw-normal text-muted fs-12 mb-1">Start : <span class="text-dark fw-semibold"> 10 Mar 2023</span></h6>
                                    <h6 class="fw-normal text-muted mb-0 fs-12">Deadline : <span class="text-dark fw-semibold"> 15 Jan 2024</span></h6>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end project-list-start-->
        </div><!--end div-->
    </div> <!--end col-->
    <div class="col-md-4 col-lg-4">
        <div class="border-dashed border-theme-color rounded">
            <div class="card bg-light ">
                <div class="card-body border-dashed-bottom border-theme-color">
                    <button type="button" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center float-end"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</button>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="/images/users/avatar-8.jpg" alt="" class="rounded-circle thumb-xxl mx-auto d-inline-block">
                        </div>
                        <div class="flex-grow-1 ms-2 text-truncate">
                            <h5 class="m-0 fw-bold">Thomas Milligan</h5>
                            <p class="text-muted mb-0">@thomas</p>
                        </div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="col-12">
                            <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                            <div class="text-body  d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
            <div id="project-list-center" class="p-3 pt-0">

                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-success bg-transparent border border-primary">90%</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/nextjs.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Nextjs Developer</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Wendy Keen</p>
                            </div><!--end media-body-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-success bg-transparent border border-primary">70%</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/nodejs.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Nodejs Developer</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Jack Jackson</p>
                            </div><!--end media-body-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-warning bg-transparent border border-warning">Pending</span>
                        </div>
                        <div class="d-flex align-items-center mb-3 pb-2 border-dashed-bottom">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/gitlab.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Gitlab App</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Marvin Turner</p>
                            </div><!--end media-body-->
                        </div>
                        <div class="d-flex justify-content-between fw-semibold align-items-center  my-3">
                            <div class="img-group d-flex justify-content-center">
                                <a class="user-avatar position-relative d-inline-block" href="#">
                                    <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                </a>
                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                    <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                </a>
                                <a href="" class="user-avatar position-relative d-inline-block ms-1">
                                    <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+2</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm px-3">Details</button>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>28 Tasks</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">50%</small>
                            </div>
                            <div class="progress bg-secondary-subtle" style="height:5px;">
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row mt-3 align-items-center">
                                <div class="col-auto col-md-5">
                                    <div class="text-start">
                                        <h5 class="fs-16 fw-semibold mb-0">$14,830</h5>
                                        <p class="mb-0  text-muted">Total Budget</p>
                                    </div>
                                </div>
                                <div class="col col-md-7 text-end align-self-center">
                                    <h6 class="fw-normal text-muted fs-12 mb-1">Start : <span class="text-dark fw-semibold"> 02 Jan 2024</span></h6>
                                    <h6 class="fw-normal text-muted mb-0 fs-12">Deadline : <span class="text-dark fw-semibold"> 01 Jul 2024</span></h6>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->

                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-success bg-transparent border border-primary">60%</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/vue.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Vuejs Developer</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Robert Kipp</p>
                            </div><!--end media-body-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end project-list-start-->
        </div><!--end div-->
    </div> <!--end col-->
    <div class="col-md-4 col-lg-4">
        <div class="border-dashed border-theme-color rounded">
            <div class="card bg-light ">
                <div class="card-body border-dashed-bottom border-theme-color">
                    <button type="button" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center float-end"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</button>
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="/images/users/avatar-7.jpg" alt="" class="rounded-circle thumb-xxl mx-auto d-inline-block">
                        </div>
                        <div class="flex-grow-1 ms-2 text-truncate">
                            <h5 class="m-0 fw-bold">Juan Clark</h5>
                            <p class="text-muted mb-0">@juan</p>
                        </div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="col-12">
                            <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                            <div class="text-body  d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
            <div id="project-list-end" class="p-3 pt-0">
                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-success bg-transparent border border-primary">90%</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/symfony.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Symfony Developer</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Willie Miller</p>
                            </div><!--end media-body-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-danger bg-transparent border border-danger">Completed</span>
                        </div>
                        <div class="d-flex align-items-center mb-3 pb-2 border-dashed-bottom">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/slack.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Slack App</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Nancy Perdue</p>
                            </div><!--end media-body-->
                        </div>
                        <div class="d-flex justify-content-between fw-semibold align-items-center  my-3">
                            <div class="img-group d-flex justify-content-center">
                                <a class="user-avatar position-relative d-inline-block" href="#">
                                    <img src="/images/users/avatar-8.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                </a>
                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                    <img src="/images/users/avatar-7.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                </a>
                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                    <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                </a>
                                <a href="" class="user-avatar position-relative d-inline-block ms-1">
                                    <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+2</span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm px-3">Details</button>
                        </div>
                        <div class="">
                            <div class="d-flex justify-content-between fw-semibold align-items-center">
                                <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>52 Tasks</p>
                                <small class="text-end text-body-emphasis d-block ms-auto">100%</small>
                            </div>
                            <div class="progress bg-secondary-subtle" style="height:5px;">
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 40% " aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row mt-3 align-items-center">
                                <div class="col-auto col-md-5">
                                    <div class="text-start">
                                        <h5 class="fs-16 fw-semibold mb-0">$22,500</h5>
                                        <p class="mb-0  text-muted">Total Budget</p>
                                    </div>
                                </div>
                                <div class="col col-md-7 text-end align-self-center">
                                    <h6 class="fw-normal text-muted fs-12 mb-1">Start : <span class="text-dark fw-semibold"> 20 Dec 2023</span></h6>
                                    <h6 class="fw-normal text-muted mb-0 fs-12">Deadline : <span class="text-dark fw-semibold"> 30 Aug 2024</span></h6>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="card">
                    <div class="card-body">
                        <div class="position-absolute  end-0 me-3">
                            <span class="badge rounded text-success bg-transparent border border-primary">90%</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img src="/images/logos/lang-logo/python.png" alt="" height="50" class="rounded-circle d-inline-block">
                            </div>
                            <div class="flex-grow-1 ms-2 text-truncate">
                                <h5 class="fw-bold mb-1 fs-15">Python Developer</h5>
                                <p class="text-dark mb-0 fs-13 fw-semibold"><span class="text-muted">Client : </span>Joseph Cate</p>
                            </div><!--end media-body-->
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->


            </div><!--end project-list-start-->
        </div><!--end div-->
    </div> <!--end col-->
</div><!--end row-->

@endsection

@section('script')
@vite(['resources/js/pages/dragula.init.js'])
@endsection