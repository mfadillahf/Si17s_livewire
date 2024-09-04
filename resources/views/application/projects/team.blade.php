@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/nextjs.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="m-0 fw-bold mt-2 fs-20">Nextjs Developer Team</h5>
                    <p class="text-muted mb-0">@karen</p>

                    <div class="img-group d-flex justify-content-center mt-3">
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
                    <p class="text-muted mt-3 mb-0">Paul is an experienced cybersecurity analyst with 10 years of practice.</p>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="/images/users/avatar-1.jpg" class="me-2 align-self-center thumb-lg rounded" alt="...">
                            <div class="flex-grow-1 text-truncate">
                                <h6 class="m-0 text-truncate fs-14 fw-bold">Carol Maier</h6>
                                <p class="font-12 mb-0 text-muted">Team Leader</p>
                            </div><!--end media body-->
                        </div>
                    </div>
                    <div class="col col-md-6 text-end align-self-center">
                        <small class="text-end">50%</small>
                        <div class="progress bg-secondary-subtle" style="height:5px;">
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
                <div class="mt-3 text-center">
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/reactjs.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="m-0 fw-bold mt-2 fs-20">Reactjs Developer Team</h5>
                    <p class="text-muted mb-0">@karen</p>

                    <div class="img-group d-flex justify-content-center mt-3">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-8.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-10.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a href="" class="user-avatar position-relative d-inline-block ms-1">
                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+2</span>
                        </a>
                    </div>
                    <p class="text-muted mt-3 mb-0">Angela is a skilled content writer with over 9 years of experience.</p>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="/images/users/avatar-2.jpg" class="me-2 align-self-center thumb-lg rounded" alt="...">
                            <div class="flex-grow-1 text-truncate">
                                <h6 class="m-0 text-truncate fs-14 fw-bold">Sandra Lally</h6>
                                <p class="font-12 mb-0 text-muted">Team Leader</p>
                            </div><!--end media body-->
                        </div>
                    </div>
                    <div class="col col-md-6 text-end align-self-center">
                        <small class="text-end">80%</small>
                        <div class="progress bg-secondary-subtle" style="height:5px;">
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30% " aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
                <div class="mt-3 text-center">
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/svelte.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="m-0 fw-bold mt-2 fs-20">Sveltejs Developer Team</h5>
                    <p class="text-muted mb-0">@karen</p>

                    <div class="img-group d-flex justify-content-center mt-3">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-9.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a href="" class="user-avatar position-relative d-inline-block ms-1">
                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+3</span>
                        </a>
                    </div>
                    <p class="text-muted mt-3 mb-0">Scott is a seasoned professional with more than 12 years of experience in software engineering.</p>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="/images/users/avatar-3.jpg" class="me-2 align-self-center thumb-lg rounded" alt="...">
                            <div class="flex-grow-1 text-truncate">
                                <h6 class="m-0 text-truncate fs-14 fw-bold">Scott Holland</h6>
                                <p class="font-12 mb-0 text-muted">Team Leader</p>
                            </div><!--end media body-->
                        </div>
                    </div>
                    <div class="col col-md-6 text-end align-self-center">
                        <small class="text-end">45%</small>
                        <div class="progress bg-secondary-subtle" style="height:5px;">
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
                <div class="mt-3 text-center">
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/vue.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="m-0 fw-bold mt-2 fs-20">Vuejs Developer Team</h5>
                    <p class="text-muted mb-0">@karen</p>

                    <div class="img-group d-flex justify-content-center mt-3">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-10.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-9.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a href="" class="user-avatar position-relative d-inline-block ms-1">
                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+1</span>
                        </a>
                    </div>
                    <p class="text-muted mt-3 mb-0">Jane has over 10 years of experience in software development.</p>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="/images/users/avatar-8.jpg" class="me-2 align-self-center thumb-lg rounded" alt="...">
                            <div class="flex-grow-1 text-truncate">
                                <h6 class="m-0 text-truncate fs-14 fw-bold">Gordon Aiello</h6>
                                <p class="font-12 mb-0 text-muted">Team Leader</p>
                            </div><!--end media body-->
                        </div>
                    </div>
                    <div class="col col-md-6 text-end align-self-center">
                        <small class="text-end">90%</small>
                        <div class="progress bg-secondary-subtle" style="height:5px;">
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30% " aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
                <div class="mt-3 text-center">
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/symfony.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="m-0 fw-bold mt-2 fs-20">Symfony Developer Team</h5>
                    <p class="text-muted mb-0">@karen</p>

                    <div class="img-group d-flex justify-content-center mt-3">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-9.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a href="" class="user-avatar position-relative d-inline-block ms-1">
                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+5</span>
                        </a>
                    </div>
                    <p class="text-muted mt-3 mb-0">Angela possesses more than a decade of expertise in software engineering.</p>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="/images/users/avatar-7.jpg" class="me-2 align-self-center thumb-lg rounded" alt="...">
                            <div class="flex-grow-1 text-truncate">
                                <h6 class="m-0 text-truncate fs-14 fw-bold">Angela McGary</h6>
                                <p class="font-12 mb-0 text-muted">Team Leader</p>
                            </div><!--end media body-->
                        </div>
                    </div>
                    <div class="col col-md-6 text-end align-self-center">
                        <small class="text-end">25%</small>
                        <div class="progress bg-secondary-subtle" style="height:5px;">
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 10% " aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
                <div class="mt-3 text-center">
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center border-dashed-bottom pb-3">
                    <img src="/images/logos/lang-logo/nodejs.png" alt="" height="80" class="rounded-circle d-inline-block">
                    <h5 class="m-0 fw-bold mt-2 fs-20">Nodejs Developer Team</h5>
                    <p class="text-muted mb-0">@karen</p>

                    <div class="img-group d-flex justify-content-center mt-3">
                        <a class="user-avatar position-relative d-inline-block" href="#">
                            <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-10.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-9.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                            <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                        </a>
                        <a href="" class="user-avatar position-relative d-inline-block ms-1">
                            <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+1</span>
                        </a>
                    </div>
                    <p class="text-muted mt-3 mb-0">Mike has over ten years of experience in software development.</p>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="d-flex align-items-center">
                            <img src="/images/users/avatar-10.jpg" class="me-2 align-self-center thumb-lg rounded" alt="...">
                            <div class="flex-grow-1 text-truncate">
                                <h6 class="m-0 text-truncate fs-14 fw-bold">Mike Gillam</h6>
                                <p class="font-12 mb-0 text-muted">Team Leader</p>
                            </div><!--end media body-->
                        </div>
                    </div>
                    <div class="col col-md-6 text-end align-self-center">
                        <small class="text-end">65%</small>
                        <div class="progress bg-secondary-subtle" style="height:5px;">
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 15% " aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary rounded-pill" role="progressbar" style="margin-right:2px; width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
                <div class="mt-3 text-center">
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection