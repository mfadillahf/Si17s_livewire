<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Item as ModelsItem;
use Livewire\WithFileUploads;

class Item extends Component
{
    use WithFileUploads;

    public $title = 'Data Barang';
    public $name;
    public $merk;
    public $type;
    public $condition;
    public $location;
    public $item_id;
    public $item_selected_id=[];
    public $updateData = false;
    public $isModalOpen = false;


    public function render()
    { 
         return view('livewire.item', [
            'dataBarang' => ModelsItem::paginate(10),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->resetForm();
        $this->isModalOpen = false;
    }

    public function store () 
    {
        $rules = [
            'name' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'image' => 'required|image|max:1024',  // Image validation
            'procurement_year' => 'required|string|max:4',
            'spesification' => 'required|string|max:255',
        ];
        $this->validate();

        $imagePath = null;

        $this->image->storeAs('public/images/barang', $this->image->hashName());


        ModelsItem::create([
            'name' => $this->name,
            'merk' => $this->merk,
            'type' => $this->type,
            'condition' => $this->condition,
            'location' => $this->location,
            'image' => $this->image->hashName(),
            'procurement_year' => $this->procurement_year,
            'spesification' => $this->spesification,
        ]);

        session()->flash('message', 'Barang berhasil ditambahkan !');

    }


    // public function edit($id)
    // {
    //     {
    //         $dataBarang = ModelsItem::find($id);
    //         $this->name = $dataBarang->nama; 
    //         $this->merk = $dataBarang->merk; 
    //         $this->type = $dataBarang->jenis; 
    //         $this->condition = $dataBarang->kondisi; 
    //         $this->location = $dataBarang->lokasi; 
    
    //         $this->updateData = true;
    //         $this->item_id = $id;
    //     }
    // }

    // public function delete()  
    // {
    //     if ($this->item_id != ''){
    //         $id = $this->item_id;
    //         ModelsItem::find($id)->delete();
    //     }
    //     if (count($this->item_selected_id)){
    //         for($x=0;$x<count($this->item_selected_id);$x++){
    //             ModelsItem::find($this->item_selected_id[$x])->delete();
    //         }
    //     }

    //     session()->flash('message', 'Data berhasil dihapus!');

    //     $this->clear();
    // }

    // public function delete_confirm($id)  
    // {
    //     if ($id != ''){
    //         $this->item_id = $id;
    //     }
    // }

    // public function clear()
    // {
    //     $this->name = '';
    //     $this->merk = '';
    //     $this->type = '';
    //     $this->condition = '';
    //     $this->location = '';

    //     $this->updateData = false;
    //     $this->item_id = '';
    //     $this->item_selected_id = [];
    // }
}
