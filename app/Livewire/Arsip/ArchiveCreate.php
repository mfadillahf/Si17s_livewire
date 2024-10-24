<?php

namespace App\Livewire\Arsip;

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
    public $pengirim;
    public $tujuan;
    public $description;
    public $berkas;


    public function create()
    {
        
        $this->validate([
            'date' => 'nullable|date',
            'number' => 'nullable|string',
            'subject' => 'required|string',
            'jenis' => 'required|in:masuk,keluar',
            'pengirim' => $this->jenis == 'masuk' ? 'required|string' : 'nullable|string', 
            'tujuan' => $this->jenis == 'keluar' ? 'required|string' : 'nullable|string', 
            'description' => 'nullable|string',
            'berkas' => 'required|file|mimes:pdf,doc,docx,xls,xlsx|max:2048',
        ]);

        $filePath = $this->berkas->store('berkas_surat', 'public');

        ModelsArchive::create([
            'date' => $this->date,
            'number' => $this->number, 
            'subject' => $this->subject,
            'jenis' => $this->jenis,
            'pengirim' => $this->jenis == 'masuk' ? $this->pengirim : null,
            'tujuan' => $this->jenis == 'keluar' ? $this->tujuan : null,
            'description' => $this->description, 
            'berkas' => $filePath,
            
        ]);

        return redirect('arsip');
    } 

    public function render()
    {
        return view('livewire.arsip.archive-create', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}

