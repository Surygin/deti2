<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;


class vznos extends Controller
{

    public function update(Request $request){

        dd($request);

        $page = Page::find(1);
        $page->title = $request->input('title');
        $page->text = $request->input('text');

        $page->save();

        return redirect()->route('about');
        

    }

}
