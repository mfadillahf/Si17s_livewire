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
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link active" data-bs-toggle="tab" href="#surat-masuk" role="tab" aria-selected="true">Surat Masuk</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-bs-toggle="tab" href="#surat-keluar" role="tab" aria-selected="false">Surat Keluar</a>
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
                    <div class="tab-content">
                        {{-- surat masuk --}}
                        <div class="tab-pane p-3 active" id="surat-masuk" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead class="table-light">
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
                                                    <td>{{ $sM->date }}</td>
                                                    <td>{{ $sM->number }}</td>
                                                    <td>{{ $sM->subject }}</td>
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
                                    {{ $suratMasuk->links() }}
                                </div>
                        </div>
    
                        <!-- Surat Keluar -->
                        <div class="tab-pane p-3" id="surat-keluar" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead class="table-light">
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
                                                    <td>{{ $sK->date }}</td>
                                                    <td>{{ $sK->number }}</td>
                                                    <td>{{ $sK->subject }}</td>
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
                                    {{ $suratKeluar->links() }}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
