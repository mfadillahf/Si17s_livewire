<?php

namespace App\Livewire\Items;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Item as ModelsItem;
use Illuminate\Support\Facades\Storage;

class BarangShow extends Component
{
    use WithFileUploads;
    public $title = 'Detail Barang';
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

    public function mount($id)
    {
              
        $this->item = ModelsItem::find($id);
        $this->name = $this->item->name;
        $this->merk = $this->item->merk;
        $this->type = $this->item->type;
        $this->image = $this->item->image;
        $this->condition = $this->item->condition;
        $this->procurement_year = $this->item->procurement_year;
        $this->spesification = $this->item->spesification;
        $this->location = $this->item->location;
    }

    public function render()
    {
        return view('livewire.items.barang-show', [
            'dataBarang' => ModelsItem::paginate(10),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
