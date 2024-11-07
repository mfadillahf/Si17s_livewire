<div>
    @section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Instansi</h4>
                </div>
                <div class="card-body pt-0">
    
                    <!-- Search and Add Document Button -->
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model.defer="keyword" placeholder="Cari Instansi...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped sortable mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @forelse($dataUser as $dU)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dU->name }}</td>
                                        <td>{{ $dU->email }}</td>
                                        <td>{{ $dU->roles?->pluck('name')->implode(', ') }}</td>
                                        <td>
                                            <button wire:click ="openPassword({{ $dU->id }})" class="btn btn-sm btn-info">
                                                <i class="icofont-ui-reply"></i>
                                            </button>
                                            <a href="/data-user/edit/{{$dU->id}}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-pen-square"></i></a>
                                            <button wire:click="openDelete({{ $dU->id }})" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">Tidak Ada Data User.</td>
                                    </tr>
                                @endforelse --}}
                            </tbody>
                        </table>
                        {{-- {{ $dataUser->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- reset --}}
    {{-- @if($showGanti)
    <div wire:ignore.self class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h6 class="modal-title m-0">Konfirmasi</h6>
                    <button type="button" class="btn-close" wire:click="closePassword" aria-label="Close"></button>
                </div><!--end modal-header-->
                <div class="modal-body text-center">
                    <img src="/images/extra/card/infomax.png" alt="Warning" class="img-fluid mb-3" style="width: 80px;">
                    <h5>Apakah kamu yakin?</h5>
                    <p>*Setelah direset, kata sandi diperbaharui menjadi <strong class="text-danger">123456</strong></p>
                </div><!--end modal-body-->
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary btn-sm" wire:click="closePassword">Cancel</button>
                    <button id="warningConfirm" type="button" class="btn btn-info btn-sm" wire:click.prevent="gantiPassword">Reset</button>
                </div><!--end modal-footer-->
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
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
