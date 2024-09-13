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
                    <h4 class="card-title">Daftar Barang</h4>
                </div>
                <div  class="card-body pt-0">
                    <div  class="mb-3 d-flex justify-content-end" style="padding-right: 10px">
                        <button wire:click="openAddModal" class="btn btn-primary" >
                            Tambah Barang   
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table datatable" id="datatable_2" >
                            <thead>
                                <tr >                                    
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
                                        <button wire:click="detailsModal({{ $item->id }})" class="btn btn-blue">
                                            Show
                                        </button>
                                        <button wire:click="openEditModal({{ $item->id }})" class="btn btn-warning">
                                            Edit
                                        </button>
                                        <button wire:click="openDeleteModal({{ $item->id }})" class="btn btn-danger">
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
                    <form wire:submit.prevent="store">
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
                            <input type="text" id="tahun_pengadaan" wire:model.defer="procurement_year" class="form-control" placeholder="Tahun Pengadaan">
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     
    {{-- modal show item --}}
    <div wire:ignore.self class="modal fade" id="itemDetails" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Detail Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
    
                    <!-- Display details here -->
                    <p><strong>Nama:</strong> {{ $name }}</p>
                    <p><strong>Merk:</strong> {{ $merk }}</p>
                    <p><strong>Jenis:</strong> {{ $type }}</p>
                    <p><strong>Foto Barang:</strong></p>
                    {{-- <div class="text-center mb-3">
                        @if ($image)
                            <img src="{{ $image }}" alt="Item Image" class="img-fluid rounded" style="max-height: 200px;">
                        @else
                            <p>No image available</p>
                        @endif --}}
                    </div>
                    <p><strong>Tahun Pengadaan:</strong> {{ $procurement_year }}</p>
                    <p><strong>Spesifikasi:</strong> {{ $spesification }}</p>
                    <p><strong>Kondisi:</strong> {{ $condition }}</p>
                    <p><strong>Lokasi/Pemegang:</strong> {{ $location }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                    <form wire:submit.prevent="update">
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
                            <label for="condition">Kondisi</label>
                            <input type="text" id="condition" wire:model.defer="condition" class="form-control" palceholder="Kondisi">
                            </input>
                        </div>
    
                        <div class="form-group">
                            <label for="location">Lokasi/Pemegang</label>
                            <input type="text" id="location" wire:model.defer="location" class="form-control" placeholder="Input Lokasi/Pemegang">
                        </div>
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Edit</button>
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
              <button type="button" class="btn btn-danger" wire:click='delete'>Hapus</button>
            </div>
          </div>
        </div>
      </div>
    </div>

@section('script')
@vite(['resources/js/pages/datatable.init.js'])

<script>
        
    window.addEventListener('openAddModal', event => {
        var myModal = new bootstrap.Modal(document.getElementById('itemTambah'));
        myModal.show();
    });

        window.addEventListener('closeAddModal', event => {
        var myModal = bootstrap.Modal.getInstance(document.getElementById('itemTambah'));
        myModal.hide();
    });

    window.addEventListener('detailsModal', event => {
        var myModal = new bootstrap.Modal(document.getElementById('itemDetails'));
        myModal.show();
    });

    window.addEventListener('openEditModal', event => {
        var myModal = new bootstrap.Modal(document.getElementById('itemEdit'));
        myModal.show();
    });

        window.addEventListener('closeEditModal', event => {
        var myModal = bootstrap.Modal.getInstance(document.getElementById('itemEdit'));
        myModal.hide();
    });

    window.addEventListener('openDeleteModal', event => {
        var myModal = new bootstrap.Modal(document.getElementById('itemDelete'));
        myModal.show();
    });

        window.addEventListener('closeDeleteModal', event => {
        var myModal = bootstrap.Modal.getInstance(document.getElementById('itemDelete'));
        myModal.hide();
    });

</script>

@endsection
</div>