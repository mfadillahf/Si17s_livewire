<?php

namespace App\Livewire\Items;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\ItemMaintenance as ModelsItemMaintenance;
use App\Models\Item as ModelsItem;
use Livewire\WithPagination;

class BarangMaintenance extends Component
{
    use WithPagination;

    public $title = 'Pemeliharaan Barang';
    public $showCreate = false;
    public $selectedItems = [];

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

        $this->resetForm();
        
        $this->showCreate = false;
        
    }

    public function resetForm()
    {
        $this->selectedItems = []; 
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.items.barang-maintenance', [
            'dataBarang' => ModelsItemMaintenance::paginate(10),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
