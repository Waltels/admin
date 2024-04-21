<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class File extends Model
{
    protected $fillable = [
        'name','user_id', 'description'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
}
