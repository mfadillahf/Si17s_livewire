<?php

namespace App\Livewire\Layanan;

use App\Models\ProviderDocument;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Provider as ModelsProvider;
use Illuminate\Support\Facades\Storage;

class ProviderEdit extends Component
{
    use WithFileUploads;

    public $title = 'Edit Layanan';
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
    public $toDelete = [];
    public $newFiles = [];

    public function mount($id)
    {
            $this->provider = ModelsProvider::with('providerDocuments')->find($id);
            $this->date = $this->provider->date;
            $this->npwp = $this->provider->npwp;
            $this->company_name = $this->provider->company_name;
            $this->directur_name = $this->provider->directur_name;
            $this->directur_identity_number = $this->provider->directur_identity_number;
            $this->email = $this->provider->email;
            $this->phone_number = $this->provider->phone_number;

            $this->document_id = $this->provider->document_id;

            $this->file();
    }

    public function update()
    {
        $this->validate([
            'date' => 'nullable|date',
            'npwp' => 'nullable|string',
            'company_name' => 'required|string',
            'directur_name' => 'nullable|string',
            'directur_identity_number' => 'nullable|string',
            'email' => 'nullable|email',
            'phone_number' => 'nullable|string|max:15|regex:/^08\d{8,13}$/',
        ]);

        $this->provider->update([
            'date' => $this->date,
            'npwp' => $this->npwp,
            'company_name' => $this->company_name,
            'directur_name' => $this->directur_name,
            'directur_identity_number' => $this->directur_identity_number,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
        ]);

        foreach ($this->toDelete as $fileId) {
            $file = ProviderDocument::find($fileId);
            if ($file && $file->file && Storage::exists($file->file)) {
                Storage::delete($file->file);
            }
            $file?->delete();
        }

        foreach ($this->newFiles as $file) {
            $permanentPath = 'public/files/providers/' . $file['name'];
            Storage::move($file['path'], $permanentPath);

            ProviderDocument::create([
                'name' => $file['name'],
                'document_id' => 6,
                'provider_id' => $this->provider->id,
                'file' => $permanentPath,
            ]);
        }

        $this->newFiles = [];
        $this->toDelete = [];

        $this->dispatch('swal:edit');

        return redirect('/layanan');
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

        // dd($this->fileLinks);
    }

    public function deleteFile($fileId)
    {
        // Add the file ID to the toDelete array
        $this->toDelete[] = $fileId;
    
        // Use the reject method to remove the file from fileLinks
        $this->fileLinks = collect($this->fileLinks)->reject(function ($file) use ($fileId) {
            return $file['id'] == $fileId;
        });
        
    }

    public function addFile()
    {
        $this->validate([
            'berkas' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,jpg,png,jpeg,webp|max:10240',
        ]);
    
        // Store the file temporarily and track it in newFiles
        $filePath = $this->berkas->store('temp');  // Store in a temporary directory
    
        $this->newFiles[] = [
            'path' => $filePath,
            'name' => $this->berkas->getClientOriginalName(),
        ];
    
        $this->fileLinks[] = [
            'id' => null,  // Not saved yet
            'url' => Storage::url($filePath),
            'name' => $this->berkas->getClientOriginalName(),
        ];
    
        $this->reset('berkas');
    }

    public function render()
    {
        // dd ($this->provider);

        return view('livewire.layanan.provider-edit', [
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
