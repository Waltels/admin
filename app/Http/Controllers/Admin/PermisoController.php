<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permiso;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permisos=Permiso::all();
        return view('admin.permisos.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        return view('admin.permisos.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'motivo'=>'required',
            'dias'=>'required',
            'dias1'=>'required',
            'dias2'=>'nullable',
            'dias3'=>'nullable',
            'obs'=>'required',
            'path'=>'nullable',

        ]);

        $path = $request->file('file')->store('public/doc');
        $array = explode('public', $path);
        

        $save = new Permiso();
        $save->motivo = $request->string('motivo');
        $save->dias = $request->string('dias');
        $save->dias1 = $request->string('dias1');
        $save->dias2 = $request->string('dias2');
        $save->dias3 = $request->string('dias3');
        $save->obs = $request->string('obs');
        $save->path = 'storage'.$array[1];
        $save->user_id = $request->string('user_id');

        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El permiso se registro  correctamente'
        ]);
        
        return Redirect()->route('admin.permisos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permiso $permiso)
    {
        return view('admin.permisos.show', compact('permiso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permiso $permiso)
    {


        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permiso $permiso)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permiso $permiso)
    {
        //
    }
}
