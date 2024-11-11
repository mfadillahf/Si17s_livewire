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
    public $newFiles = [];

    public function mount($id)
    {
            $this->agenda = ModelsAgenda::with('images')->find($id);
            $this->name = $this->agenda->name;
            $this->description = $this->agenda->description;
            $this->started_at = $this->agenda->started_at;
            $this->finished_at = $this->agenda->finished_at;
            $this->employee_tagging = $this->agenda->employee_tagging;


            $this->file();
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
            $file = AgendaImage::find($fileId);
            if ($file && $file->file && Storage::exists($file->file)) {
                Storage::delete($file->file);
            }
            $file?->delete();
        }

        foreach ($this->newFiles as $file) {
            $permanentPath = 'public/images/agenda' . $file['name'];
            Storage::move($file['path'], $permanentPath); // Move from temp to permanent location

            // Create a new database entry for the file
            AgendaImage::create([
                'agenda_id' => $this->agenda->id,
                'file' => $permanentPath,
            ]);
        }

        // Clear the arrays after processing
        $this->newFiles = [];
        $this->toDelete = [];

        // Dispatch success message
        $this->dispatch('swal:edit');

        // Redirect to document archive page
        return redirect('/agenda');
    }

    public function file()
    {
        // Load all files associated with this archive
        $this->fileLinks = $this->agenda->images->map(function ($f) {
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
        // Add the file ID to the toDelete array (optional, if you want to track deletions)
        $this->toDelete[] = $fileId;

        // Find the file by ID in $this->fileLinks
        $file = collect($this->fileLinks)->firstWhere('id', $fileId);

        if ($file) {
            // Delete the file from storage
            Storage::delete($file['path']);
            
            // Remove the file from the fileLinks array and reindex the array
            $this->fileLinks = collect($this->fileLinks)
                ->reject(function ($file) use ($fileId) {
                    return $file['id'] == $fileId;
                })
                ->values()  // Reindex the array
                ->all();
        }
    }

    public function addFile()
    {
        $this->validate([
            'images' => 'required|image|mimes:jpg,png,jpeg,webp|max:10240', 
        ]);

            // Store each file in the 'temp' directory
            $filePath = $this->images->store('temp');  // Store in a temporary directory

            $this->newFiles[] = [
                'path' => $filePath,
                'name' => $this->images->getClientOriginalName(),
            ];
    
            $this->fileLinks[] = [
                'id' => null,  // Not saved yet
                'url' => Storage::url($filePath),
                'name' => $this->images->getClientOriginalName(),
            ];

        $this->reset('images');
    } 

    public function render()
    {
        return view('livewire.agendas.agenda-edit', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
