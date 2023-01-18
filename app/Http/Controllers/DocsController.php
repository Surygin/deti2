<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DocsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docs = DB::table('docs')->paginate(10);
        return view('admin.docs.docs', ['docs' => $docs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.docs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doc = new Doc();

        $doc->title = $request->input('title');

        if(isset($request->file)){
            $path = $request->file('file')->store('docs', 'public');
            $doc->path = $path;

        }

        $doc->save();

        return redirect()->route('docs.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc = DB::table('docs')->where('id', $id)->first();
        return view('admin.docs.update-title', ['doc' => $doc]);
    }

    public function edit_doc($id)
    {
        $doc = DB::table('docs')->where('id', $id)->first();
        return view('admin.docs.update-doc', ['doc' => $doc]);
    }

    public function edit_doc_update(Request $request, $id){

        $doc = Doc::find($id);

        // $doc_title = $doc->title;
        // $doc->title = $doc_title;
        $doc_path = $doc->path;
        Storage::disk('public')->delete($doc_path);
        $path = $request->file('file')->store('docs', 'public');
        $doc->path = $path;

        $doc->save();

        return redirect()->route('docs.index');
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
        $doc = Doc::find($id);

        $doc->title = $request->input('title');

        $doc->save();

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
        $doc = Doc::find($id);
        Storage::disk('public')->delete($doc->path);
        $deleted = DB::table('docs')->where('id', $id)->delete();
        return redirect(url()->previous());
    }
}
