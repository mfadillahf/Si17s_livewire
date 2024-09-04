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
                        <h4 class="card-title">Contacts</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                        <form class="row g-2">
                            <div class="col-auto">
                                <a class="btn bg-primary-subtle text-primary dropdown-toggle d-flex align-items-center arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" data-bs-auto-close="outside">
                                    <i class="iconoir-filter-alt me-1"></i> Filter
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
                                                New
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" checked id="filter-two">
                                            <label class="form-check-label" for="filter-two">
                                                Active
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" checked id="filter-three">
                                            <label class="form-check-label" for="filter-three">
                                                Inactive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-auto">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBoard"><i class="fa-solid fa-plus me-1"></i> Add Contact</button>
                            </div><!--end col-->
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end card-header-->
            <div class="card-body pt-0">
                <table class="table mb-0 checkbox-all text-nowrap" id="datatable_1">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 16px;">
                                <div class="form-check mb-0 ms-n1">
                                    <input type="checkbox" class="form-check-input" name="select-all" id="select-all">
                                </div>
                            </th>
                            <th class="ps-0">Customer</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Status</th>
                            <th>Source</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck1">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-2.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Andy Timmons</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">dummy@dummy.com</a> </td>
                            <td>(+1) 123 456 789</td>
                            <td><span class="badge bg-secondary-subtle text-secondary">Inactive</span></td>
                            <td>Direct</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck2">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-3.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Jeff Beck</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">fake@dummy.com</a> </td>
                            <td>(+2) 234 567 890</td>
                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                            <td>Direct</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck3">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-4.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Vince Nelson</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">exemple@dummy.com</a> </td>
                            <td>(+3) 123 456 789</td>
                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                            <td>Social</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck4">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-5.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">David Gilmour</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">only@dummy.com</a> </td>
                            <td>(+4) 123 456 789</td>
                            <td><span class="badge bg-secondary-subtle text-secondary">Inactive</span></td>
                            <td>Website</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck5">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-6.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Dianna Smiley</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">dummy@exemple.com</a> </td>
                            <td>(+5) 123 456 789</td>
                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                            <td>Social</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck6">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-7.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Adolfo Hess</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">dummy2dummay@dummy.com</a> </td>
                            <td>(+6) 123 456 789</td>
                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                            <td>Direct</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck7">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-8.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">James Ahern</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">dummy10@dummy.com</a> </td>
                            <td>(+7) 123 456 789</td>
                            <td><span class="badge bg-blue-subtle text-blue me-1">New</span><span class="badge bg-success-subtle text-success">Active</span></td>
                            <td>Website</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck8">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-9.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Simon Young</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">totaldummy@dummy.com</a> </td>
                            <td>(+8) 123 456 789</td>
                            <td><span class="badge bg-secondary-subtle text-secondary">Inactive</span></td>
                            <td>Direct</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck9">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-10.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Robert Lewis</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">Exemple@dummy.com</a> </td>
                            <td>(+9) 123 456 789</td>
                            <td><span class="badge bg-secondary-subtle text-secondary">Inactive</span></td>
                            <td>Social</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck10">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-1.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Erik Brim</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">onlyfake@dummy.com</a> </td>
                            <td>(+10) 123 456 789</td>
                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                            <td>Direct</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck11">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-5.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Kevin Powers</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">exemple@exe.com</a> </td>
                            <td>(+11) 123 456 789</td>
                            <td><span class="badge bg-blue-subtle text-blue">Repeat</span></td>
                            <td>Website</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck12">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-3.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Wendy Keen</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">Exemple@dummy.com</a> </td>
                            <td>(+12) 123 456 789</td>
                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                            <td>Direct</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 16px;">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="check" id="customCheck13">
                                </div>
                            </td>
                            <td class="ps-0">
                                <img src="/images/users/avatar-1.jpg" alt="" class="thumb-md d-inline rounded-circle me-1">
                                <p class="d-inline-block align-middle mb-0">
                                    <span class="font-13 fw-medium">Wendy Keen</span>
                                </p>
                            </td>
                            <td><a href="" class="d-inline-block align-middle mb-0 text-body">Exemple@dummy.com</a> </td>
                            <td>(+13) 123 456 789</td>
                            <td><span class="badge bg-success-subtle text-success">Active</span></td>
                            <td>Website</td>
                            <td class="text-end">
                                <a href="#"><i class="las la-info-circle text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-pen text-secondary fs-18"></i></a>
                                <a href="#"><i class="las la-trash-alt text-secondary fs-18"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection