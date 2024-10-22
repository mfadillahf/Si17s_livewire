<div>
    @section('css')
    @vite(['node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kegiatan LPSE</h4>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="nav nav-pills" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" wire:click href="{{ route('agenda') }}">Daftar Kegiatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" wire:click href="{{ route('kalender') }}">Kalender</a>
                            </li>
                        </ul>
                        <div class="mb-3 d-flex justify-content-end">
                            <div>
                                <input type="text" class="form-control" wire:model.live="keyword" placeholder="Cari Kegiatan....">
                            </div>
                            <button href="#" wire:click.prevent="openCreate" class="btn btn-primary ms-2">
                                <img src="/images/barang/box.png" class="img-fluid"> Tambah Kegiatan
                            </button>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-striped sortable mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width:35%">Nama Kegiatan</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @if ($agendaKegiatan->isEmpty())
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <p class="text-muted">data kosong</p>
                                        </td>
                                    </tr>
                                @else
                                    @foreach ($agendaKegiatan as $agenda)
                                    <tr wire:key="agenda-{{ $agenda->id }}">
                                        <td>{{ $agenda->name }}</td>
                                        <td>{{ $agenda->started_at }}</td>
                                        <td>{{ $agenda->finished_at }}</td>
                                        <td>
                                            <button  wire:click ="detail({{ $agenda->id }})" class="btn btn-sm btn-info">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            <button wire:click ="openEdit({{ $agenda->id }})" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pen-square"></i>
                                            </button>
                                            <button  wire:click.prevent ="openDelete({{ $agenda->id }})" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {{ $agendaKegiatan->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Create --}}
    @if($showCreate)
    <div wire:ignore.self class="modal fade show" id="create" style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Tambah Kegiatan</h5>
                    <button type="button" class="btn-close" wire:click="closeCreate" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='create'>
                        <div class="container-fluid">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Nama Kegiatan</label>
                                    <input type="text" id="nama" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Kegiatan">
                                    @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai Kegiatan</label>
                                    <input class="form-control" type="date" id="started_at" wire:model="started_at">
                                    @error('started_at') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_selesai" class="form-label">Tanggal Selesai Kegiatan</label>
                                    <input class="form-control" type="date" id="finished_at" wire:model="finished_at">
                                    @error('finished_at') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label>Foto Kegiatan</label>
                                    <input type="file" class="form-control text-sm" wire:model="images" multiple>
                                    @error('images') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="description">Deskripsi Kegiatan</label>
                                    <textarea id="description" wire:model.defer="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi"></textarea>
                                    @error('description') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="tagging">Tagging Pegawai</label>
                                    <textarea id="tagging" wire:model.defer="employee_tagging" class="form-control @error('employee_tagging') is-invalid @enderror" placeholder="Tagging Pegawai"></textarea>
                                    @error('tagging') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-end" wire:click="closeCreate">Close</button>
                                <button type="submit" class="btn btn-primary float-end" id="success">
                                    <i class="fas fa-save mr-1"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif




    {{-- edit --}}
    {{-- @if($showEdit)
    <div wire:ignore.self class="modal fade show" id="create" style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title">Tambah Kegiatan</h5>
                    <button type="button" class="btn-close" wire:click="closeCreate" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent='create'>
                        <div class="container-fluid">
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Nama Kegiatan</label>
                                    <input type="text" id="nama" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Kegiatan">
                                    @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai Kegiatan</label>
                                    <input class="form-control" type="date" id="started_at" wire:model="started_at">
                                    @error('started_at') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_selesai" class="form-label">Tanggal Selesai Kegiatan</label>
                                    <input class="form-control" type="date" id="finished_at" wire:model="finished_at">
                                    @error('finished_at') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label>Foto Kegiatan</label>
                                    <input type="file" class="form-control text-sm" wire:model="images" multiple>
                                    @error('images') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="description">Deskripsi Kegiatan</label>
                                    <textarea id="description" wire:model.defer="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi"></textarea>
                                    @error('description') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="tagging">Tagging Pegawai</label>
                                    <textarea id="tagging" wire:model.defer="tagging" class="form-control @error('tagging') is-invalid @enderror" placeholder="Tagging Pegawai"></textarea>
                                    @error('tagging') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-end" wire:click="closeCreate">Close</button>
                                <button type="submit" class="btn btn-primary float-end" id="success">
                                    <i class="fas fa-save mr-1"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-backdrop fade show"></div>
    @endif --}}


    {{-- detail --}}
    @if($showDetail)
    <div wire:ignore.self class="modal fade show" id="exampleModalCenter" style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">Detail Kegiatan</h5>
                    <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <table class="table table-striped ">
                                <tr>
                                    <th>Tanggal</th>
                                    <td>{{ $agenda->updated_at->format('d F Y') }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Kegiatan</th>
                                    <td>{{ $name }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Mulai</th>
                                    <td>{{ $started_at }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Selesai</th>
                                    <td>{{ $finished_at }}</td>
                                </tr>
                                <tr>
                                    <th>Tagging Pegawai</th>
                                    <td>{{ $employee_tagging }}</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="col-md-6 text-center">
                            <h6>Foto Kegiatan:</h6>
                        @if ($agenda) 
                            <div class="d-flex flex-wrap justify-content-center">
                                @foreach ($agenda->images as $image) <!-- Mengakses relasi images -->
                                    <div class="p-2">
                                        <img src="{{ Storage::url($image->file) }}" 
                                            alt="Image" class="img-thumbnail" 
                                            style="max-height: 150px; max-width: 150px;">
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p>Foto tidak tersedia</p>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeDetail">Tutup</button>
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
    @vite(['resources/js/pages/forms-advanced.js'])
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>
