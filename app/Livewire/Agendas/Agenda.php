<?php

namespace App\Livewire\Agendas;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Agenda as ModelsAgenda;
use App\Models\AgendaImage;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


use Livewire\Attributes\Validate;

class Agenda extends Component
{
    use WithFileUploads;

    use WithPagination;
    public $title = 'Agenda';
    public $tab = 'agenda'; 
    public $agenda;
    public $create_agenda;
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
    public $showEdit = false;
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
                ->with('images')
                ->paginate(5);
        } else {
            
            $data = ModelsAgenda::orderBy($this->sortColumn, $this->sortDirection)
                ->with('images')
                ->paginate(5);
        }

        return view('livewire.agendas.agenda', [
            'agendaKegiatan' => $data,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }



    // fungsi create
    public function openCreate()
    {
        $this->resetForm();
        $this->showCreate = true;
    }

    public function closeCreate()
    {
        $this->resetForm();
        $this->showCreate = false;
    }

    public function resetForm()
    {
        $this->agenda = '';
        $this->name = '';
        $this->started_at = '';
        $this->finished_at = '';
        $this->images = [];
        $this->description = '';
        $this->employee_tagging = '';
        $this->resetValidation();

        $this->showCreate = false;
        $this->showDetail = false;
        $this->showEdit = false;
        $this->showDelete = false;
    
    }

    public function create()
    {
        
        $this->validate([
            'name' => 'required|string',
            'started_at' => 'required|date',
            'finished_at' => 'nullable|date|after_or_equal:started_at',
            'images' => 'nullable|array|max:4', 
            'images.*' => 'image|mimes:jpg,png,jpeg,webp|max:2048',
            'description' => 'required|string',
            'employee_tagging' => 'nullable|string',
        ]);
        
            $create_agenda = ModelsAgenda::create([
            'name' => $this->name,
            'description' => $this->description,
            'started_at' => $this->started_at,
            'finished_at' => $this->finished_at,
            'employee_tagging' => $this->employee_tagging,
        ]);


        
        if (!empty($this->images)) {
            
            foreach ($this->images as $image) {
                $originalFileName = $image->getClientOriginalName();
                $path = $image->storeAs('public/images/agenda', $originalFileName); // Upload gambar ke storage
                
                AgendaImage::create([
                    'agenda_id' => $create_agenda->id,
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
     public function openEdit($id)
     {
         $this->agenda = ModelsAgenda::find($id);
         $this->name = $this->agenda->name;
         $this->description = $this->agenda->description;
         $this->started_at = $this->agenda->started_at;
         $this->finished_at = $this->agenda->finished_at;
         $this->employee_tagging = $this->agenda->employee_tagging;

         $this->images = $this->agenda->images;

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
            'started_at' => 'required|date',
            'finished_at' => 'nullable|date|after_or_equal:started_at',
            'images' => 'nullable|array|max:4', 
            'images.*' => 'image|mimes:jpg,png,jpeg,webp|max:2048',
            'description' => 'required|string',
            'employee_tagging' => 'nullable|string',
        ]);

        $this->agenda->update([
            'name' => $this->name,
            'started_at' => $this->started_at,
            'finished_at' => $this->finished_at,
            'description' => $this->description,
            'employee_tagging' => $this->employee_tagging,
        ]);

        if (!empty($this->images)) {
            foreach ($this->agenda->images as $oldImage) {
                if (Storage::exists($oldImage->file)) {
                    Storage::delete($oldImage->file); 
                }
                $oldImage->delete(); 
            }
    
            // Upload gambar baru
            foreach ($this->images as $image) {
                $path = $image->store('public/images/agenda'); 
                AgendaImage::create([
                    'agenda_id' => $this->agenda->id,
                    'file' => $path,
                ]);
            }
        }

         $this->resetForm();
         $this->showEdit = false;
         $this->dispatch('swal:edit');
     }

      // fungsi delete
      public function openDelete($id)
    {
        $this -> agenda_id = $id;
        $a = ModelsAgenda::find($id);
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
        $a = ModelsAgenda::with('images')->find($this -> agenda_id);

        if ($a->images) {
            // Hapus semua file gambar yang terkait dengan agenda
            foreach ($a->images as $i) {
                if (Storage::exists($i->file)) {
                    Storage::delete($i->file); // Hapus file dari storage
                }
            }
    
        $a->delete();
        
        }
        
        $this->showDelete = false;

        $this->dispatch('swal:delete');
    }


    
}
