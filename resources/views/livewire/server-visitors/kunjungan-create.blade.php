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

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Daftar Kunjungan</div>
            <div class="card-body">
                <!-- Input Pencarian -->
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan kata pencarian..." wire:model="searchQuery">
                    <button class="btn btn-primary" wire:click="searchTamu">Cari</button>
                </div>
        
                {{-- @if ($searchResults) --}}
                <table class="table table-striped sortable mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIK</th>
                            <th>HP</th>
                            <th>Instansi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through search results -->
                        @foreach ($searchResults as  $data => $result)
                        <tr>
                            <td>{{ $result['nama'] }}</td>
                            <td>{{ $result['email'] }}</td>
                            <td>{{ $result['nik'] }}</td>
                            <td>{{ $result['hp'] }}</td>
                            <td>{{ $result['instansi'] }}</td>
                            <td>
                                <button class="btn btn-sm btn-info" wire:click="saveToVisitor({{ $data }})">Simpan</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- @else --}}
                    {{-- <p class="mt-3">Hasil pencarian tidak ditemukan.</p> --}}
                {{-- @endif --}}
            </div>
        </div>

        @if ($selectedData)
        <div class="card mb-4 mt-4">
            <div class="card-header bg-primary text-white">Data Kunjungan yang di pilih</div>
            <div class="card-body">
                <table class="table table-striped mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>NIK</th>
                            <th>HP</th>
                            <th>Instansi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($selectedData as $index => $item)
                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['email'] }}</td>
                            <td>{{ $item['nik'] }}</td>
                            <td>{{ $item['hp'] }}</td>
                            <td>{{ $item['instansi'] }}</td>
                            <td>
                                <button class="btn btn-sm btn-danger" wire:click="removeFromSelectedData({{ $index }})">Hapus</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
        
        <div class="card mb-4 mt-4">
            <div class="card-header bg-primary text-white">Detail Kunjungan</div>
            <div class="card-body">
                <!-- Form Inputs -->
                <div class="mb-3">
                    <label for="tanggalMasuk" class="form-label">Tanggal Masuk</label>
                    <input type="datetime-local" class="form-control" id="tanggalMasuk" wire:model='entered_at'>
                </div>
        
                <div class="mb-3">
                    <label for="keperluan" class="form-label">Keperluan</label>
                    <textarea id="visitor-description" class="form-control" wire:model='description'></textarea>
                </div>
        
                <!-- Form Footer -->
                <div class="form-footer d-flex justify-content-end mt-4">
                    <a href="{{ route('kunjungan') }}" class="btn btn-secondary me-2">Tutup</a>
                    <button wire:click="saveToReport" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Simpan
                    </button>
                </div>
            </div>
        </div>

    
    </div>

    @section('script')
    @vite(['resources/js/pages/forms-advanced.js'])
    @vite(['resources/js/pages/sweet-alert.init.js'])
    @endsection
</div>
