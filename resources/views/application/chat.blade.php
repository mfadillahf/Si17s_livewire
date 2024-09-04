@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-12">
        <div class="chat-box-left">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link py-2 active" id="messages_chat_tab" data-bs-toggle="tab" href="#messages_chat" role="tab">Messages</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link py-2" id="active_chat_tab" data-bs-toggle="tab" href="#active_chat" role="tab">Active</a>
                </li>
            </ul>
            <div class="chat-search p-3">
                <div class="p-1 bg-light rounded rounded-pill">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button id="button-addon2" type="submit" class="btn btn-link text-secondary"><i class="fa fa-search"></i></button>
                        </div>
                        <input type="search" placeholder="Searching.." aria-describedby="button-addon2" class="form-control border-0 bg-light">
                    </div>
                </div>
            </div><!--end chat-search-->

            <div class="chat-body-left px-3" data-simplebar>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="messages_chat">
                        <div class="row">
                            <div class="col">
                                <div class="p-2 border-dashed border-theme-color rounded mb-2">
                                    <a href="" class="">
                                        <div class="d-flex align-items-start">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-1.jpg" alt="" class="thumb-lg rounded-circle">
                                                <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-success fs-10 border-2 border-theme-color"></i></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                                <h6 class="my-0 fw-medium text-dark fs-14">Daniel Madsen
                                                    <small class="float-end text-muted fs-11">5 min age</small>
                                                </h6>
                                                <p class="text-muted mb-0"><span class="text-primary">Typing...</span>
                                                    <span class="badge float-end rounded text-white bg-success ">3</span>
                                                </p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a> <!--end-->
                                </div><!--end div-->
                                <div class="p-2 border-dashed border-theme-color rounded mb-2">
                                    <a href="" class="">
                                        <div class="d-flex align-items-start">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-2.jpg" alt="" class="thumb-lg rounded-circle">
                                                <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-secondary fs-10 border-2 border-theme-color"></i></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                                <h6 class="my-0 fw-medium text-dark fs-14">James Andrews
                                                    <small class="float-end text-muted fs-11">30 min ago</small>
                                                </h6>
                                                <p class="text-muted mb-0">Amazing Work!! 🔥
                                                    <span class="badge float-end rounded text-white bg-success ">1</span>
                                                </p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a> <!--end-->
                                </div><!--end div-->
                                <div class="p-2 border-dashed border-theme-color rounded mb-2">
                                    <a href="" class="">
                                        <div class="d-flex align-items-start">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-3.jpg" alt="" class="thumb-lg rounded-circle">
                                                <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-secondary fs-10 border-2 border-theme-color"></i></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                                <h6 class="my-0 fw-medium text-dark fs-14">Shauna Jones
                                                    <small class="float-end text-muted fs-11">Yesterday</small>
                                                </h6>
                                                <p class="text-muted mb-0">Congratulations!</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a> <!--end-->
                                </div><!--end div-->
                                <div class="p-2 border-dashed border-theme-color rounded mb-2">
                                    <a href="" class="">
                                        <div class="d-flex align-items-start">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-4.jpg" alt="" class="thumb-lg rounded-circle">
                                                <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-success fs-10 border-2 border-theme-color"></i></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                                <h6 class="my-0 fw-medium text-dark fs-14">Frank Wei
                                                    <small class="float-end text-muted fs-11">1 Feb</small>
                                                </h6>
                                                <p class="text-muted mb-0"><i class="iconoir-microphone"></i> Voice message!</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a> <!--end-->
                                </div><!--end div-->
                                <div class="p-2 border-dashed border-theme-color rounded mb-2">
                                    <a href="" class="">
                                        <div class="d-flex align-items-start">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-5.jpg" alt="" class="thumb-lg rounded-circle">
                                                <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-secondary fs-10 border-2 border-theme-color"></i></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                                <h6 class="my-0 fw-medium text-dark fs-14">Karen Savage
                                                    <small class="float-end text-muted fs-11">8 Feb</small>
                                                </h6>
                                                <p class="text-muted mb-0">Ok, I like it. 👍</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a> <!--end-->
                                </div><!--end div-->
                                <div class="p-2 border-dashed border-theme-color rounded mb-2">
                                    <a href="" class="">
                                        <div class="d-flex align-items-start">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-6.jpg" alt="" class="thumb-lg rounded-circle">
                                                <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-secondary fs-10 border-2 border-theme-color"></i></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                                <h6 class="my-0 fw-medium text-dark fs-14">Carol Maier
                                                    <small class="float-end text-muted fs-11">12 Feb</small>
                                                </h6>
                                                <p class="text-muted mb-0">Send a pic.!</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a> <!--end-->
                                </div><!--end div-->
                                <div class="p-2 border-dashed border-theme-color rounded mb-2">
                                    <a href="" class="">
                                        <div class="d-flex align-items-start">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-3.jpg" alt="" class="thumb-lg rounded-circle">
                                                <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-secondary fs-10 border-2 border-theme-color"></i></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                                <h6 class="my-0 fw-medium text-dark fs-14">Shauna Jones
                                                    <small class="float-end text-muted fs-11">15 Feb</small>
                                                </h6>
                                                <p class="text-muted mb-0">Congratulations!</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a> <!--end-->
                                </div><!--end div-->
                                <div class="p-2 border-dashed border-theme-color rounded mb-2">
                                    <a href="" class="">
                                        <div class="d-flex align-items-start">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-5.jpg" alt="" class="thumb-lg rounded-circle">
                                                <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-secondary fs-10 border-2 border-theme-color"></i></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                                <h6 class="my-0 fw-medium text-dark fs-14">Frank Wei
                                                    <small class="float-end text-muted fs-11">2 Mar</small>
                                                </h6>
                                                <p class="text-muted mb-0"><i class="iconoir-microphone"></i> Voice message!</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a> <!--end-->
                                </div><!--end div-->
                                <div class="p-2 border-dashed border-theme-color rounded mb-2">
                                    <a href="" class="">
                                        <div class="d-flex align-items-start">
                                            <div class="position-relative">
                                                <img src="/images/users/avatar-6.jpg" alt="" class="thumb-lg rounded-circle">
                                                <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-secondary fs-10 border-2 border-theme-color"></i></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                                <h6 class="my-0 fw-medium text-dark fs-14">Carol Maier
                                                    <small class="float-end text-muted fs-11">14 Mar</small>
                                                </h6>
                                                <p class="text-muted mb-0">Send a pic.!</p>
                                            </div><!--end media-body-->
                                        </div><!--end media-->
                                    </a> <!--end-->
                                </div><!--end div-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end general chat-->

                    <div class="tab-pane fade" id="active_chat">
                        <div class="p-2 border-dashed border-theme-color rounded mb-2">
                            <a href="" class="">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative">
                                        <img src="/images/users/avatar-3.jpg" alt="" class="thumb-lg rounded-circle">
                                        <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-success fs-10 border-2 border-theme-color"></i></span>
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                        <h6 class="my-0 fw-medium text-dark fs-14">Shauna Jones
                                            <small class="float-end text-muted fs-11">15 Feb</small>
                                        </h6>
                                        <p class="text-muted mb-0">Congratulations!</p>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                            </a> <!--end-->
                        </div><!--end div-->
                        <div class="p-2 border-dashed border-theme-color rounded mb-2">
                            <a href="" class="">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative">
                                        <img src="/images/users/avatar-5.jpg" alt="" class="thumb-lg rounded-circle">
                                        <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-success fs-10 border-2 border-theme-color"></i></span>
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                        <h6 class="my-0 fw-medium text-dark fs-14">Frank Wei
                                            <small class="float-end text-muted fs-11">2 Mar</small>
                                        </h6>
                                        <p class="text-muted mb-0"><i class="iconoir-microphone"></i> Voice message!</p>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                            </a> <!--end-->
                        </div><!--end div-->
                        <div class="p-2 border-dashed border-theme-color rounded mb-2">
                            <a href="" class="">
                                <div class="d-flex align-items-start">
                                    <div class="position-relative">
                                        <img src="/images/users/avatar-6.jpg" alt="" class="thumb-lg rounded-circle">
                                        <span class="position-absolute bottom-0 end-0"><i class="fa-solid fa-circle text-success fs-10 border-2 border-theme-color"></i></span>
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                        <h6 class="my-0 fw-medium text-dark fs-14">Carol Maier
                                            <small class="float-end text-muted fs-11">14 Mar</small>
                                        </h6>
                                        <p class="text-muted mb-0">Send a pic.!</p>
                                    </div><!--end media-body-->
                                </div><!--end media-->
                            </a> <!--end-->
                        </div><!--end div-->
                    </div><!--end group chat-->

                </div><!--end tab-content-->
            </div>
        </div><!--end chat-box-left -->

        <div class="chat-box-right">
            <div class="p-3 d-flex justify-content-between align-items-center card-bg rounded">
                <a href="" class="d-flex align-self-center">
                    <div class="flex-shrink-0">
                        <img src="/images/users/avatar-1.jpg" alt="user" class="rounded-circle thumb-lg">
                    </div><!-- media-left -->
                    <div class="flex-grow-1 ms-2 align-self-center">
                        <div>
                            <h6 class="my-0 fw-medium text-dark fs-14">Mary Schneider</h6>
                            <p class="text-muted mb-0">Last seen: 2 hours ago</p>
                        </div>
                    </div><!-- end media-body -->
                </a><!--end media-->
                <div class="d-none d-sm-inline-block align-self-center">
                    <a href="javascript:void(0)" class="fs-22 me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" data-bs-custom-class="tooltip-primary"><i class="iconoir-phone"></i></a>
                    <a href="javascript:void(0)" class="fs-22 me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Video call" data-bs-custom-class="tooltip-primary"><i class="iconoir-video-camera"></i></a>
                    <a href="javascript:void(0)" class="fs-22 me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" data-bs-custom-class="tooltip-primary"><i class="iconoir-trash"></i></a>
                    <a href="javascript:void(0)" class="fs-22 text-muted"><i class="iconoir-menu-scale"></i></a>
                </div>
            </div><!-- end chat-header -->
            <div class="chat-body" data-simplebar>
                <div class="chat-detail">
                    <div class="d-flex">
                        <img src="/images/users/avatar-1.jpg" alt="user" class="rounded-circle thumb-md">
                        <div class="ms-1 chat-box w-100">
                            <div class="user-chat">
                                <p class="">Good Morning !</p>
                                <p class="">There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="chat-time">yesterday</div>
                        </div><!--end media-body-->
                    </div><!--end media-->
                    <div class="d-flex flex-row-reverse">
                        <img src="/images/users/avatar-3.jpg" alt="user" class="rounded-circle thumb-md">
                        <div class="me-1 chat-box w-100 reverse">
                            <div class="user-chat">
                                <p class="">Hi,</p>
                                <p class="">Can be verified on any platform using docker?</p>
                            </div>
                            <div class="chat-time">12:35pm</div>
                        </div><!--end media-body-->
                    </div><!--end media-->
                    <div class="d-flex">
                        <img src="/images/users/avatar-1.jpg" alt="user" class="rounded-circle thumb-md">
                        <div class="ms-1 chat-box w-100">
                            <div class="user-chat">
                                <p class="">Have a nice day !</p>
                                <p class="">Command was run with root privileges. I'm sure about that.</p>
                                <p class="">ok</p>
                            </div>
                            <div class="chat-time">11:10pm</div>
                        </div><!--end media-body-->
                    </div><!--end media-->
                    <div class="d-flex flex-row-reverse">
                        <img src="/images/users/avatar-3.jpg" alt="user" class="rounded-circle thumb-md">
                        <div class="me-1 chat-box w-100 reverse">
                            <div class="user-chat">
                                <p class="">Thanks for your message David. I thought I'm alone with this issue. Please, 👍 the issue to support it :)</p>
                            </div>
                            <div class="chat-time">10:10pm</div>
                        </div><!--end media-body-->
                    </div><!--end media-->
                    <div class="d-flex">
                        <img src="/images/users/avatar-1.jpg" alt="user" class="rounded-circle thumb-md">
                        <div class="ms-1 chat-box w-100">
                            <div class="user-chat">
                                <p class="">Sorry, I just back !</p>
                                <p class="">It seems like you are from Mac OS world. There is no /Users/ folder on linux 😄</p>
                            </div>
                            <div class="chat-time">11:15am</div>
                        </div><!--end media-body-->
                    </div><!--end media-->
                    <div class="d-flex flex-row-reverse">
                        <img src="/images/users/avatar-3.jpg" alt="user" class="rounded-circle thumb-md">
                        <div class="me-1 chat-box w-100 reverse">
                            <div class="user-chat">
                                <p class="">Good Morning !</p>
                                <p class="">There are many variations of passages of Lorem Ipsum available.</p>
                            </div>
                            <div class="chat-time">9:02am</div>
                        </div><!--end media-body-->
                    </div><!--end media-->
                </div> <!-- end chat-detail -->
            </div><!-- end chat-body -->
            <div class="chat-footer">
                <div class="row">
                    <div class="col-10 col-md-8">
                        <input type="text" class="form-control" placeholder="Type something here...">
                    </div><!-- col-8 -->
                    <div class="col-2 col-md-4 text-end">
                        <div class="chat-features">
                            <div class="d-none d-sm-inline-block ">
                                <a href=""><i class="iconoir-camera"></i></a>
                                <a href=""><i class="iconoir-attachment"></i></a>
                                <a href=""><i class="iconoir-microphone"></i></a>
                            </div>
                            <a href="" class="text-primary"><i class="iconoir-send-solid"></i></a>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end chat-footer -->
        </div><!--end chat-box-right -->
    </div> <!-- end col -->
</div><!-- end row -->

@endsection