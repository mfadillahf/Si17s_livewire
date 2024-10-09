<?php

namespace App\Livewire\Items;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ItemMaintenance as ModelsItemMaintenance;

class BarangMaintenance extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title = 'Pemeliharaan Barang';
    public $item;
    public $item_id;
    public $showCreate = false;
    public $showEdit = false;
    public $showDelete = false;
    public $selectedItemId='';
    public $date;
    public $description;
    public $lastUpdatedDate;

    public function openCreate()
    {
        $this->showCreate =true;

    }


    public function closeCreate()
    {
        $this->resetForm();
        $this->showCreate = false;
    }

    public function create()
    {
        $selectedItem = Item::find($this->selectedItemId); 
        
        $this->validate([
            'date' => 'required|date', 
            'description' => 'nullable|string', 
            // 'updated_at' => 'date_format:d-m-Y',
        ]);
        
        ModelsItemMaintenance::create([
            'item_id' => $this->selectedItemId,
            'name' => $selectedItem->name,
            'merk' => $selectedItem->merk,
            'type' => $selectedItem->type,
            'date' => $this->date,
            'description' => $this->description //(nullable)
            // 'updated_at' => now(),
        ]);
        
        $this->resetForm();
        $this->showCreate = false;
        $this->dispatch('swal:success');
    }

    public function resetForm()
    {
        $this->selectedItemId = '';
        $this->date = '';
        $this->description = '';
        $this->resetValidation();
    }

    public function openEdit($id)
    {
        $this->selectedItemId = ModelsItemMaintenance::find($id);
        $this->item = ModelsItemMaintenance::find($id);
        $this->date = $this->item->date;
        $this->description = $this->item->description;

        $this->showEdit = true;
    }

    public function closeEdit()
    {
        $this->resetForm();
        $this->showEdit = false;
    }

    public function update()
    {
        
        $this->validate([
            'date' => 'required|date', 
            'description' => 'nullable|string', 
            // 'updated_at' => 'date_format:d-m-Y',
        ]);

        $this->item->update([
            'date' => $this->date,
            'description' => $this->description,
        ]);

        $this->resetForm();
        $this->showEdit = false;
        $this->dispatch('swal:edit');
    }

    public function openDelete($id)
    {
        $this->item_id = $id;
        $item = ModelsItemMaintenance::find($id);
        $this->lastUpdatedDate = $item->updated_at->format('d-m-Y');
        $this->showDelete = true;
    }

    public function closeDelete()
    {
        $this->showDelete = false;
    }
    
    public function delete()
    {
        $item = ModelsItemMaintenance::find($this -> item_id);
        $item->delete();

        $this->showDelete = false;

        $this->dispatch('swal:delete');
    }

    public function render()
    {
        return view('livewire.items.barang-maintenance', [
            'dataMaintenance' => ModelsItemMaintenance::paginate(5),
            'dataBarang' => Item::all(),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
