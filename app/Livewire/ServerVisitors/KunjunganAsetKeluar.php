<?php

namespace App\Livewire\ServerVisitors;

use App\Models\ServerVisitorReport as ModelsVisitorReport;
use App\Models\ServerAsset;
use App\Models\ServerAssetFlow;
use Livewire\Component;

class KunjunganAsetKeluar extends Component
{
    public $title = 'Aset Keluar';
    public $asK;
    public $server_asset_category_id;
    public $selectedAsetId = [];
    public $exited_date;
    public $id;
    public $servervisitor;

    public function mount()
    {
        $this->server_asset_category_id = 2;
    }

    public function visitorId($id)
    {
        $this->asK = ModelsVisitorReport::with(['serverAssetFlows'])->find($id);
        $this->id = $this->asK->id;
    }

    public function create()
    {
        $this->validate([
            'selectedAsetId' => 'required|array|min:1',
            'exited_date' => 'required|date',
        ]);
    
        foreach ($this->selectedAsetId as $assetId) {
            $asset = ServerAsset::find($assetId);
    
            // Update server_asset_category_id in ServerAsset
            $asset->update([
                'server_asset_category_id' => $this->server_asset_category_id,
            ]);
    
            // Check if a ServerAssetFlow exists for the given asset
            $assetFlow = ServerAssetFlow::where('server_asset_id', $assetId)
                ->whereNull('exited_date')
                ->first();
    
            // if ($assetFlow) {
                // Update existing row in ServerAssetFlow
                $assetFlow->update([
                    'server_asset_category_id' => $this->server_asset_category_id,
                    'exited_date' => $this->exited_date,
                ]);
            // } else {
                // Create a new row in ServerAssetFlow if none exists
                // ServerAssetFlow::create([
                //     'server_asset_id' => $assetId,
                //     'server_asset_category_id' => $asset->server_asset_category_id,
                //     'server_visitor_report_id' => $this->server_visitor_report_id,
                //     'exited_date' => $this->exited_date,
                // ]);
            // }
        }
    
        $this->resetForm();
        $this->dispatch('swal:success');
        return redirect('ruang-server/aset#Aset-Keluar');
    }

    public function render()
    {
        return view('livewire.server-visitors.kunjungan-aset-keluar', [
            'amk' => ServerAsset::all(),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }

    public function resetForm()
    {
        $this->selectedAsetId = [];
        $this->exited_date = null;
        $this->server_asset_category_id = '';
        $this->resetValidation();
    }
}
