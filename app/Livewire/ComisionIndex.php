<?php

namespace App\Livewire;

use App\Models\Asignacion;
use App\Models\Comision;
use Livewire\Component;

class ComisionIndex extends Component
{
    public $comision_id = 1;

    public function render(Comision $comision)
    {
        $nombre=Comision::where('id', $this->comision_id)->value('name');
        $comisiones=Comision::all();
        $asignaciones=Asignacion::all()
                                ->where('comision_id', $this->comision_id);
        return view('livewire.comision-index', compact('comisiones','comision','asignaciones', 'nombre'));
    }
}
