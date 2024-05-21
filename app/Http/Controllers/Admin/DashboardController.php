<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faltasdoc;
use App\Models\File;
use App\Models\Permiso;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $users= User::count();
        $usuarios=User::latest('id')->paginate(6);
        $files= File::count();
        $permisos=Permiso::count();
        $faltasdocs=Faltasdoc::count();
        return view('admin.dashboard', compact('users', 'files', 'permisos', 'faltasdocs', 'usuarios'));
    }
}
