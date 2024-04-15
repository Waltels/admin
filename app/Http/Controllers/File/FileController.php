<?php

namespace App\Http\Controllers\File;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FileController extends Controller
{
    public function index(){
        $files = File::where('user_id', Auth::id())->latest()->get();
        return view('files.index', compact('files'));
    }
    
    public function create(){
        return view('files.create');
    }

    public function store(Request $request)
    {
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
        return back()->with('message','se registro corresctaamente');
    }
}
