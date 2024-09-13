<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Title;
use App\Models\Item as ModelsItem;
use Illuminate\Support\Facades\Storage;

class Item extends Component
{
    use WithFileUploads;

    public $title = 'Data Barang';
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
    public $isAddModalOpen = false;
    
    public $isEditModalOpen = false;
    public $isDeleteModalOpen = false;
    public $isDetailsModalOpen = false;

    public function render()
    { 
         return view('livewire.item', [
            'dataBarang' => ModelsItem::paginate(10),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function openAddModal()
    {
        
        $this->isAddModalOpen = true;
        $this->dispatch('openAddModal');
        
    }

    public function closeAddModal()
    {
        $this->isAddModalOpen = false;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'procurement_year' => 'required|integer',
            'spesification' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // Optional image validation
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
        $this->dispatch('closeAddModal');
        $this->closeAddModal();
        $this->clear();
    }
   

    public function openEditModal($id)
    {
        $dataBarang = ModelsItem::find($id);
        
            $this->name = $dataBarang->name;
            $this->merk = $dataBarang->merk;
            $this->type = $dataBarang->type;
            $this->condition = $dataBarang->condition;
            $this->location = $dataBarang->location;
            $this->procurement_year = $dataBarang->procurement_year;
            $this->spesification = $dataBarang->spesification;
            $this->updateData = true;
            $this->item_id = $id;
            $this->isEditModalOpen = true;
            $this->dispatch('openEditModal');
            

    }

    public function closeEditModal()
    {
        $this->isEditModalOpen = false;

    }

    public function update()
{
    $this->validate([
        'name' => 'required|string|max:255',
        'merk' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'condition' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'procurement_year' => 'required|integer',
        'spesification' => 'nullable|string',
        'image' => 'nullable|image|max:2048', // Optional image validation
    ]);

    $item = ModelsItem::find($this->item_id);

    if ($item) {
        $imagePath = $item->image; 

        if ($this->image) {
            
            if ($item->image && Storage::exists('public/images/barang/' . $item->image)) {
                Storage::delete('public/images/barang/' . $item->image);
            }
            $imagePath = $this->image->storeAs('public/images/barang', $this->image->hashName());
        }

        // Update item details
        $item->update([
            'name' => $this->name,
            'merk' => $this->merk,
            'type' => $this->type,
            'condition' => $this->condition,
            'location' => $this->location,
            'procurement_year' => $this->procurement_year,
            'spesification' => $this->spesification,
            'image' => $imagePath ? basename($imagePath) : $item->image,
        ]);

        session()->flash('message', 'Data berhasil diperbarui!');
        $this->dispatch('closeEditModal');
        $this->closeEditModal();
        $this->clear();
    } else {
        session()->flash('error', 'Item tidak ditemukan.');
        $this->dispatch('closeEditModal');
        $this->closeEditModal();
        
    }

}

public function detailsModal($id)
{
    $dataBarang = ModelsItem::find($id);
          
        $this->name = $dataBarang->name;
        $this->merk = $dataBarang->merk;
        $this->type = $dataBarang->type;
        $this->condition = $dataBarang->condition;
        $this->location = $dataBarang->location;
        $this->procurement_year = $dataBarang->procurement_year;
        $this->spesification = $dataBarang->spesification;
        $this->image = $dataBarang->image ? asset('storage/images/barang/' . $dataBarang->image) : null;
        $this->item_id = $id;
        $this->isDetailsModalOpen = true;
        $this->dispatch('detailsModal');
}

    public function openDeleteModal($id)  
    {
        if ($id != ''){
            $this->item_id = $id;
        }

        $this->isDeleteModalOpen = true;
        $this->dispatch('openDeleteModal');
    }

    public function closeDeleteModal()
    {
        $this->isDeleteModalOpen = false;
    }

    public function delete()  
    {
        // Delete a single item if item_id is set
        if (!empty($this->item_id)) {
            $item = ModelsItem::find($this->item_id);
            if ($item) {
                $item->delete();
            }
        }
    
        // Delete multiple selected items
        if (!empty($this->item_selected_id) && count($this->item_selected_id) > 0) {
            ModelsItem::whereIn('id', $this->item_selected_id)->delete();
        }
    
        // Flash success message
        session()->flash('message', 'Data berhasil dihapus!');
    
        // Clear item data (if there's a clear method in your component)
        $this->dispatch('closeDeleteModal');
        $this->clear();
        $this->closeDeleteModal();

    }
    
    public function clear()
    {
        $this->name = '';
        $this->merk = '';
        $this->type = '';
        $this->image = null;
        $this->procurement_year = '';
        $this->spesification = '';
        $this->condition = '';
        $this->location = '';

        $this->updateData = false;
        $this->item_id = '';
        $this->item_selected_id = [];

    }
}
