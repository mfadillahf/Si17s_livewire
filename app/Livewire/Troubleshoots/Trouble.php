<?php

namespace App\Livewire\Troubleshoots;

use Livewire\Component;
use App\Models\TroubleshootReport as ModelsTroubleshoot;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class Trouble extends Component
{
    public $title = 'Troubleshoots';
    public $trouble;
    public $date;
    public $description;
    public $action;
    public $troubleshoot_category_id;
    public $berkas;
    public $fileLinks = [];
    public $showDetail = false;
    public $showDelete = false;
    public $lastUpdatedDate;
    
    public $trouble_id;
    public $keyword;
    public $sortColumn = 'description';
    public $sortDirection = 'asc';

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function resetForm()
    {
        $this->date = '';
        $this->description = '';
        $this->action = '';
        $this->troubleshoot_category_id = '';
        $this->berkas = [];
        $this->resetValidation();

        $this->showDetail = false;
        $this->showDelete = false;
    
    }

    public function render()
    {
        if ($this->keyword != null) {
            
            $data = ModelsTroubleshoot::where('date_format(date, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%'])  
            ->orWhere('description', 'like', '%' . $this->keyword . '%')
            ->orWhere('action', 'like', '%' . $this->keyword . '%')
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(5);
        } else {
            
            $data = ModelsTroubleshoot::orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }

        return view('livewire.troubleshoots.trouble', [
                        'dataTrouble' => $data,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function detail($id)
    {
        $this->trouble = ModelsTroubleshoot::with('troubleshootCategory', 'troubleshootFiles')->find($id);
        $this->date = $this->trouble->date ? Carbon::parse($this->trouble->date) : null;
        $this->description = $this->trouble->description;
        $this->action = $this->trouble->action;

        $this->troubleshoot_category_id = $this->trouble->troubleshoot_category_id;

        $this->file();
    
        $this->showDetail = true;
    }
    
    public function closeDetail()
    {
        $this->resetForm();
        $this->showDetail = false;
    }

    public function file()
    {
        $this->fileLinks = $this->trouble->troubleshootFiles->map(function ($f) {
            return [
                'id' => $f->id,
                'name' => pathinfo($f->file, PATHINFO_BASENAME),
                'url' => Storage::url($f->file),
            ];
        });
    }

    public function openDelete($id)
    {
        $this -> trouble_id = $id;
        $a = ModelsTroubleshoot::find($id);
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
        $a = ModelsTroubleshoot::find($this -> trouble_id);
        $a->delete();
        
        
        $this->showDelete = false;
        $this->dispatch('swal:delete');
    }
}
