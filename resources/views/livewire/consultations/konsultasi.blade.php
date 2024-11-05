<div>

    @section('css')
    @vite(['node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection


    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pengelolaan Data Pelaporan dan Konsultasi</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model.live="keyword" placeholder="Cari Data....">
                        </div>
                        <a href="/konsultasi/create" class="btn btn-primary ms-2" >
                            <img src="/images/barang/box.png" class="img-fluid">  Tambah Pelaporan dan Konsultasi
                        </a>
                    </div>
                
            
                        <div class="table-responsive">
                            <table class="table table-striped sortable mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Judul Laporan</th>
                                        <th>Kategori Laporan</th>
                                        <th>No. Tiket</th>
                                        <th>Status</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            <tbody>
                            @if ($rdk->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <p class="text-muted">data kosong</p>
                                    </td>
                                </tr>
                            @else
                                @foreach ($rdk as $kL)
                                <tr wire:key="provider-{{ $kL->id }}">
                                    <td>{{ $kL->title }}</td>
                                    <td>{{ $kL->reportCategory->name}}</td>
                                    <td>{{ $kL->ticket_number }}</td>
                                    <td>{{ $kL->status }}</td>
                                    <td>{{ $kL->started_at}}</td>
                                    <td>{{ $kL->finished_at }}</td>
                                    <td>
                                        <button wire:click ="detail({{ $kL->id }})" class="btn btn-sm btn-info">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                        <a href="/konsultasi/edit/{{$kL->id}}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-pen-square"></i>
                                        </a>
                                        <button wire:click.prevent ="openDelete({{ $kL->id }})" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        {{ $rdk->links() }}
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
                <h5 class="modal-title">{{$title}}</h5>
                <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                  
                    <div class="col-md-12">
                        <table class="table table-striped">
                            <tr>
                                <th>Nama Pelapor</th>
                                <td>{{ $name }}</td>
                            </tr>
                            <tr>
                                <th>No. Identitas </th>
                                <td>{{ $identity_number }}</td>
                            </tr>

                            <tr>
                                <th>No. Handphone</th>
                                <td>{{ $phone_number }}</td>
                            </tr>
                            
                            <tr>
                                <th>Media Laporan</th>
                                <td>{{ $kL->mediaReport->name }}</td>
                            </tr>

                            <tr>
                                <th>Instansi</th>
                                <td>{{ $institute }}</td>
                            </tr>

                            <tr>
                                <th>Tanggal Laporan</th>
                                <td>{{ $started_at }}</td>
                            </tr>

                            <tr>
                                <th>Tanggal Selesai</th>
                                <td>{{ $finished_at }}</td>
                            </tr>

                            <tr>
                                <th>Judul Laporan</th>
                                <td>{{ $title }}</td>
                            </tr>

                            <tr>
                                <th>Uraian Laporan</th>
                                <td>{{ $description }}</td>
                            </tr>

                            <tr>
                                <th>Kategori Laporan</th>
                                <td>{{ $kL->reportCategory->name }}</td>
                            </tr>

                            <tr>
                                <th>Solusi</th>
                                <td>{{ $solution }}</td>
                            </tr>

                            <tr>
                                <th>No. Tiket</th>
                                <td>{{ $ticket_number }}</td>
                            </tr>

                            <tr>
                                <th>Status</th>
                                <td>{{ $status }}</td>
                            </tr>

                            <tr>
                                <th>Penerima Laporan</th>
                                <td>{{ $receipt }}</td>
                            </tr>

                            <tr>
                                <th>Penginput</th>
                                <td>{{ $kL->user_id}}</td>
                            </tr>

                            <tr>
                                <th>Berkas Pendukung</th>
                                @if(count($fileLinks) > 0)
                                <td>
                                    @foreach ($fileLinks as $file)
                                            <a href="{{ $file['url'] }}" target="_blank"> {{ $file['name'] }}</a>
                                    @endforeach
                                </td>
                                @else
                                <td>
                                    <p>File tidak Tersedia.</p>
                                </td>
                                @endif
                            </tr>
                        </table>
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
