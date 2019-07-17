<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Requests;
use App\BlogPost;
use App\Http\Resources\blogPost as blogPostResource;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogPosts = BlogPost::paginate(5);
        return BlogPostResource::collection($blogPosts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogPost = $request->isMethod('put') ? BlogPost::findOrFail
        ($request->blogpost_id) : new BlogPost;

        $blogPost->id = $request->input('blogpost_id');
        $blogPost->title = $request->input('title');
        $blogPost->body = $request->input('body');

        if($blogPost->save()) {
            return new blogPostResource($blogPost);
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogPost = blogPost::findOrFail($id);
        return new blogPostResource($blogPost);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogPost = BlogPost::findOrFail($id);
        
        if($blogPost->delete()) {

            return new blogPostResource($blogPost);
        }
        }
}
