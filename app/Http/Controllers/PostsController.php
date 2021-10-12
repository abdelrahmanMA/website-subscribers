<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewPostRequest;
use App\Mail\NewPost;
use App\Models\Post;
use App\Models\Subscriber;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\NewPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewPostRequest $request)
    {
        $post = Post::create([
            'title'=> $request->title,
            'description' => $request->description,
            'website_id' => $request->website_id
        ]);
        $website = Website::with('subscribers')->find($request->website_id);
        $subscribers = Subscriber::where('website_id', $request->website_id)->get();
        foreach ($subscribers as $recipient) {
            Mail::to($recipient->email)->queue(new NewPost($recipient, $website, $post));
        }
        return response()->json([
            'status' => true,
            'message' => "Post Created Successfully, with Id = {$post->id}"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
