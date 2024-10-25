<?php

namespace App\Livewire\Arsip;

use Livewire\Component;
use App\Models\DocumentArchive as ModelsArchive;

class DocumentArchive extends Component
{
    
    public $title = 'Arsip Dokumen';
    public $tab = '';
    public $keyword;
    public $date;
    public $number;
    public $subject;
    public $jenis = '';
    public $objective;
    public $description;
    public $berkas;
    public $suratMasuk = [];
    public $suratKeluar = [];
    public $isOpen = false;
    public $editMode = false;
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
    
        dd($suratMasuk, $suratKeluar); // Debugging dengan dump data

        // Kirimkan data ke view
        return view('livewire.arsip.document-archive', [
            'suratMasuk' => $suratMasuk,
            'suratKeluar' => $suratKeluar,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}