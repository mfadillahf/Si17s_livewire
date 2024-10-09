<div>

@section('css')
@vite(['node_modules/simple-datatables/dist/style.css'])
@endsection


@section('content')

<div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Kegiatan LPSE</h4>
                </div>
                <div class="card-header">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" wire::navigate href="agenda">Daftar Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" wire::navigate href="agenda-kalender">Kalender</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body pt-0">
                
                    <div class="table-responsive">
                        <table class="table datatable" id="datatable_2">
                            <thead>
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check mb-0 ms-n1">
                                            <input type="checkbox" class="form-check-input" wire:model="selectAll" id="select-all">
                                        </div>
                                    </th>
                                    <th>Nama Kegiatan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Aksi</th>
                                </tr>
                                
                            </thead>
</div>
@endsection

@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection
</div>