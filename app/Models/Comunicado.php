<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    protected $fillable = [
        'name', 'content', 'fecha'
    ];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
