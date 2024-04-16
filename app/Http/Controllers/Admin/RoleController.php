<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::latest('id')->paginate();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'permissions'=>'required',
        ]);

        $role = Role::create([
            'name'=>$request->name
        ]);

        $role ->permissions()->attach($request->permissions);

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se registro un nuevo Rol'
        ]);

       return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        /* $permissions=$role->permissions->pluck('id')->toArray();
        dd(in_array(1,$permissions)); */

        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name'=> 'required',
            'permissions'=>'nullable|array',
        ]);
        $role->update($request->all());

        $role ->permissions()->sync($request->permissions);

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo el Rol correctamente'
        ]);

        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se elimino el Rol correctamente'
        ]);
        return redirect()->route('admin.roles.index');
    }
}
