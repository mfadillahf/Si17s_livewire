<div>
    @section('css')
    @vite(['node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-12">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h6 class="card-title text-white">Update Arsip Dokumen</h6>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='update'>
                            <div class="row mb-3">
                                <div class="col-md-12 form-group">
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
                                    <label class="form-label" for="description">Deskripsi Kegiatan</label>
                                    <textarea id="description" wire:model.defer="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi"></textarea>
                                    @error('description') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label class="form-label" for="tagging">Tagging Pegawai</label>
                                    <textarea id="tagging" wire:model.defer="employee_tagging" class="form-control @error('tagging') is-invalid @enderror" placeholder="Tagging Pegawai"></textarea>
                                    @error('tagging') <small class="invalid-feedback">{{ $message }}</small> @enderror
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
                    <div class="card-header">
                        <h5 class="card-title">Update foto Kegiatan</h5>
                    </div>
                        @if(count($fileLinks) > 0)
                            <ul>
                                @foreach ($fileLinks as $images)
                                    <li style="display: flex; align-items: center; margin-bottom: 8px;">
                                        <img src="{{ $images['url'] }}" class="img-thumbnail" alt="Preview Image">
                                        
                                        <button type="button" class="btn btn-danger btn-sm ms-2 d-inline-flex align-items-center" style="padding: 0.2rem 0.4rem;" wire:click="deleteFile('{{ $images['id'] }}')">
                                            <i class="icofont-ui-close"></i>
                                        </button>
                                    </li>                                
                                @endforeach
                            </ul>
                        @else
                            <ul>
                                <p>No images available.</p>
                            </ul>
                        @endif
                </div>
            </div>
        </div>

        {{-- Form Input Berkas --}}
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-2">Form Input Foto Kegiatan</h5>
                        <div class="row mb-3">
                            <div class="col-12 md-12 form-group">
                                <input type="file" wire:model.defer="images" class="form-control" multiple>
                                @error('images') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-warning mt-2" wire:click="addFile">Tambah Foto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
        

    @section('script')
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>
