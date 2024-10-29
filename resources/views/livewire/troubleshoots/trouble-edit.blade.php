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
                                    <label class="form-label" for="tanggal">Tanggal*</label>
                                    <input class="form-control" type="date" wire:model="date">
                                    @error('date') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="kategori">Kategori</label>
                                    <select wire:model.live="troubleshoot_category_id" class="form-select">
                                        <option value="" disabled selected>Pilih Kategori Troubleshooting</option>
                                        <option value="1">Jaringan</option>
                                        <option value="2">Server</option>
                                        <option value="3">Aplikasi</option>
                                        <option value="4">Kelistrikan</option>
                                        <option value="5">Router</option>
                                        <option value="6">Switch</option>
                                        <option value="7">Sistem Operasi</option>
                                        <option value="8">Wifi</option>
                                        <option value="9">Lainnya</option>
                                    </select>
                                    @error('troubleshoot_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <div class="col-12 form-group">
                                    <label class="form-label" for="uraian">Uraian</label>
                                    <textarea wire:model.defer="description" class="form-control" placeholder="Uraian"></textarea>
                                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 form-group">
                                    <label class="form-label" for="solusi">Solusi/Tindakan</label>
                                    <textarea wire:model.defer="action" class="form-control" placeholder="Solusi/Tindakan"></textarea>
                                    @error('action') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
        
                            <div class="form-footer d-flex justify-content-end mt-4">
                                <a href="{{ route('trouble') }}" class="btn btn-secondary me-2">Tutup</a>
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
                        <h5 class="card-title">Berkas Tambahan Troubleshooting</h5>
                    </div>
                        @if(count($fileLinks) > 0)
                            <ul>
                                @foreach ($fileLinks as $file)
                                    <li style="display: flex; align-items: center; margin-bottom: 8px;">
                                        <a href="{{ $file['url'] }}" target="_blank"> {{ $file['name'] }}</a>
                                        
                                        <button type="button" class="btn btn-danger btn-sm ms-2 d-inline-flex align-items-center" style="padding: 0.2rem 0.4rem;" wire:click="deleteFile('{{ $file['id'] }}')">
                                            <i class="icofont-ui-close"></i>
                                        </button>
                                    </li>                                
                                @endforeach
                            </ul>
                        @else
                            <ul>
                                <p>File tidak tersedia.</p>
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
                        <h5 class="card-title mb-2">Form Tambah Berkas Troubleshooting</h5>
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
