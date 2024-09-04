@extends('layouts.vertical', ['title' => 'Rizz'])

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Basic Example</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table  mb-0 table-centered">
                        <thead class="table-light">
                            <tr>
                                <th>Compny</th>
                                <th>Bill</th>
                                <th>Average Bill</th>
                                <th>Paid Bill</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="/images/logos/lang-logo/chatgpt.png" alt="" class="rounded-circle thumb-md me-1 d-inline">
                                    Micromin
                                </td>
                                <td>4</td>
                                <td>$250</td>
                                <td>$800</td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="/images/logos/lang-logo/nextjs.png" alt="" class="rounded-circle thumb-md me-1 d-inline">
                                    ZZ Diamond
                                </td>
                                <td>2</td>
                                <td>$180</td>
                                <td>$400</td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="/images/logos/lang-logo/reactjs.png" alt="" class="rounded-circle thumb-md me-1 d-inline">
                                    Dairy Sweet
                                </td>
                                <td>6</td>
                                <td>$210</td>
                                <td>$500</td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="/images/logos/lang-logo/symfony.png" alt="" class="rounded-circle thumb-md me-1 d-inline">
                                    Corner Tea
                                </td>
                                <td>3</td>
                                <td>$80</td>
                                <td>$350</td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Bordered Table</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table table-bordered mb-0 table-centered">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th>Order Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#124781</td>
                                <td>25/11/2018</td>
                                <td>$321</td>
                                <td><span class="badge bg-success">Approved</span></td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#542136</td>
                                <td>19/11/2018</td>
                                <td>$227</td>
                                <td><span class="badge bg-success">Approved</span></td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#234578</td>
                                <td>11/10/2018</td>
                                <td>$442</td>
                                <td><span class="badge bg-danger">Rejected</span></td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>#951357</td>
                                <td>03/12/2018</td>
                                <td>$625</td>
                                <td><span class="badge bg-success">Approved</span></td>
                                <td class="text-end">
                                    <div class="dropdown d-inline-block">
                                        <a class="dropdown-toggle arrow-none" id="dLabel11" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <i class="las la-ellipsis-v fs-20 text-muted"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dLabel11">
                                            <a class="dropdown-item" href="#">Creat Project</a>
                                            <a class="dropdown-item" href="#">Open Project</a>
                                            <a class="dropdown-item" href="#">Tasks Details</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Striped Rows</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Contact No</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="/images/users/avatar-3.jpg" alt="" class="rounded-circle thumb-md me-1 d-inline"> Aaron Poulin</td>
                                <td>Aaron@example.com</td>
                                <td>+21 21547896</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="/images/users/avatar-4.jpg" alt="" class="rounded-circle thumb-md me-1 d-inline"> Richard Ali</td>
                                <td>Richard@example.com</td>
                                <td>+41 21547896</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="/images/users/avatar-5.jpg" alt="" class="rounded-circle thumb-md me-1 d-inline"> Juan Clark</td>
                                <td>Juan@example.com</td>
                                <td>+65 21547896</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="/images/users/avatar-6.jpg" alt="" class="rounded-circle thumb-md me-1 d-inline"> Albert Hull</td>
                                <td>Albert@example.com</td>
                                <td>+88 21547896</td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Table Head Options</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge bg-transparent border border-success text-success">Business</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge bg-transparent border border-warning text-warning">Personal</span></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge bg-transparent border border-danger text-danger">Disabled</span></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Mark</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge bg-transparent border border-success text-success">Business</span></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Jacob</td>
                                <td>XYZ@Example.com</td>
                                <td><span class="badge bg-transparent border border-warning text-warning">Personal</span></td>
                            </tr>
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Hoverable Rows</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Dark Table</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table table-dark mb-0">
                        <thead>
                            <tr>
                                <th class="rounded-bottom-0">#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th class="rounded-bottom-0">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table><!--end /table-->
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Contextual Classes</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive-sm">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-primary">
                                <th scope="row">1</th>
                                <td class="">Mark</td>
                                <td class="">Otto</td>
                                <td class="">@mdo</td>
                            </tr>
                            <tr class="">
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr class="table-secondary">
                                <th scope="row">3</th>
                                <td class="">Larry</td>
                                <td class="">the Bird</td>
                                <td class="">@twitter</td>
                            </tr>
                            <tr class="">
                                <th scope="row">4</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr class="table-success">
                                <th scope="row">5</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr class="">
                                <th scope="row">6</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">7</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr class="">
                                <th scope="row">8</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr class="table-warning">
                                <th scope="row">9</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr class="">
                                <th scope="row">10</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Captions Table</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive-sm">
                    <table class="table mb-0">
                        <caption>List of users</caption>
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->

        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Small Table</h4>
                    </div><!--end col-->
                </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive-sm">
                    <table class="table table-sm mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table><!--end /table-->
                </div><!--end /tableresponsive-->
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!--end col-->
</div><!--end row-->

@endsection