@extends('layouts.vertical', ['title' => 'Si17s'])

@section('css')
@vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Jumlah Barang</p>
                        <h3 class="mt-2 mb-0 fw-bold">24k</h3>
                    </div>
                    <!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                            <i class="iconoir-hexagon-dice h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">8.5%</span>
                    New Sessions Today</p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Jumlah Pemeliharaan Barang</p>
                        <h3 class="mt-2 mb-0 fw-bold">00:18</h3>
                    </div>
                    <!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                            <i class="iconoir-clock h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">1.5%</span>
                    Weekly Avg.Sessions</p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Surat Masuk</p>
                        <h3 class="mt-2 mb-0 fw-bold">36.45%</h3>
                    </div>
                    <!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                            <i class="iconoir-percentage-circle h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-danger">8%</span>
                    Up Bounce Rate Weekly</p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Surat Keluar</p>
                        <h3 class="mt-2 mb-0 fw-bold">24k</h3>
                    </div>
                    <!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                            <i class="iconoir-hexagon-dice h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">8.5%</span>
                    New Sessions Today</p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
<!--end col-->

    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Jumlah Troubleshooting</p>
                        <h3 class="mt-2 mb-0 fw-bold">00:18</h3>
                    </div>
                    <!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                            <i class="iconoir-clock h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">1.5%</span>
                    Weekly Avg.Sessions</p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Jumlah Kegiatan</p>
                        <h3 class="mt-2 mb-0 fw-bold">00:18</h3>
                    </div>
                    <!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                            <i class="iconoir-clock h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">1.5%</span>
                    Weekly Avg.Sessions</p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Jumlah Kunjungan</p>
                        <h3 class="mt-2 mb-0 fw-bold">00:18</h3>
                    </div>
                    <!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                            <i class="iconoir-clock h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">1.5%</span>
                    Weekly Avg.Sessions</p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Laporan Selesai</p>
                        <h3 class="mt-2 mb-0 fw-bold">00:18</h3>
                    </div>
                    <!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                            <i class="iconoir-clock h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">1.5%</span>
                    Weekly Avg.Sessions</p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex justify-content-center border-dashed-bottom pb-3">
                    <div class="col-9">
                        <p class="text-dark mb-0 fw-semibold fs-14">Laporan Yang Belum Selesai</p>
                        <h3 class="mt-2 mb-0 fw-bold">00:18</h3>
                    </div>
                    <!--end col-->
                    <div class="col-3 align-self-center">
                        <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                            <i class="iconoir-clock h1 align-self-center mb-0 text-secondary"></i>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <p class="mb-0 text-truncate text-muted mt-3"><span class="text-success">1.5%</span>
                    Weekly Avg.Sessions</p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

</div>

    
    




{{-- Template --}}
<!--end row-->
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Audience Overview</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-calendar fs-5 me-1"></i>
                                This Year<i class="las la-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">This Year</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <div id="audience_overview" class="apex-charts"></div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <p class="text-dark mb-0 fw-semibold fs-14">New Visitors</p>
                        <h2 class="mt-0 mb-0 fw-bold">1,282</h2>
                    </div>
                    <!--end col-->
                    <div class="col-auto align-self-center">
                        <div class="img-group d-flex">
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
                                <img src="/images/users/avatar-3.jpg" alt="avatar" class="thumb-md shadow-sm rounded-circle">
                            </a>
                            <a href class="user-avatar position-relative d-inline-block ms-1">
                                <span class="thumb-md shadow-sm justify-content-center d-flex align-items-center bg-info-subtle rounded-circle fw-semibold fs-6">+6</span>
                            </a>
                        </div>
                        <small class="text-muted">Logined
                            Visitors</small>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div id="visitors_report" class="apex-charts mb-2"></div>
                <button type="button" class="btn btn-primary w-100 btn-lg fs-14">More
                    Detail <i class="fa-solid fa-arrow-right-long"></i>
                </button>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-6">
        <div class="card card-h-100">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Browser Used & Traffic Reports</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive browser_users">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="border-top-0">Browser</th>
                                <th class="border-top-0">Sessions</th>
                                <th class="border-top-0">Bounce Rate</th>
                                <th class="border-top-0">Transactions</th>
                            </tr>
                            <!--end tr-->
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="/images/logos/chrome.png" alt height="24" class="me-2">Chrome</td>
                                <td>10853<small class="text-muted">(52%)</small></td>
                                <td> 52.80%</td>
                                <td>566<small class="text-muted">(92%)</small></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="/images/logos/micro-edge.png" alt height="24" class="me-2">Microsoft
                                    Edge</td>
                                <td>2545<small class="text-muted">(47%)</small></td>
                                <td> 47.54%</td>
                                <td>498<small class="text-muted">(81%)</small></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="/images/logos/in-explorer.png" alt height="24" class="me-2">Internet-Explorer</td>
                                <td>1836<small class="text-muted">(38%)</small></td>
                                <td> 41.12%</td>
                                <td>455<small class="text-muted">(74%)</small></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="/images/logos/opera.png" alt height="24" class="me-2">Opera</td>
                                <td>1958<small class="text-muted">(31%)</small></td>
                                <td> 36.82%</td>
                                <td>361<small class="text-muted">(61%)</small></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><img src="/images/logos/chrome.png" alt height="24" class="me-2">Chrome</td>
                                <td>10853<small class="text-muted">(52%)</small></td>
                                <td> 52.80%</td>
                                <td>566<small class="text-muted">(92%)</small></td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
                    <!--end table-->
                </div>
                <!--end /div-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-6">
        <div class="card card-h-100">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Total Visits</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="border-top-0">Channel</th>
                                <th class="border-top-0">Sessions</th>
                                <th class="border-top-0">Prev.Period</th>
                                <th class="border-top-0">% Change</th>
                            </tr>
                            <!--end tr-->
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href class="text-primary">Organic search</a></td>
                                <td>10853<small class="text-muted">(52%)</small></td>
                                <td>566<small class="text-muted">(92%)</small></td>
                                <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href class="text-primary">Direct</a></td>
                                <td>2545<small class="text-muted">(47%)</small></td>
                                <td>498<small class="text-muted">(81%)</small></td>
                                <td> -17.20% <i class="fas fa-caret-down text-danger font-16"></i></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href class="text-primary">Referal</a></td>
                                <td>1836<small class="text-muted">(38%)</small></td>
                                <td>455<small class="text-muted">(74%)</small></td>
                                <td> 41.12% <i class="fas fa-caret-up text-success font-16"></i></td>

                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href class="text-primary">Email</a></td>
                                <td>1958<small class="text-muted">(31%)</small></td>
                                <td>361<small class="text-muted">(61%)</small></td>
                                <td> -8.24% <i class="fas fa-caret-down text-danger font-16"></i></td>
                            </tr>
                            <!--end tr-->
                            <tr>
                                <td><a href class="text-primary">Social</a></td>
                                <td>1566<small class="text-muted">(26%)</small></td>
                                <td>299<small class="text-muted">(49%)</small></td>
                                <td> 29.33% <i class="fas fa-caret-up text-success"></i></td>
                            </tr>
                            <!--end tr-->
                        </tbody>
                    </table>
                    <!--end table-->
                </div>
                <!--end /div-->
                <p class="m-0 fs-12 fst-italic ps-2 text-muted">Last data updated - 13min ago <a href="#!" class="link-danger ms-1 "><i class="align-middle iconoir-refresh"></i></a></p>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>
