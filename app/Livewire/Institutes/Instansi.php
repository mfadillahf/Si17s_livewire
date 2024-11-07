<?php

namespace App\Livewire\Institutes;

use Livewire\Component;

class Instansi extends Component
{
    public $title = 'Data Instansi';
    public function render()
    {
        return view('livewire.institutes.instansi', [
          
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
