<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faltasdoc;
use App\Models\User;
use Illuminate\Http\Request;

class FaltasdocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faltasdocs= Faltasdoc::all();
        return view('admin.faltasdoc.index', compact('faltasdocs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        return view('admin.faltasdoc.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'motivo'=>'required',
            'fecha'=>'required',
            'obs'=>'required',
            'accion'=>'required',
 

        ]);
    

        $save = new Faltasdoc();
        $save->motivo = $request->string('motivo');
        $save->fecha = $request->string('fecha');
        $save->obs = $request->string('obs');
        $save->accion = $request->string('accion');
        $save->user_id = $request->string('user_id');

        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La fata se registro  correctamente'
        ]);
        
        return Redirect()->route('admin.faltasdocs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faltasdoc $faltasdoc)
    {
        return view('admin.faltasdoc.show', compact('faltasdoc'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faltasdoc $faltasdoc)
    {
        return view('admin.faltasdoc.edit', compact('faltasdoc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faltasdoc $faltasdoc)
    {
        $request->validate([
            
            'motivo'=>'required',
            'fecha'=>'required',
            'obs'=>'required',
            'accion'=>'required',
            'user_id'=>'nullable',
 

        ]);

        $faltasdoc->update($request->all());

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La fata se actualizo correctamente'
        ]);
        
        return Redirect()->route('admin.faltasdocs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faltasdoc $faltasdoc)
    {
        //
    } 
}
