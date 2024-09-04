<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Item as ModelsItem;
use Livewire\WithPagination;

class Item extends Component
{
    use WithPagination;

    #[Title('Data Barang')]
    public $items;
    public $dataBarang;
    public $item_id;
    public $name;
    public $merk;
    public $type;
    public $condition;
    public $location;

    // protected $rules = [
    //     'name' => 'required|string|max:255',
    //     'merk' => 'required|string|max:255',
    //     'type' => 'required|string|max:255',
    //     'condition' => 'required|string|max:255',
    //     'location' => 'required|string|max:255',
    // ];

    public function mount()
{
    $this->items = "dataBarang";
}

    public function render()
    {
        $items = ModelsItem::all();
        return view('livewire.item', [
        'dataBarang' => $items,
        ]); 
    }
}
