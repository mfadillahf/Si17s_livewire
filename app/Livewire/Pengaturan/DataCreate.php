<?php

namespace App\Livewire\Pengaturan;

use App\Models\User as ModelsDataUser;
use App\Models\Role;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class DataCreate extends Component
{
    public $title = 'Tambah Data User';
    public $user;
    public $name;
    public $email;
    public $password;
    public $confirm;
    public $role = [];

    public function create()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'confirm' => 'required|same:password', 
            'role' => 'required|array|min:1',
        ]);

        $this->user = ModelsDataUser::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->user->roles()->sync($this->role);
        
        $this->dispatch('swal:success');
        return redirect('/data-user');
    } 


    public function render()
    {
        return view('livewire.pengaturan.data-create', [
            'roles' => Role::all(),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
