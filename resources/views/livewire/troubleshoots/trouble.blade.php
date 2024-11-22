<div>
    @section('css')
    @vite(['node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pencatatan Troubleshooting</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model.live="keyword" placeholder="Cari Data....">
                        </div>
                        <a href="/troubleshooting/create" class="btn btn-primary ms-2" >
                            <img src="/images/barang/box.png" class="img-fluid">  Tambah Catatan Troubleshooting
                        </a>
                    </div>
                        <div class="table-responsive">
                            <table class="table table-striped sortable mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($dataTrouble->isEmpty())
                                        <tr>
                                            <td colspan="3" class="text-center">
                                                <p class="text-muted">data kosong</p>
                                            </td>
                                        </tr>
                                    @else
                                        @foreach ($dataTrouble as $dt)
                                        <tr wire:key="trouble-{{ $dt->id }}">
                                            <td>{{ $dt->date }}</td>
                                            <td>{{ $dt->troubleshootCategory->name }}</td>
                                            <td>
                                                <button wire:click ="detail({{ $dt->id }})" class="btn btn-sm btn-info">
                                                    <i class="fas fa-info-circle"></i>
                                                </button>
                                                <a href="/troubleshooting/edit/{{$dt->id}}" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-pen-square"></i>
                                                </a>
                                                <button wire:click.prevent ="openDelete({{ $dt->id }})" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            {{ $dataTrouble->links() }}
                        </div>
                </div>  
            </div>
        </div>
    </div>


{{-- detail --}}
@if($showDetail)
<div wire:ignore.self class="modal fade show"  style="display: block;" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">Detail Pencatatan Troubleshooting</h5>
                <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped">
                            <tr>
                                <th>Tanggal </th>
                                <td>{{ $date ? $date->format('d F Y') : '-' }}</td>
                            </tr>
                            <tr>
                                <th>Kategori</th>
                                <td>{{ $dt->troubleshootCategory->name }}</td>
                            </tr>

                            <tr>
                                <th>Uraian</th>
                                <td>{{ $description }}</td>
                            </tr>
                            
                            <tr>
                                <th>Solusi/Tindakan</th>
                                <td>{{ $action }}</td>
                            </tr>
                        </table>
                    </div>
                        <div class="col-md-6 text-center">
                            <h6 >Berkas Troubleshooting</h6>
                            @if(count($fileLinks) > 0)
                                <ul style="list-style: none; padding: 0; text-align: center;">
                                    @foreach ($fileLinks as $file)
                                        <li style="margin-bottom: 8px;">
                                            <a href="{{ $file['url'] }}" target="_blank"> {{ $file['name'] }}</a>
                                        </li>                                
                                    @endforeach
                                </ul>
                            @else
                                <ul>
                                    <p>File tidak Tersedia.</p>
                                </ul>
                            @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show"></div>
@endif



{{-- delete --}}
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
                    <button id="warningConfirm" type="button" class="btn btn-danger btn-sm" wire:click.prevent="delete" id="warning">Delete</button>
                </div><!--end modal-footer-->
            </div><!--end modal-content-->
        </div><!--end modal-dialog-->
    </div>

    <div class="modal-backdrop fade show">
    </div>
@endif
        

    @section('script')
    @vite(['resources/js/pages/calendar.init.js'])
    @vite(['resources/js/pages/sweet-alert.init.js'])

    @endsection
</div>
