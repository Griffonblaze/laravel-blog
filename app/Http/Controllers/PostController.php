<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;



class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();       //on récupère tous les articles
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        Post::create([
            'title'=>$request->input('title'),
            'subtitle'=>$request->input('subtitle'),
            'content'=>$request->input('content'),
            'category_id' => $request->input('category_id')
        ]); 
        return redirect(route('posts.admin'))->with('success','le post est créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $postView = Post::where('id','=',$post->id)->first();
        return view('posts.show',compact('postView'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $postView = Post::where('id','=',$post->id)->first();
        return view('posts.edit',compact('postView','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $postUpdate = Post::find($post->id);
            $postUpdate->title = $request->input('title');
            $postUpdate->content = $request->input('content');
            $postUpdate->subtitle = $request->input('subtitle');
            $postUpdate->category_id = $request->input('category_id');
            $postUpdate->update();
        return redirect(route('posts.admin'))->with('success','le post est mis à jour');
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
        return redirect(route('posts.admin'))->with('success','le post est supprimé');
    }
    

    /**
     * Display a listing of the resource in the admin section
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $posts =Post::all();
        return view('posts.admin',compact("posts"));
    }
}
