<div>
    @section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Arsip Dokumen</h4>
                </div>
                <div class="card-body pt-0">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link {{ $tab === 'surat-masuk' ? 'active' : '' }}" data-toggle="pill" wire:click="$set('tab', 'surat-masuk')" href="#tab-surat-masuk">Surat Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $tab === 'surat-keluar' ? 'active' : '' }}" data-toggle="pill" wire:click="$set('tab', 'surat-keluar')" href="#tab-surat-keluar">Surat Keluar</a>
                        </li>
                    </ul>
    
                    <!-- Search and Add Document Button -->
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model="keyword" placeholder="Cari Dokumen...">
                        </div>
                        <a href="/arsip/create" class="btn btn-primary ms-2" >
                            <img src="/images/barang/box.png" class="img-fluid"> Tambah Dokumen
                        </a>
                    </div>
    
                    <!-- Tab Content -->
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <!-- Surat Masuk -->
                        <div class="tab-pane fade {{ $tab === 'surat-masuk' ? 'show active' : '' }}" id="tab-surat-masuk" role="tabpanel">
                            @if($tab === 'surat-masuk')
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Surat</th>
                                                <th>Nomor Surat</th>
                                                <th>Perihal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($suratMasuk as $sM)
                                                <tr>
                                                    <td>{{ \Carbon\Carbon::parse($sM->Tanggal_Surat)->format('d F Y') }}</td>
                                                    <td>{{ $sM->Nomor_Surat }}</td>
                                                    <td>{{ $sM->Perihal }}</td>
                                                    <td>
                                                        <button wire:click="edit({{ $sM->id }})" class="btn btn-warning btn-sm">Edit</button>
                                                        <button wire:click="delete({{ $sM->id }})" class="btn btn-danger btn-sm">Hapus</button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center text-muted">Tidak Ada Surat Masuk.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
    
                        <!-- Surat Keluar -->
                        <div class="tab-pane fade {{ $tab === 'surat-keluar' ? 'show active' : '' }}" id="tab-surat-keluar" role="tabpanel">
                            @if($tab === 'surat-keluar')
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Surat</th>
                                                <th>Nomor Surat</th>
                                                <th>Perihal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($suratKeluar as $sK)
                                                <tr>
                                                    <td>{{ \Carbon\Carbon::parse($sK->Tanggal_Surat)->format('d F Y') }}</td>
                                                    <td>{{ $sK->Nomor_Surat }}</td>
                                                    <td>{{ $sK->Perihal }}</td>
                                                    <td>
                                                        <button wire:click="edit({{ $sK->id }})" class="btn btn-warning btn-sm">Edit</button>
                                                        <button wire:click="delete({{ $sK->id }})" class="btn btn-danger btn-sm">Hapus</button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center text-muted">Tidak Ada Surat Keluar.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
</div>
