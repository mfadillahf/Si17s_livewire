<?php

namespace App\Livewire\Layanan;

use Livewire\Component;
use App\Models\Provider as ModelsProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class Provider extends Component
{
    public $title = 'Layanan';
    public $provider;
    public $date;
    public $npwp;
    public $company_name;
    public $directur_name;
    public $directur_identity_number;
    public $email;
    public $phone_number;
    public $document_id;
    public $berkas;
    public $fileLinks = [];
    public $showDetail = false;
    public $showDelete = false;
    public $lastUpdatedDate;
    public $provider_id;

    public $keyword;
    public $sortColumn = 'npwp';
    public $sortDirection = 'asc';

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function resetForm()
    {
        $this->date = '';
        $this->npwp = '';
        $this->company_name = '';
        $this->directur_name = '';
        $this->directur_identity_number = '';
        $this->email = '';
        $this->phone_number = '';
        $this->document_id = '';
        $this->berkas = [];
        $this->resetValidation();

        $this->showDetail = false;
        $this->showDelete = false;
    
    }

    public function render()
    {
        if ($this->keyword != null) {
            
            $data = ModelsProvider::where('date_format(date, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%'])  
            ->orWhere('npwp', 'like', '%' . $this->keyword . '%')
            ->orWhere('company_name', 'like', '%' . $this->keyword . '%')
            ->orWhere('directur_name', 'like', '%' . $this->keyword . '%')
            ->orWhere('directur_identity_number', 'like', '%' . $this->keyword . '%')
            ->orWhere('email', 'like', '%' . $this->keyword . '%')
            ->orWhere('phone_number', 'like', '%' . $this->keyword . '%')
            ->orderBy($this->sortColumn, $this->sortDirection)
            ->paginate(5);
        } else {
            
            $data = ModelsProvider::orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }

        return view('livewire.layanan.provider', [
            'layanan' => $data,
        ])->layout('layouts.vertical', ['title' => $this->title]);

        }

        public function detail($id)
        {
            $this->provider = ModelsProvider::with('providerDocuments')->find($id);
            $this->date = $this->provider->date ? Carbon::parse($this->provider->date) : null;
            $this->npwp = $this->provider->npwp;
            $this->company_name = $this->provider->company_name;
            $this->directur_name = $this->provider->directur_name;
            $this->directur_identity_number = $this->provider->directur_identity_number;
            $this->email = $this->provider->email;
            $this->phone_number = $this->provider->phone_number;
    
            $this->document_id = $this->provider->document_id;
    
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
            $this->fileLinks = $this->provider->providerDocuments->map(function ($f) {
                $filePath = 'public/files/providers/' . $f->name;
                return [
                    'id' => $f->id,
                    'name' => pathinfo($f->name, PATHINFO_BASENAME),
                    'url' => Storage::url($filePath),
                ];
            });
        }
        
        // delete
        public function openDelete($id)
        {
            $this -> provider_id = $id;
            $a = ModelsProvider::find($id);
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
            $a = ModelsProvider::find($this -> provider_id);
            $a->delete();
            
            
            $this->showDelete = false;
            $this->dispatch('swal:delete');
        }
    
}
