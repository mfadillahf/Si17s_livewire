<div>
    @section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Aset Ruang Server</h4>
                </div>
                <div class="card-body pt-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link {{ $activeTab == 'Aset-Masuk' ? 'active' : '' }}" wire:click="setActiveTab('Aset-Masuk')" data-bs-toggle="tab" href="#Aset-Masuk" role="tab" aria-selected="true">Aset Masuk</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link {{ $activeTab == 'Aset-Keluar' ? 'active' : '' }}" wire:click="setActiveTab('Aset-Keluar')" data-bs-toggle="tab" href="#Aset-Keluar" role="tab" aria-selected="false">Aset Keluar</a>
                        </li>
                    </ul>
    
                    <!-- Search and Add Document Button -->
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model.defer="keyword" placeholder="Cari Data...">
                        </div>
                    </div>
    
                    <!-- Tab Content -->
                    <div class="tab-content">
                        {{-- surat masuk --}}
                        <div class="tab-pane p-3 {{ $activeTab == 'Aset-Masuk' ? 'active' : '' }}" id="Aset-Masuk" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jenis</th>
                                                <th>Serial Number</th>
                                                <th>Instansi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($amk as $ak)
                                                <tr>
                                                    <td>{{ $ak->name }}</td>
                                                    <td>{{ $ak->type}}</td>
                                                    <td>{{ $ak->serial_number }}</td>
                                                    <td>{{ $ak->serverAssetFlows->first()->serverVisitorReport->institute->name ?? 'N/A' }}</td>
                                                    
                                                    <td>
                                                        <button wire:click ="detail({{ $ak->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <a href="/ruang-server/aset/{{$ak->id}}" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-pen-square"></i></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center text-muted">Tidak Ada Data User.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $amk->links() }}
                                </div>
                        </div>
    
                        <!-- Surat Keluar -->
                        <div class="tab-pane p-3 {{ $activeTab == 'Aset-Keluar' ? 'active' : '' }}" id="Aset-Keluar" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jenis</th>
                                                <th>Serial Number</th>
                                                <th>Instansi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($akr as $ar)
                                                <tr>
                                                    <td>{{ $ar->name }}</td>
                                                    <td>{{ $ar->type}}</td>
                                                    <td>{{ $ar->serial_number }}</td>
                                                    <td>{{ $ar->serverAssetFlows->first()->serverVisitorReport->institute->name ?? 'N/A' }}</td>
                                                    <td>
                                                        <button  wire:click ="detail({{ $ar->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <a href="/ruang-server/aset/{{$ar->id}}"  class="btn btn-warning btn-sm">
                                                            <i class="fas fa-pen-square"></i></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center text-muted">Tidak Ada Data User.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $akr->links() }}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{-- detail --}}
@if($showDetail)
<div wire:ignore.self class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">Detail Aset</h5>
                <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-striped">
                    <tr>
                        <th>Nama Aset</th>
                        <td>{{ $name }}</td>
                    </tr>
                    <tr>
                        <th>Jenis</th>
                        <td>{{ $type }}</td>
                    </tr>
                    <tr>
                        <th>No. Seri</th>
                        <td>{{ $serial_number }}</td>
                    </tr>
                    <tr>
                        <th>Instansi</th>
                        <td>{{ $institute_name }}</td>
                    </tr>
                    <tr>
                        <th>Foto Aset</th>
                        <td>
                            @if($images)
                                <div class="mb-3">
                                    <div class="text-center mb-2">Gambar Aset</div>
                                    <div class="d-flex justify-content-center">
                                        @foreach ($images as $image)
                                            <img src="{{ asset('storage/' . $image->path) }}" alt="Gambar Aset" class="img-thumbnail m-1" style="max-width: 150px;">
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" wire:click="closeDetail">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif



    @section('script')
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>
