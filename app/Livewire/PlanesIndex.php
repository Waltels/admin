<?php

namespace App\Livewire;

use App\Models\Plan;
use App\Models\User;
use Livewire\Component;

class PlanesIndex extends Component
{
    public $user_id;

    public function render()
    {
        $nombre=User::where('id', $this->user_id)->value('name');
        $users=User::all();
        $planes=Plan::all()
                           ->where('user_id', $this->user_id);
        return view('livewire.planes-index', compact('users', 'planes', 'nombre'));
    }
}
