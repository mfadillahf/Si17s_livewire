<?php

namespace App\Livewire\Items;

use Livewire\Component;
use App\Models\Item as ModelsItem;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class BarangCreate extends Component
{
    use WithFileUploads;
    public $title = 'Tambah Barang';
    public $item;
    public $name;
    public $merk;
    public $type;
    public $image;
    public $condition;
    public $procurement_year;
    public $spesification;
    public $location;
    public $item_id;
    public $item_selected_id=[];
    public $updateData = false;

    public function render()
    {
        return view('livewire.items.barang-create')
        ->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function create()
    {
        $this->validate([
            'name' => 'required|string',
            'merk' => 'required|string',
            'type' => 'required|string',
            'condition' => 'required|string',
            'location' => 'required|string',
            'image' => 'nullable|image|max:1024',
            'procurement_year' => 'required|integer|digits:4|max:' . date('Y'),
            'spesification' => 'required|string',
        ]);
    
        $imagePath = null;
    
   
        if ($this->image) {
        
            $imagePath = $this->image->storeAs('public/images/barang', $this->image->hashName());
        }
    
     
        ModelsItem::create([
            'name' => $this->name,
            'merk' => $this->merk,
            'type' => $this->type,
            'condition' => $this->condition,
            'location' => $this->location,
            'image' => $imagePath ? basename($imagePath) : null, 
            'procurement_year' => $this->procurement_year,
            'spesification' => $this->spesification,
            
        ]);
        
        session()->flash('message', 'Barang berhasil ditambahkan!');
        return $this->redirect('/barang');
    }
}
