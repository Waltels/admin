<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $fillable = [
         'user_id', 'comision_id', 'fecha','tarea'
    ];

    //relacion uno a mnuchos invesa

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function comision(){
        return $this->belongsTo(Comision::class);
    }
}

