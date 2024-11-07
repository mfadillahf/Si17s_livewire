<?php

namespace App\Livewire\ServerAssets;

use Livewire\Component;

class AsetServer extends Component
{
    public $title = 'Aset Ruang Server';
    public $tab = '';
    public $activeTab = 'Aset-Masuk';

    public function setActiveTab($tabId)
    {
        $this->activeTab = $tabId;
    }


    public function render()
    {
        return view('livewire.server-assets.aset-server', [
 
            ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
