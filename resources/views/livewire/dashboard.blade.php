@extends('layouts.vertical', ['title' => 'Si17s'])

@section('css')
@vite(['node_modules/jsvectormap/dist/jsvectormap.min.css'])
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
                            <i class="iconoir-box-iso h1 align-self-center mb-0 text-secondary"></i>
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
                            <i class="iconoir-box-iso h1 align-self-center mb-0 text-secondary"></i>
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
                            <i class="iconoir-mail-in h1 align-self-center mb-0 text-secondary"></i>
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
                            <i class="iconoir-mail-out h1 align-self-center mb-0 text-secondary"></i>
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
                            <i class="iconoir-shield-alert h1 align-self-center mb-0 text-secondary"></i>
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
                            <i class="iconoir-percentage-circle h1 align-self-center mb-0 text-secondary"></i>
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
                            <i class="iconoir-community h1 align-self-center mb-0 text-secondary"></i>
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
                            <i class="iconoir-page h1 align-self-center mb-0 text-secondary"></i>
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
                            <i class="iconoir-page h1 align-self-center mb-0 text-secondary"></i>
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

@endsection

@section('script')
    @vite(['resources/js/pages/index.init.js'])
@endsection

