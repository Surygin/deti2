<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    
    public function create()
    {
        $category = 2;
        return view('admin.news-create', compact('category'));
    }
    
    public function store(Request $request)
    {
        
        $post = new Post();

        if(!isset($request->file)){

            $path = $request->file('img')->store('uploads', 'public');
            $post->img = $path;

        }

        $post->category_id = 2;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->text = $request->input('text');

        $post->save();

        // $request->session()->flash('status', 'Task was successful!');

        return redirect()->route('posts.index');

    }

}
