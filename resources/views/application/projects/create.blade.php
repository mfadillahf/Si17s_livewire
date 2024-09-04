@extends('layouts.vertical', ['title' => 'Rizz'])

@section('css')
    @vite(['node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="row g-0 h-100">
                    <div class="col-lg-7 border-end">
                        <h4 class="card-title fs-16 mb-0 pt-3 ps-4">Create Project</h4>

                        <form class="p-4 pt-3">
                            <div class="form-group mb-2 mb-lg-1">
                                <label for="projectName" class="form-label">Project Name :</label>
                                <input type="text" class="form-control" id="projectName" aria-describedby="emailHelp" placeholder="Enter project name">
                            </div><!--end form-group-->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-3 col-6 mb-2 mb-lg-1">
                                        <label class="form-label mt-2" for="pro-start-date">Start Date</label>
                                        <input type="text" class="form-control" name="startdate" id="pro-start-date" placeholder="Enter start date">
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-6 mb-2 mb-lg-1">
                                        <label class="form-label mt-2" for="pro-end-date">End Date</label>
                                        <input type="text" class="form-control" name="enddate" id="pro-end-date" placeholder="Enter end date">
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-6 mb-2 mb-lg-1">
                                        <label class="form-label mt-2" for="pro-rate">Rate</label>
                                        <input type="text" class="form-control" id="pro-rate" placeholder="Enter rate">
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-6 mb-2 mb-lg-1">
                                        <label class="form-label mt-2" for="pro-price-type">Price Type</label>
                                        <select class="form-select">
                                            <option>Hourly</option>
                                            <option>Daily</option>
                                            <option>Fix</option>
                                        </select>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end form-group-->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 mb-2 mb-lg-1">
                                        <label class="form-label mt-2">Required</label>
                                        <select class="form-select">
                                            <option>--Select--</option>
                                            <option>UI/UX Design</option>
                                            <option>Payment System </option>
                                            <option>Android 10</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-6">
                                        <label class="form-label mt-2">Invoice Time</label>
                                        <select class="form-select">
                                            <option>30 Day</option>
                                            <option>3 Month</option>
                                            <option>1 Year</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class="col-lg-3 col-6">
                                        <label class="form-label mt-2">Priority</label>
                                        <select class="form-select">
                                            <option>-- select --</option>
                                            <option>High</option>
                                            <option>Medium</option>
                                            <option>Low</option>
                                        </select>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end form-group-->
                            <div class="form-group mb-3">
                                <label class="form-label mt-2" for="pro-message">Message</label>
                                <textarea class="form-control" rows="5" id="pro-message" placeholder="writing here.."></textarea>
                            </div><!--end form-group-->

                            <button type="submit" class="btn btn-primary">Create project</button>
                            <button type="button" class="btn btn-danger">Cancel</button>
                        </form> <!--end form-->
                    </div><!--end col-->
                    <div class="col-lg-5 align-self-center">
                        <form class="p-4">
                            <div class="form-group">
                                <div class="d-flex align-items-center">
                                    <img src="/images/logos/lang-logo/gitlab.png" alt="" class="thumb-xxl rounded me-3">
                                    <div class="flex-grow-1 text-truncate">
                                        <label class="btn btn-primary text-light">
                                            Change Avatar <input type="file" hidden>
                                        </label>
                                    </div><!--end media body-->
                                </div>

                            </div><!--end form-group-->
                            <h5 class="fw-normal my-3 lh-lg">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised.</h5>
                            <div class="form-group">
                                <label class="form-label" for="team-leader">Project team members</label>
                                <div class="img-group d-flex justify-content-start">
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
                                        <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+32</span>
                                    </a>
                                </div>
                                <input id="add-member" type="file" name="files[]" multiple style='display: none;'>
                            </div><!--end form-group-->
                            <div class="p-3  border-info border-dashed bg-info-subtle  mt-3 rounded">
                                <div class="row d-flex justify-content-center">
                                    <div class="col">
                                        <div class=" ">
                                            <a href="#" class="fw-bold me-1 text-info">You've almost reached your goal</a> 75% of your goals are completed just complate 25% of remaining goals to achieve your target.
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-auto align-self-center">
                                        <span class="badge rounded text-info bg-transparent border border-info mb-2 p-1">Last Created Project</span>
                                        <p class="text-dark  fw-semibold fs-13">15 Aug 2024, AM-10:15</p>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </form>

                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
@vite(['resources/js/pages/projects-create.init.js'])
@endsection