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
                            <a class="nav-link {{ $activeTab == 'surat-masuk' ? 'active' : '' }}" wire:click="setActiveTab('surat-masuk')" data-bs-toggle="tab" href="#surat-masuk" role="tab" aria-selected="true">Surat Masuk</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link {{ $activeTab == 'surat-keluar' ? 'active' : '' }}" wire:click="setActiveTab('surat-keluar')" data-bs-toggle="tab" href="#surat-keluar" role="tab" aria-selected="false">Surat Keluar</a>
                        </li>
                    </ul>
    
                    <!-- Search and Add Document Button -->
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model.defer="keyword" placeholder="Cari Dokumen...">
                        </div>
                        <a href="/arsip/create" class="btn btn-primary ms-2" >
                            <img src="/images/barang/box.png" class="img-fluid"> Tambah Dokumen
                        </a>
                    </div>
    
                    <!-- Tab Content -->
                    <div class="tab-content">
                        {{-- surat masuk --}}
                       <div class="tab-pane p-3 {{ $activeTab == 'surat-masuk' ? 'active' : '' }}" id="surat-masuk" role="tabpanel">
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
                                            @forelse($srtmsk as $sM)
                                                <tr>
                                                    <td>{{ $sM->date }}</td>
                                                    <td>{{ $sM->number }}</td>
                                                    <td>{{ $sM->subject }}</td>
                                                    <td>
                                                        <button wire:click ="detail({{ $sM->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <a href="/arsip/edit/{{$sM->id}}" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-pen-square"></i></a>
                                                        <button wire:click="openDelete({{ $sM->id }})" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center text-muted">Tidak Ada Surat Masuk.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $srtmsk->links() }}
                                </div>
                        </div>
    
                        <!-- Surat Keluar -->
                        <div class="tab-pane p-3 {{ $activeTab == 'surat-keluar' ? 'active' : '' }}" id="surat-keluar" role="tabpanel">
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
                                            @forelse($srtklr as $sK)
                                                <tr>
                                                    <td>{{ $sK->date }}</td>
                                                    <td>{{ $sK->number }}</td>
                                                    <td>{{ $sK->subject }}</td>
                                                    <td>
                                                        <button  wire:click ="detail({{ $sK->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <a href="/arsip/edit/{{$sK->id}}"  class="btn btn-warning btn-sm">
                                                            <i class="fas fa-pen-square"></i></a>
                                                        <button wire:click="openDelete({{ $sK->id }})" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4" class="text-center text-muted">Tidak Ada Surat Keluar.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $srtklr->links() }}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{-- detail --}}
@if($showDetail)
<div wire:ignore.self class="modal fade show"  style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">Detail Dokumen</h5>
                <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-md-6">
                        <table class="table table-striped">
                            <tr>
                                <th>Perihal</th>
                                <td>{{ $subject }}</td>
                            </tr>
                            <tr>
                                <th>No. Surat</th>
                                <td>{{ $number }}</td>
                            </tr>

                            {{-- Conditional fields based on document type --}}
                            @if($document_id == '1')
                                <tr>
                                    <th>Pengirim</th>
                                    <td>{{ $objective }}</td> <!-- Field for Surat Masuk -->
                                </tr>
                            @elseif($document_id == '2')
                                <tr>
                                    <th>Tujuan</th>
                                    <td>{{ $objective }}</td> <!-- Field for Surat Keluar -->
                                </tr>
                            @endif

                            <tr>
                                <th>Tanggal Surat</th>
                                <td>{{ $date ? $date->format('d F Y') : '-' }}</td>
                            </tr>
                            
                            <tr>
                                <th>Keterangan Surat</th>
                                <td>{{ $description }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-6 text-center">
                        <h6>Berkas Surat </h6>
                        @if(count($fileLinks) > 0)
                            <ul style="list-style: none; padding: 0; text-align: center;">
                                @foreach ($fileLinks as $file)
                                    <li style="margin-bottom: 8px;">
                                        <a href="{{ $file['url'] }}" target="_blank"> {{ $file['name'] }}</a>
                                    </li>                                
                                @endforeach
                            </ul>
                        @else
                            <ul>
                                <p>File tidak Tersedia.</p>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif



{{-- delete --}}
@if($showDelete)
<div wire:ignore.self class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h6 class="modal-title m-0 text-white" id="exampleModalDanger1">Konfirmasi</h6>
                <button type="button" class="btn-close" wire:click="closeDelete" aria-label="Close"></button>
            </div><!--end modal-header-->
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3 text-center align-self-center">
                        <img src="/images/extra/card/litter.png" alt="Warning" class="img-fluid">
                    </div><!--end col-->
                    <div class="col-lg-9">
                        <h5>Anda yakin ingin menghapus data ini?</h5>
                        <span class="badge bg-light text-dark">Terakhir diupdate: {{ $lastUpdatedDate }}</span>
                        <div class="mt-3">
                            <strong class="text-danger ms-1">*aksi tidak bisa dibatalkan setelah diproses</strong>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end modal-body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" wire:click="closeDelete">Cancel</button>
                <button id="warningConfirm" type="button" class="btn btn-danger btn-sm" wire:click.prevent="delete" id="warning">Delete</button>
            </div><!--end modal-footer-->
        </div><!--end modal-content-->
    </div><!--end modal-dialog-->
</div>

<div class="modal-backdrop fade show">
</div>
@endif

    @section('script')
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>
