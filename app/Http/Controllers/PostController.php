<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $id = $request->id;
        $posts = DB::table('posts')->where('category_id', $id)->paginate(20);
        return view('admin.posts', ['posts' => $posts, 'id' => $id]);
    }
    
    public function reports_show()
    {
        $posts = DB::table('posts')->where('category_id', 2)->paginate(20);
        return view('admin.posts', ['posts' => $posts]);
    }

    public function events_show()
    {
        $posts = DB::table('posts')->where('category_id', 3)->paginate(20);
        return view('admin.posts', ['posts' => $posts]);
    }
    
    public function team_show()
    {
        $posts = DB::table('posts')->where('category_id', 3)->paginate(20);
        return view('admin.posts', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id = $request->id;
        return view('admin.news-create', ['id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $post = new Post();

        if(!isset($request->file)){

            $path = $request->file('img')->store('uploads', 'public');
            $post->img = $path;

        }

        $post->category_id = $request->category;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->text = $request->input('text');

        $post->save();

        // $request->session()->flash('status', 'Task was successful!');

        return redirect('/admin/posts/category/' . $post->category_id);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::first()->where('id', $id)->get();
        $post = $post[0];
        return view('admin.news-edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        // dd($path);

        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->text = $request->input('text');

        $post->save();

        return redirect(url()->previous());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        Storage::disk('public')->delete($post->img);
        $deleted = DB::table('posts')->where('id', $id)->delete();
        return redirect(url()->previous());
    }

    public function imgEdit($id)
    {
        $post = Post::first()->where('id', $id)->get();
        $post = $post[0];
        return view('admin.img-update', ['post' => $post]);
    }

    public function imgUpdate(Request $request, $id)
    {

        // dd($path);

        $post = Post::find($id);

        $post_img = $post->img;
        Storage::disk('public')->delete($post_img);
        $path = $request->file('img')->store('uploads', 'public');
        $post->img = $path;

        $post->save();

        return redirect()->route('posts.index');
    }
}
