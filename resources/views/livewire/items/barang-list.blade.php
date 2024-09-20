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
                        <h4 class="card-title">Daftar Barang</h4>
                    </div>
                    <div  class="card-body pt-0">
                        <div  class="mb-3 d-flex justify-content-end" style="padding-right: 10px">
                            <a href="/barang/create" class="btn btn-primary" ><i class="fas fa-plus mr-1"></i>
                                Tambah Barang   
                            </a>
                        </div>
                        <div  class="table-responsive">
                        <table class="table datatable" id="datatable_1"  >
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
                                            <a  href="/barang/{{$item->id}}" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
                                            <a  href="/barang/{{$item->id}}/edit" class="btn btn-sm btn-warning"><i class="fas fa-pen-square"></i></a>
                                            <button wire:click="delete({{ $item->id }})" 
                                                    wire:confirm='Apakah anda ingin menghapus barang ini?'
                                                    href="" class="btn btn-sm btn-danger">
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


    @section('script')
    @vite(['resources/js/pages/datatable.init.js'])
    @endsection
    </div>