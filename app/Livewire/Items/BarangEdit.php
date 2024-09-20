<?php

namespace App\Livewire\Items;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Item as ModelsItem;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class BarangEdit extends Component
{
    use WithFileUploads;
    public $title = 'Edit Barang';
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

    public function update()
    {
        if ($this->image instanceof TemporaryUploadedFile) {
            if ($this->item->image && Storage::exists('public/images/barang/' . $this->item->image)) {
                Storage::delete('public/images/barang/' . $this->item->image);
            }

            $imagePath = $this->image->storeAs('public/images/barang', $this->image->hashName());
            $this->item->image = basename($imagePath);
        }

        $this->item->update([
            'name' => $this->name,
            'merk' => $this->merk,
            'type' => $this->type,
            'condition' => $this->condition,
            'procurement_year' => $this->procurement_year,
            'spesification' => $this->spesification,
            'location' => $this->location,
        ]);


        session()->flash('message', 'Barang berhasil diupdate!');
        return $this->redirect('/barang');

    }

    public function render()
    {
        return view('livewire.items.barang-edit')
        ->layout('layouts.vertical', ['title' => $this->title]);;
    }
}
