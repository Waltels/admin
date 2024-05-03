<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comunicado;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $comunicados=Comunicado::latest()->get();
        return view('admin.home', compact('comunicados'));
    }

    public function show(Comunicado $comunicado)
    {
        return view('admin.show', compact('comunicado'));
    }
}
