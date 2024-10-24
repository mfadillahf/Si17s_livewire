<?php

namespace App\Livewire\Arsip;

use Livewire\Component;

class ArchiveEdit extends Component
{
    public $title = 'Edit Dokumen';



    public function render()
    {
        return view('livewire.arsip.archive-edit', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
