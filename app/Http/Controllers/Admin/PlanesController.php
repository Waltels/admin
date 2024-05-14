<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planes=Plan::all();
        return view('admin.planes.index', compact('planes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        return view('admin.planes.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=> 'required',
            'doc'=> 'required',
            'date'=> 'required',
            'obs'=> 'required'
        ]);

        $save = new Plan();
        $save->user_id = $request->string('user_id');
        $save->doc = $request->string('doc');
        $save->date = $request->string('date');
        $save->obs = $request->string('obs');
      
        $save->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se registro el plan con exito'
        ]);

       return redirect()->route('admin.plans.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        return view('admin.planes.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plan $plan)
    {
        $users=User::all();
        return view('admin.planes.edit', compact('plan', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plan $plan)
    {
        $request->validate([
            'user_id'=> 'required',
            'doc'=> 'required',
            'date'=> 'required',
            'obs'=> 'required'
        ]);
        
        $plan->update($request->all());


        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo el registro del plan'
        ]);

        return redirect()->route('admin.plans.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
