<?php

namespace App\Livewire\Arsip;

use Livewire\Component;
use App\Models\DocumentArchive as ModelsArchive;
use Illuminate\Support\Facades\Storage;

class DocumentArchive extends Component
{
    
    public $title = 'Arsip Dokumen';
    public $tab = '';
    public $keyword;
    public $date;
    public $number;
    public $subject;
    public $archive_id;
    public $jenis = '';
    public $objective;
    public $description;
    public $berkas;
    public $showDetail = false;
    public $showDelete = false;
    public $lastUpdatedDate;
    public $sortColumn = 'number';
    public $sortDirection = 'asc';





    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }
    
    public function render()
    {
        if ($this->keyword != null) {
            $suratMasuk = ModelsArchive::where('document_id', 1)
                ->where(function ($query) {
                    $query->where('number', 'like', '%' . $this->keyword . '%')
                          ->orWhere('subject', 'like', '%' . $this->keyword . '%')
                          ->orWhereRaw('date_format(date, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%']);
                })
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
            
            $suratKeluar = ModelsArchive::where('document_id', 2)
                ->where(function ($query) {
                    $query->where('number', 'like', '%' . $this->keyword . '%')
                          ->orWhere('subject', 'like', '%' . $this->keyword . '%')
                          ->orWhereRaw('date_format(date, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%']);
                })
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        } else {
            // Jika tidak ada keyword, ambil data tanpa filter
            $suratMasuk = ModelsArchive::where('document_id', 1)
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
            
            $suratKeluar = ModelsArchive::where('document_id', 2)
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }
    


        // Kirimkan data ke view
        return view('livewire.arsip.document-archive', [
            'srtmsk' => $suratMasuk,
            'srtklr' => $suratKeluar,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }




    // detail
    public function detail($id)
    {
        $archive = ModelsArchive::find($id);

        $this->name = $archive->name;
        $this->description = $archive->description;
        $this->started_at = $archive->started_at;
        $this->finished_at = $archive->finished_at;
        $this->employee_tagging = $archive->employee_tagging;


        $this->showDetail = true;
    }
    
    public function closeDetail()
    {
        $this->resetForm();
        $this->showDetail = false;
    }




    // delete
    public function openDelete($id)
    {
        $this -> archive_id = $id;
        $a = ModelsArchive::find($id);
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
        $a = ModelsArchive::find($this -> archive_id);
        $a->delete();
        
        
        $this->showDelete = false;
        $this->dispatch('swal:delete');
    }


    

}