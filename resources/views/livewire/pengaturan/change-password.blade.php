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
                        <h4 class="card-title text-white">Ganti Password</h4>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='update'>
                            <div class="row mb-3">
                                <div class="col-12 form-group">
                                    <label class="form-label" for="">Password Lama</label>
                                    <input type="password" wire:model.defer="old_password" class="form-control" placeholder="input Password Lama">
                                    @error('old_password') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6 form-group">
                                    <label class="form-label" for="">Password Baru</label>
                                    <input type="password" wire:model.defer="new_password" class="form-control" placeholder="Input Password Baru">
                                    @error('new_password') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            
                                <div class="col-6 form-group">
                                    <label class="form-label" for="confirm">Konfirmasi Password Baru</label>
                                    <input type="password" wire:model.defer="confirm" class="form-control" placeholder="Input Konfirmasi Password">
                                    @error('confirm') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-footer d-flex justify-content-end mt-4">
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
