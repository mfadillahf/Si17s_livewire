<?php

namespace App\Livewire\Pengaturan;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Component
{
    public $title = 'Ganti Password';
    public $uss;
    public $old_password;
    public $new_password;
    public $confirm;

    public function update()
    {
        $this->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:6',
            'confirm' => 'required|same:new_password',
        ]);

        $uss = Auth::user();

        if (!$uss) {
            return $this->addError('old_password', 'You must be logged in to change your password.');
        }

        if (!Hash::check($this->old_password, Auth::user()->password)) {
            return $this->addError('old_password', 'The old password is incorrect.');
        }

        $uss->password = Hash::make($this->new_password);
        $uss->save();

        $this->reset(['old_password', 'new_password', 'confirm']);
        $this->dispatch('swal:success');
    }

    public function render()
    {
        return view('livewire.pengaturan.change-password', [
            
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
