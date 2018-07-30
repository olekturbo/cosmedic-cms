<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function contact(Request $request) {

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $messages = [
            'g-recaptcha-response.required' => 'Potwierdź, że nie jesteś robotem!'
        ];

        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required'
        ], $messages);

        $validator->validate();


        Mail::send('email', ['content' => $message, 'name' => $name, 'email' => $email], function ($message) use ($name,$email)
        {

            $message->from($email, $name)->subject("Nowa wiadomość!");

            $who = 'cosmedic@op.pl';

            $message->to($who);

        });

        $mail = new \App\Mail();
        $mail->name = $name;
        $mail->email = $email;
        $mail->message = $message;
        $mail->save();


        return redirect()->back()->with('success', 'Wiadomość wysłana pomyślnie!');
    }
}
