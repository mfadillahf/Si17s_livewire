<?php

namespace App\Livewire\Consultations;

use Livewire\Component;
use App\Models\ConsultationReport as ModelsConsultation;
use Illuminate\Support\Facades\Storage;
use App\Models\ConsultationDocument;

class Konsultasi extends Component
{
    public $titles = 'Pelaporan dan Konsultasi';
    public $consultation;
    public $name;
    public $identity_number;
    public $phone_number;
    public $institute;
    public $media_report_id;
    public $title;
    public $description;
    public $report_category_id;
    public $solution;
    public $ticket_number;
    public $status;
    public $started_at;
    public $finished_at;
    public $berkas;
    public $receipt;
    public $fileLinks = [];
    public $showDetail = false;
    public $showDelete = false;
    public $lastUpdatedDate;
    public $consultation_id;
    public $keyword;
    public $sortColumn = 'title';
    public $sortDirection = 'asc';

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }
    
    public function resetForm()
{

    $this->name = '';
    $this->identity_number = '';
    $this->phone_number = '';
    $this->institute = '';
    $this->title = '';
    $this->description = '';
    $this->solution = '';
    $this->ticket_number = '';
    $this->status = '';
    $this->receipt = '';
    $this->started_at = null; 
    $this->finished_at = null; 
    $this->media_report_id = null; 
    $this->report_category_id = null; 
    $this->berkas = []; 
    $this->resetValidation();

    $this->showDetail = false;
    $this->showDelete = false;

}


    public function render()
    {
        if ($this->keyword != null) {
            
            $data = ModelsConsultation::where('date_format(date, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%'])  
            ->orWhere('name', 'like', '%' . $this->keyword . '%')
            ->orWhere('identity_number', 'like', '%' . $this->keyword . '%')
            ->orWhere('phone_number', 'like', '%' . $this->keyword . '%')
            ->orWhere('institute', 'like', '%' . $this->keyword . '%')
            ->orWhere('title', 'like', '%' . $this->keyword . '%')
            ->orWhere('description', 'like', '%' . $this->keyword . '%')
            ->orWhere('solution', 'like', '%' . $this->keyword . '%')
            ->orWhere('ticket_number', 'like', '%' . $this->keyword . '%')
            ->orWhere('status', 'like', '%' . $this->keyword . '%')
            ->orWhere('receipt', 'like', '%' . $this->keyword . '%')
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(5);
        } else {

            $data = ModelsConsultation::orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }

        return view('livewire.consultations.konsultasi', [
            'rdk' => $data,
        ])->layout('layouts.vertical', ['title' => $this->titles]);
    }

    public function detail($id)
    {
        $this->consultation = ModelsConsultation::with('reportCategory', 'mediaReport', 'consultationDocuments', 'user')->find($id);
        $this->identity_number = $this->consultation->identity_number;
        $this->name = $this->consultation->name;
        $this->phone_number = $this->consultation->phone_number;
        $this->started_at = $this->consultation->started_at;
        $this->finished_at = $this->consultation->finished_at;
        $this->institute = $this->consultation->institute;
        $this->title = $this->consultation->title;
        $this->description = $this->consultation->description;
        $this->solution = $this->consultation->solution;
        $this->ticket_number = $this->consultation->ticket_number;
        $this->status = $this->consultation->status;
        $this->receipt = $this->consultation->receipt;
        $this->media_report_id = $this->consultation->media_report_id;
        $this->report_category_id = $this->consultation->report_category_id;

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
        $this->fileLinks = $this->consultation->consultationDocuments->map(function ($f) {
            return [
                'id' => $f->id,
                'name' => pathinfo($f->file, PATHINFO_BASENAME),
                'url' => Storage::url($f->file),
            ];
        });
    }

    public function openDelete($id)
    {
        $this -> consultation_id = $id;
        $a = ModelsConsultation::find($id);
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
        $c = ModelsConsultation::find($this -> consultation_id);

        if ($c) {
            $cD = ConsultationDocument::where('consultation_report_id', $this->consultation_id)->first();
            
            if ($cD) {
                Storage::delete('public/' . $cD->file);
                
                $cD->delete();
            }

        $c->delete();
        }
        
        $this->showDelete = false;
        $this->dispatch('swal:delete');
    }



    public function updateStatus($id)
{
    $consultation = ModelsConsultation::find($id);
    
    // Cek apakah statusnya "Proses" sebelum mengubah ke "Selesai"
    if ($consultation->status === 'Proses') {
        $consultation->status = 'Selesai';
        $consultation->save();
        
        // Kirim notifikasi atau flash message jika diperlukan
        session()->flash('message', 'Status berhasil diperbarui menjadi selesai.');
    }
}


    
}
