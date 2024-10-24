<?php

namespace App\Livewire\Arsip;

use Livewire\Component;

class DocumentArchive extends Component
{
    
    public $title = 'Arsip Dokumen';
    public $tab = 'surat-masuk';
    public $keyword;
    public $suratMasuk = [];
    public $suratKeluar = [];
    public $isOpen = false;
    public $editMode = false;






    
    public function render()
    {
        return view('livewire.arsip.document-archive', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
