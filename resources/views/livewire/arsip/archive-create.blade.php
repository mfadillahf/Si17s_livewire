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
                    <div class="card-header">
                        <h4 class="card-title">Tambah Dokumen</h4>
                    </div>
                    <div class="card-body pt-0">
                        <form wire:submit.prevent='create'>
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="tanggal_surat">Tanggal Surat*</label>
                                    <input class="form-control" type="date" wire:model="date">
                                    @error('date') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="nomor_surat">No. Surat*</label>
                                    <input type="text" wire:model.defer="number" class="form-control" placeholder="Nomor Surat">
                                    @error('number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="perihal">Perihal*</label>
                                    <input type="text" wire:model.defer="subject" class="form-control" placeholder="Perihal">
                                    @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="jenis_surat">Jenis Surat</label>
                                    <select wire:model.live="jenis" class="form-select">
                                        <option value="" disabled selected>Pilih Jenis Surat</option>
                                        <option value="1">Surat Masuk</option>
                                        <option value="2">Surat Keluar</option>
                                    </select>
                                    @error('jenis') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
        
                            <!-- Conditional Fields based on selected 'jenis' -->
                            @if($jenis == '1')
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
                            @endif

                            <div class="row mb-3">
                                <div class="col-md-12 form-group">
                                    <label class="form-label" for="keterangan">Keterangan</label>
                                    <textarea wire:model.defer="description" class="form-control" placeholder="Keterangan"></textarea>
                                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12 form-group">
                                    <label class="form-label" for="berkas_surat">Berkas Surat</label>
                                    <input type="file" wire:model.defer="berkas" class="form-control">
                                    @error('berkas') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            
        
                            <div class="form-footer d-flex justify-content-end mt-4">
                                <a href="{{ route('arsip') }}" class="btn btn-secondary me-2">Tutup</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-1"></i> Simpan
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
