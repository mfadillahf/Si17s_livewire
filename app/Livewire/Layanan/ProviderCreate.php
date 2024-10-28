<?php

namespace App\Livewire\Layanan;

use App\Models\ProviderDocument;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Provider as ModelsProvider;

class ProviderCreate extends Component
{
    use WithFileUploads;

    public $title = 'Tambah Layanan';
    public $date;
    public $npwp;
    public $company_name;
    public $directur_name;
    public $directur_identity_number;
    public $email;
    public $phone_number;
    public $berkas;


    public function create()
    {
        $this->validate([
            'date' => 'nullable|date',
            'npwp' => 'nullable|string',
            'company_name' => 'required|string',
            'directur_name' => 'nullable|string',
            'directur_identity_number' => 'nullable|string',
            'email' => 'nullable|email',
            'phone_number' => 'nullable|string',
            'berkas' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,jpg,png,jpeg,webp|max:10240',
        ]);


        $originalFileName = $this->berkas->getClientOriginalName();
        $filePath = $this->berkas->storeAs('public/files/providers', $originalFileName);

        $pd = ModelsProvider::create([
            'date' => $this->date,
            'npwp' => $this->npwp,
            'company_name' => $this->company_name,
            'directur_name' => $this->directur_name,
            'directur_identity_number' => $this->directur_identity_number,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'name' => $filePath,
        ]);

        ProviderDocument::create([
            'name' => $originalFileName, 
            'document_id' => 6, 
            'provider_id' => $pd->id,  
        ]);


        $this->dispatch('swal:success');
        return redirect('/layanan');
    }

    public function render()
    {
        return view('livewire.layanan.provider-create', [
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
