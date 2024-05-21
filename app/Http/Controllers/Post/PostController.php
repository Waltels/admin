<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Post::latest('id')->get();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required|unique:posts',
            'category_id'=> 'required',
            'date'=> 'required',
        ]);

        $save = new Post();
        $save->name = $request->string('name');
        $save->category_id = $request->string('category_id');
        $save->description = $request->string('description');
        $save->date = $request->string('date');
        
      
        $save->save();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se registro el post con exito'
        ]);

       return redirect()->route('post.posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories=Category::all();
        return view('post.edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'name'=> 'required',
            'description'=> 'required|unique:posts,id',
            'category_id'=> 'required|exists:categories,id',
            'date'=> 'required',
            'published'=> 'required|boolean',
            'image'=>'nullable|image',
            'documento'=>'nullable'
        ]);

        $data=$request->all();

        if ($request->file('image')) {

            $data['img_path'] =  Storage::put('public/post', $request->image);
        }
        if ($request->file('documento')) {
            $file_name = $request->name. '.' . $request->file('documento')->getClientOriginalExtension();
            $data['doc_path'] =  Storage::putFileAs('public/doc', $request->documento, $file_name );
        }
        $post->update($data);

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'Se actualizo    se actualizo con exito'
        ]);

       return redirect()->route('post.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return $post;
        $post->delete();

        session()->flash('swal',[
            'icon'=>'success',
            'title'=>'Muy bien!!',
            'text'=>'El post se elimino correctamente'
        ]);
        return redirect()->route('post.posts.index');
    }

}
