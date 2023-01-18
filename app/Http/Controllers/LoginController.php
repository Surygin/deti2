<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){

        return view('admin.login');
    }

    public function auth(Request $request){
        $user = DB::table('users')->first();
        if($request){
            $login = $request->login;
            $psw = $request->psw;
            if($user->email == $login){
                if (Hash::check($psw, $user->password)) {
                    $request->session()->put('status_auth', 'auth');
                    return redirect()->route('posts.index');
                }
                else{
                    echo('Не правильный пароль');
                }
            }
            else {
                echo('Такого пользователя не существует');
            }
            // $request->session()->put('status', 'auth');
        }
    }

    public function logaut(Request $request){

        $request->session()->flush();
        return redirect()->route('login');
    }
}
