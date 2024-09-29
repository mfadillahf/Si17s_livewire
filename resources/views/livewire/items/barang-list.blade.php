<div>

    @section('css')
    @vite(['node_modules/simple-datatables/dist/style.css'])
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
                            <a href="/barang/create" class="btn btn-primary ms-2" >
                                <img src="/images/barang/box.png" class="img-fluid"> Tambah Barang
                            </a>
                        </div>
                    
                        
                        <div  class="table-responsive">
                        <table class="table table-striped sortable mb-0"  >
                                <thead class="table-light">
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
                                    <tr wire:key="barang-{{ $item->id }}">
    
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->merk }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->condition }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->updated_at->format('d-m-Y') }}</td>
                                        <td>
                                            <a  href="/barang/{{$item->id}}" class="btn btn-sm btn-info"><i class="fas fa-info-circle" ></i></a>
                                            <a  href="/barang/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i></a>
        
                                            <button  href="#" wire:click.prevent="confirmDelete({{ $item->id }})" 
                                                class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
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

        @if($showDelete)
        <div wire:ignore.self class="modal fade show" style="display: block;" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h6 class="modal-title m-0 text-white" id="exampleModalDanger1">Konfirmasi</h6>
                        <button type="button" class="btn-close" wire:click="cancel" aria-label="Close"></button>
                    </div><!--end modal-header-->
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3 text-center align-self-center">
                                <img src="/images/extra/card/litter.png" alt="Warning" class="img-fluid">
                            </div><!--end col-->
                            <div class="col-lg-9">
                                <h5>Anda yakin ingin menghapus barang ini?</h5>
                                <span class="badge bg-light text-dark">Terakhir diupdate: {{ $lastUpdatedDate }}</span>
                                <div class="mt-3">
                                    <strong class="text-danger ms-1">*aksi tidak bisa dibatalkan setelah diproses</strong>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end modal-body-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" wire:click="cancel">Cancel</button>
                        <button type="button" class="btn btn-danger btn-sm" wire:click="delete">Delete</button>
                    </div><!--end modal-footer-->
                </div><!--end modal-content-->
            </div><!--end modal-dialog-->
        </div>
        @endif
        

        @if($showDelete)
        <div class="modal-backdrop fade show"></div>
        @endif

    @section('script')
    @vite(['resources/js/pages/datatable.init.js'])  
    @endsection
    </div>
</div>