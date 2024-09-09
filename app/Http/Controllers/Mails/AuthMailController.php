<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use App\Jobs\SendAuthMail;
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
        $user->email = 'teste26@gmail.com';
        $user->password = bcrypt('123456');

        $user->save();

        SendAuthMail::dispatch($user);
    
    }

    
}
