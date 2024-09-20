<div>

    @section('css')
    @vite(['node_modules/simple-datatables/dist/style.css'])
    @endsection

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Barang</h4>
                </div>
       
                <div  class="card-body pt-0">
                    <table class="table datatable" >
                        <tr>
                            <th><strong>Nama:</strong></th>
                            <td>{{ $name }}</td>
                        </tr>
                        <tr>
                            <th><strong>Merk:</strong></th>
                            <td>{{ $merk }}</td>
                        </tr>
                        <tr>
                            <th><strong>Jenis:</strong></th>
                            <td>{{ $type }}</td>
                        </tr>
                        <tr>
                            <th><strong>Foto Barang:</strong></th>
                            <td>
                                @if ($image)
                                    <img src="{{ Storage::url('images/barang/' . $image) }}" alt="Item Image" class="img-fluid rounded" style="max-height: 200px;">
                                @else
                                    <p>Foto tidak tersedia</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th><strong>Tahun Pengadaan:</strong></th>
                            <td>{{ $procurement_year }}</td>
                        </tr>
                        <tr>
                            <th><strong>Spesifikasi:</strong></th>
                            <td>{{ $spesification }}</td>
                        </tr>
                        <tr>
                            <th><strong>Kondisi:</strong></th>
                            <td>{{ $condition }}</td>
                        </tr>
                        <tr>
                            <th><strong>Lokasi/Pemegang:</strong></th>
                            <td>{{ $location }}</td>
                        </tr>
                    </table>
            
                    <div class="form-footer">
                        <a href="/barang" class="btn btn-secondary float-end">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @section('script')
    @vite(['resources/js/pages/datatable.init.js'])
    @endsection
</div>