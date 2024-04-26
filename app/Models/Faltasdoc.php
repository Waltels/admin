<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faltasdoc extends Model
{
    protected $fillable = [
        'motivo','fecha', 'accion','obs','user_id'
    ];

    //relacion uno a mnuchos invesa

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function userfaltas(){

        return $this->belongsTo(Faltasdoc::class);
    }
}
