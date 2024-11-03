<?php

namespace App\Livewire\Request;

use App\Models\DocumentArchive;
use App\Models\AppUser;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use App\Models\Request as ModelsRequest;

class RequestCreate extends Component
{
    public $title = 'Tambah User Request';
    public $request;
    public $is_auditor = null;
    public $document_number; 
    public $start_period; 
    public $end_period; 
    public $document; 
    public $institute; 
    public $audited_packages; 
    public $institute_id; 
    
    public $document_archive_id = null;
    public $showDetail = false;

    public $subject;
    public $number;
    public $objective; 
    public $date; 
    public $description; 
    public $fileLinks = []; 
    public $document_id;

    public function showDocumentDetails($id)
    {
        $this->document = DocumentArchive::with('documentArchiveFiles')->find($id);
        
        // Set properties for modal
        $this->date = $this->document->date ? Carbon::parse($this->document->date) : null;
        $this->number = $this->document->number;
        $this->subject = $this->document->subject;
        $this->description = $this->document->description;
        $this->objective = $this->document->objective;
        $this->document_id = $this->document->document_type_id;

        $this->file();

        // Show modal
        $this->showDetail = true;
    }

    public function closeDetail()
    {
        $this->showDetail = false;
    }

    public function file()
    {
        // Load all files associated with this archive
        $this->fileLinks = $this->document->documentArchiveFiles->map(function ($f) {
            return [
                'id' => $f->id,
                'name' => pathinfo($f->file, PATHINFO_BASENAME),
                'url' => Storage::url($f->file), // Generate the file URL

            ];
        });
    }
    

    public function create()
    {
        $this->validate([
            'document_number' => 'nullable|string',
            'start_period' => 'nullable|date',
            'end_period' => 'nullable|date|after_or_equal:started_period',
            'document' => 'nullable|string',
            'institute' => 'nullable|string',
            'audited_packages' => 'nullable|string',
            'is_auditor' => 'required',
            'institute_id' => 'nullable|integer|exists:institutes,id',
            'document_archive_id' => 'required|integer|exists:document_archives,id',
        ]);

        ModelsRequest::create([
            'document_number' => $this->document_number,
            'start_period' => $this->start_period,
            'end_period' => $this->end_period,
            'document' => $this->document,
            'institute' => $this->institute,
            'audited_packages' => $this->audited_packages,
            'is_auditor' => $this->is_auditor,
            'institute_id' => $this->institute_id,
            'document_archive_id' => $this->document_archive_id,
        ]);

        $this->dispatch('swal:success');
        return redirect('/user-permintaan');
    } 

    public function render()
    {
        return view('livewire.request.request-create', [
            'da' => DocumentArchive::all(),
            'rnoa' => AppUser::where('is_auditor', 0)->get(),
            'rau' =>  AppUser::where('is_auditor', 1)->get(),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
