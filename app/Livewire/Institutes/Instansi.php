<?php

namespace App\Livewire\Institutes;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Institute As ModelsInstitute;

class Instansi extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title = 'Data Instansi';
    public $institute;
    public $institute_id;
    public $name;
    public $keyword;
    public $showEdit = false;
    public $showDelete = false;
    public $lastUpdatedDate;
    public $sortColumn = 'name';
    public $sortDirection = 'asc';

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function resetForm()
    {
        $this->name = '';
    }


    public function render()
    {
        if ($this->keyword != null) {
            
            $data = ModelsInstitute::where('name', 'like', '%' . $this->keyword . '%')  
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(5);
        } else {
            
            $data = ModelsInstitute::orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }
        
        return view('livewire.institutes.instansi', [
                'ins' => $data,
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function openEdit($id)
    {
        $this->institute = ModelsInstitute::find($id);
        $this->name = $this->institute->name;

        $this->showEdit = true;
    }

    public function closeEdit()
    {
        $this->resetForm();
        $this->showEdit = false;
    }

    public function update()
    {   
        $this->validate([
            'name' => 'required|string',
        ]);

        $this->institute->update([
            'name' => $this->name,

        ]);

        $this->resetForm();
        $this->showEdit = false;
        $this->dispatch('swal:edit');
    }

    public function openDelete($id)
    {
        $this -> institute_id = $id;
        $a = ModelsInstitute::find($id);
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
        $a = ModelsInstitute::find($this -> institute_id);
        $a->delete();
        
        
        $this->showDelete = false;
        $this->dispatch('swal:delete');
    }
}
