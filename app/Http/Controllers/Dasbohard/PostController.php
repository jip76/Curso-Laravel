<?php

namespace App\Http\Controllers\Dasbohard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests\Post\PutRequest;
use App\Http\Requests\Post\StoreRequest;

use App\Models\Category;
use App\Models\Post;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(3);
        return view('dashboard.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('id','title');
        $post = new Post();
        echo view('dashboard.post.create', compact('categories','post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
              
        Post::create($request->validated());
        return to_route('post.index')->with('status','registro Creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','title');
        echo view('dashboard.post.edit', compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data = $request->validated();
        if (isset($request->validated()['image'])) 
        {
            $data['image']= $filename = time().".".$data['image']->extension();
            $request->image->move(public_path("image"), $filename);
        }    
            $post->update($data);
        //$request->session()->flash('status','registro actualizado');
        return to_route('post.index')->with('status','registro actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('post.index')->with('status','registro eliminado satifatoriamente');
    }
}
