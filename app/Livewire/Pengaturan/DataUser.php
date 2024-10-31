<?php

namespace App\Livewire\Pengaturan;

use App\Models\User as ModelsDataUser;
use Livewire\Component;
use App\Models\Role;

class DataUser extends Component
{
    public $title = 'Data User';
    public $user;
    public $name;
    public $email;
    public $password;
    public $confirm;
    public $role;
    public $showDetail = false;
    public $showDelete = false;
    public $lastUpdatedDate;
    public $datauser_id;
    public $keyword;
    public $sortColumn = 'name';
    public $sortDirection = 'asc';

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->confirm = '';
        $this->role = [];
        $this->resetValidation();

        $this->showDetail = false;
        $this->showDelete = false;

    }
    

    
    public function render()
    {
        if ($this->keyword != null) {
            $data = ModelsDataUser::where('name', 'like', '%' . $this->keyword . '%')
                ->orWhere('email', 'like', '%' . $this->keyword . '%')
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->with(['roles']) 
                ->paginate(5);
        } else {
            $data = ModelsDataUser::orderBy($this->sortColumn, $this->sortDirection)
                ->with(['roles']) 
                ->paginate(5);
        }
    
        return view('livewire.pengaturan.data-user', [
            'dataUser' => $data,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }


    public function reset()
    {
        
    }
}
