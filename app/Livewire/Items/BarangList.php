<?php

namespace App\Livewire\Items;

use Livewire\Component;
use App\Models\Item as ModelsItem;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class BarangList extends Component
{
    use WithFileUploads;
    public $title = 'Data Barang';
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
    public $showDelete = false;
    public $lastUpdatedDate;

    public function render()
    {
        return view('livewire.items.barang-list', [
            'dataBarang' => ModelsItem::paginate(10),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function confirmDelete($id)
    {
        $this->item_id = $id;
        $item = ModelsItem::find($id);
        $this->lastUpdatedDate = $item->updated_at->format('d-m-Y');
        $this->showDelete = true;
    }

    public function cancel()
    {
        $this->showDelete = false;
        return $this->redirect('/barang');
    }
    public function delete()
    {
        $item = ModelsItem::find($this -> item_id);
        $item->delete();

        $this->showDelete = false;
        session()->flash('message', 'Barang berhasil dihapus!');
        return $this->redirect('/barang');
    }
}
