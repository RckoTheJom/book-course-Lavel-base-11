<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::find(1);
        $category = Category::find(1);
        dd($category->posts[0]->title);

       /*  $post->update( */
 /*           [
            'title' => 'test new tile',
            'slug' => 'test Slug',
            'content' => 'test Content',
            'category_id' => 1,
            'description' => 'test description',
            'posted' => 'not',
            'image' => 'test image',
           ] 
        );  */

        /* dd($post); */
/*         Post::create(
           [
            'title' => 'test tile',
            'slug' => 'test Slug',
            'content' => 'test Content',
            'category_id' => 1,
            'description' => 'test description',
            'posted' => 'not',
            'image' => 'test image',
           ] 
        );  */

        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
