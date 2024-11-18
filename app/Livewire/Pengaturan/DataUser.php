<?php

namespace App\Livewire\Pengaturan;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User as ModelsDataUser;

class DataUser extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title = 'Data User';
    public $user;
    public $user_id;
    public $name;
    public $email;
    public $password;
    public $confirm;
    public $role;
    public $showDetail = false;
    public $showGanti = false;
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


    public function openPassword($id)
    {
        $this -> user_id = $id;
        $this->showGanti = true;
    }

    public function gantiPassword()
    {
        // Temukan user berdasarkan userId
        $us = ModelsDataUser::find($this -> user_id);

        // Ganti password ke '123456'
        $us->password = bcrypt('123456');
        $us->save();


        $this->showGanti = false;
        $this->dispatch('swal:reset');
    }

    public function closePassword()
    {
        $this->showGanti = false;
        $this->dispatch('swal:cancel');
    }

    public function openDelete($id)
    {
        $this -> user_id = $id;
        $a = ModelsDataUser::find($id);
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
        $a = ModelsDataUser::find($this -> user_id);
        $a->delete();
        
        
        $this->showDelete = false;
        $this->dispatch('swal:delete');
    }
}
