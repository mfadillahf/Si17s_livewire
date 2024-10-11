<div>

    
    <div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Kegiatan LPSE</h4>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="nav nav-pills" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" wire::navigate href="{{ route('agenda') }}">Daftar Kegiatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" wire::navigate href="agenda-kalender">Kalender</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-striped sortable mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width:65%">Nama Kegiatan</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                    
                                </thead>
                                <tbody></tbody>
                                    {{-- @foreach ($dataBarang as $item) --}}
                                    {{-- <tr wire:key="barang-{{ $item->id }}">
    
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
                                    </tr> --}}
                                    {{-- @endforeach  --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    </div>
