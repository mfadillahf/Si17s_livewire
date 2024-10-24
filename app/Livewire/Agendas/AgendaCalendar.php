<?php

namespace App\Livewire\Agendas;

use Livewire\Component;
use App\Models\Agenda;
use Livewire\Attributes\Title;

class AgendaCalendar extends Component
{
    public $title = 'Kalender';

    public function render()
    {
        return view('livewire.agendas.agenda-calendar', [
        ])->layout('layouts.vertical', ['title' => $this->title]);
    }
}
