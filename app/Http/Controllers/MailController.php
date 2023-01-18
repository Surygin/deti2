<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request){

        $form = $request->form;
        $user = $request->fio;
        $phone = $request->phone;
        $file = $request->file('file')->store('ankets', 'public');

//        $file_valid = validate($request->all, [
//            'fio' => 'required', 'string', 'max:100',
//            'phone' => 'required', 'string', 'max:15',
//            'file' => 'required', 'file', 'mimes:docx',
//        ]);
//
//        dd($file_valid);

        Mail::raw('ФИО - ' . $user .', Телефон -'. $phone . ' - заявка на вступление. Скачать - https://arkpk.ru/posts/' . $file, function ($mail){
           $mail->subject('Анкета');
           $mail->to('adccc2022@mail.ru');
        });

        return redirect('/thanks');
    }
}
