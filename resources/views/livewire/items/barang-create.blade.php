<div>

    @section('css')
    @vite(['node_modules/simple-datatables/dist/style.css'])
    @endsection
    
    
    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Barang</h4>
                    </div>
                    <div  class="card-body pt-0">
                            <form wire:submit.prevent='create'>
                                <div class="mb-3 form-group">
                                    <label class="form-label" for="nama_barang">Nama Barang</label>
                                    <input type="text" id="name" wire:model.defer="name" class="form-control" placeholder="Nama Barang">
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label" for="merk">Merk</label>
                                    <input type="text" id="merk" wire:model.defer="merk" class="form-control" placeholder="Merk">
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label" for="jenis">Jenis</label>
                                    <input type="text" id="jenis" wire:model.defer="type" class="form-control" placeholder="Jenis">
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label" for="foto">Foto Barang</label>
                                    <input type="file" id="foto" wire:model.defer="image" class="form-control">
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label" for="tahun_pengadaan">Tahun Pengadaan</label>
                                    <input type="text" id="tahun_pengadaan" wire:model.defer="procurement_year" class="form-control" value="20">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="Spesifikasi">Spesifikasi</label>
                                    <textarea id="spesifikasi" wire:model.defer="spesification" class="form-control" placeholder="Spesifikasi"></textarea>
                                </div>
                                <div class="mb-3 form-group">
                                    <label class="form-label" for="kondisi">Kondisi</label>
                                    <select class="form-select" id="kondisi" wire:model.defer="condition" class="form-control">
                                        <option value="">Pilih Kondisi</option>
                                        <option value="baru">Baru</option>
                                        <option value="bekas">Bekas</option>
                                    </select>
                                </div>
                                
                                <div class="mb-3 form-group">
                                    <label class="form-label" for="lokaso">Lokasi/Pemegang</label>
                                    <input type="text" id="location" wire:model.defer="location" class="form-control" placeholder="Lokasi/Pemegang">
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary float-end" id="success">
                                    <i class="fas fa-save mr-1"></i> Simpan</button>
                                    <a href="/barang" class="btn btn-secondary float-end me-2">Tutup</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    @section('script')
    @vite(['resources/js/pages/datatable.init.js'])
    @endsection
    </div>