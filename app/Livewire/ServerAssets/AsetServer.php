<?php

namespace App\Livewire\ServerAssets;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ServerAsset as ModelsAsset;
// use App\Models\Institute;

class AsetServer extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title = 'Aset Ruang Server';
    public $tab = '';
    public $activeTab = 'Aset-Masuk';
    public $keyword;
    public $aset;
    public $images = [];
    public $name;
    public $type = '';
    public $serial_number;
    public $server_asset_category_id;
    public $institute_name;

    public $showDetail = false;
    public $sortColumn = 'name';
    public $sortDirection = 'asc';

    public function setActiveTab($tabId)
    {
        $this->activeTab = $tabId;
    }

    public function sort($columnName){
        $this->sortColumn = $columnName;
        $this->sortDirection = $this->sortDirection == 'asc'?'desc':'asc';
    }

    public function resetForm()
    {
        $this->name = '';
        $this->type = '';
        $this->serial_number = '';
        $this->server_asset_category_id = '';
        $this->images = [];
        $this->resetValidation();

        $this->showDetail = false;
    }


    public function render()
    {
        if ($this->keyword != null) {
            $asetMasuk = ModelsAsset::with(['serverAssetFlows.serverVisitorReport.institute'])
            ->whereHas('serverAssetFlows', function ($query) {
                $query->where('server_asset_category_id', 1);
            })
                ->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->keyword . '%')
                          ->orWhere('type', 'like', '%' . $this->keyword . '%')
                          ->orWhere('serial_number', 'like', '%' . $this->keyword . '%');
                })
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
            
            $asetKeluar = ModelsAsset::with(['serverAssetFlows.serverVisitorReport.institute'])
            ->whereHas('serverAssetFlows', function ($query) {
                $query->where('server_asset_category_id', 2);
            })
                ->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->keyword . '%')
                          ->orWhere('type', 'like', '%' . $this->keyword . '%')
                          ->orWhere('serial_number', 'like', '%' . $this->keyword . '%');
                })
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        } else {
            // Jika tidak ada keyword, ambil data tanpa filter
            $asetMasuk = ModelsAsset::with(['serverAssetFlows.serverVisitorReport.institute'])
            ->whereHas('serverAssetFlows', function ($query) {
                $query->where('server_asset_category_id', 1);
            })
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
            
            $asetKeluar = ModelsAsset::with(['serverAssetFlows.serverVisitorReport.institute'])
            ->whereHas('serverAssetFlows', function ($query) {
                $query->where('server_asset_category_id', 2);
            })
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate(5);
        }

        return view('livewire.server-assets.aset-server', [
            'amk' => $asetMasuk,
            'akr' => $asetKeluar,
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function detail($id)
    {
        $this->aset = ModelsAsset::with(['serverAssetFlows.serverVisitorReport.institute'])->find($id);
        $this->name = $this->aset->name;
        $this->type = $this->aset->type;
        $this->serial_number = $this->aset->serial_number;

        $this->images = $this->aset->images;

        $flow = $this->aset->serverAssetFlows->first();

        if ($flow) {
            $this->server_asset_category_id = $flow->server_asset_category_id;
    
            // Tentukan status aset berdasarkan kategori
            if ($this->server_asset_category_id == 1) {
                // Aset Masuk
                $this->institute_name = $flow->serverVisitorReport->institute->name ?? 'Tidak Ada Data';
            } else {
                // Aset Keluar
                $this->institute_name = $flow->serverVisitorReport->institute->name ?? 'Tidak Ada Data';
            }
        }
    
        

        $this->showDetail = true;
    }
    
    public function closeDetail()
    {
        $this->resetForm();
        $this->showDetail = false;
    }

}
