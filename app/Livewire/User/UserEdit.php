<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\AppUser as ModelsUser;

class UserEdit extends Component
{
    public $title = 'Edit User';
    public $user;
    public $is_auditor;
    public $user_identity; 
    public $name; 
    public $email; 
    public $phone_number; 
    public $identity_number; 
    public $identity_type; 
    public $user_type; 
    public $app_type; 
    
    public $user_type_id; 
    public $report_category_id; 

    public function mount($id)
    {
            $this->user = ModelsUser::with('userType', 'reportCategory')->find($id);
            $this->is_auditor = $this->user->is_auditor;
            $this->user_identity = $this->user->user_identity;
            $this->name = $this->user->name;
            $this->email = $this->user->email;
            $this->phone_number = $this->user->phone_number;
            $this->identity_number = $this->user->identity_number;
            $this->identity_type = $this->user->identity_type;
            $this->user_type = $this->user->user_type;
            $this->app_type = $this->user->app_type;

            $this->user_type_id = $this->user->user_type_id;
            $this->report_category_id = $this->user->report_category_id;

    }

    public function update()
    {

        $this->validate([
            'is_auditor' => 'required|integer',
            'user_identity' => 'nullable|integer',
            'name' => 'required|string',
            'email' => 'nullable|email',
            'phone_number' => 'nullable|string|max:15|regex:/^08\d{8,13}$/',
            'identity_number' => 'nullable|string',
            'identity_type' => 'nullable|string',
            'user_type' => 'nullable|string',
            'app_type' => 'nullable|string',
            'user_type_id' => 'nullable|integer',
            'report_category_id' => 'nullable|integer',
        ]);

        $this->user->update([
            'is_auditor' => $this->is_auditor,
            'user_identity' => $this->user_identity,
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'identity_number' => $this->identity_number,
            'identity_type' => $this->identity_type,
            'user_type' => $this->user_type,
            'app_type' => $this->app_type,
            'user_type_id' => $this->user_type_id,
            'report_category_id' => $this->report_category_id,
        ]);
        
        $this->dispatch('swal:edit');
        return redirect('/user-aplikasi');
    }

    public function render()
    {
        return view('livewire.user.user-edit', [
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
