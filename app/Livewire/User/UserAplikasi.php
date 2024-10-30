<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\AppUser as ModelsUser;

class UserAplikasi extends Component
{
    public $title = 'User Aplikasi';
    public $tab = '';
    public $activeTab = 'Non-Auditor';
    public $keyword;
    public $user;
    public $user_id;
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
    public $showDetail = false;
    public $showDelete = false;
    public $lastUpdatedDate;
    public $sortColumn = 'name';
    public $sortDirection = 'asc';


    public function setActiveTab($tabId)
    {
        $this->activeTab = $tabId;
    }

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function resetForm()
{
    $this->is_auditor = null;
    $this->user_identity = null;
    $this->name = '';
    $this->email = '';
    $this->phone_number = '';
    $this->identity_number = '';
    $this->identity_type = '';
    $this->user_type = '';
    $this->app_type = '';
    $this->user_type_id = null;
    $this->report_category_id = null;
}


    public function render()
    {
        if ($this->keyword != null) {
            $noa = ModelsUser::where('is_auditor', 0)
                ->where(function ($query) {
                    $query->where('user_identity', 'like', '%' . $this->keyword . '%')
                          ->orWhere('name', 'like', '%' . $this->keyword . '%')
                          ->orWhere('email', 'like', '%' . $this->keyword . '%');
                })
                ->with(['userType', 'reportCategory']) 
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        
            $au = ModelsUser::where('is_auditor', 1)
                ->where(function ($query) {
                    $query->where('user_identity', 'like', '%' . $this->keyword . '%')
                          ->orWhere('name', 'like', '%' . $this->keyword . '%')
                          ->orWhere('email', 'like', '%' . $this->keyword . '%');
                })
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        } else {
            $noa = ModelsUser::where('is_auditor', 0)
                ->with(['userType', 'reportCategory'])
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        
            $au = ModelsUser::where('is_auditor', 1)
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }
        

        return view('livewire.user.user-aplikasi', [
            'noa' => $noa,
            'au' => $au,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function detail($id)
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

        $this->showDetail = true;

        // dd($this->user);

    }
    
    public function closeDetail()
    {
        $this->resetForm();
        $this->showDetail = false;
    }

    public function openDelete($id)
    {
        $this -> user_id = $id;
        $a = ModelsUser::find($id);
        $this->lastUpdatedDate = $a->updated_at->format('d-m-Y');
        $this->showDelete = true;
    }

    public function closeDelete()
    {
        $this->showDelete = false;
        $this->dispatch('swal:cancel');
    }
    
    
    public function delete()
    {
        $a = ModelsUser::find($this -> user_id);
        $a->delete();
        
        
        $this->showDelete = false;
        $this->dispatch('swal:delete');
    }
}
