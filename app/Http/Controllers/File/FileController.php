<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index(){
        $files = File::where('user_id', Auth::id())->latest()->get();
        return view('files.index', compact('files'));
    }
    
    public function create(){

        $docs=Documento::all(); 
        return view('files.create', compact('docs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description'=> 'required',
            'file'=>'required',
        ]);


        $name = $request->file('file')->getClientOriginalName();
        $path = $request->file('file')->store('public/files');
        $array = explode('public', $path);
        $user_id=Auth::id();

        $save = new File;
        $save->name = $name;
        $save->path = 'storage'.$array[1];
        $save->description= $request->string('description');
        $save->user_id = $user_id;

        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Su Archivo se envio  correctamente'
        ]);
        
        return Redirect()->route('file.index');
    }

}
