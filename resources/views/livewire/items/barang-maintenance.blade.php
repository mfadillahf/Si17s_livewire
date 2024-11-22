<div>

    @section('css')
    @vite(['node_modules/mobius1-selectr/dist/selectr.min.css'])
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection


    <div>
        @if (session()->has('message'))
        <div id="alert-message" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    
    

        {{--page--}}
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
                                        <th>Nama Barang</th>
                                        <th>Merk</th>
                                        <th>Jenis</th>
                                        <th>Tanggal Pemeliharaan</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($dataMaintenance->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <p class="text-muted">data kosong</p>
                                        </td>
                                    </tr>
                                    @else
                                    @foreach ($dataMaintenance as $itemMain)
                                    <tr wire:key="barang-{{ $itemMain->id }}">
                                        <td>{{ $itemMain->item->name }}</td>
                                        <td>{{ $itemMain->item->merk }}</td>
                                        <td>{{ $itemMain->item->type }}</td>
                                        <td>{{ $itemMain->date }}</td>
                                        <td>{{ $itemMain->description }}</td>
                                        {{-- <td>{{ $itemMain->updated_at->format('d-m-Y') }}</td> --}}
                                        <td>
                                            
                                            <button  href="#" wire:click.prevent="openEdit({{ $itemMain->id }})" class="btn btn-sm btn-warning">
                                                <i class="fas fa-pen-square"></i>
                                            </button>
        
                                            <button  href="#" wire:click.prevent="openDelete({{ $itemMain->id }})" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            {{ $dataMaintenance->links() }}
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
                        <h5 class="modal-title">Tambah Data Maintenance Baru</h5>
                        <button type="button" class="btn-close" wire:click="closeCreate" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="create">
                            <div class="container-fluid">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        
                                        <label for="example-date-input" class="form-label">Data Barang</label>
                                        <select class="form-select" id="multiSelect" class="form-control" wire:model="selectedItemId" multiple>
                                            @foreach ($dataBarang as $itemMain)
                                            <option value="{{ $itemMain->id }}">{{ $itemMain->name }} | {{ $itemMain->merk }} | {{ $itemMain->type }} | {{ $itemMain->location }}</option>
                                            @endforeach 
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label for="tanggal_pemeliharaan" class="form-label">Tahun Pemeliharaan</label>
                                        <input class="form-control" type="date" value="" id="example-date-input"  wire:model="date">
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label class="form-label"  for="deskripsi">Keterangan</label>
                                        <textarea id="spesifikasi" wire:model="description" class="form-control @error('description') is-invalid @enderror" placeholder="Deskripsi"></textarea>
                                        @error('description') <small class="invalid-feedback">{{ $message }}</small> @enderror
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
        @if($showEdit)
        <div wire:ignore.self class="modal fade show" id="update" style="display: block;" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 800px;">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title">Edit Data Maintenance</h5>
                        <button type="button" class="btn-close" wire:click="closeEdit" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form wire:submit.prevent="update">
                            <div class="container-fluid">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="example-date-input" class="form-label">Data Barang</label>
                                        <input type="text" class="form-control text-sm" disabled value="{{ $selectedItemId->item->name ?? '' }}">
                                    </div>
                                    
                                    <div class="col-md-6">
                                            <label for="tanggal_pemeliharaan" class="form-label">Tahun Pemeliharaan</label>
                                            <input type="date" class="form-control text-sm" wire:model="date" name="date">
                                    </div>
                                </div>
            
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label class="form-label"  for="deskripsi">Keterangan</label>
                                        <textarea id="description" wire:model="description" class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="closeEdit">Close</button>
                                <button type="submit" class="btn btn-warning">
                                    <i class="fas fa-save mr-1"></i> Update
                                </button>
                            </div>
                        </form>
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
        {{-- multi script --}}
        @push('scripts')
        @vite(['resources/js/app.js'])
        @vite(['resources/js/pages/selectr.js'])
        @vite(['resources/js/pages/sweet-alert.init.js'])
        @endpush

        @script
        <script>
            $wire.on('open', () => {
                setTimeout(function() {
    
        new Selectr('#multiSelect',{
            multiple: true
            });
        }, 100); // 5000 milidetik = 5 detik
            });
        </script>
        @endscript
</div>