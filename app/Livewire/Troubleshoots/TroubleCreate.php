<?php

namespace App\Livewire\Troubleshoots;

use App\Models\TroubleshootFile;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\TroubleshootReport as ModelsTroubleshoot;

class TroubleCreate extends Component
{
    use WithFileUploads;

    public $title = 'Tambah Troubleshooting';
    public $date;
    public $description;
    public $action;
    public $troubleshoot_category_id;
    public $berkas;

    public function create()
    {

        $this->validate([
            'date' => 'nullable|date',
            'description' => 'nullable|string',
            'action' => 'nullable|string',
            'troubleshoot_category_id' => 'required|integer',
            'berkas' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,jpg,png,jpeg,webp|max:10240',
        ]);

        $originalFileName = $this->berkas->getClientOriginalName();
        $filePath = $this->berkas->storeAs('public/files/consultations', $originalFileName);

        $tsr = ModelsTroubleshoot::create([
            'date' => $this->date,
            'description' => $this->description,
            'action' => $this->action,
            'troubleshoot_category_id' => $this->troubleshoot_category_id,
        ]);

        TroubleshootFile::create([
            'file' => $filePath,
            'troubleshoot_report_id' => $tsr -> id,    
        ]);

        $this->dispatch('swal:success');
        return redirect('/troubleshooting');
    }

    public function render()
    {
        return view('livewire.troubleshoots.trouble-create', [
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
