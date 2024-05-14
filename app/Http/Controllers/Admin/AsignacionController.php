<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asignacion;
use App\Models\Comision;
use App\Models\User;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        $comisions=Comision::all();
        return view('admin.comisions.asignacions.create', compact('users', 'comisions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=> 'required|unique:asignacions',
            'comision_id'=> 'required',
            'fecha'=> 'required',
            'tarea'=> 'required'
        ]);

        $save = new Asignacion();
        $save->user_id = $request->string('user_id');
        $save->comision_id = $request->string('comision_id');
        $save->fecha = $request->string('fecha');
        $save->tarea = $request->string('tarea');
      
        $save->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se registro una nueva Asignacion'
        ]);

       return redirect()->route('admin.com');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignacion $asignacion)
    {
        return view('admin.comisions.asignacions.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asignacion $asignacion)
    {
        $comisions=Comision::all();
        return view('admin.comisions.asignacions.edit', compact('asignacion', 'comisions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        $request->validate([
            'user_id'=> "required|unique:asignacions,user_id,{$asignacion->id})",
            'comision_id'=> 'required',
            'fecha'=> 'required',
            'tarea'=> 'required'
        ]);
        
        $asignacion->update($request->all());


        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo la asignasión correctamente'
        ]);

        return redirect()->route('admin.com');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignacion $asignacion)
    {
        //
    }
}
