<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\ItemMaintenance as ModelsItemMaintenance;
use Livewire\WithPagination;

class ItemMaintenance extends Component
{
    public $title = 'Pemeliharaan Barang';

    public function render()
    {
        return view('livewire.item-maintenance', [
            'dataBarang' => ModelsItemMaintenance::paginate(10),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
