@extends('layouts.vertical', ['title' => 'Rizz'])

@section('css')
@vite(['node_modules/simple-datatables/dist/style.css'])
@endsection

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Users Details</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <button class="btn bg-primary-subtle text-primary"><i class="fas fa-plus me-1"></i> Add User</button>
                        <button class="btn btn-primary"><i class="fas fa-plus me-1"></i> Invite User</button>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table mb-0" id="datatable_1">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>ID</th>
                                <th>Roal</th>
                                <th>Last activity</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Unity Pugh</h6>
                                            <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#9958</td>
                                <td><a href="#" class="text-body text-decoration-underline">Manager</a></td>
                                <td>Today, 02:30pm</td>
                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Scott Holland</h6>
                                            <a href="#" class="fs-12 text-primary">exemple@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#3625</td>
                                <td><a href="#" class="text-body text-decoration-underline">Member</a></td>
                                <td>Yesterday, 10:15pm</td>
                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-2.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Karen Savage</h6>
                                            <a href="#" class="fs-12 text-primary">extradummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#9514</td>
                                <td><a href="#" class="text-body text-decoration-underline">Admin</a></td>
                                <td>Today, 02:30pm</td>
                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-3.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Steven Sharp</h6>
                                            <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#9958</td>
                                <td><a href="#" class="text-body text-decoration-underline">Leader</a></td>
                                <td>Today, 02:30pm</td>
                                <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-4.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Teresa Himes</h6>
                                            <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#4545</td>
                                <td><a href="#" class="text-body text-decoration-underline">Sub.Manager</a></td>
                                <td>2 mar 2024, 07:30pm</td>
                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-5.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Ralph Denton</h6>
                                            <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#6325</td>
                                <td><a href="#" class="text-body text-decoration-underline">Manager</a></td>
                                <td>Today, 02:30pm</td>
                                <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Unity Pugh</h6>
                                            <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#9958</td>
                                <td><a href="#" class="text-body text-decoration-underline">Manager</a></td>
                                <td>Today, 02:30pm</td>
                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-1.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Scott Holland</h6>
                                            <a href="#" class="fs-12 text-primary">exemple@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#3625</td>
                                <td><a href="#" class="text-body text-decoration-underline">Member</a></td>
                                <td>Yesterday, 10:15pm</td>
                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-2.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Karen Savage</h6>
                                            <a href="#" class="fs-12 text-primary">extradummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#9514</td>
                                <td><a href="#" class="text-body text-decoration-underline">Admin</a></td>
                                <td>Today, 02:30pm</td>
                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-3.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Steven Sharp</h6>
                                            <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#9958</td>
                                <td><a href="#" class="text-body text-decoration-underline">Leader</a></td>
                                <td>Today, 02:30pm</td>
                                <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-4.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Teresa Himes</h6>
                                            <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#4545</td>
                                <td><a href="#" class="text-body text-decoration-underline">Sub.Manager</a></td>
                                <td>2 mar 2024, 07:30pm</td>
                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-5.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Ralph Denton</h6>
                                            <a href="#" class="fs-12 text-primary">dummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#6325</td>
                                <td><a href="#" class="text-body text-decoration-underline">Manager</a></td>
                                <td>Today, 02:30pm</td>
                                <td><span class="badge rounded text-secondary bg-secondary-subtle">Inactive</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="/images/users/avatar-2.jpg" class="me-2 thumb-md align-self-center rounded" alt="...">
                                        <div class="flex-grow-1 text-truncate">
                                            <h6 class="m-0">Karen Savage</h6>
                                            <a href="#" class="fs-12 text-primary">extradummy@gmail.com</a>
                                        </div><!--end media body-->
                                    </div>
                                </td>
                                <td>#9514</td>
                                <td><a href="#" class="text-body text-decoration-underline">Admin</a></td>
                                <td>Today, 02:30pm</td>
                                <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                <td class="text-end">
                                    <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                    <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection