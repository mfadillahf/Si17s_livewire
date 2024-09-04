@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="text-muted fs-16 dropdown-toggle p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">View Detail</a>
                        <a class="dropdown-item" href="#">Clear All</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
                <img src="/images/logos/lang-logo/gdrive.png" class="me-2 align-self-center thumb-xl" alt="...">
                <h5 class="fw-semibold mt-3 fs-14">Google Drive</h5>
                <div class="d-flex justify-content-between my-2">
                    <p class="text-muted mb-0 fs-13 fw-semibold"><span class="text-dark">34 </span>Files</p>
                    <p class="text-muted mb-0 fs-13 fw-semibold"><span class="text-dark">500 </span>GB</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 text-truncate">
                        <div class="d-flex align-items-center">
                            <div class="progress bg-secondary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-secondary" style="width: 38%"></div>
                            </div>
                            <small class="flex-shrink-1 ms-1">38%</small>
                        </div>
                    </div><!--end media body-->
                </div><!--end media-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="text-muted fs-16 dropdown-toggle p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">View Detail</a>
                        <a class="dropdown-item" href="#">Clear All</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
                <img src="/images/logos/lang-logo/dropbox.png" class="me-2 align-self-center thumb-xl" alt="...">
                <h5 class="fw-semibold mt-3 fs-14">Dropbox</h5>
                <div class="d-flex justify-content-between my-2">
                    <p class="text-muted mb-0 fs-13 fw-semibold"><span class="text-dark">68 </span>Files</p>
                    <p class="text-muted mb-0 fs-13 fw-semibold"><span class="text-dark">500 </span>GB</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 text-truncate">
                        <div class="d-flex align-items-center">
                            <div class="progress bg-secondary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-secondary" style="width: 15%"></div>
                            </div>
                            <small class="flex-shrink-1 ms-1">15%</small>
                        </div>
                    </div><!--end media body-->
                </div><!--end media-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="text-muted fs-16 dropdown-toggle p-1 " data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">View Detail</a>
                        <a class="dropdown-item" href="#">Clear All</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
                <img src="/images/logos/lang-logo/onedrive.png" class="me-2 align-self-center thumb-xl" alt="...">
                <h5 class="fw-semibold mt-3 fs-14">Onedrive</h5>
                <div class="d-flex justify-content-between my-2">
                    <p class="text-muted mb-0 fs-13 fw-semibold"><span class="text-dark">192 </span>Files</p>
                    <p class="text-muted mb-0 fs-13 fw-semibold"><span class="text-dark">500 </span>GB</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 text-truncate">
                        <div class="d-flex align-items-center">
                            <div class="progress bg-secondary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-secondary" style="width: 48%"></div>
                            </div>
                            <small class="flex-shrink-1 ms-1">48%</small>
                        </div>
                    </div><!--end media body-->
                </div><!--end media-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="text-muted fs-16 dropdown-toggle p-1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">View Detail</a>
                        <a class="dropdown-item" href="#">Clear All</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
                <img src="/images/logos/lang-logo/server.png" class="me-2 align-self-center thumb-xl" alt="...">
                <h5 class="fw-semibold mt-3 fs-14">Server</h5>
                <div class="d-flex justify-content-between my-2">
                    <p class="text-muted mb-0 fs-13 fw-semibold"><span class="text-dark">81 </span>Files</p>
                    <p class="text-muted mb-0 fs-13 fw-semibold"><span class="text-dark">500 </span>GB</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1 text-truncate">
                        <div class="d-flex align-items-center">
                            <div class="progress bg-secondary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-secondary" style="width: 76%"></div>
                            </div>
                            <small class="flex-shrink-1 ms-1">76%</small>
                        </div>
                    </div><!--end media body-->
                </div><!--end media-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->
