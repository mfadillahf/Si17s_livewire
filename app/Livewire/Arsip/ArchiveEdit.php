<?php

namespace App\Livewire\Arsip;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DocumentArchive as ModelsArchive;
use App\Models\DocumentArchiveFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ArchiveEdit extends Component
{
    use WithFileUploads;

    public $title = 'Edit Dokumen';
    public $archive;
    public $date;
    public $number;
    public $subject;
    public $jenis;
    public $objective;
    public $description;
    public $berkas; 


    public function mount($id)
    {
            $this->archive = ModelsArchive::with('documentArchiveFiles')->find($id);
            $this->date = $this->archive->date;
            $this->number = $this->archive->number;
            $this->subject = $this->archive->subject;
            $this->jenis = $this->archive->jenis;
            $this->objective = $this->archive->objective;
            $this->description = $this->archive->description;
            $this->berkas = $this->archive->berkas;
    }

    public function update()
    {
        $this->validate([
            'date' => 'nullable|date',
            'number' => 'nullable|string',
            'subject' => 'required|string',
            'objective' => $this->jenis == '1' ? 'required|string' : 'nullable|string',
            'description' => 'nullable|string',
            'berkas' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx|max:10240', // Allow for null if not uploading a new file
        ]);

        if ($this->berkas) {
            foreach ($this->berkas as $file) {
                if ($file instanceof TemporaryUploadedFile) {
                    // Store new file
                    $filePath = $file->store('public/files/arsip');
                    
                    // Create a new record in the document_archive_files table
                    DocumentArchiveFile::create([
                        'file' => $filePath,
                        'document_archive_id' => $this->archive->id,
                    ]);
                }
            }
        }

        $this->archive->update([
            'date' => $this->date,
            'number' => $this->number,
            'subject' => $this->subject,
            'objective' => $this->objective,
            'description' => $this->description,
        ]);

        $this->dispatch('swal:edit');
        return redirect('/arsip-dokumen');
    }

    public function render()
    {
        return view('livewire.arsip.archive-edit', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
