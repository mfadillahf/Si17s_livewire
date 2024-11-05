<?php

namespace App\Livewire\Consultations;

use App\Models\ConsultationDocument;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ConsultationReport as ModelsConsultation;


class KonsultasiCreate extends Component
{
    use WithFileUploads;

    public $titles = 'Tambah Pelaporan dan Konsultasi';
    public $name;
    public $identity_number;
    public $phone_number;
    public $institute;
    public $media_report_id = '';
    public $title;
    public $description;
    public $report_category_id = '';
    public $solution;
    public $ticket_number;
    public $status = '';
    public $started_at;
    public $finished_at;
    public $berkas;
    public $receipt;

    public function create()
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
            'berkas' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,jpg,png,jpeg,webp|max:10240',
            'receipt' => 'nullable|string',
        ]);


        $authorName = str_replace(' ', '_', $this->name);

        $timestamp = time();
        $uniqueHash = substr(md5($timestamp . $authorName), 0, 10);
        $extension = $this->berkas->getClientOriginalExtension();
        
        $formattedFileName = "{$authorName}_{$timestamp}_{$uniqueHash}.{$extension}";
        $filePath = $this->berkas->storeAs('public/files/consultations', $formattedFileName);

        $ctn = ModelsConsultation::create([
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

        ConsultationDocument::create([
            'file' => str_replace('public/', '', $filePath),
            'consultation_report_id' => $ctn -> id,    
        ]);

        $this->dispatch('swal:success');
        return redirect('/konsultasi');
    }

    public function render()
    {
        return view('livewire.consultations.konsultasi-create', [
        ])->layout('layouts.vertical', ['title' => $this->titles]);
    }
}
