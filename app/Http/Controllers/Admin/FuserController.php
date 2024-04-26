<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faltasdoc;
use Illuminate\Http\Request;

class FuserController extends Controller
{
    public function index(){

        return view('admin.faltasdoc.faltas.index');
    }

    public function show(Faltasdoc $faltasdoc)
    {
        return view('admin..faltasdoc.faltas.show', compact('faltasdoc'));
    }
}
