<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AuthMailController extends Controller
{
    //
    public function sendRegisterMail(){
        $registerEmail = new RegisterMail();

        Mail::to('galvaoalveselias@gmail.com')->send($registerEmail);
    }
}
