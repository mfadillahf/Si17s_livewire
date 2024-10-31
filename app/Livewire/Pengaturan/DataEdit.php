<?php

namespace App\Livewire\Pengaturan;

use App\Models\User as ModelsDataUser;
use App\Models\Role;
use Livewire\Component;

class DataEdit extends Component
{
    public $title = 'Edit Data User';
    public $user;
    public $name;
    public $email;
    public $password;
    public $confirm;
    public $role;

    public function mount($id)
    {
        $this->user = ModelsDataUser::with('roles')->find($id);
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->role = $this->user->roles->pluck('id')->toArray();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'password' => 'nullable|string|min:6',
            'confirm' => 'same:password',
            'role' => 'required|array|min:1',
        ]);

        // Update user data
        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        // Update roles
        $this->user->roles()->sync($this->role);

        // Dispatch success message
        $this->dispatch('swal:edit');
        return redirect('/data-user');
    }

    public function render()
    {
        return view('livewire.pengaturan.data-edit', [
            'roles' => Role::all(),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
