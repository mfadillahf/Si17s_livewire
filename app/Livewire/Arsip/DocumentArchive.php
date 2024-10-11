<?php

namespace App\Livewire\Arsip;

use Livewire\Component;

class DocumentArchive extends Component
{
    
    public $title = 'Arsip Dokumen';
    public function render()
    {
        return view('livewire.arsip.document-archive', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
