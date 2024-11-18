<?php

namespace App\Livewire\Visitors;

use App\Models\Institute;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Visitor as ModelsVisitor;

class Tamu extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title = 'Tamu Ruang Server';
    public $visitor;
    public $visitor_id;
    public $identity_number;
    public $identity_type = '';
    public $name;
    public $sex = '';
    public $email;
    public $phone_number;
    public $address;
    public $institute;
    public $institutes;
    public $institute_id;
    public $selectedInstitute;
    public $keyword;
    public $showDetail = false;
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
        $this->identity_number = '';
        $this->identity_type = '';
        $this->name = '';
        $this->sex = '';
        $this->email = '';
        $this->phone_number = '';
        $this->selectedInstitute = '';
        $this->resetValidation();

        $this->showDetail = false;
        $this->showEdit = false;
        $this->showDelete = false;
    }

    public function render()
    {
        if ($this->keyword != null) {
            
            $data = ModelsVisitor::where('identity_number', 'like', '%' . $this->keyword . '%')  
            ->orWhere('name', 'like', '%' . $this->keyword . '%')
            ->orWhere('action', 'like', '%' . $this->keyword . '%')
            ->orWhere('phone_number', 'like', '%' . $this->keyword . '%')
            ->orWhere('email', 'like', '%' . $this->keyword . '%')
            ->orWhere('institute', 'like', '%' . $this->keyword . '%')
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(5);
        } else {
            
            $data = ModelsVisitor::orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }

        return view('livewire.visitors.tamu', [
            'dt' => $data,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function detail($id)
    {
        $this->visitor = ModelsVisitor::find($id);
        
        $this->name = $this->visitor->name;
        $this->identity_number = $this->visitor->identity_number;
        $this->identity_type = $this->visitor->identity_type;
        $this->sex = $this->visitor->sex;
        $this->email = $this->visitor->email;
        $this->phone_number = $this->visitor->phone_number;
        $this->institute = $this->visitor->institute;

        $this->showDetail = true;
    }

    public function closeDetail()
    {
        $this->resetForm();
        $this->showDetail = false;
    }

    public function mount()
    {
        $this->institutes = Institute::all();
    }

    public function openEdit($id)
    {
        $this->visitor = ModelsVisitor::with('institute')->find($id);
        $this->name = $this->visitor->name;
        $this->identity_number = $this->visitor->identity_number;
        $this->email = $this->visitor->email;
        $this->phone_number = $this->visitor->phone_number;
        $this->address = $this->visitor->adress;

        $this->selectedInstitute = $this->visitor->institute_id;

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
            'identity_number' => 'required|string|max:16|regex:/^([1-9][0-9]{15})$/',
            'identity_type' => 'required|string',
            'sex' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'nullable|string|max:15|regex:/^\+62\d{8,13}$/',
            'address' => 'nullable|string',
            'selectedInstitute' => 'required|integer|exists:institutes,id',
        ]);

        $this->visitor->update([
            'name' => $this->name,
            'identity_number' => $this->identity_number,
            'identity_type' => $this->identity_type,
            'sex' => $this->sex,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'institute_id' => $this->selectedInstitute,
        ]);

        $this->resetForm();
        $this->showEdit = false;
        $this->dispatch('swal:edit');
    }

    // delete
    public function openDelete($id)
    {
        $this -> visitor_id = $id;
        $a = ModelsVisitor::find($id);
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
        $a = ModelsVisitor::find($this -> visitor_id);
        $a->delete();
        
        
        $this->showDelete = false;
        $this->dispatch('swal:delete');
    }

}
