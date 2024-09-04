@extends('components.layouts.app', ['title' => 'Data Barang'])

@section('css')
@vite(['node_modules/simple-datatables/dist/style.css'])
@endsection



@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Daftar Barang</h4>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-3 d-flex justify-content-end" style="padding-right: 10px">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#itemModal">
                            Tambah Barang
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table datatable" id="datatable_2">
                            <thead>
                                <tr>
                                    <th style="width: 16px;">
                                        <div class="form-check mb-0 ms-n1">
                                            <input type="checkbox" class="form-check-input" wire:model="selectAll" id="select-all">
                                        </div>
                                    </th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>Kondisi</th>
                                    <th>Lokasi/pemegang</th>
                                    <th>Aksi</th>
                                </tr>
                                
                            </thead>
                            <tbody>
                                {{-- @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->merk }}</td>
                                    <td>{{ $item->type }}</td>
                                    <td>{{ $item->condition }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->updated_at->format('d-m-Y') }}</td>
                                    <td>
                                        <button wire:click="edit({{ $item->id }})" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#itemModal">
                                            Edit
                                        </button>
                                        <button wire:click="delete({{ $item->id }})" class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                </div>
                                @endforeach --}}
                            </tbody>
                        </table>
                        {{-- {{ $items->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
@vite(['resources/js/pages/datatable.init.js'])
@endsection
