<?php

namespace App\Livewire\Items;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\ItemMaintenance as ModelsItemMaintenance;
use Livewire\WithPagination;

class BarangMaintenance extends Component
{
    public $title = 'Pemeliharaan Barang';



    
    public function render()
    {
        return view('livewire.items.barang-maintenance', [
            'dataBarang' => ModelsItemMaintenance::paginate(10),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
