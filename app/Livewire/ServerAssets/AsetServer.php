<?php

namespace App\Livewire\ServerAssets;

use Livewire\Component;
use Livewire\WithPagination;

class AsetServer extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
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
