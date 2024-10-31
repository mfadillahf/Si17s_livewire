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
                        <h4 class="card-title text-white">Tambah Data User</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='create'>
                            <div class="row mb-3">
                                <div class="col-6 form-group">
                                    <label class="form-label" for="">Nama</label>
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
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" wire:model.defer="password" class="form-control" placeholder="Input Password">
                                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label class="form-label" for="confirm">Konfirmasi Password</label>
                                    <input type="password" wire:model.defer="confirm" class="form-control" placeholder="Input Konfirmasi Password">
                                    @error('confirm') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-12 form-group">
                                    <label class="form-label" for="role">Role</label>
                                    <select id="multiSelect" wire:model.defer="role" class="form-select" multiple>
                                        <option value="" disabled selected>Pilih Role</option>
                                        <option value="1">Helpdesk</option>
                                        <option value="2">Verifikator</option>
                                        <option value="3">Admin Sistem</option>
                                        <option value="4">Admin PPE</option>
                                        <option value="5">Pimpinan</option>
                                        <option value="6">Pengelola Sarana dan Prasarana</option>
                                    </select>
                                    @error('role') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="form-footer d-flex justify-content-end mt-4">
                                <a href="{{ route('datauser') }}" class="btn btn-secondary me-2">Tutup</a>
                                <button type="submit" class="btn btn-primary">
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
