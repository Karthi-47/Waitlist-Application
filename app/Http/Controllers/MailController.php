<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $mail = [];
        $mail['email'] = $request->input('email');

    Mail::to('karthipsp10@gmail.com')->send(new SendMail($mail));
    return "Email sent successfully!";
    }
}
