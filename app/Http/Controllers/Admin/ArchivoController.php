<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function index(){

        $files = File::all();
        return view('admin.archivos.index', compact('files'));
    }
}
