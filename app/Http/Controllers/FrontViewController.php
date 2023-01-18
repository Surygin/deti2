<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontViewController extends Controller
{
    public function index(){

        $news = DB::table('posts')
                ->where('category_id', 1)
                ->orderBy('id', 'desc')
                ->limit(3)
                ->get();
        $childs = DB::table('children')
                ->orderBy('id', 'desc')
                ->limit(3)
                ->get();
        $team = DB::table('posts')
                ->where('category_id', 3)
                ->limit(3)
                ->get();
        $blank = DB::table('docs')->where('id', 1)->first();
        $footer = DB::table('contacts')->first();
        // dd($news);
        return view('index', ['news' => $news, 'footer' => $footer, 'team' => $team, 'blank' => $blank, 'childs' => $childs]);

    }
    
    public function politic_conf(){

        $about = DB::table('pages')->where('id', 2)->first();
        $footer = DB::table('contacts')->first();
        return view('about', ['about' => $about, 'footer' => $footer] );

    }
    public function user_agreement(){

        $about = DB::table('pages')->where('id', 3)->first();
        $footer = DB::table('contacts')->first();
        return view('about', ['about' => $about, 'footer' => $footer] );

    }

    public function thanks(){


        $footer = DB::table('contacts')->first();
        // dd($news);
        return view('thanks', ['footer' => $footer]);

    }

    public function news_one($id){

        $news = DB::table('posts')
                ->where('id', $id)
                ->get();
        $footer = DB::table('contacts')->first();
        // dd($news);
        return view('news_one', ['news' => $news[0], 'footer' => $footer]);

    }

    public function news(){

        $posts = DB::table('posts')
                ->where('category_id', '1')
                ->paginate(9);
        // dd($posts);
        $footer = DB::table('contacts')->first();
        return view('content', ['posts' => $posts, 'footer' => $footer]);

    }

    public function children(){

        $posts = DB::table('children')
                ->orderBy('id', 'desc')
                ->paginate(9);
        $footer = DB::table('contacts')->first();
        return view('children', ['posts' => $posts, 'footer' => $footer]);

    }

    public function events_one($id){

        $news = DB::table('posts')
            ->where('id', $id)
            ->get();
        $footer = DB::table('contacts')->first();
        // dd($news);
        return view('news_one', ['news' => $news[0], 'footer' => $footer]);

    }

    public function events(){

        $posts = DB::table('posts')
            ->where('category_id', '3')
            ->paginate(9);
        // dd($posts);
        $footer = DB::table('contacts')->first();
        return view('events', ['posts' => $posts, 'footer' => $footer]);

    }

    public function about(){

        $about = DB::table('pages')->first();
        $footer = DB::table('contacts')->first();
        return view('about', ['about' => $about, 'footer' => $footer] );

    }

    public function support(){

        $support = DB::table('pages')->where('id', 2)->first();
        $footer = DB::table('contacts')->first();
        return view('support', ['support' => $support, 'footer' => $footer] );

    }

    public function contacts(){

        $footer = DB::table('contacts')->first();
        $requisites = DB::table('requisites')->get();
        return view('contacts', ['footer' => $footer, 'requisites' => $requisites]);

    }

    public function footer(){
        $footer = DB::table('contacts')->first();
        return view('componets.footer', ['footer' => $footer]);
    }
    
    public function reports_one($id){

        $news = DB::table('posts')
                ->where('id', $id)
                ->get();
        $footer = DB::table('contacts')->first();
        // dd($news);
        return view('news_one', ['news' => $news[0], 'footer' => $footer]);

    }

    public function reports(){

        $posts = DB::table('posts')
                ->where('category_id', '2')
                ->paginate(9);
        // dd($posts);
        $footer = DB::table('contacts')->first();
        return view('reports', ['posts' => $posts, 'footer' => $footer]);

    }
    
    public function team_one($id){

        $news = DB::table('posts')
                ->where('id', $id)
                ->get();
        $footer = DB::table('contacts')->first();
        // dd($news);
        return view('news_one', ['news' => $news[0], 'footer' => $footer]);

    }

    public function team(){

        $posts = DB::table('posts')
                ->where('category_id', '3')
                ->paginate(9);
        // dd($posts);
        $footer = DB::table('contacts')->first();
        return view('team', ['posts' => $posts, 'footer' => $footer]);

    }
    
    public function docs()
    {
        $docs = DB::table('docs')->get();
        $footer = DB::table('contacts')->first();
        return view('docs', ['docs' => $docs, 'footer' => $footer]);
    }
    
    public function invite()
    {
        $blank = DB::table('docs')->where('id', 1)->first();
        $footer = DB::table('contacts')->first();
        return view('invite', ['blank' => $blank, 'footer' => $footer]);
    }
    
    public function volonter()
    {
        $blank = DB::table('docs')->where('id', 7)->first();
        $footer = DB::table('contacts')->first();
        return view('volonter', ['blank' => $blank, 'footer' => $footer]);
    }
    
    public function vznos()
    {
        // $blank = DB::table('docs')->where('id', 1)->first();
        $footer = DB::table('contacts')->first();
        // return view('vznos', ['blank' => $blank, 'footer' => $footer]);
        return view('vznos', ['footer' => $footer]);
    }
}
