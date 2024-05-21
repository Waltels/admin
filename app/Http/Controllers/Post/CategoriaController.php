<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias=Category::all();
        return view('post.categorias.index', compact('categorias'));
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
            'name'=> 'required|unique:categories'
        ]);

        $role = Category::create([
            'name'=>$request->name
        ]);

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se registro una nueva Categoria'
        ]);

       return redirect()->route('post.categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $categoria)
    {
        $request->validate([
            'name'=> 'required',
        ]);

        $categoria->update($request->all());


        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo la Categoria'
        ]);

        return redirect()->route('post.categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $categoria)
    {        
        $categoria->delete();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'La Categoria se elimino correctamente'
        ]);
        return redirect()->route('post.categorias.index');
    }
}
