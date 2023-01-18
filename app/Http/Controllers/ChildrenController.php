<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ChildrenController extends Controller
{
    public function index()
    {   
        $childs = DB::table('children')->paginate(20);
        return view('admin.childs', ['childs' => $childs]);
    }

    public function create(Request $request)
    {
        // $id = $request->id;
        return view('admin.child-create');
    }

    public function store(Request $request)
    {
        
        $child = new Child();

        if(!isset($request->file)){

            $path = $request->file('img')->store('uploads', 'public');
            $child->img = $path;

        }

        $child->firstname = $request->input('firstname');
        $child->lastname = $request->input('lastname');
        $child->description = $request->input('description');
        $child->quantity_end = $request->input('quantity_end');

        $child->save();

        // $request->session()->flash('status', 'Task was successful!');

        return redirect('/admin/childs/');

    }

    public function edit($id)
    {
        $child = Child::first()->where('id', $id)->get();
        $child = $child[0];
        return view('admin.child-edit', ['post' => $child]);
    }

    public function update(Request $request, $id)
    {


        // dd($path);

        $child = Child::find($id);

        $child->firstname = $request->input('firstname');
        $child->lastname = $request->input('lastname');
        $child->description = $request->input('description');
        $child->quantity_end = $request->input('quantity_end');

        $child->save();

        return redirect(url()->previous());
    }

    public function imgEdit($id)
    {
        $child = Child::first()->where('id', $id)->get();
        $child = $child[0];
        return view('admin.child-img-update', ['child' => $child]);
    }

    public function imgUpdate(Request $request, $id)
    {

        // dd($id);

        $child = Child::find($id);

        // dd($child->img);

        // $post_img = $child->img;
        Storage::disk('public')->delete('img/posts/' . $child->img);
        $path = $request->file('img')->store('uploads', 'public');
        $child->img = $path;

        $child->save();

        return redirect(url()->previous());
    }

    public function destroy($id)
    {
        $child = Child::find($id);
        Storage::disk('public')->delete('img/posts/' . $child->img);
        $deleted = DB::table('children')->where('id', $id)->delete();
        return redirect(url()->previous());
    }
}
