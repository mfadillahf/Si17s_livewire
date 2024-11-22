<div>
    @section('css')
    @vite(['node_modules/mobius1-selectr/dist/selectr.min.css'])
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Kunjungan Ruang Server</h4>
                </div>
                <div class="card-body pt-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link {{ $activeTab == 'Selesai' ? 'active' : '' }}" wire:click="setActiveTab('Selesai')" data-bs-toggle="tab" href="#Selesai" role="tab" aria-selected="true">Selesai</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link {{ $activeTab == 'Masih-Berkunjung' ? 'active' : '' }}" wire:click="setActiveTab('Masih-Berkunjung')" data-bs-toggle="tab" href="#Masih-Berkunjung" role="tab" aria-selected="false">Masih Berkunjung
                                <span wire:poll.2000ms="updateCount" class="badge bg-light text-dark">{{ $countStillVisit }}</span>
                            </a>
                        </li>
                    </ul>
    
                    <!-- Search and Add Document Button -->
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model.defer="keyword" placeholder="Cari Data...">
                        </div>
                        <a href="/ruang-server/kunjungan/create" class="btn btn-primary ms-2" >
                            <img src="/images/barang/box.png" class="img-fluid"> Tambah Kunjungan
                        </a>
                    </div>
    
                    <!-- Tab Content -->
                    <div class="tab-content">
                        {{-- Surat mMsuk --}}
                        <div class="tab-pane p-3 {{ $activeTab == 'Selesai' ? 'active' : '' }}" id="Selesai" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>No.</th>
                                                <th>Instansi</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Keperluan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($kns as $ks)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $ks->institute->name }}</td>
                                                    <td>{{ $ks->entered_at }}</td>
                                                    <td>{{ $ks->exited_at }}</td>
                                                    <td>{{ $ks->description }}</td>
                                                    
                                                    <td>
                                                        <button wire:click ="detail({{ $ks->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center text-muted">Tidak Ada Data Kunjungan.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $kns->links() }}
                                </div>
                        </div>
                        <!-- Surat Keluar -->
                        <div class="tab-pane p-3 {{ $activeTab == 'Masih-Berkunjung' ? 'active' : '' }}" id="Masih-Berkunjung" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>No.</th>
                                                <th>Instansi</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Tanggal Keluar</th>
                                                <th>Keperluan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($mbg as $mb)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $mb->institute->name }}</td>
                                                    <td>{{ $mb->entered_at }}</td>
                                                    <td><button wire:click="checkout({{ $mb->id }})" class="btn btn-warning btn-sm">
                                                        <i class="icofont-ui-calendar"></i> Checkout
                                                    </button></td>
                                                    <td>{{ $mb->description }}</td>
                                                    <td>
                                                        <button  wire:click ="detail({{ $mb->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <button wire:click="openAsetMasuk({{ $mb->id }})" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                                        </button>
                                                        {{-- <button wire:click="openAsetKeluar({{ $mb->id }})" class="btn btn-danger btn-sm">
                                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                        </button> --}}
                                                        <a href="/ruang-server/kunjungan/aset-keluar" class="btn btn-danger btn-sm" >
                                                            <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center text-muted">Tidak Ada Data Kunjungan.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $mbg->links() }}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{-- checkout --}}
@if($showCheckout)
<div wire:ignore.self class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title text-center w-100 large-title">Checkout</h5>
                <button type="button" class="btn-close" wire:click="$set('showCheckout', false)" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exited_at">Tanggal Keluar</label>
                    <input type="datetime-local" id="exited_at" class="form-control" wire:model="checkoutDate">
                    @error('checkoutDate') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" wire:click="$set('showCheckout', false)">Batal</button>
                <button type="button" class="btn btn-warning" wire:click="saveCheckout">Simpan</button>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif



