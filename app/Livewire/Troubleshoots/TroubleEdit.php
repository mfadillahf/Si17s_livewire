<?php

namespace App\Livewire\Troubleshoots;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\TroubleshootReport as ModelsTroubleshoot;
use App\Models\TroubleshootFile;
use Illuminate\Support\Facades\Storage;

class TroubleEdit extends Component
{
    use WithFileUploads;

    public $title = 'Edit Troubleshooting';
    public $trouble;
    public $date;
    public $description;
    public $action;
    public $troubleshoot_category_id;
    public $berkas;
    public $fileLinks = [];
    public $toDelete = [];
    public $newFiles = [];

    public function mount($id)
    {
            $this->trouble = ModelsTroubleshoot::with('troubleshootFiles')->find($id);
            $this->date = $this->trouble->date;
            $this->description = $this->trouble->description;
            $this->action = $this->trouble->action;

            $this->troubleshoot_category_id = $this->trouble->troubleshoot_category_id;

            $this->file();
    }

    public function update()
    {

        $this->validate([
            'date' => 'nullable|date',
            'description' => 'nullable|string',
            'action' => 'nullable|string',
            'troubleshoot_category_id' => 'required|integer',
        ]);

        $this->trouble->update([
            'date' => $this->date,
            'description' => $this->description,
            'action' => $this->action,
            'troubleshoot_category_id' => $this->troubleshoot_category_id,

        ]);

        foreach ($this->toDelete as $fileId) {
            $file = TroubleshootFile::find($fileId);
            if ($file && $file->file && Storage::exists($file->file)) {
                Storage::delete($file->file);
            }
            $file?->delete();
        }

        foreach ($this->newFiles as $file) {
            $permanentPath = 'public/files/troubleshooting/' . $file['name'];
            Storage::move($file['path'], $permanentPath); 

            TroubleshootFile::create([
                'troubleshoot_report_id' => $this->trouble->id,
                'file' => $permanentPath,
            ]);
        }

        $this->newFiles = [];
        $this->toDelete = [];

        $this->dispatch('swal:edit');

        return redirect('/troubleshooting');
    }

    public function file()
    {
        // Load all files associated with this archive
        $this->fileLinks = $this->trouble->troubleshootFiles->map(function ($f) {
            return [
                'id' => $f->id,
                'name' => pathinfo($f->file, PATHINFO_BASENAME),
                'url' => Storage::url($f->file), // Generate the file URL
            ];
        });

        
        // dd($this->fileLinks);
    }

    public function deleteFile($fileId)
    {
        // Add the file ID to the toDelete array
        $this->toDelete[] = $fileId;
    
        // Use the reject method to remove the file from fileLinks
        $this->fileLinks = collect($this->fileLinks)->reject(function ($file) use ($fileId) {
            return $file['id'] == $fileId;
        });
        
    }

    public function addFile()
    {
        $this->validate([
            'berkas' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,jpg,png,jpeg,webp|max:10240',
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
        return view('livewire.troubleshoots.trouble-edit', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
