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
                        <h6 class="card-title text-white">Update Pendaftaran Penyedia</h6>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='update'>
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="tanggal_registrasi">Tanggal Pendaftaran*</label>
                                    <input class="form-control" type="date" wire:model="date">
                                    @error('date') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="npwp">NPWP*</label>
                                    <input type="text" wire:model.defer="npwp" class="form-control" placeholder="NPWP">
                                    @error('npwp') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="perusahaan">Nama Perusahaan/Perorangan*</label>
                                    <input type="text" wire:model.defer="company_name" class="form-control" placeholder="Perusahaan">
                                    @error('company_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="direktur">Nama Direktur/Perorangan*</label>
                                    <input type="text" wire:model.defer="directur_name" class="form-control" placeholder="Direktur">
                                    @error('directur_name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
        

                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="nomor_induk">No.KTP Direktur/Perorangan*</label>
                                    <input type="text" wire:model.defer="directur_identity_number" class="form-control" placeholder="NIK">
                                    @error('directur_identity_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="email">Email Penyedia/Perorangan*</label>
                                    <input type="text" wire:model.defer="email" class="form-control" placeholder="example@gmail.com">
                                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="no_hp">Telepon/No.HP*</label>
                                    <input type="text" wire:model.defer="phone_number" class="form-control" placeholder="08xxx">
                                    @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            <div class="form-footer d-flex justify-content-end mt-4">
                                <a href="{{ route('provider') }}" class="btn btn-secondary me-2">Tutup</a>
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
                        <h5 class="card-title">Kelengkapan Dokumen</h5>
                    </div>
                        @if(count($fileLinks) > 0)
                            <ul>
                                @foreach ($fileLinks as $file)
                                    <li style="display: flex; align-items: center; margin-bottom: 8px;">
                                        <a href="{{ $file['url'] }}" target="_blank"> {{ $file['name'] }}</a>
                                        {{-- icon hapus --}}
                                        <button type="button" class="btn btn-danger btn-sm ms-2 d-inline-flex align-items-center" style="padding: 0.2rem 0.4rem;" wire:click="deleteFile('{{ $file['id'] }}')">
                                            <i class="icofont-ui-close"></i>
                                        </button>
                                    </li>                                
                                @endforeach
                            </ul>
                        @else
                            <ul>
                                <p>No files available.</p>
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
                        <h5 class="card-title mb-2">Form Input Kelengkapan Dokumen</h5>
                        <div class="row mb-3">
                            <div class="col-12 md-12 form-group">
                                <input type="file" wire:model.defer="berkas" class="form-control">
                                @error('berkas') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-warning mt-2" wire:click="addFile">Tambah File</button>
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
