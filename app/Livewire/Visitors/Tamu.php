<?php

namespace App\Livewire\Visitors;

use Livewire\Component;

class Tamu extends Component
{
    public $title = 'Tamu Ruang Server';
    public function render()
    {
        return view('livewire.visitors.tamu', [
          
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
