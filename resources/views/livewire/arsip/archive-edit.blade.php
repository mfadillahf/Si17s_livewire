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
                        <h6 class="card-title text-white">Form Update Arsip Dokumen</h6>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='update'>
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="nomor_surat">No. Surat*</label>
                                    <input type="text" wire:model.defer="number" class="form-control" placeholder="Nomor Surat">
                                    @error('number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="tanggal_surat">Tanggal Surat*</label>
                                    <input class="form-control" type="date" wire:model="date">
                                    @error('date') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="perihal">Perihal*</label>
                                    <input type="text" wire:model.defer="subject" class="form-control" placeholder="Perihal">
                                    @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                {{-- <div class="col-md-6 form-group">
                                    <label class="form-label" for="jenis_surat">Jenis Surat</label>
                                    <select wire:model="jenis" class="form-select" disabled>
                                        <option value="1" {{ $jenis == '1' ? 'selected' : '' }}>Surat Masuk</option>
                                        <option value="2" {{ $jenis == '2' ? 'selected' : '' }}>Surat Keluar</option>
                                    </select>
                                    @error('jenis') <small class="text-danger">{{ $message }}</small> @enderror
                                </div> --}}
                            </div>
        
                            <!-- Conditional Fields based on selected 'jenis' -->
                            {{-- @if($jenis == '1')
                                <div class="row mb-3">
                                    <div class="col-12 form-group">
                                        <label class="form-label" for="pengirim">Pengirim</label>
                                        <textarea wire:model.defer="objective" class="form-control" placeholder="Pengirim"></textarea>
                                        @error('pengirim') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                            @elseif($jenis == '2')
                                <div class="row mb-3">
                                    <div class="col-12 form-group">
                                        <label class="form-label" for="tujuan">Tujuan</label>
                                        <textarea wire:model.defer="objective" class="form-control" placeholder="Tujuan"></textarea>
                                        @error('tujuan') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                            @endif --}}

                            <div class="row mb-3">
                                <div class="col-md-12 form-group">
                                    <label class="form-label" for="keterangan">Keterangan</label>
                                    <textarea wire:model.defer="description" class="form-control" placeholder="Keterangan"></textarea>
                                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-footer d-flex justify-content-end mt-4">
                                <a href="{{ route('arsip') }}" class="btn btn-secondary me-2">Tutup</a>
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
                        <h5 class="card-title">Berkas Dokumen</h5>
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
                        <h5 class="card-title mb-2">Form Input Berkas</h5>
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
