<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Item as ModelsItem;
use Livewire\WithPagination;

class Agenda extends Component
{
    public $title = 'Agenda';
    public function render()
    {
        return view('livewire.agenda', [
            'dataBarang' => ModelsItem::paginate(10),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
