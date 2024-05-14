<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comunicado;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comunicados=Comunicado::latest()->get()->take(6);
        return view('admin.comunicados.index', compact('comunicados'));
    }
     /**
     * Show the form for creating a new pdf.
     */
    public function pdf(Comunicado $comunicado){

        $comunicados=Comunicado::all();
        $pdf = Pdf::setPaper('letter')->loadView('admin.comunicados.pdf', compact('comunicados', 'comunicado'));
        return $pdf->stream();

     /**
     * Show the form for creating a new resource.
     */   
    }
    
    public function create()
    {
        return view('admin.comunicados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'name'=>'required',
            'content'=>'required',
            'fecha'=>'required',
 

        ]);
    

        $save = new Comunicado();
        $save->name = $request->string('name');
        $save->content = $request->string('content');
        $save->fecha = $request->string('fecha');
      
        $save->save();
        
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El comunicado se registro  correctamente'
        ]);
        
        return Redirect()->route('admin.comunicados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comunicado $comunicado)
    {
        return view('admin.comunicados.show', compact('comunicado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comunicado $comunicado)
    {
        return view('admin.comunicados.edit', compact('comunicado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comunicado $comunicado)
    {
        $request->validate([
            'name'=>'required',
            'content'=>'required',
            'fecha'=>'required',
        ]);
        $comunicado->update($request->all());


        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo el comunicado correctamente'
        ]);

        return redirect()->route('admin.comunicados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comunicado $comunicado)
    {
        $comunicado->delete();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se elimino el comunicado correctamente'
        ]);
        return redirect()->route('admin.comunicados.index');
    }
}
