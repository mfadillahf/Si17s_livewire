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
    public $keyword;
    public $item_id;
    public $showCreate = false;
    public $showEdit = false;
    public $showDelete = false;
    public $selectedItemId=[];
    public $date;
    public $description;
    public $lastUpdatedDate;
    public $sortColumn = 'name';
    public $sortDirection = 'asc';

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function render()
    {
        if ($this->keyword != null) {
            $data = ModelsItemMaintenance::join('items', 'item_maintenances.item_id', '=', 'items.id')
                ->where('items.name', 'like', '%' . $this->keyword . '%')
                ->orWhere('items.merk', 'like', '%' . $this->keyword . '%')
                ->orWhere('items.type', 'like', '%' . $this->keyword . '%')
                ->orWhere('item_maintenances.date', 'like', '%' . $this->keyword . '%')
                ->orWhere('item_maintenances.description', 'like', '%' . $this->keyword . '%')
                ->orderBy('items.' . $this->sortColumn, $this->sortDirection)
                ->select('item_maintenances.*') 
                ->paginate(5);
        } else {
            $data = ModelsItemMaintenance::join('items', 'item_maintenances.item_id', '=', 'items.id')
                ->orderBy('items.' . $this->sortColumn, $this->sortDirection)
                ->select('item_maintenances.*')
                ->paginate(5);
        }

        return view('livewire.items.barang-maintenance', [
            'dataMaintenance' => $data,
            'dataBarang' => Item::all(),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }


    // fungsi create
    public function openCreate()
    {
        $this->showCreate =true;
        $this->dispatch('open');

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
            'selectedItemId' => 'required|array|min:1',
            // 'updated_at' => 'date_format:d-m-Y',
        ]);
        
        foreach ($this->selectedItemId as $itemId) {
            $selectedItem = Item::find($itemId);

        ModelsItemMaintenance::create([
            'item_id' => $itemId,
            'name' => $selectedItem->name,
            'merk' => $selectedItem->merk,
            'type' => $selectedItem->type,
            'date' => $this->date,
            'description' => $this->description //(nullable)
            // 'updated_at' => now(),
        ]);
    }
        $this->resetForm();
        $this->showCreate = false;
        $this->dispatch('swal:success');
    }

    public function resetForm()
    {
        $this->selectedItemId = [];
        $this->date = '';
        $this->description = '';
        $this->resetValidation();
    }


    // fungsi edit
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


    // fungsi delete
    public function openDelete($id)
    {
        $this->item_id = $id;
        $last_at = ModelsItemMaintenance::find($id);
        $this->lastUpdatedDate = $last_at->updated_at->format('d-m-Y');
        $this->showDelete = true;
    }

    public function closeDelete()
    {
        $this->showDelete = false;
        $this->dispatch('swal:cancel');
    }
    
    
    public function delete()
    {
        $delete_itemMain = ModelsItemMaintenance::find($this -> item_id);
        $delete_itemMain->delete();

        $this->showDelete = false;
        $this->dispatch('swal:delete');
    }
    
}
