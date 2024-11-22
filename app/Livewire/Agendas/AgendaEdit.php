<?php

namespace App\Livewire\Agendas;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Agenda as ModelsAgenda;
use App\Models\AgendaImage;
use Illuminate\Support\Facades\Storage;

class AgendaEdit extends Component
{
    use WithFileUploads;
    public $title = 'Edit Agenda';
    public $agenda;
    public $name;
    public $description;
    public $started_at;
    public $finished_at;
    public $employee_tagging;
    public $images;
    public $fileLinks = [];
    public $toDelete = [];
    public $tempFiles = [];
    public $newImage;

    public function mount($id)
    {
            $this->agenda = ModelsAgenda::with('images')->find($id);
            $this->name = $this->agenda->name;
            $this->description = $this->agenda->description;
            $this->started_at = $this->agenda->started_at;
            $this->finished_at = $this->agenda->finished_at;
            $this->employee_tagging = $this->agenda->employee_tagging;
            $this->fileLinks = $this->agenda->images->map(function ($image) {
                return [
                    'id' => $image->id,
                    'name' => pathinfo($image->file, PATHINFO_BASENAME),
                    'url' => Storage::url($image->file),
                ];
            })->toArray();

    }

    public function update()
    {
    // Validate inputs
        $this->validate([
            'name' => 'required|string',
            'started_at' => 'required|date',
            'finished_at' => 'nullable|date|after_or_equal:started_at',
            'description' => 'required|string',
            'employee_tagging' => 'nullable|string',
        ]);

        $this->agenda->update([
            'name' => $this->name,
            'started_at' => $this->started_at,
            'finished_at' => $this->finished_at,
            'description' => $this->description,
            'employee_tagging' => $this->employee_tagging,
        ]);

        foreach ($this->toDelete as $fileId) {
            // Cari gambar berdasarkan ID
            $file = AgendaImage::find($fileId);
            if ($file) {
                // Hapus file dari storage
                Storage::delete($file->file);
                // Hapus file dari database
                $file->delete();
            }
        }

        // Simpan file sementara ke lokasi permanen dan database
        foreach ($this->tempFiles as $tempFile) {
            $permanentPath = str_replace('public/temp', 'public/images/agenda', $tempFile['path']);
            Storage::move($tempFile['path'], $permanentPath);
    
            // Simpan ke database hanya saat update
            AgendaImage::create([
                'agenda_id' => $this->agenda->id,
                'file' => $permanentPath,
            ]);
        }

        $this->tempFiles = [];
        $this->toDelete = [];

        $this->dispatch('swal:edit');
        return redirect('/agenda');
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
        return view('livewire.agendas.agenda-edit', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
