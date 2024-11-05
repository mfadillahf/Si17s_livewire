<div>
    @section('css')
    @vite(['node_modules/mobius1-selectr/dist/selectr.min.css', 'node_modules/huebee/dist/huebee.min.css', 'node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
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
                    <div class="card-header bg-primary" >
                        <h4 class="card-title text-white">Tambah Pelaporan dan Konsultasi</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='create'>
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="perusahaan">Nama Pelapor*</label>
                                    <input type="text" wire:model.defer="name" class="form-control" placeholder="Nama Pelapor">
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="nomor_induk">No. Identitas*</label>
                                    <input type="text" wire:model.defer="identity_number" class="form-control" placeholder="No. Identitas">
                                    @error('identity_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="no_hp">No.Handphone*</label>
                                    <input type="text" wire:model.defer="phone_number" class="form-control" placeholder="08xxx">
                                    @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label class="form-label" for="instansi">Instansi</label>
                                    <input type="text" wire:model.defer="institute" class="form-control" placeholder="Input nama Instansi">
                                    @error('institute') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-6 form-group">
                                    <label class="form-label" for="media_laporan">Media Laporan</label>
                                    <select wire:model="media_report_id" class="form-select">
                                        <option value="" disabled selected>Pilih Media Laporan</option>
                                        <option value="1">Chat</option>
                                        <option value="2">Telepon</option>
                                        <option value="3">Offline</option>
                                        <option value="4">VC</option>
                                        <option value="5">LPSE Support</option>
                                    </select>
                                    @error('media_report_id') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label class="form-label" for="judul_laporan">Judul Laporan*</label>
                                    <input type="text" wire:model.defer="title" class="form-control" placeholder="Input nama Instansi">
                                    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 form-group">
                                    <label class="form-label" for="deskripsi">Uraian Laporan*</label>
                                    <textarea id="description" wire:model.defer="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi"></textarea>
                                    @error('description') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 form-group">
                                    <label class="form-label" for="kategori">Kategori Laporan*</label>
                                    <select wire:model="report_category_id" class="form-select">
                                        <option value="" disabled selected>Pilih Jenis Aplikasi</option>
                                        <option value="1">SPSE</option>
                                        <option value="2">SIRUP</option>
                                        <option value="3">e-katalog</option>
                                        <option value="4">SILAPRAJA</option>
                                        <option value="5">Bela Pengadaan</option>
                                    </select>
                                    @error('report_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12 form-group">
                                    <label class="form-label" for="solusi">Solusi*</label>
                                    <textarea id="description" wire:model.defer="solution" class="form-control @error('solution') is-invalid @enderror" placeholder="Solusi"></textarea>
                                    @error('solution') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="nomor_tiket">No. Tiket <code>(https://lpse-support.lkpp.go.id/lacak-tiket/)</code></label>
                                    <input type="text" wire:model.defer="ticket_number" class="form-control" placeholder="No. Tiket">
                                    @error('ticket_number') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="status">Status*</label>
                                    <select wire:model="status" class="form-select">
                                        <option value="" disabled selected>Pilih Status</option>
                                        <option value="Proses">Proses</option>
                                        <option value="Selesai">Selesai</option>
                                    </select>
                                    @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai*</label>
                                    <input class="form-control" type="date" id="started_at" wire:model="started_at">
                                    @error('started_at') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_selesai" class="form-label">Tanggal Selesai*</label>
                                    <input class="form-control" type="date" id="finished_at" wire:model="finished_at">
                                    @error('finished_at') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="berkas">Berkas/Lampiran Pendukung</label>
                                    <input type="file" wire:model.live="berkas" class="form-control">
                                    @error('berkas') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label" for="penerima_laporan">Penerima Laporan*</label>
                                    <input type="text" wire:model.defer="receipt" class="form-control" placeholder="Penerima Laporan">
                                    @error('receipt') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            
        
                            <div class="form-footer d-flex justify-content-end mt-3">
                                <a href="{{ route('konsultasi') }}" class="btn btn-secondary me-2">Tutup</a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-1"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
        

    @section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>

