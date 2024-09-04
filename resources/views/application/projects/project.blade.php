@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="position-absolute  end-0 me-3">
                    <span class="badge rounded text-primary bg-transparent border border-primary ms-1 p-1">In Progress</span>
                </div>
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/meta.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="fw-bold my-2 fs-20">Meta App</h5>
                    <p class="text-dark  fs-13 fw-semibold"><span class="text-muted">Client : </span>Jack Jackson</p>
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
                        <div class="col-auto col-md-6">
                            <div class="text-start">
                                <h5 class="fs-18 fw-semibold mb-1">$33,100</h5>
                                <p class="mb-0  text-muted">Total Budget</p>
                            </div>
                        </div>
                        <div class="col col-md-6 text-end align-self-center">
                            <h6 class="fw-normal text-muted">Start : <span class="text-dark fw-semibold"> 08 Dec 2023</span></h6>
                            <h6 class="fw-normal text-muted">Deadline : <span class="text-dark fw-semibold"> 28 Fab 2024</span></h6>
                        </div><!--end col-->
                    </div> <!--end row-->

                    <p class="text-muted mt-3 mb-0">Start with a catchy and descriptive title that summarizes the project.</p>
                </div>
                <div class="d-flex justify-content-between fw-semibold align-items-center  mt-3">
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
                    <button type="button" class="btn bg-secondary-subtle text-dark btn-sm px-3">Details</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="position-absolute  end-0 me-3">
                    <span class="badge rounded text-primary bg-transparent border border-primary ms-1 p-1">In Progress</span>
                </div>
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/gitlab.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="fw-bold my-2 fs-20">Gitlab</h5>
                    <p class="text-dark  fs-13 fw-semibold"><span class="text-muted">Client : </span>Kevin Ewing</p>
                    <div class="d-flex justify-content-between fw-semibold align-items-center">
                        <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>32 Tasks</p>
                        <small class="text-end text-body-emphasis d-block ms-auto">90%</small>
                    </div>
                    <div class="progress bg-secondary-subtle" style="height:5px;">
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 50% " aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="col-auto col-md-6">
                            <div class="text-start">
                                <h5 class="fs-18 fw-semibold mb-1">$10,500</h5>
                                <p class="mb-0  text-muted">Total Budget</p>
                            </div>
                        </div>
                        <div class="col col-md-6 text-end align-self-center">
                            <h6 class="fw-normal text-muted">Start : <span class="text-dark fw-semibold"> 10 Mar 2023</span></h6>
                            <h6 class="fw-normal text-muted">Deadline : <span class="text-dark fw-semibold"> 20 Sep 2024</span></h6>
                        </div><!--end col-->
                    </div> <!--end row-->

                    <p class="text-muted mt-3 mb-0">Encourage readers to take action, such as visiting the project website.</p>
                </div>
                <div class="d-flex justify-content-between fw-semibold align-items-center  mt-3">
                    <div class="img-group d-flex justify-content-center">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                    </div>
                    <button type="button" class="btn bg-secondary-subtle text-dark btn-sm px-3">Details</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="position-absolute  end-0 me-3">
                    <span class="badge rounded text-primary bg-transparent border border-primary ms-1 p-1">In Progress</span>
                </div>
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/chatgpt.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="fw-bold my-2 fs-20">ChatGPT 5</h5>
                    <p class="text-dark  fs-13 fw-semibold"><span class="text-muted">Client : </span>Bobby Harrison</p>
                    <div class="d-flex justify-content-between fw-semibold align-items-center">
                        <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>68 Tasks</p>
                        <small class="text-end text-body-emphasis d-block ms-auto">75%</small>
                    </div>
                    <div class="progress bg-secondary-subtle" style="height:5px;">
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20% " aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="col-auto col-md-6">
                            <div class="text-start">
                                <h5 class="fs-18 fw-semibold mb-1">$41,100</h5>
                                <p class="mb-0  text-muted">Total Budget</p>
                            </div>
                        </div>
                        <div class="col col-md-6 text-end align-self-center">
                            <h6 class="fw-normal text-muted">Start : <span class="text-dark fw-semibold"> 03 Jan 2023</span></h6>
                            <h6 class="fw-normal text-muted">Deadline : <span class="text-dark fw-semibold"> 15 Aug 2024</span></h6>
                        </div><!--end col-->
                    </div> <!--end row-->

                    <p class="text-muted mt-3 mb-0">Highlight the main features or functionalities of the project. </p>
                </div>
                <div class="d-flex justify-content-between fw-semibold align-items-center  mt-3">
                    <div class="img-group d-flex justify-content-center">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
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
                        <a href="" class="user-avatar position-relative d-inline-block ms-1">
                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+2</span>
                        </a>
                    </div>
                    <button type="button" class="btn bg-secondary-subtle text-dark btn-sm px-3">Details</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="position-absolute  end-0 me-3">
                    <span class="badge rounded text-primary bg-transparent border border-primary ms-1 p-1">In Progress</span>
                </div>
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/dropbox.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="fw-bold my-2 fs-20">Dropbox</h5>
                    <p class="text-dark  fs-13 fw-semibold"><span class="text-muted">Client : </span>Anthony Stockton</p>
                    <div class="d-flex justify-content-between fw-semibold align-items-center">
                        <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>130 Tasks</p>
                        <small class="text-end text-body-emphasis d-block ms-auto">95%</small>
                    </div>
                    <div class="progress bg-secondary-subtle" style="height:5px;">
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 45% " aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="col-auto col-md-6">
                            <div class="text-start">
                                <h5 class="fs-18 fw-semibold mb-1">$55,100</h5>
                                <p class="mb-0  text-muted">Total Budget</p>
                            </div>
                        </div>
                        <div class="col col-md-6 text-end align-self-center">
                            <h6 class="fw-normal text-muted">Start : <span class="text-dark fw-semibold"> 08 Feb 2023</span></h6>
                            <h6 class="fw-normal text-muted">Deadline : <span class="text-dark fw-semibold"> 28 Dec 2023</span></h6>
                        </div><!--end col-->
                    </div> <!--end row-->

                    <p class="text-muted mt-3 mb-0">If applicable, give credit to any collaborators, contributors, or sources of inspiration for the project.</p>
                </div>
                <div class="d-flex justify-content-between fw-semibold align-items-center  mt-3">
                    <div class="img-group d-flex justify-content-center">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a href="" class="user-avatar position-relative d-inline-block ms-1">
                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+2</span>
                        </a>
                    </div>
                    <button type="button" class="btn bg-secondary-subtle text-dark btn-sm px-3">Details</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="position-absolute  end-0 me-3">
                    <span class="badge rounded text-primary bg-transparent border border-primary ms-1 p-1">In Progress</span>
                </div>
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/slack.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="fw-bold my-2 fs-20">Slack Chat</h5>
                    <p class="text-dark  fs-13 fw-semibold"><span class="text-muted">Client : </span>Gilbert Jackson</p>
                    <div class="d-flex justify-content-between fw-semibold align-items-center">
                        <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>91 Tasks</p>
                        <small class="text-end text-body-emphasis d-block ms-auto">40%</small>
                    </div>
                    <div class="progress bg-secondary-subtle" style="height:5px;">
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 10%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="col-auto col-md-6">
                            <div class="text-start">
                                <h5 class="fs-18 fw-semibold mb-1">$30,580</h5>
                                <p class="mb-0  text-muted">Total Budget</p>
                            </div>
                        </div>
                        <div class="col col-md-6 text-end align-self-center">
                            <h6 class="fw-normal text-muted">Start : <span class="text-dark fw-semibold"> 02 Jun 2023</span></h6>
                            <h6 class="fw-normal text-muted">Deadline : <span class="text-dark fw-semibold"> 15 Apr 2024</span></h6>
                        </div><!--end col-->
                    </div> <!--end row-->

                    <p class="text-muted mt-3 mb-0"> Encourage readers to take action, such as visiting the project website, trying out a demo.</p>
                </div>
                <div class="d-flex justify-content-between fw-semibold align-items-center  mt-3">
                    <div class="img-group d-flex justify-content-center">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a href="" class="user-avatar position-relative d-inline-block ms-1">
                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+8</span>
                        </a>
                    </div>
                    <button type="button" class="btn bg-secondary-subtle text-dark btn-sm px-3">Details</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="position-absolute  end-0 me-3">
                    <span class="badge rounded text-primary bg-transparent border border-primary ms-1 p-1">In Progress</span>
                </div>
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/dribbble.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="fw-bold my-2 fs-20">Dribbble Shots</h5>
                    <p class="text-dark  fs-13 fw-semibold"><span class="text-muted">Client : </span>Michael Heinz</p>
                    <div class="d-flex justify-content-between fw-semibold align-items-center">
                        <p class="mb-1 d-inline-flex align-items-center"><i class="iconoir-task-list fs-18 text-muted me-1"></i>62 Tasks</p>
                        <small class="text-end text-body-emphasis d-block ms-auto">50%</small>
                    </div>
                    <div class="progress bg-secondary-subtle" style="height:5px;">
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="col-auto col-md-6">
                            <div class="text-start">
                                <h5 class="fs-18 fw-semibold mb-1">$25,800</h5>
                                <p class="mb-0  text-muted">Total Budget</p>
                            </div>
                        </div>
                        <div class="col col-md-6 text-end align-self-center">
                            <h6 class="fw-normal text-muted">Start : <span class="text-dark fw-semibold"> 08 Jan 2023</span></h6>
                            <h6 class="fw-normal text-muted">Deadline : <span class="text-dark fw-semibold"> 28 Dec 2024</span></h6>
                        </div><!--end col-->
                    </div> <!--end row-->

                    <p class="text-muted mt-3 mb-0">TechSavvy Solutions was founded with a vision to revolutionize the digital landscape.</p>
                </div>
                <div class="d-flex justify-content-between fw-semibold align-items-center  mt-3">
                    <div class="img-group d-flex justify-content-center">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a href="" class="user-avatar position-relative d-inline-block ms-1">
                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+3</span>
                        </a>
                    </div>
                    <button type="button" class="btn bg-secondary-subtle text-dark btn-sm px-3">Details</button>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection