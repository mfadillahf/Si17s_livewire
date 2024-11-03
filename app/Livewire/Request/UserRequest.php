<?php

namespace App\Livewire\Request;

use App\Models\DocumentArchive;
use Livewire\Component;
use App\Models\Request as ModelsRequest;

class UserRequest extends Component
{
    public $title = 'User Request';
    
    public $tab = '';
    public $activeTab = 'Non-Auditor';
    public $keyword;
    public $is_auditor;
    public $document_number; 
    public $start_period; 
    public $end_period; 
    public $document; 
    public $institute; 
    public $audited_packages; 
    public $institute_id; 
    
    public $document_archive_id = null;
    public $showDetail = false;
    public $showDelete = false;
    public $lastUpdatedDate;
    public $sortColumn = 'institute';
    public $sortDirection = 'asc';

    // tab
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
        $this->document_number = '';
        $this->start_period = null;
        $this->end_period = null;
        $this->document = '';
        $this->institute = '';
        $this->audited_packages = '';
        $this->is_auditor = null;
        $this->institute_id = null;
        $this->document_archive_id = null;
    }


    public function render()
    {
        if ($this->keyword != null) {
        // Fetch records where `is_auditor` is 0 (non-auditors)
        $rnoa = ModelsRequest::where('is_auditor', 0)
            ->orWhere('institute', 'like', '%' . $this->keyword . '%')
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(5);
    
        // Fetch records where `is_auditor` is 1 (auditors)
        $rau = ModelsRequest::where('is_auditor', 1)
            ->orWhere('document_number', 'like', '%' . $this->keyword . '%')
            ->orWhere('institute', 'like', '%' . $this->keyword . '%')
            ->orWhere('audited_packages', 'like', '%' . $this->keyword . '%')
            ->orWhere(function ($query) {
                $query->whereRaw('date_format(start_period, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%'])
                    ->orWhereRaw('date_format(end_period, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%']);
            })
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(5);
        } else {
            $rnoa = ModelsRequest::where('is_auditor', 0)
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);

            $rau = ModelsRequest::where('is_auditor', 1)
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }
    
        return view('livewire.request.user-request', [
            'rnoa' => $rnoa,
            'rau' => $rau,
            'da' => DocumentArchive::all(),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}    
