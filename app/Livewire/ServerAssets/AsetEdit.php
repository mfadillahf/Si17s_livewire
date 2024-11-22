<?php

namespace App\Livewire\ServerAssets;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ServerAsset as ModelsAsset;
use App\Models\ServerAssetImage;
use Illuminate\Support\Facades\Storage;

class AsetEdit extends Component
{
    use WithFileUploads;
    public $title = 'Edit Aset Ruang Server';
    public $aset;
    public $name;
    public $type = '';
    public $serial_number;
    public $server_asset_category_id;
    public $fileLinks = [];
    public $toDelete = [];
    public $tempFiles = [];
    public $newImage;

    public function mount($id)
    {
            $this->aset = ModelsAsset::with('serverAssetImages', 'serverAssetFlows', 'lastServerAssetFlow')->find($id);
            $this->name = $this->aset->name;
            $this->type = $this->aset->type;
            $this->serial_number = $this->aset->serial_number;
            $this->server_asset_category_id = $this->aset->server_asset_category_id;
            $this->fileLinks = $this->aset->serverAssetImages->map(function ($image) {
                return [
                    'id' => $image->id,
                    'name' => pathinfo($image->file, PATHINFO_BASENAME),
                    'url' => Storage::url($image->file),
                ];
            })->toArray();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'serial_number' => 'required|string',
            'server_asset_category_id' => 'required|exists:server_asset_categories,id',
        ]);

        $this->aset->update([
            'name' => $this->name,
            'type' => $this->type,
            'serial_number' => $this->serial_number,
            'server_asset_category_id' => $this->server_asset_category_id,
        ]);

        foreach ($this->toDelete as $fileId) {
            // Cari gambar berdasarkan ID
            $file = ServerAssetImage::find($fileId);
            if ($file) {
                // Hapus file dari storage
                Storage::delete($file->file);
                // Hapus file dari database
                $file->delete();
            }
        }

        // Simpan file sementara ke lokasi permanen dan database
        foreach ($this->tempFiles as $tempFile) {
            $permanentPath = str_replace('public/temp', 'public/images/assets', $tempFile['path']);
            Storage::move($tempFile['path'], $permanentPath);
    
            // Simpan ke database hanya saat update
            ServerAssetImage::create([
                'server_asset_id' => $this->aset->id,
                'file' => $permanentPath,
            ]);
        }

        $this->tempFiles = [];
        $this->toDelete = [];

        $this->dispatch('swal:edit');
        return redirect('/ruang-server/aset');
    }

    public function deleteFile($fileIndex)
    {
        // Cek apakah file yang dihapus adalah file sementara atau file yang ada di database
        $file = $this->fileLinks[$fileIndex];
    
        // Jika file sudah ada di database (memiliki 'id')
        if ($file['id']) {
            // Hapus file dari array toDelete
            $this->toDelete[] = $file['id'];
        }
    
        // Hapus file dari array fileLinks (tampilan)
        unset($this->fileLinks[$fileIndex]);
    
        // Jika file sementara, hapus dari tempFiles
        if (isset($this->tempFiles[$fileIndex])) {
            unset($this->tempFiles[$fileIndex]);
        }
    
        // Reindex array fileLinks
        $this->fileLinks = array_values($this->fileLinks);
    }

    public function addFile()
    {
        $this->validate([
            'newImage' => 'required|image|mimes:jpg,png,jpeg,webp|max:10240',
        ]);

        // Simpan gambar sementara di folder temp
        $path = $this->newImage->store('public/temp');
        $name = $this->newImage->getClientOriginalName();

        // Simpan data file sementara dalam array (belum disimpan ke database)
        $this->tempFiles[] = [
            'path' => $path,
            'name' => $name,
        ];

        // Perbarui tampilan gambar sementara pada UI
        $this->fileLinks[] = [
            'id' => null, // Belum ada ID karena belum disimpan ke database
            'name' => $name,
            'url' => Storage::url($path),
        ];

        // Reset input image setelah upload
        $this->reset('newImage');
    }

    

    public function render()
    {
        return view('livewire.server-assets.aset-edit', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
