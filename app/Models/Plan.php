<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'user_id', 'doc', 'date','obs'
   ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
