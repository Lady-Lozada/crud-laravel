<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostStore;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'ASC')->paginate(10);
        return view('dashboard.post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('dashboard.post.create',['post'=>new Post()]);
        $categories = Category::pluck('id','category');
        return view('dashboard.post.create',['post'=> new Post(),'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PostStore $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStore $request)
    {
        // Llama al modelo y se le indica que debe crear un nuevo recurso
        // validated llama a rules e indica que debe tener el array, validando campos requeridos maximo y minimo
        Post::create($request->validated());
        return back()->with('status', 'Publicación creada con éxito!'); // Si el status es 200 muestra este mensaje
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.post.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //return view('dashboard.post.edit', ['post'=>$post]);
        $categories = Category::pluck('id','category');
        return view('dashboard.post.edit',['post'=> $post,'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostStore $request, Post $post)
    {
        $post->update($request -> validated());
        return back()->with('status', 'Publicación actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status', 'Publicación eliminada con éxito');
    }
}
