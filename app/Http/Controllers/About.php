<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;


class About extends Controller
{
    public function show(){

        $about = Page::all()->where('id', 1);
        return view('admin.aboute', ['about' => $about[0]]);

    }

    public function update(Request $request){

        // dd($request);

        $page = Page::find(1);
        $page->title = $request->input('title');
        $page->text = $request->input('text');

        $page->save();

        return redirect()->route('about');
        

    }

}
