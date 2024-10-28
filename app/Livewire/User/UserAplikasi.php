<?php

namespace App\Livewire\User;

use Livewire\Component;

class UserAplikasi extends Component
{
    public $title = 'User Aplikasi';
    public function render()
    {
        return view('livewire.user.user-aplikasi', [
            // '' => $data,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
