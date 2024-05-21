<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class DownController extends Controller
{
    public function descargas(){
        $descargas = Post::where('category_id','=', 1)->latest()->get();
        return view('post.nav.descargas', compact('descargas'));
    }
    public function download(Post $post){
        
        $file_name = $post->doc_path;
        return Storage::download($file_name);
    }
}
