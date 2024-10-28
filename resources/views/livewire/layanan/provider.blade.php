<div>

    @section('css')
    @vite(['node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Penyedia</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-3 d-flex justify-content-end">
                        <div>
                            <input type="text" class="form-control" wire:model.live="keyword" placeholder="Cari Data....">
                        </div>
                        <a href="/layanan/create" class="btn btn-primary ms-2" >
                            <img src="/images/barang/box.png" class="img-fluid">  Pendaftaran Penyedia/Perorangan
                        </a>
                    </div>
                </div>
            
                {{-- tab --}}
                <div class="tab-content">
                    <div class="tab-pane p-3 active" id="kegiatan" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-striped sortable mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Tanggal Registrasi</th>
                                        <th>NPWP</th>
                                        <th>Perusahaan</th>
                                        <th>Direktur</th>
                                        <th>NIK</th>
                                        <th>Email</th>
                                        <th>Telpon</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                            <tbody>
                            @if ($layanan->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <p class="text-muted">data kosong</p>
                                    </td>
                                </tr>
                            @else
                                @foreach ($layanan as $ln)
                                <tr wire:key="agenda-{{ $ln->id }}">
                                    <td>{{ $ln->date }}</td>
                                    <td>{{ $ln->npwp }}</td>
                                    <td>{{ $ln->company_name }}</td>
                                    <td>{{ $ln->directur_name }}</td>
                                    <td>{{ $ln->directur_identity_number }}</td>
                                    <td>{{ $ln->email }}</td>
                                    <td>{{ $ln->phone_number }}</td>
                                    <td>
                                        <button wire:click ="detail({{ $ln->id }})" class="btn btn-sm btn-info">
                                            <i class="fas fa-info-circle"></i>
                                        </button>
                                        <a href="/layanan/edit/{{$ln->id}}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-pen-square"></i>
                                        </a>
                                        <button wire:click.prevent ="openDelete({{ $ln->id }})" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        {{ $layanan->links() }}
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
                <h5 class="modal-title">{{$company_name}}</h5>
                <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                  
                    <div class="col-md-6">
                        <table class="table table-striped">
                            <tr>
                                <th>Tanggal Registrasi</th>
                                <td>{{ $date ? $date->format('d F Y') : '-' }}</td>
                            </tr>
                            <tr>
                                <th>Nama Perusahaan/Perorangan</th>
                                <td>{{ $company_name }}</td>
                            </tr>

                            <tr>
                                <th>NPWP Perusahaan/Perorangan</th>
                                <td>{{ $npwp }}</td>
                            </tr>
                            
                            <tr>
                                <th>Nama Direktur/Perorangan</th>
                                <td>{{ $directur_name }}</td>
                            </tr>

                            <tr>
                                <th>No. KTP Direktur Penyedia/Perorangan</th>
                                <td>{{ $directur_identity_number }}</td>
                            </tr>

                            <tr>
                                <th>Email Penyedia/Perorangan</th>
                                <td>{{ $email }}</td>
                            </tr>

                            <tr>
                                <th>Telpon</th>
                                <td>{{ $phone_number }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-md-6 text-center">
                        <h6 >Kelengkapan Dokumen/Berkas</h6>
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
