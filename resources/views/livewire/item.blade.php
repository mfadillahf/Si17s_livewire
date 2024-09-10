<div>

@section('css')
@vite(['node_modules/simple-datatables/dist/style.css'])
@endsection

@section('content')

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
                    <h4 class="card-title">Daftar Barang</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-3 d-flex justify-content-end" style="padding-right: 10px">
                        <button wire:click=' openModal'class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#itemTambah">
                            Tambah Barang
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table datatable" id="datatable_2">
                            <thead>
                                <tr>                                    
                                    <th>Nama</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>Kondisi</th>
                                    <th>Lokasi/pemegang</th>
                                    <th>Tanggal update</th>
                                    <th>Aksi</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                @foreach ($dataBarang as $item)
                                <tr>

                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->merk }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->condition }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->updated_at->format('d-m-Y') }}</td>
                                    <td>
                                        <button wire:click="edit({{ $item->id }})" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#itemEdit">
                                            Edit
                                        </button>
                                        <button wire:click="delete_confirm({{ $item->id }})" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#itemDelete">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        {{ $dataBarang->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

     {{-- modal tambah item--}}
     <div wire:ignore.self class="modal fade" id="itemTambah" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="store">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" id="nama_barang" wire:model.defer="name" class="form-control" placeholder="Nama Barang">
                        </div>
    
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" id="merk" wire:model.defer="merk" class="form-control" placeholder="Merk">
                        </div>
    
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" id="jenis" wire:model.defer="type" class="form-control" placeholder="Jenis">
                        </div>
    
                        <div class="form-group">
                            <label for="foto">Foto Barang</label>
                            <input type="file" id="foto" wire:model.defer="image" class="form-control">
                        </div>
    
                        <div class="form-group">
                            <label for="tahun_pengadaan">Tahun Pengadaan</label>
                            <input type="text" id="tahun_pengadaan" wire:model.defer="procurement_year" class="form-control" value="">
                        </div>
    
                        <div class="form-group">
                            <label for="spesifikasi">Spesifikasi</label>
                            <textarea id="spesifikasi" wire:model.defer="spesification" class="form-control" placeholder="Spesifikasi"></textarea>
                        </div>
    
                        <div class="form-group">
                            <label for="condition">Kondisi</label>
                            <input type="text" id="condition" wire:model.defer="condition" class="form-control" palceholder="Kondisi">
                            </input>
                        </div>
    
                        <div class="form-group">
                            <label for="location">Lokasi/Pemegang</label>
                            <input type="text" id="location" wire:model.defer="location" class="form-control" placeholder="Input Lokasi/Pemegang">
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" wi>Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 

    {{-- modal edit item --}}
    <div wire:ignore.self class="modal fade" id="itemEdit" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Edit Data Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="store">
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang *</label>
                            <input type="text" id="nama_barang" wire:model.defer="name" class="form-control" placeholder="Nama Barang">
                        </div>
    
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <input type="text" id="merk" wire:model.defer="merk" class="form-control" placeholder="Merk">
                        </div>
    
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <input type="text" id="jenis" wire:model.defer="type" class="form-control" placeholder="Jenis">
                        </div>
    
                        <div class="form-group">
                            <label for="foto">Foto Barang</label>
                            <input type="file" id="foto" wire:model.defer="image" class="form-control">
                        </div>
    
                        <div class="form-group">
                            <label for="tahun_pengadaan">Tahun Pengadaan</label>
                            <input type="text" id="tahun_pengadaan" wire:model.defer="procurement_year" class="form-control" value="2024">
                        </div>
    
                        <div class="form-group">
                            <label for="spesifikasi">Spesifikasi</label>
                            <textarea id="spesifikasi" wire:model.defer="spesification" class="form-control" placeholder="Spesifikasi"></textarea>
                        </div>
    
                        <div class="form-group">
                            <label for="condition">Kondisi *</label>
                            <select id="condition" wire:model.defer="condition" class="form-control">
                                <option value="">Pilih Kondisi</option>
                                <option value="baru">Baru</option>
                                <option value="bekas">Bekas</option>
                            </select>
                        </div>
    
                        <div class="form-group">
                            <label for="location">Lokasi/Pemegang</label>
                            <input type="text" id="location" wire:model.defer="location" class="form-control" placeholder="Input Lokasi/Pemegang">
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" wire:click='edit()'>Edit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    {{-- modal delete item --}}
    <div wire:ignore.self class="modal fade" id="itemDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">KONFIRMASI</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Apakah anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-danger" wire:click='delete()' data-bs-dismiss="modal">Hapus</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection
</div>