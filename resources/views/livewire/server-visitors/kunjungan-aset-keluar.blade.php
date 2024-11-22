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
                    <div class="card-header bg-danger">
                        <h4 class="card-title text-white">Tambah Aset Keluar</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='create'>
                            <div class="row mb-3">
                                <div class="col-12 form-group">
                                    <label class="form-label">Pilih Aset Masuk</label>
                                    <select id="multiSelect" wire:model.defer="selectedAsetId" class="form-select selectr" multiple>
                                        @foreach ($amk as $selectedAm)
                                            @if ($selectedAm->server_asset_category_id == 1) {{-- Filter hanya aset masuk --}}
                                                <option value="{{ $selectedAm->id }}">
                                                    {{ $selectedAm->name }} | {{ $selectedAm->type }} | {{ $selectedAm->serial_number }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('selectedAsetId') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="tanggal_pemeliharaan" class="form-label">Tanggal Diambil</label>
                                    <input class="form-control" type="date" value="" id="example-date-input" wire:model="exited_date">
                                    <small class="badge bg-info-subtle text-info">Tanggal Aset Keluar</small>
                                </div>
                            </div>

                            <div class="form-footer d-flex justify-content-end mt-4">
                                <a href="{{ route('kunjungan') }}" class="btn btn-secondary me-2">Tutup</a>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-save mr-1"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>
