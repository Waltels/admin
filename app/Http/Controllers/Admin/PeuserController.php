<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permiso;
use Illuminate\Http\Request;

class PeuserController extends Controller
{
    
    public function index(){
        
        return view('admin.puser.usuarios');
    }

    public function show(Permiso $permiso)
    {
        return view('admin.puser.show', compact('permiso'));
    }
}