{{-- aset masuk --}}
@if($showAsetMasuk)
    <div wire:ignore.self class="modal fade show" id="create" style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Tambah Aset Masuk</h5>
                    <button type="button" class="btn-close" wire:click="closeAsetMasuk" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='createAsetMasuk'>
                        <div class="mb-3">
                            <label for="nama_aset" class="form-label">Nama Aset</label>
                            <input type="text" id="nama_aset" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Input Nama Aset">
                            @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="jenis_aset" class="form-label">Jenis</label>
                            <select id="jenis_aset" wire:model="type" class="form-select @error('type') is-invalid @enderror">
                                <option value="" disabled selected>Pilih Jenis Aset</option>
                                <option value="Server">Server</option>
                                <option value="Router">Router</option>
                                <option value="Switch">Switch</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            @error('type') <small class="invalid-feedback">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="no_seri" class="form-label">No. Seri</label>
                            <input type="text" id="no_seri" wire:model="serial_number" class="form-control @error('serial_number') is-invalid @enderror" placeholder="Input No. Seri">
                            @error('serial_number') <small class="invalid-feedback">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="foto_aset" class="form-label">Foto Aset</label>
                            <input type="file" id="foto_aset" wire:model="images" multiple class="form-control @error('images') is-invalid @enderror">
                            @error('images') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="modal-footer">
                            <span wire:loading wire:target="images" class="text-muted ms-2">
                                <i class="fas fa-spinner fa-spin"></i> Sedang mengunggah gambar...
                            </span>
                            {{-- <input id="server-visitor-report-id" type="hidden" wire:model=">server_asset_category_id"> --}}
                            <button type="button" class="btn btn-secondary" wire:click="closeAsetMasuk">Close</button>
                            <button type="submit" class="btn btn-primary" wire:loading.attr="disabled" wire:loading.class="disabled">
                                <i class="fas fa-save mr-1"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
@endif






{{-- detail --}}
@if($showDetail)
<div wire:ignore.self class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title text-center w-100">Kunjungan #{{ $vr_id }}</h5>
                <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <table class="table">
                        <tr>
                            <th>Nama Instansi</th>
                            <td>{{ $institute_name }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Masuk</th>
                            <td>{{ $entered_at }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Keluar</th>
                            <td>{{ $exited_at ?? 'Masih Berkunjung' }}</td>
                        </tr>
                        <tr>
                            <th>Keperluan</th>
                            <td>{{ $description }}</td>
                        </tr>
                    </table>
                </div>
                {{-- Daftar Pengunjung --}}
                <div class="mb-3">
                    <div class="bg-primary text-white text-center p-2">Daftar Pengunjung</div>
                    <table class="table table-bordered text-center">
                        <thead class="bg-light">
                            <tr>
                                <th>No. Identitas</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vis as $visitor)
                                <tr>
                                    <td>{{ $visitor['identity_number'] }}</td>
                                    <td>{{ $visitor['name'] }}</td>
                                    <td>{{ $visitor['email'] }}</td>
                                    <td>{{ $visitor['phone_number'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Aset Masuk --}}
                <div class="mb-3">
                    <div class="bg-success text-white text-center p-2">Aset Masuk</div>
                    <table class="table table-bordered text-center">
                        <thead class="bg-light">
                            <tr>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Serial Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($asem as $assetIn)
                                <tr>
                                    <td>{{ $assetIn['name'] }}</td>
                                    <td>{{ $assetIn['type'] }}</td>
                                    <td>{{ $assetIn['serial_number'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{-- Aset Keluar --}}
                <div>
                    <div class="bg-danger text-white text-center p-2">Aset Keluar</div>
                    <table class="table table-bordered text-center">
                        <thead class="bg-light">
                            <tr>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Serial Number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($akar as $assetOut)
                                <tr>
                                    <td>{{ $assetOut['name'] }}</td>
                                    <td>{{ $assetOut['type'] }}</td>
                                    <td>{{ $assetOut['serial_number'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif


    @section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>






{{-- aset Keluar --}}
{{-- @if($showAsetKeluar)
<div wire:ignore.self class="modal fade show" id="create" style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title">Tambah Data Aset Keluar</h5>
                <button type="button" class="btn-close" wire:click="closeAsetKeluar" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="createAsetKeluar">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="multiSelect" class="form-label">Tambah Aset Keluar</label>
                            <!-- Selectr Select -->
                            <select id="multiSelect" wire:model.defer="selectedAsetId" class="form-select selectr" multiple="multiple" wire:ignore>
                                @foreach ($amk as $selectedAm)
                                    <option value="{{ $selectedAm->id }}">{{ $selectedAm->name }} | {{ $selectedAm->type }} | {{ $selectedAm->serial_number }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="tanggal_pemeliharaan" class="form-label">Tanggal Diambil</label>
                            <input class="form-control" type="date" value="" id="example-date-input" wire:model="exited_date">
                            <small class="badge bg-info-subtle text-info">Tanggal Aset Keluar</small>
                        </div>
                    </div>
                
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeAsetKeluar">Close</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-save mr-1"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif --}}


