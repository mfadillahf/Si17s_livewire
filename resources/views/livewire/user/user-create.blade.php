<div>
    @section('css')
    @vite(['node_modules/vanillajs-datepicker/dist/css/datepicker.min.css'])
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
                        <h4 class="card-title text-white">Tambah Data User Aplikasi</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='create'>
                            <div class="row mb-3">
                                <div class="col-md-12 form-group">
                                    <label class="form-label" for="tipe_user">Tipe User</label>
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
                                        <label class="form-label" for="userid">User ID</label>
                                        <input type="text" wire:model.defer="user_identity" class="form-control" placeholder="User ID">
                                        <small class="badge bg-info-subtle text-info">User ID di Aplikasi</small>
                                        @error('user_identity') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">NIP/NIK</label>
                                        <input type="text" wire:model.defer="identity_number" class="form-control" placeholder="No. Identitas">
                                        <small class="badge bg-info-subtle text-info">Input No. Identitas (Pilih Salah Satu)</small>
                                        @error('identity_number') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">Nama User</label>
                                        <input type="text" wire:model.defer="name" class="form-control" placeholder="Nama">
                                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">Email</label>
                                        <input type="text" wire:model.defer="email" class="form-control" placeholder="Email">
                                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">Telepon</label>
                                        <input type="text" wire:model.defer="phone_number" class="form-control" placeholder="Telepon">
                                        @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">Jenis User</label>
                                        <select wire:model="user_type_id" class="form-select">
                                            <option value=null disabled selected>Pilih Jenis User</option>
                                            <option value="1">PA/KPA</option>
                                            <option value="2">PPK</option>
                                            <option value="3">POKJA</option>
                                            <option value="4">PP</option>
                                            <option value="5">Admin SKPD</option>
                                            <option value="6">Operator</option>
                                            <option value="7">Admin</option>
                                            <option value="8">Pimpinan</option>
                                        </select>
                                        @error('user_type_id') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-12 form-group">
                                        <label class="form-label" for="">Jenis Aplikasi</label>
                                        <select wire:model="report_category_id" class="form-select">
                                            <option value=null disabled selected>Pilih Jenis Aplikasi</option>
                                            <option value="1">SPSE</option>
                                            <option value="2">SIRUP</option>
                                            <option value="3">e-Katalog</option>
                                            <option value="4">SILAPRAJA</option>
                                            <option value="5">Bella Pengadaan</option>
                                        </select>
                                        @error('report_category_id') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                            @elseif($is_auditor == '1')
                                <div wire:key="auditor-form" class="row mb-3">
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="userid">User ID</label>
                                        <input type="text" wire:model.defer="user_identity" class="form-control" placeholder="User ID">
                                        <small class="badge bg-info-subtle text-info">User ID di Aplikasi</small>
                                        @error('user_identity') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">NIP/NRP</label>
                                        <input type="text" wire:model.defer="identity_number" class="form-control" placeholder="No. Identitas">
                                        <small class="badge bg-info-subtle text-info">Input No. Identitas (Pilih Salah Satu)</small>
                                        @error('identity_number') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12 form-group">
                                        <label class="form-label" for="">Nama User</label>
                                        <input type="text" wire:model.defer="name" class="form-control" placeholder="Nama">
                                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-6 form-group">
                                        <label class="form-label" for="">Email</label>
                                        <input type="text" wire:model.defer="email" class="form-control" placeholder="Email">
                                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="form-label" for="">Telepon</label>
                                        <input type="text" wire:model.defer="phone_number" class="form-control" placeholder="Telepon">
                                        @error('phone_number') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>
                                </div>
                            @endif

                            <div class="form-footer d-flex justify-content-end mt-4">
                                <a href="{{ route('user') }}" class="btn btn-secondary me-2">Tutup</a>
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

    @section('script')
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>
