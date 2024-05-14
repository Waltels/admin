<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comision extends Model
{
    protected $fillable = [
        'name'
    ];
    public function getRouteKeyName()
    {
        return 'id';
    }

    //relacion uno a muchos
    
    public function asignacion(){
        return $this->HasMany(Asignacion::class);
    }


}
