<?php

namespace App\Livewire;

use App\Models\Faltasdoc;
use App\Models\User;
use Livewire\Component;

class FaltasdocUser extends Component
{

    public $user_id;

    public function render()
    {
        $nombre=User::where('id', $this->user_id)->value('name');
        $users=User::all();
        $faltasdocs=Faltasdoc::all()
                           ->where('user_id', $this->user_id);
        return view('livewire.faltasdoc-user', compact('users', 'faltasdocs', 'nombre'));
    }
}
