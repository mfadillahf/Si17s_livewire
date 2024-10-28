<?php

namespace App\Livewire\Arsip;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DocumentArchive as ModelsArchive;
use App\Models\DocumentArchiveFile;
use Illuminate\Support\Facades\Storage;

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
    public $document_id;
    public $berkas;
    public $fileLinks = [];
    public $toDelete = [];
    public $newFiles = [];


    public function mount($id)
    {
            $this->archive = ModelsArchive::with('documentArchiveFiles')->find($id);
            $this->date = $this->archive->date;
            $this->number = $this->archive->number;
            $this->subject = $this->archive->subject;
            $this->objective = $this->archive->objective;
            $this->description = $this->archive->description;

            $this->document_id = $this->archive->document_id;

            $this->file();
    }

    // edited
    public function update()
    {
    // Validate inputs
        $this->validate([
            'date' => 'nullable|date',
            'number' => 'nullable|string',
            'subject' => 'required|string',
            'objective' => $this->document_id == '1' ? 'required|string' : ($this->document_id == '2' ? 'required|string' : 'nullable|string'),
            'description' => 'nullable|string',
           
        ]);

        // Update archive details
        $this->archive->update([
            'date' => $this->date,
            'number' => $this->number,
            'subject' => $this->subject,
            'objective' => $this->objective,
            'description' => $this->description,
        ]);

        // Permanently delete files marked for deletion
        foreach ($this->toDelete as $fileId) {
            $file = DocumentArchiveFile::find($fileId);
            if ($file && $file->file && Storage::exists($file->file)) {
                Storage::delete($file->file);
            }
            $file?->delete();
        }

        // Save new files from temporary storage to permanent storage
        foreach ($this->newFiles as $file) {
            $permanentPath = 'public/files/arsip/' . $file['name'];
            Storage::move($file['path'], $permanentPath); // Move from temp to permanent location

            // Create a new database entry for the file
            DocumentArchiveFile::create([
                'document_archive_id' => $this->archive->id,
                'file' => $permanentPath,
            ]);
        }

        // Clear the arrays after processing
        $this->newFiles = [];
        $this->toDelete = [];

        // Dispatch success message
        $this->dispatch('swal:edit');

        // Redirect to document archive page
        return redirect('/arsip-dokumen');
    }

    public function file()
    {
        // Load all files associated with this archive
        $this->fileLinks = $this->archive->documentArchiveFiles->map(function ($f) {
            return [
                'id' => $f->id,
                'name' => pathinfo($f->file, PATHINFO_BASENAME),
                'url' => Storage::url($f->file), // Generate the file URL
            ];
        });

        
        // dd($this->fileLinks);
    }



    // hapus file pada berkas dokumen
    public function deleteFile($fileId)
    {
        // Add the file ID to the toDelete array
        $this->toDelete[] = $fileId;
    
        // Use the reject method to remove the file from fileLinks
        $this->fileLinks = collect($this->fileLinks)->reject(function ($file) use ($fileId) {
            return $file['id'] == $fileId;
        });
        
    }
    
    //edited
    public function addFile()
{
    $this->validate([
        'berkas' => 'required|file|mimes:jpg,png,pdf,doc,docx',
    ]);

    // Store the file temporarily and track it in newFiles
    $filePath = $this->berkas->store('temp');  // Store in a temporary directory

    $this->newFiles[] = [
        'path' => $filePath,
        'name' => $this->berkas->getClientOriginalName(),
    ];

    $this->fileLinks[] = [
        'id' => null,  // Not saved yet
        'url' => Storage::url($filePath),
        'name' => $this->berkas->getClientOriginalName(),
    ];

    $this->reset('berkas');
} 


    public function render()
    {
        // dd ($this->archive);

        return view('livewire.arsip.archive-edit', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
