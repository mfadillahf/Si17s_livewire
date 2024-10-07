<div>
    <div>
        @if (session()->has('message'))
        <div id="alert-message" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Data Pemeliharaan Barang</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div  class="card-body pt-0">
                        <div  class="mb-3 d-flex justify-content-end">
                            <div>
                                <input type="text" class="form-control " wire:model.live="keyword" placeholder="Cari Barang....">
                            </div>
                            {{-- modal --}}
                            <button href="#" wire:click.prevent="openCreate" class="btn btn-primary ms-2" >
                                <img src="/images/barang/box.png" class="img-fluid"> Tambah Data
                            </button>
                        </div>
                    
                        
                        <div  class="table-responsive">
                            <table class="table table-striped sortable mb-0">
                                <thead class="table-light">
                                    <tr>                                    
                                        <th>Nama</th>
                                        <th>Merk</th>
                                        <th>Type</th>
                                        <th>Tanggal Pemeliharaan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataBarang as $item)
                                    <tr wire:key="barang-{{ $item->id }}">
    
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->merk }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->condition }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->updated_at->format('d-m-Y') }}</td>
                                        <td>
                                            
                                            <button  href="#" wire:click.prevent="openEdit({{ $item->id }})" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pen-square"></i>
                                            </button>
        
                                            <button  href="#" wire:click.prevent="openDelete({{ $item->id }})" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>







                        {{-- modal Create --}}
        @if($showCreate)
        <div wire:ignore.self class="modal fade show" id="create" style="display: block;" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title">Tambah Barang Baru</h5>
                        <button type="button" class="btn-close" wire:click="closeCreate" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="create">
                            <div class="container-fluid">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        {{-- <label for="name" class="form-label">Nama Barang</label>
                                        <input type="text" id="nama" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Barang">
                                        @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror --}}
                                        <label for="example-date-input" class="form-label">Nama Barang</label>
                                        <select class="select2"
                                            data-dropdown-css-class="select2-blue" style="width: 100%" name="items[]" >
                                            <option value="" disabled selected>Pilih Barang</option>
                                            @foreach ($databarang as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }} | {{ $item->merk }} | {{ $item->type }} | {{ $item->location }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-6">
                                            <label for="example-date-input" class="form-label">Tahun Pemeliharaan</label>
                                            <input class="form-control" type="date" value="" id="example-date-input">
                                        
                                        {{-- <label class="form-label" for="tahun_pengadaan">Tahun Pengadaan</label>
                                        <input type="text" id="tahun_pengadaan" wire:model.defer="procurement_year" class="form-control @error('procurement_year') is-invalid @enderror" placeholder="20xx">
                                        @error('procurement_year') <small class="invalid-feedback">{{ $message }}</small> @enderror --}}
                                    </div>
                                </div>
            
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label class="form-label" for="spesifikasi">Spesifikasi</label>
                                        <textarea id="spesifikasi" wire:model.defer="spesificaotin" class="form-control @error('spesification') is-invalid @enderror" placeholder="Spesifikasi"></textarea>
                                        @error('spesification') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="closeCreate">Close</button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-1"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
        @endif

        


        {{-- modal Edit --}}
        {{-- @if($showEdit)
        <div wire:ignore.self class="modal fade show" id="edit" style="display: block;" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title">Edit Barang</h5>
                        <button type="button" class="btn-close" wire:click="closeEdit" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent='update'>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Data Barang</label>
                                    <input type="text" id="nama" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Barang">
                                    @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="type" class="form-label">Jenis</label>
                                    <input type="text" id="jenis" wire:model="type" class="form-control @error('type') is-invalid @enderror" placeholder="Jenis Barang">
                                    @error('type') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>  
                                <div class="col-md-6">
                                    <label for="image" class="form-label">Foto Barang</label>
                                    <input type="file" id="foto" wire:model="image" class="form-control @error('image') is-invalid @enderror">
                                    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="tahun_pengadaan">Tahun Pengadaan</label>
                                    <input type="text" id="tahun_pengadaan" wire:model.defer="procurement_year" class="form-control @error('procurement_year') is-invalid @enderror"  placeholder="20xx">
                                    @error('procurement_year') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="spesifikasi">Spesifikasi</label>
                                    <textarea id="spesifikasi" wire:model.defer="spesification" class="form-control @error('spesification') is-invalid @enderror" placeholder="Spesifikasi"></textarea>
                                    @error('spesification') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="kondisi">Kondisi</label>
                                    <select class="form-select" id="default" wire:model.defer="condition" class="form-control @error('condition') is-invalid @enderror">
                                        <option value="" disabled selected>Pilih Kondisi</option>
                                        <option value="baru">Baru</option>
                                        <option value="bekas">Bekas</option>
                                    </select>
                                    @error('condition') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            
                                <div class="col-md-6">
                                    <label for="location" class="form-label">Lokasi/Pemegang</label>
                                    <input type="text" id="lokasi" wire:model="location" class="form-control @error('location') is-invalid @enderror" placeholder="Lokasi Barang">
                                    @error('location') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary float-end" wire:click="closeEdit">Close</button>
                                <button type="submit" class="btn btn-warning float-end" >
                                    <i class="fas fa-pen-square mr-1"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
        @endif --}}
        
</div>
