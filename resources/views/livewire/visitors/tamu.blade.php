<div>
    @section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Tamu Ruang Server</h4>
                </div>
                <div class="card-body pt-0">
    
                    <!-- Search and Add Document Button -->
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model.defer="keyword" placeholder="Cari Tamu...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped sortable mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>No. </th>
                                    <th>No. Identitas</th>
                                    <th>Nama</th>
                                    <th>No. Telpon</th>
                                    <th>Email</th>
                                    <th>Instansi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($dt as $dT)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $dT->identity_number }}</td>
                                        <td>{{ $dT->name }}</td>
                                        <td>{{ $dT->phone_number }}</td>
                                        <td>{{ $dT->email }}</td>
                                        <td>{{ $dT->institute->name }}</td>

                                        <td>
                                            <button wire:click ="detail({{ $dT->id }})" class="btn btn-sm btn-info">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button wire:click.prevent="openEdit({{ $dT->id }})" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pen-square"></i>
                                            </button>
                                            <button wire:click="openDelete({{ $dT->id }})" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center text-muted">Tidak Ada Data Tamu.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $dt->links() }}
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
                <h5 class="modal-title">Detail Identitas {{$name}} </h5>
                <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <tr>
                                <th>No. Identitas</th>
                                <td>{{ $identity_number }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Identitas </th>
                                <td>{{ $identity_type }}</td>
                            </tr>

                            <tr>
                                <th>Nama</th>
                                <td>{{ $name }}</td>
                            </tr>

                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $sex }}</td>
                            </tr>
                            
                            <tr>
                                <th>E-mail</th>
                                <td>{{ $email }}</td>
                            </tr>

                            <tr>
                                <th>No. Telpon</th>
                                <td>{{ $phone_number }}</td>
                            </tr>

                            <tr>
                                <th>Instansi</th>
                                <td>{{ $institute->name }}</td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif




 {{-- modal Edit --}}
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
                        <div class="col-md-6">
                            <label for="identity_number" class="form-label">No. Identitas</label>
                            <input type="text" id="identity_number" wire:model="identity_number" class="form-control @error('identity_number') is-invalid @enderror" placeholder="No. Identitas">
                            @error('identity_number') <small class="invalid-feedback">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="identity_type" class="form-label">Jenis Identitas</label>
                            <select class="form-select" id="identity_type" wire:model="identity_type" class="form-control @error('identity_type') is-invalid @enderror">
                                <option value="" disabled selected>Pilih Jenis Identitas</option>
                                <option value="KTP">KTP</option>
                                <option value="SIM">SIM</option>
                                <option value="Paspor">Paspor</option>
                            </select>
                            @error('identity_type') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" id="name" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama">
                            @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="sex" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" id="sex" wire:model="sex" class="form-control @error('sex') is-invalid @enderror">
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('sex') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" id="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail">
                            @error('email') <small class="invalid-feedback">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="phone_number" class="form-label">No. Telepon</label>
                            <input type="text" id="phone_number" wire:model="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="No. Telepon">
                            @error('phone_number') <small class="invalid-feedback">{{ $message }}</small> @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="instansi" class="form-label">Instansi</label>
                            <select class="form-select" id="instansi" wire:model="selectedInstitute" class="form-control @error('selectedInstitute') is-invalid @enderror">
                                <option value="" disabled selected>Pilih Instansi</option>
                                @foreach($institutes as $ins)
                                    <option value="{{ $ins->id }}">{{ $ins->name }}</option>
                                @endforeach
                            </select>
                            @error('selectedInstitute') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea id="address" wire:model="address" class="form-control @error('address') is-invalid @enderror" placeholder="Alamat"></textarea>
                            @error('address') <small class="invalid-feedback">{{ $message }}</small> @enderror
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
