<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(Request $request){

        $id = $request->id;
        $about = Page::all()->where('id', $id)->first();
        return view('admin.aboute', ['about' => $about]);

    }

    public function update(Request $request){

        $id = $request->id;
        $page = Page::find($id);
        $page->title = $request->input('title');
        $page->text = $request->input('text');

        $page->save();

        return redirect()->back();


    }
}
