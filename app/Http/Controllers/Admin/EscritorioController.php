<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EscritorioController extends Controller
{
    public function index(){
        $users = User::count();

        dd ($users);
        /* return view('admin.dashboard'. compact('users')); */
    }
}
