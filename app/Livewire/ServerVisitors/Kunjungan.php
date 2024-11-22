<?php

namespace App\Livewire\ServerVisitors;

use App\Models\ServerVisitorReport as ModelsVisitorReport;
use App\Models\Visitor;
use App\Models\ServerAsset;
use App\Models\ServerAssetFlow;
use App\Models\ServerAssetImage;
use Carbon\Carbon;
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
    public $server_visitor_report_id;
    public $server_visitor_report_entered_at;
    // public $server_visitor_report_exited_at;
    public $selectedVisitId;
    public $checkoutDate;
    public $showDetail = false;
    public $showCheckout = false;
    public $showAsetMasuk = false;
    // public $showAsetKeluar = false;
    // public $selectedAsetId = [];
    public $entered_date;
    public $vr;
    public $vr_id;
    public $entered_at;
    public $exited_at;
    public $description;
    public $institute_id;
    public $institute_name;
    public $vis;
    public $asem;
    public $akar;



    public function mount()
    {
        date_default_timezone_set("Asia/Makassar");
        $this->checkoutDate = now()->format('Y-m-d\TH:i');
        $this->updateCount();
        // $this->countStillVisit = ModelsVisitorReport::where('status', 'Masih Berkunjung')->count();
        
    }

    public function updateCount()
    {
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
            // 'amk' => ServerAsset::get(),
            'countStillVisit' => $this->countStillVisit,
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function detail($id)
    {
        $this->vr = ModelsVisitorReport::with('institute', 'serverAssetFlows','serverVisitors')->find($id);
        $this->vr_id = $this->vr->id;
        $this->entered_at = $this->vr->entered_at ? Carbon::parse($this->vr->entered_at) : null;
        $this->exited_at = $this->vr->exited_at ? Carbon::parse($this->vr->exited_at) : null;
        $this->description = $this->vr->description;
        $this->institute_id = $this->vr->institute_id;

        $this->institute_name = $this->vr->exited_at ? $this->vr->institute->name : ($this->vr->institute->name ?? 'Tidak Ada Data');

        $this->vis = Visitor::with('institute', 'village')
        ->where('institute_id', $this->institute_id)
        ->get();

        $this->asem = ServerAsset::with('serverAssetImages', 'serverAssetFlows', 'lastServerAssetFlow')
        ->whereHas('serverAssetFlows', function ($query) {
            $query->whereHas('serverVisitorReport', function ($subQuery) {
                $subQuery->where('id', $this->vr_id); 
            })->where('server_asset_category_id', 1); 
        })
        ->get();

        $this->akar = ServerAsset::with('serverAssetImages', 'serverAssetFlows', 'lastServerAssetFlow')
        ->whereHas('serverAssetFlows', function ($query) {
            $query->whereHas('serverVisitorReport', function ($subQuery) {
                $subQuery->where('id', $this->vr_id); 
            })->where('server_asset_category_id', 2); 
        })
        ->get();    

        $this->showDetail = true;
    }
    
    public function closeDetail()
    {
        $this->resetForm();
        $this->showDetail = false;
    }

    public function resetForm()
    {
        $this->name = '';
        $this->type = '';
        $this->serial_number = '';
        $this->server_asset_category_id = '';
        $this->images = [];
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
    public function openAsetMasuk($id)
    {
        $serverVisitor = ModelsVisitorReport::find($id);
        $this->server_visitor_report_id = $serverVisitor->id;

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
        
        ServerAssetFlow::create([
            'server_asset_id' => $create_asset->id,
            'server_asset_category_id' => $create_asset->server_asset_category_id,
            'server_visitor_report_id' => $this->server_visitor_report_id,
            'entered_date' => now(),
        ]);

        // dd($this->images);

        $this->resetForm();
        $this->showAsetMasuk = false;
        $this->dispatch('swal:success');
        return redirect('ruang-server/aset');
    }

    public function closeAsetMasuk()
    {
        $this->resetForm();
        $this->showAsetMasuk = false;
    }






    // public function openAsetKeluar($id)
    // {
    //     $serverVisitor = ModelsVisitorReport::find($id);
    //     $this->server_visitor_report_id = $serverVisitor->id;
    //     $this->server_visitor_report_exited_at = $serverVisitor->exited_at; 

    //     $this->resetForm();
    //     $this->server_asset_category_id = 2;
    //     $this->showAsetKeluar = true;
    //     $this->dispatch('initializeSelectr');
        
        
        
    // }

    // public function createAsetKeluar()
    // {
    //     $selectedAset = ServerAsset::find($this->selectedAsetId); 

    //     $this->validate([
    //         'selectedAsetId' => 'required|array',
    //         'name' => 'required|string',
    //         'type' => 'required|string',
    //         'serial_number' => 'required|string',
    //         'server_asset_category_id' => 'required|exists:server_asset_categories,id',
    //     ]);

    //     foreach ($this->selectedAsetId as $assetId) {
    //         $selectedAset = ServerAsset::find($assetId);

    //         ServerAsset::create([
    //             'asset_id' => $assetId,
    //             'name' => $selectedAset->name,
    //             'type' => $selectedAset->type,
    //             'serial_number' => $selectedAset->serial_number,
    //             'server_asset_category_id' => $selectedAset->server_asset_category_id,

    //         ]);
    //     }

    //     ServerAssetFlow::create([
    //         'exited_date' => $this->server_visitor_report_exited_at,
    //     ]);


    //     $this->resetForm();
    //     $this->showAsetKeluar = false;
    //     $this->dispatch('swal:success');
    // }

    // public function closeAsetKeluar()
    // {
    //     $this->resetForm();
    //     $this->showAsetKeluar = false;
    //     $this->reset('selectedAsetId');
    // }
}
