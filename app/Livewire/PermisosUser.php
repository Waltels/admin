<?php

namespace App\Livewire;

use App\Models\Permiso;
use App\Models\User;
use Livewire\Component;

use function Laravel\Prompts\select;

class PermisosUser extends Component
{
    public $user_id;

    public function render()
    {
        /* $ourString = 'esta cadena viene del controlador'; */
        /* $ourString=User::where('id', $this->user_id)->get(); */
        $nombre=User::where('id', $this->user_id)->value('name');
        $users=User::all();
        $permisos=Permiso::all()
                           ->where('user_id', $this->user_id);
        
        return view('livewire.permisos-user', compact('users', 'permisos', 'nombre'));
    }
} 
 