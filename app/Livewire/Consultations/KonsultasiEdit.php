<?php

namespace App\Livewire\Consultations;

use App\Models\ConsultationDocument;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ConsultationReport as ModelsConsultation;
use Illuminate\Support\Facades\Storage;

class KonsultasiEdit extends Component
{
    use WithFileUploads;

    public $titles = 'Edit Pelaporan dan Konsultasi';
    public $consultation;
    public $name;
    public $identity_number;
    public $phone_number;
    public $institute;
    public $media_report_id;
    public $title;
    public $description;
    public $report_category_id;
    public $solution;
    public $ticket_number;
    public $status;
    public $started_at;
    public $finished_at;
    public $berkas;
    public $receipt;
    public $fileLinks = [];
    public $toDelete = [];
    public $newFiles = [];
    
    public function mount($id)
    {
        $this->consultation = ModelsConsultation::with('reportCategory', 'mediaReport', 'consultationDocuments', 'user')->find($id);
        $this->identity_number = $this->consultation->identity_number;
        $this->name = $this->consultation->name;
        $this->phone_number = $this->consultation->phone_number;
        $this->started_at = $this->consultation->started_at;
        $this->finished_at = $this->consultation->finished_at;
        $this->institute = $this->consultation->institute;
        $this->title = $this->consultation->title;
        $this->description = $this->consultation->description;
        $this->solution = $this->consultation->solution;
        $this->ticket_number = $this->consultation->ticket_number;
        $this->status = $this->consultation->status;
        $this->receipt = $this->consultation->receipt;
        $this->media_report_id = $this->consultation->media_report_id;
        $this->report_category_id = $this->consultation->report_category_id;

        $this->file();
    }

    public function update()
    {

        $this->validate([
            'name' => 'nullable|string',
            'identity_number' => 'nullable|string',
            'phone_number' => 'nullable|string|max:15|regex:/^08\d{8,13}$/',
            'institute' => 'nullable|string',
            'media_report_id' => 'required|exists:media_reports,id',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'report_category_id' => 'required|exists:report_categories,id',
            'solution' => 'nullable|string',
            'ticket_number' => 'nullable|string',
            'status' => 'nullable|string',
            'started_at' => 'required|date',
            'finished_at' => 'nullable|date|after_or_equal:started_at',
            'receipt' => 'nullable|string',
        ]);

        $this->consultation->update([
            'identity_number' => $this->identity_number,
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'started_at' => $this->started_at,
            'finished_at' => $this->finished_at,
            'institute' => $this->institute,
            'title' => $this->title,
            'description' => $this->description,
            'solution' => $this->solution,
            'ticket_number' => $this->ticket_number,
            'status' => $this->status,
            'receipt' => $this->receipt,
            'media_report_id' => $this->media_report_id,
            'report_category_id' => $this->report_category_id,

        ]);

        foreach ($this->toDelete as $fileId) {
            $file = ConsultationDocument::find($fileId);
            if ($file && $file->file && Storage::exists($file->file)) {
                Storage::delete($file->file);
            }
            $file?->delete();
        }

        foreach ($this->newFiles as $file) {
            $authorName = str_replace(' ', '_', $this->name);
            $timestamp = time();
            $uniqueHash = substr(md5($timestamp . $authorName), 0, 10);
    
            $formattedFileName = "{$authorName}_{$timestamp}_{$uniqueHash}.{$file['extension']}";
            $permanentPath = "public/files/consultations/{$formattedFileName}";
            Storage::move($file['path'], $permanentPath); 

            ConsultationDocument::create([
                'consultation_report_id' => $this->consultation->id,
                'file' =>str_replace('public/', '', $permanentPath),
            ]);
        }

        $this->newFiles = [];
        $this->toDelete = [];

        $this->dispatch('swal:edit');

        return redirect('/konsultasi');
    }

    public function file()
    {
        // Load all files associated with this archive
        $this->fileLinks = $this->consultation->consultationDocuments->map(function ($f) {
            return [
                'id' => $f->id,
                'name' => pathinfo($f->file, PATHINFO_BASENAME),
                'url' => Storage::url($f->file), 
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
            'extension' => $this->berkas->getClientOriginalExtension(), 
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
        return view('livewire.consultations.konsultasi-edit', [
        ])->layout('layouts.vertical', ['title' => $this->titles]);
    }
}