<div class="row justify-content-center">
    <div class="col-12">
        <div class="clearfix">
            <div class="btn-group float-end ms-2">
                <button type="button" class="btn btn-secondary me-0 overflow-hidden">
                    Upload File
                    <input type="file" name="file" class="overflow-hidden position-absolute top-0 start-0 opacity-0" />
                </button>
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="las la-angle-down"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="#"><i class="las la-file-upload fs-16 me-1 align-text-bottom"></i> Upload File</a>
                    <a class="dropdown-item" href="#"><i class="las la-cloud-upload-alt fs-16 me-1 align-text-bottom"></i>Upload Folder</a>
                </div>
            </div>
            <ul class="nav nav-tabs my-4" role="tablist">
                <li class="nav-item">
                    <a class="nav-link fw-semibold active py-2" data-bs-toggle="tab" href="#documents" role="tab" aria-selected="true"><i class="fa-regular fa-folder-open me-1"></i> Documents <span class="badge rounded text-blue bg-blue-subtle ms-1">32</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold py-2" data-bs-toggle="tab" href="#images" role="tab" aria-selected="false"><i class="fa-regular fa-image me-1"></i> Images <span class="badge rounded text-blue bg-blue-subtle ms-1">85</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold py-2" data-bs-toggle="tab" href="#audio" role="tab" aria-selected="false"><i class="fa-solid fa-headphones me-1"></i> Audio <span class="badge rounded text-blue bg-blue-subtle ms-1">21</span></a>
                </li>
            </ul>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Files</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="text-body text-decoration-underline">
                                View All
                            </a>
                        </div>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="documents" role="tabpanel">
                        <div class="table-responsive browser_users">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0 text-end">Last Modified</th>
                                        <th class="border-top-0 text-end">Size</th>
                                        <th class="border-top-0 text-end">Members</th>
                                        <th class="border-top-0 text-end">Action</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-blue-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-file-pdf fs-18 align-self-center mb-0 text-blue"></i>
                                            </div>
                                            <a href="#" class="text-body">payment.pdf</a>
                                        </td>
                                        <td class="text-end">18 Jul 2024</td>
                                        <td class="text-end"> 2.3 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-blue-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-file-pdf fs-18 align-self-center mb-0 text-blue"></i>
                                            </div>
                                            <a href="#" class="text-body">statement.pdf</a>
                                        </td>
                                        <td class="text-end">08 Dec 2024</td>
                                        <td class="text-end"> 3.7 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-10.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-blue-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-file-pdf fs-18 align-self-center mb-0 text-blue"></i>
                                            </div>
                                            <a href="#" class="text-body">idcard.pdf</a>
                                        </td>
                                        <td class="text-end">30 Nov 2024</td>
                                        <td class="text-end"> 1.5 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-7.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-blue-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-file-pdf fs-18 align-self-center mb-0 text-blue"></i>
                                            </div>
                                            <a href="#" class="text-body">invoice.pdf</a>
                                        </td>
                                        <td class="text-end">09 Sep 2024</td>
                                        <td class="text-end"> 3.2 MB</td>
                                        <td class="text-end">
                                            -
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-blue-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-file-pdf fs-18 align-self-center mb-0 text-blue"></i>
                                            </div>
                                            <a href="#" class="text-body">tutorial.pdf</a>
                                        </td>
                                        <td class="text-end">14 Aug 2024</td>
                                        <td class="text-end"> 12.7 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-8.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-blue-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-file-pdf fs-18 align-self-center mb-0 text-blue"></i>
                                            </div>
                                            <a href="#" class="text-body">project.pdf</a>
                                        </td>
                                        <td class="text-end">12 Aug 2024</td>
                                        <td class="text-end"> 5.2 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->

                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div>
                    <div class="tab-pane" id="images" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0 text-end">Last Modified</th>
                                        <th class="border-top-0 text-end">Size</th>
                                        <th class="border-top-0 text-end">Members</th>
                                        <th class="border-top-0 text-end">Action</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-danger-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-image fs-18 align-self-center mb-0 text-danger"></i>
                                            </div>
                                            <a href="#" class="text-body">img52315.jpeg</a>
                                        </td>
                                        <td class="text-end">18 Jul 2024</td>
                                        <td class="text-end"> 2.3 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-5.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-danger-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-image fs-18 align-self-center mb-0 text-danger"></i>
                                            </div>
                                            <a href="#" class="text-body">img63695.jpeg</a>
                                        </td>
                                        <td class="text-end">08 Dec 2024</td>
                                        <td class="text-end"> 3.7 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-10.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-danger-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-image fs-18 align-self-center mb-0 text-danger"></i>
                                            </div>
                                            <a href="#" class="text-body">img00021.jpeg</a>
                                        </td>
                                        <td class="text-end">30 Nov 2024</td>
                                        <td class="text-end"> 1.5 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-7.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-danger-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-image fs-18 align-self-center mb-0 text-danger"></i>
                                            </div>
                                            <a href="#" class="text-body">img36251.jpeg</a>
                                        </td>
                                        <td class="text-end">09 Sep 2024</td>
                                        <td class="text-end"> 3.2 MB</td>
                                        <td class="text-end">
                                            -
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-danger-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-image fs-18 align-self-center mb-0 text-danger"></i>
                                            </div>
                                            <a href="#" class="text-body">img362511.jpeg</a>
                                        </td>
                                        <td class="text-end">14 Aug 2024</td>
                                        <td class="text-end"> 12.7 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-2.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-8.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-danger-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-image fs-18 align-self-center mb-0 text-danger"></i>
                                            </div>
                                            <a href="#" class="text-body">img963852.jpeg</a>
                                        </td>
                                        <td class="text-end">12 Aug 2024</td>
                                        <td class="text-end"> 5.2 MB</td>
                                        <td class="text-end">
                                            <div class="img-group d-flex justify-content-end">
                                                <a class="user-avatar position-relative d-inline-block" href="#">
                                                    <img src="/images/users/avatar-1.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-4.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                                <a class="user-avatar position-relative d-inline-block ms-n2" href="#">
                                                    <img src="/images/users/avatar-6.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div>
                    <div class="tab-pane" id="audio" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0 text-end">Last Modified</th>
                                        <th class="border-top-0 text-end">Size</th>
                                        <th class="border-top-0 text-end">Action</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-secondary-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-microphone fs-18 align-self-center mb-0 text-secondary"></i>
                                            </div>
                                            <a href="#" class="text-body">audio52315..</a>
                                        </td>
                                        <td class="text-end">18 Jul 2024</td>
                                        <td class="text-end"> 2.3 MB</td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-secondary-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-microphone fs-18 align-self-center mb-0 text-secondary"></i>
                                            </div>
                                            <a href="#" class="text-body">audio63695..</a>
                                        </td>
                                        <td class="text-end">08 Dec 2024</td>
                                        <td class="text-end"> 3.7 MB</td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-secondary-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-microphone fs-18 align-self-center mb-0 text-secondary"></i>
                                            </div>
                                            <a href="#" class="text-body">audio00021..</a>
                                        </td>
                                        <td class="text-end">30 Nov 2024</td>
                                        <td class="text-end"> 1.5 MB</td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-secondary-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-microphone fs-18 align-self-center mb-0 text-secondary"></i>
                                            </div>
                                            <a href="#" class="text-body">audio36251..</a>
                                        </td>
                                        <td class="text-end">09 Sep 2024</td>
                                        <td class="text-end"> 3.2 MB</td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-secondary-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-microphone fs-18 align-self-center mb-0 text-secondary"></i>
                                            </div>
                                            <a href="#" class="text-body">audio362511..</a>
                                        </td>
                                        <td class="text-end">14 Aug 2024</td>
                                        <td class="text-end"> 12.7 MB</td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="d-inline-flex justify-content-center align-items-center thumb-md bg-secondary-subtle rounded mx-auto me-1">
                                                <i class="fa-solid fa-microphone fs-18 align-self-center mb-0 text-secondary"></i>
                                            </div>
                                            <a href="#" class="text-body">audio963852..</a>
                                        </td>
                                        <td class="text-end">12 Aug 2024</td>
                                        <td class="text-end"> 5.2 MB</td>
                                        <td class="text-end">
                                            <a href="#"><i class="las la-download text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection