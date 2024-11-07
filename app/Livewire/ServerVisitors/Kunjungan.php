<?php

namespace App\Livewire\ServerVisitors;

use Livewire\Component;

class Kunjungan extends Component
{
    public $title = 'User Request';
    public $tab = '';
    public $activeTab = 'Masih-Berkunjung';


    public function setActiveTab($tabId)
    {
        $this->activeTab = $tabId;
    }
    public function render()
    {
        return view('livewire.server-visitors.kunjungan', [
 
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
