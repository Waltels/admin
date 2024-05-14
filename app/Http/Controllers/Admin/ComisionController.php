<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comision;
use Illuminate\Http\Request;

class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $comisions=Comision::latest()->get()->take(6);
        return view('admin.comisions.index', compact('comisions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|unique:comisions'
        ]);

        $role = Comision::create([
            'name'=>$request->name
        ]);

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se registro una nueva Comision'
        ]);

       return redirect()->route('admin.comisions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comision $comision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comision $comision)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comision $comision)
    {
        $request->validate([
            'name'=> 'required',
        ]);

        $comision->update($request->all());


        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo la comision'
        ]);

        return redirect()->route('admin.comisions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comision $comision)
    {
        $comision->delete();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La comisión se elimino correctamente'
        ]);
        return redirect()->route('admin.comisions.index');
    }
}
