<?php

namespace App\Livewire;

use App\Models\Permiso;
use App\Models\User;
use Livewire\Component;

class PermisosUser extends Component
{
    public $user_id;

    public function render()
    {
        $usuarios=User::all()->where('id', $this->user_id)->first();
        $users=User::all();
        $permisos=Permiso::all()
                           ->where('user_id', $this->user_id);
        
        return view('livewire.permisos-user', compact('users', 'permisos', 'usuarios'));
    }
} 
 