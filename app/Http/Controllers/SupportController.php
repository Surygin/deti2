<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function show(){

        $about = Page::all()->where('id', 2);
        // dd($about);
        return view('admin.support', ['about' => $about[1]]);

    }

    public function update(Request $request){

        // dd($request);

        $page = Page::find(2);

        $page->title = $request->input('title');
        $page->text = $request->input('text');

        $page->save();

        return redirect()->route('support');
        

    }
}
