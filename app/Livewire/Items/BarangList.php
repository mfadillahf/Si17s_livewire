<?php

namespace App\Livewire\Items;

use Livewire\Component;
use App\Models\ItemImage;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Item as ModelsItem;
use Illuminate\Support\Facades\Storage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

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
    public $itemImages = [];
    public $condition ='';
    public $procurement_year;
    public $spesification;
    public $location;
    public $item_id;
    public $item_selected_id=[];

    public $updateData = false;
    public $showCreate = false;
    public $showDetail = false;
    public $showEdit = false;
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
            
            $data = ModelsItem::orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }


        return view('livewire.items.barang-list', [
            'dataBarang' => $data,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    // fungsi create
    public function openCreate()
    {
        $this->showCreate = true;
    }

    public function closeCreate()
    {
        $this->resetForm();
        $this->showCreate = false;
    }

    public function resetForm()
    {
        $this->name = '';
        $this->merk = '';
        $this->type = '';
        $this->condition = '';
        $this->procurement_year = '';
        $this->spesification = '';
        $this->location = '';
        $this->itemImages = [];
        $this->resetValidation();
    }

    public function create()
    {
        // dd($this->itemImages);
        
        $this->validate([
            'name' => 'required|string',
            'merk' => 'required|string',
            'type' => 'required|string',
            'condition' => 'required|string',
            'location' => 'required|string',
            'itemImages.*' => 'nullable|image|mimes:jpg,png,jpeg,webp',
            'procurement_year' => 'required|integer|digits:4|max:' . date('Y'),
            'spesification' => 'required|string',
        ]);
    

        $item = ModelsItem::create([
            'name' => $this->name,
            'merk' => $this->merk,
            'type' => $this->type,
            'condition' => $this->condition,
            'location' => $this->location,
            'procurement_year' => $this->procurement_year,
            'spesification' => $this->spesification,
            
        ]);
    
        // if (!empty($this->itemImages)) {
        //     foreach ($this->itemImages as $image) {
        //         $itemImagesPath = $image->store('public/images/barang'); // Upload image to storage
        //         ItemImage::create([
        //             'item_id' => $item->id,
        //             'image' => $itemImagesPath,
        //         ]);
        //     }
        // }
    
        
        $this->resetForm();
        $this->showCreate = false;
        $this->dispatch('swal:success');
        
    }

    // fungsi show
    public function detail($id)
    {
        $this->item = ModelsItem::find($id);
        $this->name = $this->item->name;
        $this->merk = $this->item->merk;
        $this->type = $this->item->type;
        $this->condition = $this->item->condition;
        $this->procurement_year = $this->item->procurement_year;
        $this->spesification = $this->item->spesification;
        $this->location = $this->item->location;

        $this->item = ModelsItem::with('itemImages')->find($id);
        $this->itemImages = $this->item->itemImages;

        $this->showDetail = true;
    }
    
    public function closeDetail()
    {
        $this->resetForm();
        $this->showDetail = false;
    }

    // fungsi edit
    public function openEdit($id)
    {
        $this->item = ModelsItem::find($id);
        $this->name = $this->item->name;
        $this->merk = $this->item->merk;
        $this->type = $this->item->type;
        $this->condition = $this->item->condition;
        $this->procurement_year = $this->item->procurement_year;
        $this->spesification = $this->item->spesification;
        $this->location = $this->item->location;

        // Load existing item images
        $this->itemImages = $this->item->itemImages;

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
        'name' => 'required|string',
        'merk' => 'required|string',
        'type' => 'required|string',
        'condition' => 'required|string',
        'location' => 'required|string',
        'itemImages.*' => 'nullable|image|mimes:jpg,png,jpeg,webp',
        'procurement_year' => 'required|integer|digits:4|max:' . date('Y'),
        'spesification' => 'required|string',
    ]);

    // Update item details
    $this->item->update([
        'name' => $this->name,
        'merk' => $this->merk,
        'type' => $this->type,
        'condition' => $this->condition,
        'procurement_year' => $this->procurement_year,
        'spesification' => $this->spesification,
        'location' => $this->location,
    ]);

    // Handle image uploads
    // if (!empty($this->itemImages)) {
    //     foreach ($this->itemImages as $image) {
    //         $itemImagesPath = $image->store('public/images/barang'); // Upload image to storage
    //         ItemImage::create([
    //             'item_id' => $this->item->id,
    //             'image' => $itemImagesPath,
    //         ]);
    //     }
    // }

    // Optionally, delete existing images if necessary
    /*
    foreach ($this->item->itemImages as $existingImage) {
        if (!in_array($existingImage->image, array_column($this->itemImages, 'name'))) {
            Storage::delete($existingImage->image);
            $existingImage->delete();
        }
    }
    */

    // Reset form and close edit modal
    $this->resetForm();
    $this->showEdit = false;
    $this->dispatch('swal:edit');
}

    // Fungsi delete
    public function openDelete($id)
    {
        $this->item_id = $id;
        $item = ModelsItem::find($id);
        $this->lastUpdatedDate = $item->updated_at->format('d-m-Y');
        $this->showDelete = true;
    }

    public function closeDelete()
    {
        $this->showDelete = false;
        $this->dispatch('swal:cancel');
    }
    
    public function delete()
    {
        $item = ModelsItem::find($this -> item_id);
        $item->delete();

        $this->showDelete = false;

        $this->dispatch('swal:delete');
    }
}
