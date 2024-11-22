<div>
    @section('css')
        @vite(['node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
        @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h6 class="card-title text-white">Update Kegiatan</h6>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="update">
                        <div class="row mb-3">
                            <div class="col-md-12 form-group">
                                <label class="form-label" for="nama">Nama Kegiatan</label>
                                <input type="text" id="nama" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Kegiatan">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="tanggal_mulai">Tanggal Mulai Kegiatan</label>
                                <input class="form-control" type="date" id="started_at" wire:model="started_at">
                                @error('started_at') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="tanggal_selesai">Tanggal Selesai Kegiatan</label>
                                <input class="form-control" type="date" id="finished_at" wire:model="finished_at">
                                @error('finished_at') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 form-group">
                                <label class="form-label" for="description">Deskripsi Kegiatan</label>
                                <textarea id="description" wire:model.defer="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi Kegiatan"></textarea>
                                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 form-group">
                                <label class="form-label" for="tagging">Tagging Pegawai</label>
                                <textarea id="tagging" wire:model.defer="employee_tagging" class="form-control @error('tagging') is-invalid @enderror" placeholder="Tagging Pegawai"></textarea>
                                @error('tagging') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="form-footer d-flex justify-content-end mt-4">
                            <a href="{{ route('agenda') }}" class="btn btn-secondary me-2">Tutup</a>
                            <button type="submit" class="btn btn-warning">
                                <i class="fas fa-save mr-1"></i> Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h6 class="card-title text-white">Foto Kegiatan</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>No.</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($fileLinks as $index => $file)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <img src="{{ $file['url'] }}" alt="Foto Aset" class="img-fluid" style="max-width: 200px;">
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger btn-sm" wire:click="deleteFile({{ $index }})">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada foto tersedia.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12 col-12">
            <div class="card">
                <div class="card-header bg-warning">
                    <h6 class="card-title text-white">Form Input Foto Kegiatan</h6>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="addFile">
                        <div class="row mb-3">
                            <div class="col-md-12 form-group">
                                <label for="foto_aset">Browse Foto Aset</label>
                                <input type="file" wire:model="newImage" class="form-control">
                                @error('newImage') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="form-footer d-flex justify-content-end">
                            <button type="submit" class="btn btn-warning">
                                <i class="fas fa-upload"></i> Tambahkan Foto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @section('script')
        @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>