<!--end row-->
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Traffic Sources</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-search-user fs-5 me-1"></i>
                                Direct<i class="las la-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Email</a>
                                <a class="dropdown-item" href="#">Referral</a>
                                <a class="dropdown-item" href="#">Direct</a>
                                <a class="dropdown-item" href="#">Organic</a>
                                <a class="dropdown-item" href="#">Campaign</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <div class>
                    <div id="traffic_sources" class="apex-charts d-block w-90 mx-auto"></div>
                    <hr class="hr-dashed border-secondary w-25 mt-0 mx-auto">
                </div>
                <div class="text-center">
                    <h4>Direct Visitors</h4>
                    <p class="text-muted mt-2">This is a
                        simple hero unit, a simple
                        jumbotron-style component</p>
                    <button type="button" class="btn btn-outline-primary px-3 mt-2">More
                        details</button>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-md-6 col-lg-8">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Organic
                            Traffic In World</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icofont-calendar fs-5 me-1"></i>
                                Today<i class="las la-angle-down ms-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">This Year</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-lg-8">
                        <div id="map_2" class style="height:320px"></div>
                    </div>
                    <!--end col-->
                    <div class="col-lg-4 align-self-center">
                        <div class="d-flex align-items-center my-3">
                            <img src="/images/flags/us_flag.jpg" class="thumb-sm align-self-center rounded-circle" alt="...">
                            <div class="flex-grow-1 ms-2">
                                <h5 class="mb-1">35,365</h5>
                                <p class="text-muted mb-0">USA
                                    . Last Month
                                    <span class="text-success">2.5%
                                        <i class="mdi mdi-arrow-up"></i></span>
                                </p>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                        <div class="d-flex align-items-center my-3">
                            <img src="/images/flags/germany_flag.jpg" class="thumb-sm align-self-center rounded-circle" alt="...">
                            <div class="flex-grow-1 ms-2">
                                <h5 class="mb-1">24,865</h5>
                                <p class="text-muted mb-0">Germany
                                    . Last Month
                                    <span class="text-success">1.2%
                                        <i class="mdi mdi-arrow-up"></i></span>
                                </p>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                        <div class="d-flex align-items-center my-3">
                            <img src="/images/flags/spain_flag.jpg" class="thumb-sm align-self-center rounded-circle" alt="...">
                            <div class="flex-grow-1 ms-2">
                                <h5 class="mb-1">18,369</h5>
                                <p class="text-muted mb-0">Spain
                                    . Last Month
                                    <span class="text-success">0.8%
                                        <i class="mdi mdi-arrow-up"></i></span>
                                </p>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                        <div class="d-flex align-items-center my-3">
                            <img src="/images/flags/baha_flag.jpg" class="thumb-sm align-self-center rounded-circle" alt="...">
                            <div class="flex-grow-1 ms-2">
                                <h5 class="mb-1">11,325</h5>
                                <p class="text-muted mb-0">Bahamas
                                    . Last Month
                                    <span class="text-success">2.5%
                                        <i class="mdi mdi-arrow-up"></i></span>
                                </p>
                            </div>
                            <!--end media-body-->
                        </div>
                        <!--end media-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
</div>

@endsection

@section('script')
    @vite(['resources/js/pages/index.init.js'])
@endsection
