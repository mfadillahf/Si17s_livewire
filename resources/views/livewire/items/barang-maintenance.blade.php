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
                                <h4 class="card-title">Data Pemliharaan Barang</h4>
                                
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
                                <img src="/images/barang/box.png" class="img-fluid"> Tambah Data Pemeliharaan Barang
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
                                        <th>status</th>
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