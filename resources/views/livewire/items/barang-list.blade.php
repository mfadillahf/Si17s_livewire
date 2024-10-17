<div>    

    @section('css')
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

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
                                <h4 class="card-title">Daftar Barang</h4>
                                
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
                                <img src="/images/barang/box.png" class="img-fluid"> Tambah Barang
                            </button>
                        </div>
                    
                        
                        <div  class="table-responsive">
                        <table class="table table-striped sortable mb-0">
                                <thead class="table-light">
                                    <tr>                                    
                                        <th>Nama</th>
                                        <th>Merk</th>
                                        <th>Jenis</th>
                                        <th>Kondisi</th>
                                        <th>Lokasi/pemegang</th>
                                        <th>Tanggal update</th>
                                        <th>Aksi</th>
                                    </tr>
                                    
                                </thead>
                                <tbody>
                                    @if ($dataBarang->isEmpty())
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <p class="text-muted">data kosong</p>
                                        </td>
                                    </tr>
                                    @else
                                    @foreach ($dataBarang as $item)
                                    <tr wire:key="barang-{{ $item->id }}">
    
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->merk }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->condition }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->updated_at->format('d-m-Y') }}</td>
                                        <td>
                                            
                                            <button href="#" wire:click.prevent="detail({{ $item->id }})" class="btn btn-sm btn-info">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                            
                                            <button  href="#" wire:click.prevent="openEdit({{ $item->id }})" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pen-square"></i>
                                            </button>
        
                                            <button  href="#" wire:click.prevent="openDelete({{ $item->id }})" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {{ $dataBarang->links() }}
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
                        <h5 class="modal-title">Tambah Data Barang Baru</h5>
                        
                        <button type="button" class="btn-close" wire:click="closeCreate" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent='create'>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama Barang</label>
                                    <input type="text" id="nama" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Barang">
                                    @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="merk" class="form-label">Merk</label>
                                    <input type="text" id="merk" wire:model="merk" class="form-control @error('merk') is-invalid @enderror" placeholder="Merk Barang">
                                    @error('merk') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="type" class="form-label">Jenis</label>
                                    <input type="text" id="jenis" wire:model="type" class="form-control @error('type') is-invalid @enderror" placeholder="Jenis Barang">
                                    @error('type') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>  
                                <div class="col-md-6">
                                    <label for="itemImages" class="form-label">Foto Barang</label>
                                    <input type="file" wire:model="itemImages" class="form-control @error('itemImages') is-invalid @enderror" multiple>
                                    @error('itemImages') <small class="text-danger">{{ $message }}</small> @enderror
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
                                <button type="button" class="btn btn-secondary float-end" wire:click="closeCreate">Close</button>
                                <button type="submit" class="btn btn-primary float-end" id="success">
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
        @if($showEdit)
        <div wire:ignore.self class="modal fade show" id="edit" style="display: block;" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title">Edit Data Barang</h5>
                        <button type="button" class="btn-close" wire:click="closeEdit" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent='update'>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nama Barang</label>
                                    <input type="text" id="nama" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Barang">
                                    @error('name') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="merk" class="form-label">Merk</label>
                                    <input type="text" id="merk" wire:model="merk" class="form-control @error('merk') is-invalid @enderror" placeholder="Merk Barang">
                                    @error('merk') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="type" class="form-label">Jenis</label>
                                    <input type="text" id="jenis" wire:model="type" class="form-control @error('type') is-invalid @enderror" placeholder="Jenis Barang">
                                    @error('type') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                </div>  
                                <div class="col-md-6">
                                    <label for="itemImages" class="form-label">Foto Barang</label>
                                    <input type="file" wire:model="itemImages" class="form-control @error('itemImages') is-invalid @enderror" multiple>
                                    @error('itemImages') <small class="text-danger">{{ $message }}</small> @enderror
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
                                <button type="submit" class="btn btn-warning float-end" id="edit">
                                    <i class="fas fa-pen-square mr-1"></i> Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
        @endif


        


        <!-- Modal Detail Barang -->
        @if($showDetail)
        <div wire:ignore.self class="modal fade show" id="exampleModalCenter" style="display: block;" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-info text-white">
                        <h5 class="modal-title">Detail Data Barang</h5>
                        <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <table class="table table-striped ">
                                    <tr>
                                        <th>Tanggal</th>
                                        <td>{{ $item->updated_at->format('d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <td>{{ $name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Merk</th>
                                        <td>{{ $merk }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis</th>
                                        <td>{{ $type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kondisi</th>
                                        <td>{{ $condition }}</td>
                                    </tr>
                                    <tr>
                                        <th>Lokasi/Pemegang</th>
                                        <td>{{ $location }}</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- Right Column with Image -->
                            <div class="col-md-6 text-center">
                                <h6>Foto Barang:</h6>
                                @if ($item->images->isNotEmpty()) <!-- Pastikan ada gambar -->
                                    <div class="d-flex flex-wrap justify-content-center">
                                        @foreach ($item->images as $image) <!-- Mengakses relasi images -->
                                            <div class="p-2">
                                            <p> src="{{ Storage::url($image->image) }}"</p> 
                                            <img src="{{ Storage::url($image->image) }}" 
                                                alt="Item Image" class="img-thumbnail" 
                                                style="max-height: 150px; max-width: 150px;">
                                            </div>
                                        @endforeach
                                    </div>
                                    @else
                                        <p>Foto tidak tersedia</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeDetail">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show"></div>
        @endif



        

        {{-- modal delete --}}
        @if($showDelete)
        <div wire:ignore.self class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h6 class="modal-title m-0 text-white" id="exampleModalDanger1">Konfirmasi</h6>
                        <button type="button" class="btn-close" wire:click="closeDelete" aria-label="Close"></button>
                    </div><!--end modal-header-->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 text-center align-self-center">
                                <img src="/images/extra/card/litter.png" alt="Warning" class="img-fluid">
                            </div><!--end col-->
                            <div class="col-lg-9">
                                <h5>Anda yakin ingin menghapus data ini?</h5>
                                <span class="badge bg-light text-dark">Terakhir diupdate: {{ $lastUpdatedDate }}</span>
                                <div class="mt-3">
                                    <strong class="text-danger ms-1">*aksi tidak bisa dibatalkan setelah diproses</strong>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" wire:click="closeDelete">Cancel</button>
                        <button id="warningConfirm" type="button" class="btn btn-danger btn-sm" wire:click="delete" id="warning">Delete</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </div><!--end modal-dialog-->
        </div>

        <div class="modal-backdrop fade show">
        </div>
        @endif
        

        @section('script')
        @vite(['resources/js/pages/sweet-alert.init.js'])
        @endsection
        
    </div>
</div>
