<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AuthMailController extends Controller
{
    //
    public function sendRegisterMail(){

        $user = new User();
        $user->name = 'Elias Galvão';
        $user->email = 'teste@gmail.com';
        $user->password = bcrypt('123456');

        $user->save();

        $registerEmail = new RegisterMail($user);

        //return $registerEmail;

        Mail::to('galvaoalveselias@gmail.com')
        ->cc('email@gmail.com')
        ->bcc('email2@gmail.com')
        ->queue($registerEmail);
    }
}
