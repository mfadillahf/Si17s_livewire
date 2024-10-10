<?php

namespace App\Livewire\Agendas;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Models\Agenda as ModelsAgenda;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Agenda extends Component
{
    use WithFileUploads;

    use WithPagination;
    public $title = 'Agenda';
    public function render()
    {
        return view('livewire.agendas.agenda', [
            'agendaKegiatan' => ModelsAgenda::paginate(10),
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
