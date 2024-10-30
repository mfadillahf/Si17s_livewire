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
                            <a class="nav-link {{ $activeTab == 'Non-Auditor' ? 'active' : '' }}" wire:click="setActiveTab('Non-Auditor')" data-bs-toggle="tab" href="#Non-Auditor" role="tab" aria-selected="true">Non-Auditor</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link {{ $activeTab == 'Auditor' ? 'active' : '' }}" wire:click="setActiveTab('Auditor')" data-bs-toggle="tab" href="#Auditor" role="tab" aria-selected="false">Auditor</a>
                        </li>
                    </ul>
    
                    <!-- Search and Add Document Button -->
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model.defer="keyword" placeholder="Cari User...">
                        </div>
                        <a href="/user-aplikasi/create" class="btn btn-primary ms-2" >
                            <img src="/images/barang/box.png" class="img-fluid"> Tambah Data User Aplikasi
                        </a>
                    </div>
    
                    <!-- Tab Content -->
                    <div class="tab-content">
                        {{-- surat masuk --}}
                       <div class="tab-pane p-3 {{ $activeTab == 'Non-Auditor' ? 'active' : '' }}" id="Non-Auditor" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>User ID</th>
                                                <th>NIP/NIK</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Telepon</th>
                                                <th>Jenis User</th>
                                                <th>Jenis Aplikasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($noa as $nA)
                                                <tr>
                                                    <td>{{ $nA->user_identity }}</td>
                                                    <td>{{ $nA->identity_number }}</td>
                                                    <td>{{ $nA->name }}</td>
                                                    <td>{{ $nA->email }}</td>
                                                    <td>{{ $nA->phone_number }}</td>
                                                    <td>{{ $nA->userType->name }}</td>
                                                    <td>{{ $nA->reportCategory->name }}</td>
                                                    <td>
                                                        <button wire:click ="detail({{ $nA->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <a href="/user-aplikasi/edit/{{$nA->id}}" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-pen-square"></i></a>
                                                        <button wire:click="openDelete({{ $nA->id }})" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="8" class="text-center text-muted">Tidak Ada Data User.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $noa->links() }}
                                </div>
                        </div>
    
                        <!-- Surat Keluar -->
                        <div class="tab-pane p-3 {{ $activeTab == 'Auditor' ? 'active' : '' }}" id="Auditor" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-striped sortable mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>User ID</th>
                                                <th>NIP/NRP</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Telepon</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($au as $auD)
                                                <tr>
                                                    <td>{{ $auD->user_identity }}</td>
                                                    <td>{{ $auD->identity_number }}</td>
                                                    <td>{{ $auD->name }}</td>
                                                    <td>{{ $auD->email }}</td>
                                                    <td>{{ $auD->phone_number }}</td>
                                                    <td>
                                                        <button  wire:click ="detail({{ $auD->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <a href="/user-aplikasi/edit/{{$auD->id}}"  class="btn btn-warning btn-sm">
                                                            <i class="fas fa-pen-square"></i></a>
                                                        <button wire:click="openDelete({{ $auD->id }})" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center text-muted">Tidak Ada Data User.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                    {{ $au->links() }}
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
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title text-center w-100 large-title">{{ $name }}</h5>
                <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped text-center">
                            <tr>
                                <th>User ID</th>
                                <td>{{ $user_identity }}</td>
                            </tr>
                            <tr>
                                <th>{{ $is_auditor == '0' ? 'NIP/NIK' : 'NIP/NRP' }}</th>
                                <td>{{ $identity_number }}</td>
                            </tr>
                            <tr>
                                <th>Nama</th>
                                <td>{{ $name }}</td>
                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <td>{{ $email }}</td>
                            </tr>
                            <tr>
                                <th>Telpon</th>
                                <td>{{ $phone_number }}</td>
                            </tr>
                            @if($is_auditor == '0')
                                <tr>
                                    <th>Jenis User</th>
                                    <td>{{ $nA->userType->name }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Aplikasi</th>
                                    <td>{{ $nA->reportCategory->name }}</td>
                                </tr>
                            @endif
                        </table>
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
