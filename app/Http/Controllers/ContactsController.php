<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Requisite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function showC(){

        $contacts = Contact::all()->where('id', 1);
        return view('admin.contacts', ['contacts' => $contacts[0]]);

    }

    public function updateC(Request $request, $id){

        // dd($request);

        $contacts = Contact::find($id);
        $contacts->phone1 = $request->input('phone1');
        $contacts->phone2 = $request->input('phone2');
        $contacts->email = $request->input('email');
        $contacts->address = $request->input('address');

        $contacts->save();

        return redirect()->route('contacts');
        

    }

    public function showR($id){
        $requisites = DB::table('requisites')->where('id', $id)->first();
        // dd($requisites);
        return view('admin.requisites', ['requisites' => $requisites]);

    }

    public function updateR(Request $request, $id){

        // dd($request);

        $requisites = Requisite::find($id);
        $requisites->inn = $request->input('inn');
        $requisites->rs = $request->input('rs');
        $requisites->ks = $request->input('ks');
        $requisites->kpp = $request->input('kpp');
        $requisites->bik = $request->input('bik');
        $requisites->ogrn = $request->input('ogrn');
        $requisites->bank = $request->input('bank');
        $requisites->address = $request->input('address');

        $requisites->save();

        return redirect()->route('requisites', $id);
        

    }
}
