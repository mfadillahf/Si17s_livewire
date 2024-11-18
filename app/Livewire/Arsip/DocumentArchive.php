<?php

namespace App\Livewire\Arsip;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use App\Models\DocumentArchive as ModelsArchive;

class DocumentArchive extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $title = 'Arsip Dokumen';
    public $tab = '';
    public $activeTab = 'surat-masuk';
    public $archive;
    public $keyword;
    public $date;
    public $number;
    public $subject;
    public $archive_id;
    public $jenis = '';
    public $objective;
    public $description;
    
    public $document_id;
    public $berkas;
    public $fileLinks = [];
    public $showDetail = false;
    public $showDelete = false;
    public $lastUpdatedDate;
    public $sortColumn = 'number';
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
        $this->date = '';
        $this->number = '';
        $this->subject = '';
        $this->description = '';
        $this->objective = '';
        $this->document_id = '';
        $this->berkas = [];
        $this->resetValidation();

        $this->showDetail = false;
        $this->showDelete = false;
    
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
    

        // dd($this->berkas);

        // Kirimkan data ke view
        return view('livewire.arsip.document-archive', [
            'srtmsk' => $suratMasuk,
            'srtklr' => $suratKeluar,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }




    // detail
    public function detail($id)
    {
        $this->archive = ModelsArchive::with('documentArchiveFiles')->find($id);
        $this->date = $this->archive->date ? Carbon::parse($this->archive->date) : null;
        $this->number = $this->archive->number;
        $this->subject = $this->archive->subject;
        $this->description = $this->archive->description;
        $this->objective = $this->archive->objective;

        $this->document_id = $this->archive->document_id;

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
        // Load all files associated with this archive
        $this->fileLinks = $this->archive->documentArchiveFiles->map(function ($f) {
            return [
                'id' => $f->id,
                'name' => pathinfo($f->file, PATHINFO_BASENAME),
                'url' => Storage::url($f->file), // Generate the file URL
            ];
        });
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