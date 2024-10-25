<?php

namespace App\Livewire\Arsip;

use App\Models\DocumentArchiveFile;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\DocumentArchive as ModelsArchive;

class ArchiveCreate extends Component
{
    use WithFileUploads;

    public $title = 'Tambah Dokumen';
    public $date;
    public $number;
    public $subject;
    public $jenis = '';
    public $objective;
    public $description;
    public $berkas;


    public function create()
    {
        
        $this->validate([
            'date' => 'nullable|date',
            'number' => 'required|string',
            'subject' => 'required|string',
            'jenis' => 'required',
            'objective' => $this->jenis == '1' ? 'required|string' : 'nullable|string',
            'description' => 'nullable|string',
            'berkas' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:10240',
        ]);

        $filePath = $this->berkas->store('public/files/arsip');
        $documentId = ($this->jenis == '1') ? 1 : 2;

        $dai = ModelsArchive::create([
            'date' => $this->date,
            'number' => $this->number, 
            'subject' => $this->subject,
            'jenis' => $this->jenis,
            'objective' => $this->objective,
            'description' => $this->description, 
            'file' => $filePath,
            'document_id' => $documentId,
        ]);
            
        DocumentArchiveFile::create([
            'file' => $filePath,
            'document_archive_id' => $dai -> id,    
        ]);
        
        $this->dispatch('swal:success');
        return redirect('/arsip-dokumen');
    } 

    public function render()
    {
        return view('livewire.arsip.archive-create', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}

