<?php

namespace App\Livewire\Agendas;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\Agenda as ModelsAgenda;
use App\Models\AgendaImage;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\Attributes\Validate;

class Agenda extends Component
{
    use WithFileUploads;

    use WithPagination;
    public $title = 'Agenda';
    public $agenda;
    public $name;
    public $keyword;
    public $description;
    public $started_at;
    public $finished_at;

    public $images = [];
    public $employee_tagging;
    public $agenda_id;
    public $showCreate = false;
    public $showDetail = false;

    public $showDelete = false;
    public $lastUpdatedDate;
    public $sortColumn = 'name';
    public $sortDirection = 'asc';

    

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }
    
    public function render()
    {
        if ($this->keyword != null) {
            
            $data = ModelsAgenda::where('name', 'like', '%' . $this->keyword . '%')
                ->orWhere('started_at', 'like', '%' . $this->keyword . '%')
                ->orWhere('finished_at', 'like', '%' . $this->keyword . '%')
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        } else {
            
            $data = ModelsAgenda::orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }


        
        return view('livewire.agendas.agenda', [
            'agendaKegiatan' => $data,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }



    // fungsi create
    public function openCreate()
    {
        $this->showCreate = true;
    }

    public function closeCreate()
    {
        $this->resetForm();
        $this->showCreate = false;
    }

    public function resetForm()
    {
        $this->name = '';
        $this->started_at = '';
        $this->finished_at = '';
        $this->images = [];
        $this->description = '';
        $this->employee_tagging = '';
        $this->resetValidation();
    }

    public function create()
    {
        
        $this->validate([
            'name' => 'required|string',
            'started_at' => 'required|date',
            'finished_at' => 'nullable|date|after_or_equal:started_at',
            'images.' => 'nullable|image|mimes:jpg,png,jpeg,webp',
            'description' => 'required|string',
            'employee_tagging' => 'nullable|string',
        ]);
        
            $agenda = ModelsAgenda::create([
            'name' => $this->name,
            'description' => $this->description,
            'started_at' => $this->started_at,
            'finished_at' => $this->finished_at,
            'employee_tagging' => $this->employee_tagging,
        ]);


        
        if (!empty($this->images)) {
            
            foreach ($this->images as $image) {
                $path = $image->store('public/images/agenda'); // Upload gambar ke storage
                
                AgendaImage::create([
                    'agenda_id' => $agenda->id,
                    'file' => $path, 
                ]);
            }
        }

        $this->resetForm();
        $this->showCreate = false;
        $this->dispatch('swal:success');
        
    }

    public function detail($id)
    {
        $this->agenda = ModelsAgenda::with('images')->find($id);

        $this->agenda = ModelsAgenda::find($id);
        $this->name = $this->agenda->name;
        $this->description = $this->agenda->description;
        $this->started_at = $this->agenda->started_at;
        $this->finished_at = $this->agenda->finished_at;
        $this->employee_tagging = $this->agenda->employee_tagging;

        $this->images = $this->agenda->images;

        $this->showDetail = true;
    }
    
    public function closeDetail()
    {
        $this->resetForm();
        $this->showDetail = false;
    }

     // fungsi edit


















      // fungsi delete
      public function openDelete($id)
    {
        $this->agenda_id = $id;
        $agenda = ModelsAgenda::find($id);
        $this->lastUpdatedDate = $agenda->updated_at->format('d-m-Y');
        $this->showDelete = true;
    }

    public function closeDelete()
    {
        $this->showDelete = false;
        $this->dispatch('swal:cancel');
    }
    
    
    public function delete()
    {
        $item = ModelsAgenda::find($this -> agenda_id);
        $item->delete();

        $this->showDelete = false;

        $this->dispatch('swal:delete');
    }


    
}
