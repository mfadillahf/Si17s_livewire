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
                                @forelse($ins as $isi)
                                    <tr>
                                        <td>{{ $isi->name }}</td>
                                        <td>
                                            <button wire:click.prevent="openEdit({{ $isi->id }})" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pen-square"></i>
                                            </button>
                                            <button wire:click="openDelete({{ $isi->id }})" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted">Tidak Ada Data Instansi.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{$ins->links() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>


{{-- edit --}}
    @if($showEdit)
    <div wire:ignore.self class="modal fade show" id="edit" style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title text-white">Form Update Tamu</h5>
                    <button type="button" class="btn-close" wire:click="closeEdit" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='update'>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="institute" class="form-label">Instansi</label>
                                <input type="text" id="institute" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Instansi">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary float-end" wire:click="closeEdit">Close</button>
                            <button type="submit" class="btn btn-warning float-end">
                                <i class="fas fa-pen-square mr-1"></i> Update
                            </button>
                        </div>
                    </form>
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
