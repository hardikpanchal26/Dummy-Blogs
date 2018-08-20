<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {

        $posts = Post::latest()->filter(request(['month','year']))->get();


    	return view ('posts.index',compact('posts', 'archives'));
    
    }

    public function show(Post $post)
    {
        
    	return view ('posts.show',compact('post'));
    }

    public function create()
    {
    	return view ('posts.create');
    }

    public function store()
    {

        $this->validate(request(),[

            'title' => 'required|max:255',
            
            'body'  => 'bail|required'
        
        ]);
        

        //----------------------------------------

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        /*
                    OR
        
        Post::create([

            'title' => request('title'),
            'body'  => request('body'),
            'user_id' => auth()->id()

        ]);
        
        */

        session()->flash('post', 'Your post has been successfully created');

        return redirect('posts');

    }
}
