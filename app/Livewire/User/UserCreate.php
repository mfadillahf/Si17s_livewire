<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\AppUser as ModelsUser;

class UserCreate extends Component
{
    public $title = 'Tambah User';
    public $is_auditor = null;
    public $user_identity; 
    public $name; 
    public $email; 
    public $phone_number; 
    public $identity_number; 
    public $identity_type; 
    public $user_type; 
    public $app_type; 
    
    public $user_type_id = null; 
    public $report_category_id = null; 
    
    public function create()
    {
        
        $this->validate([
            'is_auditor' => 'required|integer',
            'user_identity' => 'required|string|max:16|regex:/^([1-9][0-9]{15})$/',
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

        ModelsUser::create([
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
        
        // dd($this->is_auditor);

        $this->dispatch('swal:success');
        return redirect('/user-aplikasi');
    } 

    public function render()
    {
        return view('livewire.user.user-create', [
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
