<?php

namespace App\Livewire\Items;

use Livewire\Component;
use App\Models\Item as ModelsItem;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class BarangList extends Component
{
    use WithFileUploads;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title = 'Data Barang';
    public $item;
    public $keyword;
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
    public $sortColumn = 'name';
    public $sortDirection = 'asc';
    


    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function render()
    {
        if ($this->keyword != null) {
            // If there is a keyword, filter the items based on the search term
            $data = ModelsItem::where('name', 'like', '%' . $this->keyword . '%')
                ->orWhere('merk', 'like', '%' . $this->keyword . '%')
                ->orWhere('type', 'like', '%' . $this->keyword . '%')
                ->orWhere('condition', 'like', '%' . $this->keyword . '%')
                ->orWhere('procurement_year', 'like', '%' . $this->keyword . '%')
                ->orWhere('spesification', 'like', '%' . $this->keyword . '%')
                ->orWhere('location', 'like', '%' . $this->keyword . '%')
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        } else {
            // If no keyword, simply paginate the data
            $data = ModelsItem::orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }

        return view('livewire.items.barang-list', [
            'dataBarang' => $data,
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
    }
    
    public function delete()
    {
        $item = ModelsItem::find($this -> item_id);
        $item->delete();

        $this->showDelete = false;
        session()->flash('message', 'Barang berhasil dihapus!');
    }
}
