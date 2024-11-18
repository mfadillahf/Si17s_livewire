<?php

namespace App\Livewire\ServerVisitors;

use App\Models\ServerVisitorReport as ModelsVisitorReport;
use App\Models\ServerAsset;
use App\Models\ServerAssetImage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Kunjungan extends Component
{
    use WithFileUploads;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title = 'Daftar Kunjungan';
    public $tab = '';
    public $activeTab = 'Masih-Berkunjung';
    public $keyword;
    public $countStillVisit;
    public $sortColumn = 'status';
    public $sortDirection = 'asc';
    public $images = [];
    public $name;
    public $type = '';
    public $serial_number;
    public $server_asset_category_id;
    public $exited_at;
    public $selectedVisitId;
    public $checkoutDate;
    public $showCheckout = false;
    public $showAsetMasuk = false;



    public function mount()
    {
        date_default_timezone_set("Asia/Makassar");
        $this->checkoutDate = now()->format('Y-m-d\TH:i');
        $this->countStillVisit = ModelsVisitorReport::where('status', 'Masih Berkunjung')->count();
        
    }


    public function setActiveTab($tabId)
    {
        $this->activeTab = $tabId;
    }

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function render()
    {

        if ($this->keyword != null) {
            $Selesai = ModelsVisitorReport::where('status', 'Selesai')
                ->where(function ($query) {
                    $query->where('description', 'like', '%' . $this->keyword . '%')
                          ->orWhereRaw('date_format(entered_at, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%'])
                          ->orWhereRaw('date_format(exited_at, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%']);
                })
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
            
            $masihBerkunjung = ModelsVisitorReport::where('status', 'Masih Berkunjung')
                ->where(function ($query) {
                    $query->where('description', 'like', '%' . $this->keyword . '%')
                          ->orWhereRaw('date_format(entered_at, "%Y-%m-%d") like ?', ['%' . $this->keyword . '%']);
                })
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        } else {
            // Jika tidak ada keyword, ambil data tanpa filter
            $Selesai = ModelsVisitorReport::where('status', 'Selesai')
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
            
            $masihBerkunjung = ModelsVisitorReport::where('status', 'Masih Berkunjung')
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }
        
        return view('livewire.server-visitors.kunjungan', [
            'kns' => $Selesai,
            'mbg' => $masihBerkunjung,
            'countStillVisit' => $this->countStillVisit,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function resetForm()
    {
        $this->name = '';
        $this->type = '';
        $this->serial_number = '';
        $this->images = null;
        $this->server_asset_category_id = '';
        $this->resetValidation();

        $this->showCheckout = false;
        $this->showAsetMasuk = false;
    }

    // checkout
    public function checkout($id)
    {
        $this->selectedVisitId = $id;
        $this->checkoutDate = now()->format('Y-m-d H:i'); // Set default date to today
        $this->showCheckout = true; // Show the modal
    }

    public function saveCheckout()
    {
        $visit = ModelsVisitorReport::find($this->selectedVisitId);
        
        if ($visit) {
            $visit->exited_at = $this->checkoutDate;
            $visit->status = 'Selesai'; // Update status
            $visit->save();

            $this->dispatch('swal:checkout');
        } else {
            session()->flash('error', 'Data kunjungan tidak ditemukan.');
        }
        
        $this->resetForm();
        $this->showCheckout = false; // Close the modal serverAssetImages
    }

    // aset masuk
    public function openAsetMasuk()
    {
        $this->resetForm();
        $this->server_asset_category_id = 1;
        $this->showAsetMasuk = true;
    }

    public function createAsetMasuk()
    {
        $this->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'serial_number' => 'required|string',
            'images' => 'nullable|array|max:4', 
            'images.*' => 'image|mimes:jpg,png,jpeg,webp|max:2048',
            'server_asset_category_id' => 'required|exists:server_asset_categories,id',
        ]);

        $create_asset = ServerAsset::create([
            'name' => $this->name,
            'type' => $this->type,
            'serial_number' => $this->serial_number,
            'server_asset_category_id' => $this->server_asset_category_id,
        ]);

        if (!empty($this->images)) {
            
            foreach ($this->images as $image) {
                $originalFileName = $image->getClientOriginalName();
                $path = $image->storeAs('public/images/assets', $originalFileName); // Upload gambar ke storage
                
                ServerAssetImage::create([
                    'server_asset_id' => $create_asset->id,
                    'file' => $path, 
                ]);
            }
        }

        $this->resetForm();
        $this->showAsetMasuk = false;
        $this->dispatch('swal:success');
    }

    public function closeAsetMasuk()
    {
        $this->resetForm();
        $this->showAsetMasuk = false;
    }

}
