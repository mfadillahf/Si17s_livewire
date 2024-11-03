<?php

namespace App\Livewire\Request;

use Livewire\Component;

class RequestEdit extends Component
{
    public $title = 'Tambah User Request';
    public function render()
    {
        return view('livewire.request.request-edit');
    }
}
