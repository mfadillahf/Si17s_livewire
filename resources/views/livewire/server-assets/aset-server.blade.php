<div>
    @section('css')
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
                                            {{-- @forelse($rnoa as $rA)
                                                <tr>
                                                    <td>{{ $rA->document_archive_id }}</td>
                                                    <td>{{ $rA->institute }}</td>
                                                    
                                                    <td>
                                                        <button wire:click ="detail({{ $rA->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <a href="/user-aplikasi/edit/{{$rA->id}}" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-pen-square"></i></a>
                                                        <button wire:click="openDelete({{ $rA->id }})" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center text-muted">Tidak Ada Data User.</td>
                                                </tr>
                                            @endforelse --}}
                                        </tbody>
                                    </table>
                                    {{-- {{ $rnoa->links() }} --}}
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
                                            {{-- @forelse($rau as $rN)
                                                <tr>
                                                    <td>{{ $rN->user_identity }}</td>
                                                    <td>{{ $rN->identity_number }}</td>
                                                    <td>{{ $rN->name }}</td>
                                                    <td>{{ $rN->email }}</td>
                                                    <td>{{ $rN->phone_number }}</td>
                                                    <td>
                                                        <button  wire:click ="detail({{ $rN->id }})" class="btn btn-sm btn-info">
                                                            <i class="fas fa-info-circle"></i>
                                                        </button>
                                                        <a href="/user-aplikasi/edit/{{$rN->id}}"  class="btn btn-warning btn-sm">
                                                            <i class="fas fa-pen-square"></i></a>
                                                        <button wire:click="openDelete({{ $rN->id }})" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center text-muted">Tidak Ada Data User.</td>
                                                </tr>
                                            @endforelse --}}
                                        </tbody>
                                    </table>
                                    {{-- {{ $rau->links() }} --}}
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{-- detail --}}
{{-- @if($showDetail)
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
@endif --}}




{{-- delete --}}
{{-- @if($showDelete)
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
@endif --}}

    @section('script')
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>
