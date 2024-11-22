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
                <div class="card-header bg-success">
                    <h6 class="card-title text-white">Update Data Aset</h6>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="update">
                        <div class="row mb-3">
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="nama_aset">Nama Aset*</label>
                                <input type="text" wire:model.defer="name" class="form-control" placeholder="Nama Aset">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="jenis">Jenis</label>
                                <select wire:model.defer="type" class="form-control">
                                    <option value="" disabled selected>Pilih Jenis Aset</option>
                                    <option value="Server">Server</option>
                                    <option value="Router">Router</option>
                                    <option value="Switch">Switch</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                                @error('type') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12 form-group">
                                <label class="form-label" for="serial_number">No. Seri*</label>
                                <input type="text" wire:model.defer="serial_number" class="form-control" placeholder="No. Seri">
                                @error('serial_number') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>
                        <div class="form-footer d-flex justify-content-end mt-4">
                            <a href="{{ route('aset') }}" class="btn btn-secondary me-2">Tutup</a>
                            <button type="submit" class="btn btn-success">
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
                <div class="card-header bg-success">
                    <h6 class="card-title text-white">Foto Aset</h6>
                </div>
                <div class="card-body">
                    <table class="table table-striped sortable mb-0">
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
                <div class="card-header bg-success">
                    <h6 class="card-title text-white">Form Input Foto Aset</h6>
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
                            <button type="submit" class="btn btn-success">
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
