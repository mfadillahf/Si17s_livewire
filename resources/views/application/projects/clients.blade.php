@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body p-4 color-bg rounded text-center">
                <h4 class="text-white opacity-75 fs-16 mb-0">Mannat Themes</h4>
            </div><!--end card-body-->
            <div class="position-relative d-none d-xxl-block">
                <div class="shape overflow-hidden text-card-bg">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <div class="card-body mt-n5">
                <div class="position-relative">
                    <img src="/images/users/avatar-1.jpg" alt="" class="rounded-circle thumb-xxl">
                    <div class="position-absolute top-0">
                        <img src="/images/flags/baha_flag.jpg" alt="" class="rounded-circle thumb-sm border border-3 border-dark">
                    </div>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="">
                            <h5 class="m-0 fw-bold">Karen Savage</h5>
                            <p class="text-muted mb-0">@karen</p>
                        </div>
                    </div>
                    <div class="col col-md-6 text-end">
                        <div class="text-muted mb-2 d-flex align-items-center"><span class="text-body fw-semibold">Pre.Project :</span> Health App</div>
                    </div>
                </div>
                <p class="text-muted fs-14 my-3">Explore our blog for in-depth articles, how-to guides, and inspiring stories that showcase the beauty of sustainable living.</p>
                <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                <div class="text-body  d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                <div class="mt-3">
                    <a href="{{ route('second', ['pages', 'profile'])}}" class="btn btn-sm btn-primary px-2 d-inline-flex align-items-center"><i class="iconoir-user fs-14 me-1"></i>View Profile</a>
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body p-4 color-bg rounded text-center">
                <h4 class="text-white opacity-75 fs-16 mb-0">Mannat Themes</h4>
            </div><!--end card-body-->
            <div class="position-relative d-none d-xxl-block">
                <div class="shape overflow-hidden text-card-bg">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <div class="card-body mt-n5">
                <div class="position-relative">
                    <img src="/images/users/avatar-2.jpg" alt="" class="rounded-circle thumb-xxl">
                    <div class="position-absolute top-0">
                        <img src="/images/flags/us_flag.jpg" alt="" class="rounded-circle thumb-sm border border-3 border-dark">
                    </div>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="">
                            <h5 class="m-0 fw-bold">Carol Maier</h5>
                            <p class="text-muted mb-0">@carol</p>
                        </div>
                    </div>
                    <div class="col col-md-6 text-end">
                        <div class="text-muted mb-2 d-flex align-items-center"><span class="text-body fw-semibold">Pre.Project :</span> Payment App</div>
                    </div>
                </div>
                <p class="text-muted fs-14 my-3">Below are the contact details for our project client, provided for your reference and communication needs</p>
                <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                <div class="text-body  d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                <div class="mt-3">
                    <a href="{{ route('second', ['pages', 'profile'])}}" class="btn btn-sm btn-primary px-2 d-inline-flex align-items-center"><i class="iconoir-user fs-14 me-1"></i>View Profile</a>
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body p-4 color-bg rounded text-center">
                <h4 class="text-white opacity-75 fs-16 mb-0">Mannat Themes</h4>
            </div><!--end card-body-->
            <div class="position-relative d-none d-xxl-block">
                <div class="shape overflow-hidden text-card-bg">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <div class="card-body mt-n5">
                <div class="position-relative">
                    <img src="/images/users/avatar-3.jpg" alt="" class="rounded-circle thumb-xxl">
                    <div class="position-absolute top-0">
                        <img src="/images/flags/french_flag.jpg" alt="" class="rounded-circle thumb-sm border border-3 border-dark">
                    </div>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="">
                            <h5 class="m-0 fw-bold">Frank Wei</h5>
                            <p class="text-muted mb-0">@frank</p>
                        </div>
                    </div>
                    <div class="col col-md-6 text-end">
                        <div class="text-muted mb-2 d-flex align-items-center"><span class="text-body fw-semibold">Pre.Project :</span> Gaming App</div>
                    </div>
                </div>
                <p class="text-muted fs-14 my-3">Discover the latest trends in eco-friendly living, from zero-waste hacks to renewable energy solutions. Thank you so much.</p>
                <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                <div class="text-body  d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                <div class="mt-3">
                    <a href="{{ route('second', ['pages', 'profile'])}}" class="btn btn-sm btn-primary px-2 d-inline-flex align-items-center"><i class="iconoir-user fs-14 me-1"></i>View Profile</a>
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body p-4 color-bg rounded text-center">
                <h4 class="text-white opacity-75 fs-16 mb-0">Mannat Themes</h4>
            </div><!--end card-body-->
            <div class="position-relative d-none d-xxl-block">
                <div class="shape overflow-hidden text-card-bg">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <div class="card-body mt-n5">
                <div class="position-relative">
                    <img src="/images/users/avatar-4.jpg" alt="" class="rounded-circle thumb-xxl">
                    <div class="position-absolute top-0">
                        <img src="/images/flags/germany_flag.jpg" alt="" class="rounded-circle thumb-sm border border-3 border-dark">
                    </div>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="">
                            <h5 class="m-0 fw-bold">Sandra Lally</h5>
                            <p class="text-muted mb-0">@sandra</p>
                        </div>
                    </div>
                    <div class="col col-md-6 text-end">
                        <div class="text-muted mb-2 d-flex align-items-center"><span class="text-body fw-semibold">Pre.Project :</span> AI App</div>
                    </div>
                </div>
                <p class="text-muted fs-14 my-3">Welcome to GreenEco Solutions, your go-to destination for sustainable living tips, eco-friendly products.</p>
                <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                <div class="text-body  d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                <div class="mt-3">
                    <a href="{{ route('second', ['pages', 'profile'])}}" class="btn btn-sm btn-primary px-2 d-inline-flex align-items-center"><i class="iconoir-user fs-14 me-1"></i>View Profile</a>
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body p-4 color-bg rounded text-center">
                <h4 class="text-white opacity-75 fs-16 mb-0">Mannat Themes</h4>
            </div><!--end card-body-->
            <div class="position-relative d-none d-xxl-block">
                <div class="shape overflow-hidden text-card-bg">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <div class="card-body mt-n5">
                <div class="position-relative">
                    <img src="/images/users/avatar-5.jpg" alt="" class="rounded-circle thumb-xxl">
                    <div class="position-absolute top-0">
                        <img src="/images/flags/russia_flag.jpg" alt="" class="rounded-circle thumb-sm border border-3 border-dark">
                    </div>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="">
                            <h5 class="m-0 fw-bold">James Andrews</h5>
                            <p class="text-muted mb-0">@james</p>
                        </div>
                    </div>
                    <div class="col col-md-6 text-end">
                        <div class="text-muted mb-2 d-flex align-items-center"><span class="text-body fw-semibold">Pre.Project :</span> Video App</div>
                    </div>
                </div>
                <p class="text-muted fs-14 my-3">Take action in your community and beyond with our resources for activism and advocacy. Thank you so much</p>
                <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                <div class="text-body  d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                <div class="mt-3">
                    <a href="{{ route('second', ['pages', 'profile'])}}" class="btn btn-sm btn-primary px-2 d-inline-flex align-items-center"><i class="iconoir-user fs-14 me-1"></i>View Profile</a>
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body p-4 color-bg rounded text-center">
                <h4 class="text-white opacity-75 fs-16 mb-0">Mannat Themes</h4>
            </div><!--end card-body-->
            <div class="position-relative d-none d-xxl-block">
                <div class="shape overflow-hidden text-card-bg">
                    <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                    </svg>
                </div>
            </div>
            <div class="card-body mt-n5">
                <div class="position-relative">
                    <img src="/images/users/avatar-6.jpg" alt="" class="rounded-circle thumb-xxl">
                    <div class="position-absolute top-0">
                        <img src="/images/flags/spain_flag.jpg" alt="" class="rounded-circle thumb-sm border border-3 border-dark">
                    </div>
                </div>
                <div class="row mt-3 align-items-center">
                    <div class="col-auto col-md-6">
                        <div class="">
                            <h5 class="m-0 fw-bold">Shauna Jones</h5>
                            <p class="text-muted mb-0">@shauna</p>
                        </div>
                    </div>
                    <div class="col col-md-6 text-end">
                        <div class="text-muted mb-2 d-flex align-items-center"><span class="text-body fw-semibold">Pre.Project :</span> Audio App</div>
                    </div>
                </div>
                <p class="text-muted fs-14 my-3">Below are the contact details for our project client, provided for your reference and communication needs</p>
                <div class="text-muted mb-2 d-flex align-items-center"><i class="iconoir-mail-out fs-20 me-1"></i><span class="text-body fw-semibold">Email :</span><a href="#" class="text-primary text-decoration-underline">example@example.com</a></div>
                <div class="text-body  d-flex align-items-center"><i class="iconoir-phone fs-20 me-1 text-muted"></i><span class="text-body fw-semibold">Phone :</span> +1 123 456 789</div>
                <div class="mt-3">
                    <a href="{{ route('second', ['pages', 'profile'])}}" class="btn btn-sm btn-primary px-2 d-inline-flex align-items-center"><i class="iconoir-user fs-14 me-1"></i>View Profile</a>
                    <a href="{{ route('second', ['application', 'chat'])}}" class="btn btn-sm btn-outline-primary px-2 d-inline-flex align-items-center"><i class="iconoir-chat-bubble fs-14 me-1"></i>Message</a>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection