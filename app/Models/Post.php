<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'name','description', 'img_path', 'doc_path', 'published','date', 'category_id'
    ];


    protected function imagen() :Attribute{

        return new Attribute(
            /* get: fn() => $this->img_path ?? asset('images/11m.jpg') */
            get: function(){
                if ($this->img_path) {
                    if (substr($this->img_path, 0, 8) === 'https://') {
                        return  $this->img_path;
                    }
                    return Storage::url($this->img_path);
                } else {
                    return asset('images/11m.jpg');
                }
                
            }
        );
    }

    //relacion uno a muchos
    
    public function category(){
        
        return $this->belongsTo(Category::class);
    }
}
