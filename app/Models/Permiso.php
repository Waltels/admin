<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = [
        'motivo','dias', 'dias1','dias2','dias3', 'obs','user_id'
    ];

    //relacion uno a mnuchos invesa

    public function user(){

        return $this->belongsTo(User::class);
    }
}
