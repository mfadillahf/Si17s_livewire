<div>
    @section('css')
    @vite(['node_modules/mobius1-selectr/dist/selectr.min.css', 'node_modules/huebee/dist/huebee.min.css', 'node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
    @vite(['node_modules/sweetalert2/dist/sweetalert2.min.css', 'node_modules/animate.css/animate.min.css'])
    @endsection

    <div>
        @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-white">Tambah Data Permintaan User </h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='create'>
                            <div class="row mb-3">
                                <div class="col-md-12 form-group">
                                    <label class="form-label" for="tipe_user">Pilih Permohonan</label>
                                    <select wire:model.live="is_auditor" class="form-select">
                                        <option value=null disabled selected>Pilih Tipe User</option>
                                        <option value="0">Non-Auditor</option>
                                        <option value="1">Auditor</option>
                                    </select>
                                    @error('is_auditor') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            
                            @if($is_auditor == '0')
                                <div wire:key="non-auditor-form" class="row mb-3">
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">Surat Permohonan</label>
                                        <select class="form-select" id="default" class="form-control" wire:change="showDocumentDetails($event.target.value)">
                                            <option value="" selected>Pilih Dokumen</option>
                                            @foreach ($da as $rA)
                                            <option value="{{ $rA->id }}">{{ $rA->number }} | {{ $rA->subject }}</option>
                                            @endforeach 
                                        </select>
                                        <small class="badge bg-info-subtle text-info">Merujuk ke Surat Masuk</small>
                                        @error('showDocumentDetails($event.target.value)') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">Instansi</label>
                                        <input type="text" wire:model.defer="institute" class="form-control" placeholder="Input nama Instansi">
                                        @error('institute') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12 form-group">
                                        <label class="form-label" for="">Non-Auditor</label>
                                        <select id="multiSelect" wire:model.defer='appUsers'class="form-select" multiple>
                                            <option value=""  disabled selected>Pilih Non-Auditor</option>
                                            @foreach ($rnoa as $rN)
                                            <option value="{{ $rN->id }}">{{ $rN->name }} | {{ $rN->identity_number }}</option>
                                            @endforeach 
                                        </select>
                                        <small class="badge bg-info-subtle text-info">Pilih Non-Auditor</small>
                                        @error('selected_auditor') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>



                            @elseif($is_auditor == '1')
                                <div wire:key="auditor-form" class="row mb-3">
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">Surat Permohonan</label>
                                        <select class="form-select" id="default" class="form-control" wire:change="showDocumentDetails($event.target.value)">
                                            <option value="" selected>Pilih Dokumen</option>
                                            @foreach ($da as $rA)
                                            <option value="{{ $rA->id }}">{{ $rA->number }} | {{ $rA->subject }}</option>
                                            @endforeach 
                                        </select>
                                        <small class="badge bg-info-subtle text-info">Merujuk ke Surat Masuk</small>
                                        @error('showDocumentDetails($event.target.value)') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="document_number">No. Surat Tugas</label>
                                        <input type="text" wire:model.defer="document_number" class="form-control" placeholder="No. Surat Tugas">
                                        @error('document_number') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12 form-group">
                                        <label class="form-label" for="instansi">Instansi</label>
                                        <select wire:model="institute" class="form-select">
                                            <option value=null disabled selected>Pilih Instansi</option>
                                            <option value="Kejaksaan">Kejaksaan</option>
                                            <option value="Kepolisian">Kepolisian</option>
                                            <option value="BPK">BPK</option>
                                            <option value="BPKP">BPKP</option>
                                            <option value="Inspektorat">Inspektorat</option>
                                            <option value="KPK">KPK</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                        @error('institute') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                                        <input class="form-control" type="date" id="started_at" wire:model="start_period">
                                        @error('started_at') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tanggal_selesai" class="form-label">Tanggal Berakhir</label>
                                        <input class="form-control" type="date" id="finished_at" wire:model="end_period">
                                        @error('finished_at') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12 form-group">
                                        <label class="form-label" for="">Auditor</label>
                                        <select class="form-select" id="multiSelect" class="form-control" wire:model.defer='appUsers' multiple>
                                            <option value=""  disabled selected>Pilih Auditor</option>
                                            @foreach ($rau as $rN)
                                            <option value="{{ $rN->id }}">{{ $rN->name }} | {{ $rN->identity_number }}</option>
                                            @endforeach 
                                        </select>
                                        <small class="badge bg-info-subtle text-info">Pilih Auditor</small>
                                        @error('selected_auditor') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <label class="form-label" for="audited_packages">Paket yang diaudit</label>
                                        <textarea  wire:model.defer="audited_packages" class="form-control @error('audited_packages') is-invalid @enderror"></textarea>
                                        @error('audited_packages') <small class="invalid-feedback">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                            @endif

                            <div class="form-footer d-flex justify-content-end mt-4">
                                <a href="{{ route('user.permintaan') }}" class="btn btn-secondary me-2">Tutup</a>
                                <button type="submit" class="btn btn-primary" 
                                    @if($is_auditor === null) disabled @endif>
                                    <i class="fas fa-save mr-1"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @if($showDetail)
    <div wire:ignore.self class="modal fade show"  style="display: block;" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title">Detail Dokumen</h5>
                    <button type="button" class="btn-close" wire:click="closeDetail" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <tr>
                                    <th>Perihal</th>
                                    <td>{{ $subject }}</td>
                                </tr>
                                <tr>
                                    <th>No. Surat</th>
                                    <td>{{ $number }}</td>
                                </tr>

                                {{-- Conditional fields based on document type --}}
                                @if($document_id == '1')
                                    <tr>
                                        <th>Pengirim</th>
                                        <td>{{ $objective }}</td> <!-- Field for Surat Masuk -->
                                    </tr>
                                @elseif($document_id == '2')
                                    <tr>
                                        <th>Tujuan</th>
                                        <td>{{ $objective }}</td> <!-- Field for Surat Keluar -->
                                    </tr>
                                @endif

                                <tr>
                                    <th>Tanggal Surat</th>
                                    <td>{{ $date ? $date->format('d F Y') : '-' }}</td>
                                </tr>
                                
                                <tr>
                                    <th>Keterangan Surat</th>
                                    <td>{{ $description }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-md-6 text-center">
                            <h6>Berkas Surat </h6>
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

    @section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
    
</div>
